<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Location extends Component
{
    public User $user;
    public $state = [];
    public function mount($user)
    {
        $this->state = Auth::user()->withoutRelations()->toArray();
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.admin.users.location');
    }
}
