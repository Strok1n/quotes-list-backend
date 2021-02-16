<?php

namespace App\Http\Controllers;

use App\Models\QuoteTagModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuoteTagController extends Controller
{
    function getData()
    {
        return DB::table('quote_tag_models')->get();
    }

    function add(Request $request){
        $quoteTag = new QuoteTagModel();
        $quoteTag->id_quote=$request->id_quote;
        $quoteTag->id_tag=$request->id_tag;




        if($quoteTag->save())
            return["Success"];
        return["result"=>"Error"];

    }

}
