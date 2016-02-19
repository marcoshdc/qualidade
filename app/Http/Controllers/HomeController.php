<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;



class HomeController extends Controller
{
 
	public function index(){
		$dados = DB::table('plantio')
		->select(DB::raw('sum(total_plantado) as total, sum(total_plantado)/40 as media, sum(distribuicao_gema) as distmedia, calda'))
		->groupBy('calda')
		->get();
		return view ('home',['dados'=>$dados]);
	}


	public function grafhic(){
		
	}
}
