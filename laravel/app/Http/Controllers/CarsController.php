<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = Car::orderBy('plate_number', 'asc')->get();
        return view('administration.cars.index', 
        ['cars' => $cars, 'title' => 'Cars', 'active' => 'active']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administration.cars.create')->with('active', 'active');
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
            'plate_number' => 'required'
        ]);
        
        $car = new Car;
        $car->plate_number = $request->input('plate_number');
        $car->save();
        
        return redirect('/cars')->with('success', "Car $car->plate_number ajouté à la base de donnée !")->with('active', 'active');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
        // $car = Car::where('id', $car->id)->first();
        $car = Car::find($car->id);
        
        return view('administration.cars.show', ['car' => $car])->with('active', 'active');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
        $car = Car::find($car->id);
        
        return view('administration.cars.edit', ['car' => $car])->with('active', 'active');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        // 
        $this->validate($request, [
            'plate_number' => 'required'
        ]);
        
        $car = Car::find($car->id);
        $car->plate_number = $request->input('plate_number');
        $car->save();
        
        return redirect('/cars')->with('success', "Car $car->plate_number mis à jour !")->with('active', 'active');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car = Car::find($car->id);
        $car->delete();
        return redirect('/cars')->with('success', 'Compagnie supprimée !')->with('active', 'active');
    }
}
