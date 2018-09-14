<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function insert(Request $req){
        $firstname = $req->input('name');
        $lastname = $req->input('surname');
        $username = $req->input('username');
        $password = $req->input('password');

        $data = array('name'=>$firstname, 'surname'=>$lastname, 'patient_username'=>$username, 'password'=>$password);
        DB::table('Patient')->insert($data);

        echo ('Registered');
    }
}
