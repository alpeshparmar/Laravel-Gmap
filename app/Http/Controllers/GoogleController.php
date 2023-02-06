<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GoogleController extends Controller
{
     public function index()
     {
        $locations = DB::table('locations')->get();
    	return view('googleAutocomplete',compact('locations'));
    //     return view('googleAutocomplete');
     }

}
