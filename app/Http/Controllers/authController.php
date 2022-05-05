<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class authController extends Controller
{


    public function __construct()
    {
       // $this->middleware(['auth','blocked']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       return view("auth.onbroading");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $this->validate($request,[
            'name' => 'required', 'string', 'max:255',
            'username' => 'required', 'string', 'max:255', Rule::unique('users')->ignore($user->id),
            'email' => 'required', 'email', 'max:255', Rule::unique('users')->ignore($user->id),
            'phone' => 'required', 'numeric', Rule::unique('users')->ignore($user->id),
            'about_me' => ['nullable', 'string'],
            'tradingViewId' => ['nullable', 'string'],
            'location' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'street' => 'nullable|string|max:255',
            'city' =>'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' =>'nullable|string|max:255',
            'telegram' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' =>'nullable|string|max:255',
            'linkedIn' => 'nullable|string|max:255',
            'website' =>'nullable|string|max:255',
            'youtube_chanel' =>'nullable|string|max:255',
            'youtube_username' =>'nullable|string|max:255',
        ]);

       $user->update($request->all());
       return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
