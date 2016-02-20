@extends('painel')

@section('title','Apontamento de Km')

@section('content')

<div class="box-footer">
    <a href="{{asset('admin/km')}}"><button class="btn btn-primary">Voltar</button></a>
</div>
    <div class="row">
        <!-- left column -->

        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 style="width: 100%" class="box-title">Informações do Quilometragem</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                @if(!empty($dados->id))
                 <form id="formUser" name="formUser" method="post" action="{{asset('/admin/km/atualizar')}}">
                     <input type="hidden" value="{{$dados->id}}" id="idUser" name="idUser">
                @else
                 <form id="formUser" name="formUser" method="post" action="{{asset('/admin/km/inserirKm')}}">
                @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label for="matricula">Matricula</label>
                            <input type="text" class="form-control" value="{{$dados->matricula}}"  id="matricula" name="matricula" placeholder="Matricula" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="unidade">Unidade</label>
                            <input type="text" class="form-control" value="{{$dados->unidade}}" id="unidade" name="unidade" placeholder="Unidade" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="frota">Frota</label>
                            <input type="text" class="form-control" value="{{$dados->frota}}" id="frota" name="frota" placeholder="Frota" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="destinos">Destinos</label>
                            <input type="text" class="form-control" value="{{$dados->destinos}}" id="destinos" name="destinos" placeholder="Destinos" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="km_inicial">km_inicial</label>
                            <input type="text" class="form-control" value="{{$dados->km_inicial}}" id="km_inicial"  name="km_inicial" placeholder="Km Inicial" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="hora_inicial">Hora Inicial</label>
                            <input type="text" class="form-control" value="{{$dados->hora_inicial}}" id="hora_inicial"  name="hora_inicial" placeholder="Hora Inicial" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="km_final">Km Final</label>
                            <input type="text" class="form-control" value="{{$dados->km_final}}" id="km_final"  name="km_final" placeholder="Km Final" style="width: 30%">
                        <div>
                        <div class="form-group">
                            <label for="hora_final">Hora Final</label>
                            <input type="text" class="form-control" value="{{$dados->hora_final}}" id="hora_final"  name="hora_final" placeholder="Hora Final" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="km_abastecimento">Km de Abastecimento</label>
                            <input type="text" class="form-control" value="{{$dados->km_abastecimento}}" id="km_abastecimento"  name="km_abastecimento" placeholder="Km de Abastecimento" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="qnt_litros">Quantidade de Litros</label>
                            <input type="text" class="form-control" value="{{$dados->qnt_litros}}" id="qnt_litros"  name="qnt_litros" placeholder="Quantidade de Litros" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="unidade_abastecimento">Unidade de Abastecimento</label>
                            <input type="text" class="form-control" value="{{$dados->unidade_abastecimento}}" id="unidade_abastecimento"  name="unidade_abastecimento" placeholder="Unidade de Abastecimento" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="observacao">Observação</label>
                            <input type="text" class="form-control"  value="{{$dados->observacao}}" id="observacao"  name="observacao" placeholder="Pontos de Observação" style="width: 30%">
                        </div>
   				   </div>


                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
  </div>
 </section>

	

@stop