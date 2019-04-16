<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $cities = DB::select('SELECT * FROM cities');
        $cities = City::orderBy('name', 'asc')->get();
        return view('administration.cities.index', 
        ['cities' => $cities, 'title' => 'Villes', 'active' => 'active']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administration.cities.create')->with('active', 'active');
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
            'name' => 'required'
        ]);
        
        $city = new City;
        $city->name = $request->input('name');
        $city->description = $request->input('description');
        $city->save();
        
        return redirect('/cities')->with('success', "Ville $city->name ajoutée !")->with('active', 'active');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
        // $city = City::where('id', $city->id)->first();
        $city = City::find($city->id);
        
        return view('administration.cities.show', ['city' => $city])->with('active', 'active');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        //
        $city = City::find($city->id);
        
        return view('administration.cities.edit', ['city' => $city])->with('active', 'active');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        // 
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        $city = City::find($city->id);
        $city->name = $request->input('name');
        $city->description = $request->input('description');
        $city->save();
        
        return redirect('/cities')->with('success', 'Ville mise à jour !')->with('active', 'active');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city = City::find($city->id);
        $city->delete();
        return redirect('/cities')->with('success', 'Ville supprimée !')->with('active', 'active');
    }
}
