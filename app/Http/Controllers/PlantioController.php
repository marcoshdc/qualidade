<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\AdminPlantio;

class PlantioController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

     public function index(){
    	//pega os dados da tabela plantio para listar na view colheitalist
    	$dados = DB::table('plantio')->get();
    	return view('plantio.plantioList',['dados'=>$dados]);
    }

    public function criar(){
    	//instancia um novo objeto de colheita e passa para a view da inserção
    	$dados = new AdminPlantio();
    	return view ('plantio.plantioNewEdit',['dados'=>$dados]);
    }

    public function inserirPlantio(){

    	$dados = \Request::all();

    	$matricula = $dados['matricula'];
    	$total_plantado = $dados['total_plantado'];
    	$distribuicao_gema = $dados['distribuicao_gema'];
    	$cobricao = $dados['cobricao'];
    	$fertilizante = $dados['fertilizante'];
    	$calda = $dados['calda'];
    	$gemasviaveis = $dados['gemas_viaveis'];
    	$toleteamassado = $dados['tolete_amassados'];
    	$toleterachado = $dados['tolete_rachados'];
    	$observacao = $dados['observacao'];

    	$rules = [
    		'matricula' => 'required',
    		'total_plantado'=> 'required'
    	];

    	$message = [
    		'matricula.required' => 'A matricula é obrigatória',
    		'total_plantado.required'=> 'O Total Plantado é obrigatório'
    	];

    	//contrutor do nosso validador;
    	$validador = \Validator::make($dados,$rules,$message);

    	if ($validador->fails()) {
    		return redirect()->back()->withErros($validador->errors())->withInput();
    	}else{

    		$salvaPlantio = new AdminPlantio();
    		$salvaPlantio->matricula = $matricula;
    		$salvaPlantio->total_plantado = $total_plantado;
    		$salvaPlantio->distribuicao_gema = $distribuicao_gema;
    		$salvaPlantio->cobricao = $cobricao;
    		$salvaPlantio->fertilizante = $fertilizante;
    		$salvaPlantio->calda = $calda;
    		$salvaPlantio->gemas_viaveis = $gemasviaveis;
    		$salvaPlantio->toletes_amassados = $toleteamassado;
    		$salvaPlantio->toletes_rachados = $toleterachado;
    		$salvaPlantio->observacao = $observacao;
    		$salvaPlantio->save();

    		return redirect()->to('admin/plantio');
    	}

    }

    public function editarPlantio($id){
    	$dados = DB::table('plantio')->get();
    	return view('plantio.plantioNewEdit',['dados'=>$dados[0]]);
    }

    public function atualizarPlantio(){
    	$dados = \Request::all();

		$matricula = $dados['matricula'];
    	$total_plantado = $dados['total_plantado'];
    	$distribuicao_gema = $dados['distribuicao_gema'];
    	$cobricao = $dados['cobricao'];
    	$fertilizante = $dados['fertilizante'];
    	$calda = $dados['calda'];
    	$gemasviaveis = $dados['gemas_viaveis'];
    	$toleteamassado = $dados['tolete_amassados'];
    	$toleterachado = $dados['tolete_rachados'];
    	$observacao = $dados['observacao'];

    	$rules = [
    		'matricula' => 'required',
    		'total_plantado'=> 'required'
    	];

    	$message = [
    		'matricula.required' => 'A matricula é obrigatória',
    		'total_plantado.required'=> 'O Total Plantado é obrigatório'
    	];

    	//contrutor do nosso validador;
    	$validador = \Validator::make($dados,$rules,$message);

    	if ($validador->fails()) {
    		return redirect()->back()->withErros($validador->errors())->withInput();
    	}else{

    		$salvaPlantio = AdminPlantio::find($dados['idUser']);
    		$salvaPlantio->matricula = $matricula;
    		$salvaPlantio->total_plantado = $total_plantado;
    		$salvaPlantio->distribuicao_gema = $distribuicao_gema;
    		$salvaPlantio->cobricao = $cobricao;
    		$salvaPlantio->fertilizante = $fertilizante;
    		$salvaPlantio->calda = $calda;
    		$salvaPlantio->gemas_viaveis = $gemasviaveis;
    		$salvaPlantio->toletes_amassados = $toleteamassado;
    		$salvaPlantio->toletes_rachados = $toleterachado;
    		$salvaPlantio->observacao = $observacao;
    		$salvaPlantio->save();
    		

    		return redirect()->to('admin/plantio');
    	}
    }

    public function deletarPlantio($id){
    	$salvaColheita = DB::table('plantio')->where('id',$id)->delete();
    //	$salvaColheita->delete();
    	return redirect()->to('admin/plantio');
    }
}

