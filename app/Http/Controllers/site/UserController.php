<?php

namespace app\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller{
    public function user(){
        return view('site.user');
    }
}