<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getDetails(){
    	$images = DB::table('images')->get();
    	return view('detail', ['images' => $images]);
    }

    function getLogin(){
    	return view('login');
    }

    function postLogin(){
    	Session::put('role','0');
    	//Session::flush();
    	return redirect()->route('home');
    }

    function logout(){
    	Session::flush();
    	return redirect()->route('home');
    }

}
