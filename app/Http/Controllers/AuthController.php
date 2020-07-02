<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view ('form');
    }

    public function welcomename(Request $request){
    //dd($request->all());
        $nama=$request['FirstName'].' '.$request['LastName'];
        //$nama=$request["FirstName"];
        return view('welcomename',["nama"=>$nama]);
       // return "Welcome ".$nama;
    }
    public function master(){
        return view('adminlte/master');
    }
    public function items(){
        return view('adminlte/items/index');    
    }
    public function create(){
        return view('adminlte/items/create');
    }
    public function tugas_template_blade(){
        return view('adminlte/tugas_template_blade/index');
    }
    public function data_tabel(){
        return view('adminlte/tugas_template_blade/data_tabel');
    }

}
