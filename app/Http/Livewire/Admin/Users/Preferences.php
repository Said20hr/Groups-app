<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Preferences extends Component
{
    protected $listeners = ['savedActive' => '$refresh'];
    public User $user;
    public $reason = null;

    public function mount($user)
    {
        $this->user = $user;
    }
    public function deactivate()
    {
        $this->user->update([
            'active' => !$this->user->active,
            'raison_deactivated' => $this->reason,
            ]);
        $this->emit('savedActive');
        if($this->user->active)
        {
            $this->emit('activated');
        }
        else
        {
            $this->emit('deactivated');
        }
    }
    public function render()
    {
        return view('livewire.admin.users.preferences');
    }
}
