<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;
use Livewire\Component;
use Stevebauman\Location\Facades\Location;

class Sessions extends Component
{
    public User $user;
    public $sessions =[];
    public $readyToLoad = false;

    public function loadSessions()
    {
        $this->readyToLoad = true;
    }
    public function mount($user)
    {
        $this->user = $user;

    }
    protected function createAgent($session)
    {
        return tap(new Agent, function ($agent) use ($session) {
            $agent->setUserAgent($session->user_agent);
        });
    }

    public function showSessions()
    {
    if ( $this->sessions == [])
    {
        $this->sessions = DB::connection(config('session.connection'))
            ->table(config('session.table', 'sessions'))
            ->where('user_id', $this->user->getAuthIdentifier())
            ->orderBy('last_activity', 'desc')
            ->get()->map(function ($session) {
                $position = Location::get($session->ip_address);
                return (object)[
                    'agent' => $this->createAgent($session),
                    'ip_address' => $session->ip_address,
                    'position' => $position,
                    'is_current_device' => $session->id === request()->session()->getId(),
                    'last_active' => Carbon::createFromTimestamp($session->last_activity)->diffForHumans(),
                ];
            });
    }

    }

    public function render()
    {
        return view('livewire.admin.users.sessions', [
            'sessions' => $this->readyToLoad
                ? $this->sessions
                : []]);
    }
}
