<?php

namespace app\Http\Controllers\site;

class SiteController{
    // gerenciar paginas 
    public function contact(){
        return view('site/contatos');
    }
}