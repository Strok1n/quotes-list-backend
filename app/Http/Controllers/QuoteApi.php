<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\Support\Facades\DB;

class QuoteApi extends Controller
{
    //
    function getData(){

        return DB::table('quotes')
            ->orderBy('created_at','desc')
            ->paginate(10);
       // return Quote::all();
    }

    function add(Request $request){

        $quote = new Quote();
        $quote->author=$request->author;
        $quote->text=$request->text;


        if($quote->save())
            return $quote->getkey();
        return["result"=>"Error"];
    }
}
