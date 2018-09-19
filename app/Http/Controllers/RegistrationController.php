<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(Request $req){
        $firstname = $req->input('name');
        $lastname = $req->input('surname');
        $username = $req->input('username');
        $password = $req->input('password');

        $data = array('name'=>$firstname, 'surname'=>$lastname, 'patient_username'=>$username, 'password'=>Hash::make($password));

        DB::table('Patient')->insert($data);

        return redirect()->to('/');
    }
}
