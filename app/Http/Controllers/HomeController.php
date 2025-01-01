<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request){
         return response()->json([
            'massage' => 'welcome to our registered user group!'
         ]);
    }

    function filedownload(Request $request){
        return response()->json([
            'new file' => 'File download'
        ]);
    }
}
