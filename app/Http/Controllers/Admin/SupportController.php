<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    //
    public function index(){
        // tambem pode usar '/'
        return view('admin.supports.index');
    }
}
