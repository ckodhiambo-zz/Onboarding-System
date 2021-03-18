<?php

namespace App\Http\Controllers;

use DB;

class DynamicDependent extends Controller

{
    function index()
    {
        $company_entity = DB::table('company_department')->groupBy('company')->get();
        return view('add-post')->with('company_list', $company_entity);
    }
}
