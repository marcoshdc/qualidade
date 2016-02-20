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


	public function filtro(){
		
		$filtro = \Request::all();
		$unidade = $filtro['selectUnidade'];

		//dd($unidade);
		if ($unidade == null) {
			return view('error.error');
		}else{

			$dados = DB::table('plantio')
			->select(DB::raw('sum(total_plantado) as total, sum(total_plantado)/40 as media, sum(distribuicao_gema) as distmedia, calda'))
			->where('matricula','=',$unidade)
			->groupBy('calda')
			->get();

			if ($dados == null) {
				return view('error.error');
			}
			return view ('home',['dados'=>$dados]);
		}			
	}
}






  /*
             <form class="form-inline" name="formBusca" method="post" action="{{asset('/admin/filtrar/home')}}">
                <div class="form-group">
                            <label for="selectUnidade">Selecionar Unidade</label>
                            <select id="selectUnidade" name="selectUnidade" class="form-control">
                               <option value="">Selecione</option>
                                @foreach($infoUnidade as $info)
                                <option value="{{$info->fiscal}}">{{$info->unidade}}</option>
                                @endforeach
                             </select>
                        </div>
                <button type="submit" class="btn btn-primary">Buscar</button>       
            </form>

          */    