<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminHome extends Controller
{
    //
    public function index(){
        return view('/admin/admin');
    }
}
