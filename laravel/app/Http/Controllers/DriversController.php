<?php

namespace App\Http\Controllers;

use App\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $driver = DB::select('SELECT * FROM driver');
        $driver = Driver::orderBy('name', 'asc')->get();
        return view('administration.driver.index', 
        ['driver' => $driver, 'title' => 'Chauffeurs', 'active' => 'active']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administration.driver.create')->with('active', 'active');
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
            'birth_date' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'driver_id' => 'required'
        ]);
        
        $driver = new Driver;
        $driver->first_name = $request->input('first_name');
        $driver->last_name = $request->input('last_name');
        $driver->birth_date = $request->input('birth_date');
        $driver->email = $request->input('email');
        $driver->phone = $request->input('phone');
        $driver->address = $request->input('address');
        $driver->company_id = $request->input('driver_id');
        $driver->save();
        
        return redirect('/drivers')->with('success', "Chauffeur $driver->first_name $driver->first_name ajouté")->with('active', 'active');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
        // $driver = Driver::where('id', $driver->id)->first();
        $driver = Driver::find($driver->id);
        
        return view('administration.driver.show', ['driver' => $driver])->with('active', 'active');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        //
        $driver = Driver::find($driver->id);
        
        return view('administration.driver.edit', ['driver' => $driver])->with('active', 'active');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        // 
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'company_id' => 'required'
        ]);
        
        $driver = Driver::find($driver->id);
        $driver->first_name = $request->input('first_name');
        $driver->last_name = $request->input('last_name');
        $driver->birth_date = $request->input('birth_date');
        $driver->email = $request->input('email');
        $driver->phone = $request->input('phone');
        $driver->address = $request->input('address');
        $driver->company_id = $request->input('company_id');
        $driver->save();
        
        return redirect('/driver')->with('success', "Chauffeur mis à jour")->with('active', 'active');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver = Driver::find($driver->id);
        $driver->delete();
        return redirect('/driver')->with('success', 'Chauffeur supprimé !')->with('active', 'active');
    }
}
