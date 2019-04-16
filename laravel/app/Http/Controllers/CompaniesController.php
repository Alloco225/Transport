<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $companies = DB::select('SELECT * FROM companies');
        $companies = Company::orderBy('name', 'asc')->get();
        return view('administration.companies.index', 
        ['companies' => $companies, 'title' => 'Companies', 'active' => 'active']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('administration.companies.create')->with('active', 'active');
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
        
        $company = new Company;
        $company->name = $request->input('name');
        $company->description = $request->input('description');
        $company->save();
        
        return redirect('/companies')->with('success', "Compagnie $company->name ajoutée !")->with('active', 'active');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
        // $company = Company::where('id', $company->id)->first();
        $company = Company::find($company->id);
        
        return view('administration.companies.show', ['company' => $company])->with('active', 'active');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
        $company = Company::find($company->id);
        
        return view('administration.companies.edit', ['company' => $company])->with('active', 'active');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        // 
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        $company = Company::find($company->id);
        $company->name = $request->input('name');
        $company->description = $request->input('description');
        $company->save();
        
        return redirect('/companies')->with('success', 'Compagnie mise à jour !')->with('active', 'active');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company = Company::find($company->id);
        $company->delete();
        return redirect('/companies')->with('success', 'Compagnie supprimée !')->with('active', 'active');
    }
}
