<?php

namespace App\Http\Controllers;

use App\Journey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JourneysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $journeys = DB::select('SELECT * FROM journeys');
        $journeys = Journey::orderBy('name', 'asc')->get();
        return view('administration.journeys.index', 
        ['journeys' => $journeys, 'title' => 'Voyages', 'active' => 'active']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administration.journeys.create')->with('active', 'active');
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
            'code' => 'required',
            'date' => 'required',
            'departure_time' => 'required',
            'departure_station_id' => 'required',
            'arrival_station_id' => 'required',
            'company_id' => 'required'
        ]);
        
        $journey = new Journey;
        $journey->code = $request->input('code');
        $journey->date = $request->input('date');
        $journey->departure_time = $request->input('departure_time');
        $journey->departure_station_id = $request->input('departure_station_id');
        $journey->arrival_station_id = $request->input('arrival_station_id');
        $journey->company_id = $request->input('company_id');
        $journey->save();
        
        return redirect('/journeys')->with('success', 'Voyage Créé !')->with('active', 'active');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function show(Journey $journey)
    {
        //
        // $journey = Journey::where('id', $journey->id)->first();
        $journey = Journey::find($journey->id);
        
        return view('administration.journeys.show', ['journey' => $journey])->with('active', 'active');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function edit(Journey $journey)
    {
        //
        $journey = Journey::find($journey->id);
        
        return view('administration.journeys.edit', ['journey' => $journey])->with('active', 'active');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Journey $journey)
    {
        // 
        $this->validate($request, [
            'code' => 'required',
            'date' => 'required',
            'departure_time' => 'required',
            'departure_station_id' => 'required',
            'arrival_station_id' => 'required',
            'company_id' => 'required'
        ]);
        
        $journey = Journey::find($journey->id);
        $journey->code = $request->input('code');
        $journey->date = $request->input('date');
        $journey->departure_time = $request->input('departure_time');
        $journey->departure_station_id = $request->input('departure_station_id');
        $journey->arrival_station_id = $request->input('arrival_station_id');
        $journey->company_id = $request->input('company_id');
        $journey->save();
        
        return redirect('/journeys')->with('success', 'Voyage modifié !')->with('active', 'active');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Journey  $journey
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journey $journey)
    {
        $journey = Journey::find($journey->id);
        $journey->delete();
        return redirect('/journeys')->with('success', 'Voyage supprimée !')->with('active', 'active');
    }
}
