<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Hash;
use Stevebauman\Location\Facades\Location;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.dashboard.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'company' => 'required|string',
            'location' => 'required|string',
            'street' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'country' => 'required|string',
            'twitter' => 'required|string',
            'linkedIn' => 'required|string',
            'telegram' => 'required|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
            'website' => 'required|string',
            'youtube_chanel' => 'required|string',
            'youtube_username' => 'required|string',
        ]);


        $user = new User([
            'name' => $request->name,
            'username' => $request->name,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
            'role_id' => $request->role,
            // 'provider_id' => $request->,
            'phone' => $request->phone,
            'company' => $request->company,
            'location' => $request->location,
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'twitter' => $request->twitter,
            'linkedIn' => $request->linkedIn,
            'telegram' => $request->telegram,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'website' => $request->website,
            'youtube_chanel' => $request->youtube_chanel,
            'youtube_username' => $request->youtube_username,
        ]);

        $user->assignRole($request->role);
        $user->save();
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::find($id);
        return view('admin.dashboard.users.view',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.dashboard.users.edit',compact('user'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_invisibility(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->update();
    }
    public function update_info(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'company' => 'required|string',
            'street' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'tradingViewId' => 'required|string'
        ]);


        $user = User::find($id);
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->company = $request->get('company');
        $user->street = $request->get('street');
        $user->city = $request->get('city');
        $user->country = $request->get('country');
        $user->tradingViewID = $request->get('tradingViewID');
        $user->update();
        return redirect()->back();
    }
    public function update_2fa(Request $request, $id)
    {
        $user->update();
    }
    public function update_account(Request $request, $id)
    {
        $request->validate([
            'twitter' => 'required|string',
            'linkedIn' => 'required|string',
            'telegram' => 'required|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
            'website' => 'required|string',
            'youtube_chanel' => 'required|string',
            'youtube_username' => 'required|string',
        ]);

        $user = User::find($id);
        $user->twitter = $request->get('twitter');
        $user->linkedIn = $request->get('linkedIn');
        $user->telegram = $request->get('telegram');
        $user->facebook = $request->get('facebook');
        $user->instagram = $request->get('instagram');
        $user->website = $request->get('website');
        $user->youtube_chanel = $request->get('youtube_chanel');
        $user->youtube_username = $request->get('youtube_username');
        $user->update();
    }
    public function update_activate(Request $request, $id)
    {
        $request->validate([
            'active' => 'required|boolean',
        ]);

        $user = User::find($id);
        $user->active = $request->get('active');
        $user->update();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->role->id != 1)
        {
            $user->delete();
        }
       else
       {
           return redirect()->back()->with('error', 'user Cannot be deleted');
       }
       return redirect()->route('admin.users.index')->with('delete', 'User Has been deleted successfully');
    }
}
