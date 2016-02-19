<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\AdminColheita;

class ColheitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index(){
    	//pega os dados da tabela colheita para listar na view colheitalist
    	$dados = DB::table('colheita')->get();
    	return view('colheita.colheitaList',['dados'=>$dados]);
    }

    public function criar(){
    	//instancia um novo objeto de colheita e passa para a view da inserção
    	$dados = new AdminColheita();
    	return view ('colheita.colheitaNewEdit',['dados'=>$dados]);
    }

    public function inserirColheita(){

    	$dados = \Request::all();

    	$matricula = $dados['matricula'];
    	$total_cana = $dados['total_cana'];
    	$perda = $dados['perda'];
    	$erradicacao = $dados['erradicacao'];
    	$pisoteio = $dados['pisoteio'];
    	$observacao = $dados['observacao'];

    	$rules = [
    		'matricula' => 'required',
    		'total_cana'=> 'required'
    	];

    	$message = [
    		'matricula.required' => 'A matricula é obrigatória',
    		'total_cana.required'=> 'O Total de Cana é obrigatório'
    	];

    	//contrutor do nosso validador;
    	$validador = \Validator::make($dados,$rules,$message);

    	if ($validador->fails()) {
    		return redirect()->back()->withErros($validador->errors())->withInput();
    	}else{

    		$salvaColheita = new AdminColheita();
    		$salvaColheita->matricula = $matricula;
    		$salvaColheita->total_cana = $total_cana;
    		$salvaColheita->perda = $perda;
    		$salvaColheita->erradicacao = $erradicacao;
    		$salvaColheita->pisoteio = $pisoteio;
    		$salvaColheita->observacao = $observacao;
    		$salvaColheita->save();

    		return redirect()->to('admin/colheita');
    	}

    }

    public function editarColheita($id){
    	$dados = DB::table('colheita')->get();
    	return view('colheita.colheitaNewEdit',['dados'=>$dados[0]]);
    }

    public function atualizarColheita(){
    	$dados = \Request::all();

    	$matricula = $dados['matricula'];
    	$total_cana = $dados['total_cana'];
    	$perda = $dados['perda'];
    	$erradicacao = $dados['erradicacao'];
    	$pisoteio = $dados['pisoteio'];
    	$observacao = $dados['observacao'];

    	$rules = [
    		'matricula' => 'required',
    		'total_cana'=> 'required'
    	];

    	$message = [
    		'matricula.required' => 'A matricula é obrigatória',
    		'total_cana.required'=> 'O Total de Cana é obrigatório'
    	];

    	//contrutor do nosso validador;
    	$validador = \Validator::make($dados,$rules,$message);

    	if ($validador->fails()) {
    		return redirect()->back()->withErros($validador->errors())->withInput();
    	}else{

    		$salvaColheita = AdminColheita::find($dados['idUser']);
    		$salvaColheita->matricula = $matricula;
    		$salvaColheita->total_cana = $total_cana;
    		$salvaColheita->perda = $perda;
    		$salvaColheita->erradicacao = $erradicacao;
    		$salvaColheita->pisoteio = $pisoteio;
    		$salvaColheita->observacao = $observacao;
    		$salvaColheita->save();
    		

    		return redirect()->to('admin/colheita');
    	}
    }

    public function deletarColheita($id){
    	$salvaColheita = DB::table('colheita')->where('id',$id)->delete();
    //	$salvaColheita->delete();
    	return redirect()->to('admin/colheita');
    }
}
