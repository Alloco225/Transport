<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\City;


class PagesController extends Controller
{
    //
    public function index(){
        $cities = City::orderBy('name', 'asc')->get();
        $cities_to_show = $cities->take(3);
        $companies = Company::orderBy('name', 'asc')->get();
        
        return view('welcome', ['cities' => $cities, 'companies' => $companies, 'cities_to_show' => $cities_to_show]);
    }
}
