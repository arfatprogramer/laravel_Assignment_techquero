<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class hotel extends Controller
{
    function hotelListing(Request $request){
        $search =$request['search'] ?? '';
        if($search != ''){
            $table =DB :: table('table_hotels')

            ->where('table_hotels.Hotel_name','like',"%$search%")
            ->orderBy('id')
            ->get();

        }else{

            $table=DB::table('table_hotels')
            ->get();
        }

        return view('hotel',['data'=>$table]);
    }


    function foodListing(Request $request){
        $serch = $request['search']?? '';
        if($serch != ''){

        $food=DB ::table('foods')
        ->join('table_hotels', 'foods.hotel_id', '=', 'table_hotels.id')
        ->select('foods.*', 'table_hotels.Hotel_name')
        ->where('foods.name','like',"%$serch%")
        ->orwhere('table_hotels.Hotel_name','like',"%$serch%")
        ->orderBy('id')
        ->get();
        }else{
            $food=DB ::table('foods')
            ->join('table_hotels', 'foods.hotel_id', '=', 'table_hotels.id')
            ->select('foods.*', 'table_hotels.Hotel_name')
            ->orderBy('id')
            ->get();
        }


        return view('food',['foods'=>$food]);
    }

    function dashbord(){
        $hotels = DB::table('table_hotels')->select('id')->get();
        $foods = DB::table('foods')->select('id')->get();
        $labels = ['Hotels', 'Foods'];
        $data = [100, 200];
        return view('dashbord', compact('labels', 'data','hotels','foods'));
        // return view('dashbord',['data'=>[$hotels,$foods]]);

    }




}
