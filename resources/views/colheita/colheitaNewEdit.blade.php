@extends('painel')

@section('title','Apontamento de Colheita')

@section('content')

<div class="box-footer">
    <a href="{{asset('admin/colheita')}}"><button class="btn btn-primary">Voltar</button></a>
</div>
<section class="content">
    <div class="row">
        <!-- left column -->

        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Informações da Colheita</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                @if(!empty($dados->id))
                 <form id="formUser" name="formUser" method="post" action="{{asset('/admin/colheita/atualizar')}}">
                     <input type="hidden" value="{{$dados->id}}" id="idUser" name="idUser">
                @else
                 <form id="formUser" name="formUser" method="post" action="{{asset('/admin/colheita/inserirColheita')}}">
                @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label for="matricula">Matricula</label>
                            <input type="text" class="form-control" value="{{$dados->matricula}}"  id="matricula" name="matricula" placeholder="Matricula" style="width: 70%">
                        </div>
                        <div class="form-group">
                            <label for="total_cana">Total de Cana</label>
                            <input type="text" class="form-control" value="{{$dados->total_cana}}" id="total_cana" name="total_cana" placeholder="Total de Cana" style="width:150px" >
                        </div>
                        <div class="form-group">
                            <label for="perda">Perda</label>
                            <input type="text" class="form-control" value="{{$dados->perda}}" id="perda" name="perda" placeholder="Pontos de Perda">
                        </div>
                        <div class="form-group">
                            <label for="erradicacao">Erradicação</label>
                            <input type="text" class="form-control" value="{{$dados->erradicacao}}" id="erradicacao"  name="erradicacao" placeholder="Pontos de Erradicação">
                        </div>
                        <div class="form-group">
                            <label for="pisoteio">Pisoteio</label>
                            <input type="text" class="form-control" value="{{$dados->pisoteio}}" id="pisoteio"  name="pisoteio" placeholder="Pontos de Pisoteio" style="width: 70%">
                        </div>
   
                        <div class="form-group">
                            <label for="observacao">Observação</label>
                            <input type="text" class="form-control"  value="{{$dados->observacao}}" id="observacao"  name="observacao" placeholder="Pontos de Observação" style="width: 70%">
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