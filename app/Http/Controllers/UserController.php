<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(reqest $request){
        return view('content.user.index');
    }

    function ajax(Request $request){
        $data = user::query();

        return DataTables::of($data)->make(true);
    }
}

