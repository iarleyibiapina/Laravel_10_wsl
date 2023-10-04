<?php

namespace App\Http\Controllers;

use App\Models\testeDoisSingular;
use Illuminate\Http\Request;

class TesteDoisSingularController extends Controller
{
    //
    public function test(testeDoisSingular $variavelModel){
        $Modelos = $variavelModel->all();
        dd($Modelos);

        return view('welcome');
    }
}
