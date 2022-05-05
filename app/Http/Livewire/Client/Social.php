<?php

namespace App\Http\Livewire\Client;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Social extends Component
{
    public User $user;
    public $social = [];
    public function mount()
    {
        $this->social = Auth::user()->withoutRelations()->toArray();
        $this->user = Auth::user();
    }
    protected function rules()
    {
        return [
            'social.telegram' => 'nullable|string|max:255',
            'social.twitter' => 'nullable|string|max:255',
            'social.facebook' => 'nullable|string|max:255',
            'social.instagram' =>'nullable|string|max:255',
            'social.linkedIn' => 'nullable|string|max:255',
            'social.website' =>'nullable|string|max:255',
            'social.youtube_chanel' =>'nullable|string|max:255',
            'social.youtube_username' =>'nullable|string|max:255',
        ];
    }


    public function updateSocial()
    {
        $this->validate();
        $this->user->update( $this->social );

        $this->emit('saved');
        $this->emit('refresh-navigation-menu');
    }
    public function render()
    {
        return view('livewire.client.social');
    }
}
