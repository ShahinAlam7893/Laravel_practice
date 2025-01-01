<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryController extends Controller
{
    function basicQuery(Request $request){
        //show all songs
        // $song = DB::table('songs')->get();
        // return response()->json($song);

        //show particular data using limit
        //it show 
        // $song = DB::table('songs')->limit('5')->get();
        // return response()->json($song);

        //Show paricular data using ofset
        //it show data form id 4 to 7
        // $song = DB::table('songs')->limit(4)->offset(3)->get();
        // return response()->json($song);

        //show all data order by id
        //this line do order in assending order(1-20)
        // $song = DB::table('songs')->orderBy('id')->get();
        //this line do ordering in desending order(20-1)
        // $song = DB::table('songs')->orderBy('id','desc')->get();
        //this line shows ordered data by using title column
        // $song = DB::table('songs')->orderBy('title','desc')->get();
        //this line show ordered data by using double condition
        // $song = DB::table('songs')
        //         ->orderBy('title','desc')
        //         ->orderBy('year')->get();

        //this line count total number of row in the data table
        // $song = DB::table('songs')->count();

        //using where condition

        //find a specific data searching by id
        // $song = DB::table('songs')->where('id','=','5')->get();
        //this line show data which have id no (16-20)
        // $song = DB::table('songs')->where('id', '>', '15')->get();
        //this line show only title, year, artist_id where year less than 1985
        $song = DB::table('songs')
        ->select('artist_id','title', 'year')
        ->where('year', '<','1985')->get();

        return response()->json($song);




    }
}
