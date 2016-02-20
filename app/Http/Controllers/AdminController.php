<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
   
   	public function index(){
    	//dd("chegou");
    	return view('login');
    }
 
    public function painel(){
    	dd("chegou");
    	return view('painel');
    }

    public function home(){
    	return view('home');
    }
    public function deslogarAdmin(){
   
        \Auth::logout();
        return \Redirect::to('/');

    }
    

}
