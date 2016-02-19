<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\AdminKm;

class KmController extends Controller
{
  public function __construct()
    {
        $this->middleware('guest');
    }

     public function index(){
    	//pega os dados da tabela plantio para listar na view colheitalist
    	$dados = DB::table('controlekm')->get();
    	return view('km.kmList',['dados'=>$dados]);
    }

    public function criar(){
    	//instancia um novo objeto de colheita e passa para a view da inserção
    	$dados = new AdminKm();
    	return view ('km.kmNewEdit',['dados'=>$dados]);
    }

    public function inserirKm(){

    	$dados = \Request::all();

    	$matricula = $dados['matricula'];
    	$frota = $dados['frota'];
    	$unidade = $dados['unidade'];
    	$destinos = $dados['destinos'];
    	$km_inicial = $dados['km_inicial'];
    	$hora_inicial = $dados['hora_inicial'];
    	$km_final = $dados['km_final'];
    	$hora_final = $dados['hora_final'];
    	$km_abastecimento = $dados['km_abastecimento'];
    	$qnt_litros = $dados['qnt_litros'];
    	$unidade_abastecimento = $dados['unidade_abastecimento'];
       	$observacao = $dados['observacao'];

    	$rules = [
    		'matricula' => 'required',
    		'frota'=> 'required'
    	];

    	$message = [
    		'matricula.required' => 'A matricula é obrigatória',
    		'frota.required'=> 'O numero do Frota é obrigatório'
    	];

    	//contrutor do nosso validador;
    	$validador = \Validator::make($dados,$rules,$message);

    	if ($validador->fails()) {
    		return redirect()->back()->withErros($validador->errors())->withInput();
    	}else{

    		$salvaKm = new AdminKm();
    		$salvaKm->matricula = $matricula;
    		$salvaKm->frota = $frota;
    		$salvaKm->unidade = $unidade;
    		$salvaKm->destinos = $destinos;
    		$salvaKm->km_inicial = $km_inicial;
    		$salvaKm->hora_inicial = $hora_inicial;
    		$salvaKm->km_final = $km_final;
    		$salvaKm->hora_final = $hora_final;
    		$salvaKm->km_abastecimento = $km_abastecimento;
    		$salvaKm->qnt_litros = $qnt_litros;
    		$salvaKm->unidade_abastecimento = $unidade_abastecimento;
    		$salvaKm->observacao = $observacao;
    		$salvaKm->save();

    		return redirect()->to('admin/km');
    	}

    }

    public function editarKm($id){
    	$dados = DB::table('controlekm')->get();
    	return view('km.kmNewEdit',['dados'=>$dados[0]]);
    }

    public function atualizarKm(){
    	$dados = \Request::all();

		$matricula = $dados['matricula'];
    	$frota = $dados['frota'];
    	$unidade = $dados['unidade'];
    	$destinos = $dados['destinos'];
    	$km_inicial = $dados['km_inicial'];
    	$hora_inicial = $dados['hora_inicial'];
    	$km_final = $dados['km_final'];
    	$hora_final = $dados['hora_final'];
    	$km_abastecimento = $dados['km_abastecimento'];
    	$qnt_litros = $dados['qnt_litros'];
    	$unidade_abastecimento = $dados['unidade_abastecimento'];
       	$observacao = $dados['observacao'];

    	$rules = [
    		'matricula' => 'required',
    		'frota'=> 'required'
    	];

    	$message = [
    		'matricula.required' => 'A matricula é obrigatória',
    		'frota.required'=> 'O numero do Frota é obrigatório'
    	];

    	//contrutor do nosso validador;
    	$validador = \Validator::make($dados,$rules,$message);

    	if ($validador->fails()) {
    		return redirect()->back()->withErros($validador->errors())->withInput();
    	}else{

    		$salvaKm = AdminKm::find($dados['idUser']);
	    	$salvaKm->matricula = $matricula;
    		$salvaKm->frota = $frota;
    		$salvaKm->unidade = $unidade;
    		$salvaKm->destinos = $destinos;
    		$salvaKm->km_inicial = $km_inicial;
    		$salvaKm->hora_inicial = $hora_inicial;
    		$salvaKm->km_final = $km_final;
    		$salvaKm->hora_final = $hora_final;
    		$salvaKm->km_abastecimento = $km_abastecimento;
    		$salvaKm->qnt_litros = $qnt_litros;
    		$salvaKm->unidade_abastecimento = $unidade_abastecimento;
    		$salvaKm->observacao = $observacao;
    		$salvaKm->save();
	

    		return redirect()->to('admin/km');
    	}
    }

    public function deletarKm($id){
    	$salvaColheita = DB::table('controlekm')->where('id',$id)->delete();
    //	$salvaColheita->delete();
    	return redirect()->to('admin/km');
    }
}


