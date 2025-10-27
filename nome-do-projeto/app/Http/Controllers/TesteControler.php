<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index(){
        return view('teste');

       


    }
     public function retornaData(){
            $info = "Titulo massa";
            return view('teste',compact('info'));
        }

}
