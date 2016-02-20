<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\AdminInfoUnidade;

class MetasController extends Controller
{
   	 public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
    	//pega os dados da tabela plantio para listar na view colheitalist
    	$dados = DB::table('metas')->get();
    	return view('metas.metasList',['dados'=>$dados]);
    }


    public function criar(){
    	//instancia um novo objeto de colheita e passa para a view da inserção
    	$dados = new AdminInfoUnidade();
    	return view ('metas.metasNewEdit',['dados'=>$dados]);
    }

    public function inserirMetas(){

    	$dados = \Request::all();

    	$meta_plantio = $dados['meta_plantio'];
    	$meta_colheita = $dados['meta_colheita'];
    	$unidade = $dados['unidade'];
    	$fiscal = $dados['fiscal'];
    	$frota = $dados['frota'];
    	$meta_tratos = $dados['meta_tratos'];
    	$observacao = $dados['observacao'];

    	$rules = [
    		'unidade' => 'required',
    		'frota'=> 'required',
            'fiscal'=> 'required'
    	];

    	$message = [
    		'unidade.required' => 'A Unidade é Obrigatória',
    		'frota.required'=> 'O Numero Frota é Obrigatório',
            'fiscal.required'=> 'A Matricula do Fiscal é Obrigatória'
    	];

    	//contrutor do nosso validador;
    	$validador = \Validator::make($dados,$rules,$message);

    	if ($validador->fails()) {
    		return redirect()->back()->withErros($validador->errors())->withInput();
    	}else{

    		$salvaMetas = new AdminInfoUnidade();
    		$salvaMetas->meta_plantio = $meta_plantio;
    		$salvaMetas->meta_colheita = $meta_colheita;
    		$salvaMetas->unidade = $unidade;
    		$salvaMetas->fiscal = $fiscal;
    		$salvaMetas->frota = $frota;
    		$salvaMetas->meta_tratos = $meta_tratos;
    		$salvaMetas->observacao = $observacao;
    		$salvaMetas->save();

    		return redirect()->to('admin/metas');
    	}

    }

    public function editarMetas($id){
    	$dados = DB::table('metas')->get();
    	return view('metas.metasNewEdit',['dados'=>$dados[0]]);
    }

    public function atualizarMetas(){
    	$dados = \Request::all();

		$meta_plantio = $dados['meta_plantio'];
        $meta_colheita = $dados['meta_colheita'];
        $unidade = $dados['unidade'];
        $fiscal = $dados['fiscal'];
        $frota = $dados['frota'];
        $meta_tratos = $dados['meta_tratos'];
        $observacao = $dados['observacao'];

        $rules = [
            'unidade' => 'required',
            'frota'=> 'required',
            'fiscal'=> 'required'
        ];

        $message = [
            'unidade.required' => 'A Unidade é Obrigatória',
            'frota.required'=> 'O Numero Frota é Obrigatório',
            'fiscal.required'=> 'A Matricula do Fiscal é Obrigatória'
        ];

        //contrutor do nosso validador;
        $validador = \Validator::make($dados,$rules,$message);

        if ($validador->fails()) {
            return redirect()->back()->withErros($validador->errors())->withInput();
        }else{

            $salvaMetas = AdminInfoUnidade::find($dados['idUser']);
            $salvaMetas->meta_plantio = $meta_plantio;
            $salvaMetas->meta_colheita = $meta_colheita;
            $salvaMetas->unidade = $unidade;
            $salvaMetas->fiscal = $fiscal;
            $salvaMetas->frota = $frota;
            $salvaMetas->meta_tratos = $meta_tratos;
            $salvaMetas->observacao = $observacao;
            $salvaMetas->save();
    		

    		return redirect()->to('admin/metas');
    	}
    }

    public function deletarMetas($id){
    	$salvaColheita = DB::table('metas')->where('id',$id)->delete();
    //	$salvaColheita->delete();
    	return redirect()->to('admin/metas');
    }
}

