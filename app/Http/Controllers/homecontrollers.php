<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class homecontrollers extends Controller
{
    
    public function index(){

        $title = "Tự học Laravel";
        $hoctap = "Học lập trình tại Rhodium";
        // [
        //     'titleData' => $title,
        //     'contens' => $hoctap
        // ]
        //return View::make('home', compact('title', 'hoctap'));//load view home.php
        return View('home')->with(['title'=>$title, 'hoctap'=>$hoctap]);//load view home.php
    }
    public function chuyenmucmoi(){
        return 'Chuyên mục mới';
    }
    public function getProducts($id){
        //return $id;
        return view('cliens/products/detail', compact('id'));

    }
}
