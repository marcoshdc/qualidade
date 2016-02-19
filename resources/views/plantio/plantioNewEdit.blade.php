@extends('painel')

@section('title','Apontamento de Plantio')

@section('content')

<div class="box-footer">
    <a href="{{asset('admin/plantio')}}"><button class="btn btn-primary">Voltar</button></a>
</div>
<section class="content">
    <div class="row">
        <!-- left column -->

        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Informações do Plantio</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                @if(!empty($dados->id))
                 <form id="formUser" name="formUser" method="post" action="{{asset('/admin/plantio/atualizar')}}">
                     <input type="hidden" value="{{$dados->id}}" id="idUser" name="idUser">
                @else
                 <form id="formUser" name="formUser" method="post" action="{{asset('/admin/plantio/inserirPlantio')}}">
                @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label for="matricula">Matricula</label>
                            <input type="text" class="form-control" value="{{$dados->matricula}}"  id="matricula" name="matricula" placeholder="Matricula" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="total_plantado">Total Plantado(ha)</label>
                            <input type="text" class="form-control" value="{{$dados->total_plantado}}" id="total_plantado" name="total_plantado" placeholder="Total de Cana Plantada" style="width:30%" >
                        </div>
                        <div class="form-group">
                            <label for="distribuicao_gema">Distribuição Gemas</label>
                            <input type="text" class="form-control" value="{{$dados->distribuicao_gema}}" id="distribuicao_gema" name="distribuicao_gema" placeholder="Pontos de Gemas Viaveis">
                        </div>
                        <div class="form-group">
                            <label for="cobricao">Cobrição</label>
                            <input type="text" class="form-control" value="{{$dados->cobricao}}" id="cobricao"  name="cobricao" placeholder="Pontos de Cobrição">
                        </div>
                        <div class="form-group">
                            <label for="fertilizante">Fertilizante</label>
                            <input type="text" class="form-control" value="{{$dados->fertilizante}}" id="fertilizante"  name="fertilizante" placeholder="Pontos de Fertilizante" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="calda">Calda</label>
                            <input type="text" class="form-control" value="{{$dados->calda}}" id="calda"  name="calda" placeholder="Pontos de Calda" style="width: 30%">
                        <div>
                        <div class="form-group">
                            <label for="gemas_viaveis">Gemas Viaveis</label>
                            <input type="text" class="form-control" value="{{$dados->gemas_viaveis}}" id="gemas_viaveis"  name="gemas_viaveis" placeholder="Pontos de Gemas Viaveis" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="tolete_amassados">Toletes Amassados</label>
                            <input type="text" class="form-control" value="{{$dados->toletes_amassados}}" id="tolete_amassados"  name="tolete_amassados" placeholder="Pontos de Toletes Amassados" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="tolete_rachados">Toletes Rachados</label>
                            <input type="text" class="form-control" value="{{$dados->toletes_rachados}}" id="tolete_rachados"  name="tolete_rachados" placeholder="Pontos de Toletes Rachados" style="width: 30%">
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