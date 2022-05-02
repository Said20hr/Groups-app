<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Monarobase\CountryList\CountryListFacade;

class Location extends Component
{
    public User $user;
    public $location = [];
    public function mount($user)
    {
        $this->location = $user->withoutRelations()->toArray();
        $this->user = $user;
    }
    protected function rules()
    {
        return [
            'location.location' => 'nullable|string|max:255',
            'location.company' => 'nullable|string|max:255',
            'location.street' => 'nullable|string|max:255',
            'location.city' =>'nullable|string|max:255',
            'location.state' => 'nullable|string|max:255',
            'location.country' =>'nullable|string|max:255',
        ];
    }


    public function updateLocation()
    {
        $this->validate();
        $this->user->update( $this->location );
        $this->emit('saved');
        $this->emit('refresh-navigation-menu');
    }
    public function render()
    {
        return view('livewire.admin.users.location',
        [
           'countries' =>CountryListFacade::getList(app()->getLocale('en'))
        ]);
    }
}
