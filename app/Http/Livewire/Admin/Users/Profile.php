<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public User $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.admin.users.profile');
    }
}
