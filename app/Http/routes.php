<?php


Route::controllers([

	'auth'=>'Auth\AuthController',
	'password'=>'Auth\PasswordController'

]);
	
	Route::get('admin','AdminController@index');

	Route::get('admin/home','HomeController@index');


	Route::get('admin/painel', function () {
        
    $infoUnidade = DB::table('metas')->get();

    return view('painel',['infoUnidade'=>$infoUnidade]);
	});



        Route::post('admin/filtrar/home','HomeController@filtro');

        //rotas de acesso ao painel
        Route::get('admin/deslogar', 'AdminController@deslogarAdmin');


	  //rotas do módulo de colheita
        Route::get('admin/colheita', 'ColheitaController@index');
        Route::get('admin/colheita/editar/{id}', 'ColheitaController@editarColheita');
        Route::post('admin/colheita/atualizar', 'ColheitaController@atualizarColheita');
        Route::get('admin/colheita/deletar/{id}', 'ColheitaController@deletarColheita');
        Route::get('admin/colheita/novaColheita', 'ColheitaController@criar');
        Route::post('admin/colheita/inserirColheita', 'ColheitaController@inserirColheita');

       //rotas do módulo de plantio
        Route::get('admin/plantio', 'PlantioController@index');
        Route::get('admin/plantio/editar/{id}', 'PlantioController@editarPlantio');
        Route::post('admin/plantio/atualizar', 'PlantioController@atualizarPlantio');
        Route::get('admin/plantio/deletar/{id}', 'PlantioController@deletarPlantio');
        Route::get('admin/plantio/novoPlantio', 'PlantioController@criar');
        Route::post('admin/plantio/inserirPlantio', 'PlantioController@inserirPlantio');

		//rotas do módulo de km
        Route::get('admin/km', 'KmController@index');
        Route::get('admin/km/editar/{id}', 'KmController@editarKm');
        Route::post('admin/km/atualizar', 'KmController@atualizarKm');
        Route::get('admin/km/deletar/{id}', 'KmController@deletarKm');
        Route::get('admin/km/novoKm', 'KmController@criar');
        Route::post('admin/km/inserirKm', 'KmController@inserirKm');

        //rotas do módulo de km
        Route::get('admin/metas', 'MetasController@index');
        Route::get('admin/metas/editar/{id}', 'MetasController@editarMetas');
        Route::post('admin/metas/atualizar', 'MetasController@atualizarMetas');
        Route::get('admin/metas/deletar/{id}', 'MetasController@deletarMetas');
        Route::get('admin/metas/novaMetas', 'MetasController@criar');
        Route::post('admin/metas/inserirMetas', 'MetasController@inserirMetas');
