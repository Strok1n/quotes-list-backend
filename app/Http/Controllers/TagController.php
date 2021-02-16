<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TagController extends Controller
{

    function getData(){
        return DB::table('tag')->get();
        // return Quote::all();
    }

    //
}
