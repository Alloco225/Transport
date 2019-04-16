<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TravelerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $traveler = DB::select('SELECT * FROM traveler');
        $traveler = User::where('role_id', '3')->orderBy('name', 'asc')->get();
        return view('administration.traveler.index', 
        ['traveler' => $traveler, 'title' => 'Voyageurs', 'active' => 'active']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administration.traveler.create')->with('active', 'active');
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
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'city' => 'required',
            'city_id' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        
        $traveler = new User;
        $traveler->first_name = $request->input('first_name');
        $traveler->last_name = $request->input('last_name');
        $traveler->city = $request->input('city');
        $traveler->city_id = $request->input('city_id');
        $traveler->email = $request->input('email');
        $traveler->phone = $request->input('phone');
        $traveler->save();
        
        return redirect('/traveler')->with('success', 'Voyageur ajouté !')->with('active', 'active');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User $traveler
     * @return \Illuminate\Http\Response
     */
    public function show(User $traveler)
    {
        //
        // $traveler = User::where('role_id', '3')->find($traveler->id);
        $traveler = User::find($traveler->id);
        
        return view('administration.traveler.show', ['traveler' => $traveler])->with('active', 'active');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $traveler
     * @return \Illuminate\Http\Response
     */
    public function edit(User $traveler)
    {
        //
        $traveler = User::find($traveler->id);
        
        return view('administration.traveler.edit', ['traveler' => $traveler])->with('active', 'active');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User $traveler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $traveler)
    {
        // 
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'city' => 'required',
            'city_id' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        
        $traveler = User::find($traveler->id);
        $traveler->first_name = $request->input('first_name');
        $traveler->last_name = $request->input('last_name');
        $traveler->city = $request->input('city');
        $traveler->city_id = $request->input('city_id');
        $traveler->email = $request->input('email');
        $traveler->phone = $request->input('phone');
        $traveler->save();
        
        return redirect('/traveler')->with('success', 'Voyageur mis à jour !')->with('active', 'active');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User $traveler
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $traveler)
    {
        $traveler = User::find($traveler->id);
        $traveler->delete();
        return redirect('/traveler')->with('success', 'Voyageur supprimé !')->with('active', 'active');
    }
}
