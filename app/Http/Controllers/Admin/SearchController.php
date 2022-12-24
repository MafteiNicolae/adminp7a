<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchLuna(Request $request){
        if (isset($_GET['lunasch'])){
            $lunasch = $_GET['lunasch'];
            return view('admin.search2', ['lunasch' => $lunasch]);
        }
        else{
            return view('admin.search1');
        }
    }

}
