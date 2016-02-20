@extends('painel')

@section('title','Apontamentos de Metas')

@section('content')

<div class="box-footer">
    <a href="{{asset('admin/metas')}}"><button class="btn btn-primary">Voltar</button></a>
</div>
    <div class="row">
        <!-- left column -->

        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 style="width: 100%" class="box-title">Informações das Metas</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                @if(!empty($dados->id))
                 <form id="formUser" name="formUser" method="post" action="{{asset('/admin/metas/atualizar')}}">
                     <input type="hidden" value="{{$dados->id}}" id="idUser" name="idUser">
                @else
                 <form id="formUser" name="formUser" method="post" action="{{asset('/admin/metas/inserirMetas')}}">
                @endif
                    <div class="box-body">
                        <div class="form-group">
                            <label for="meta_plantio">Metas do Plantio(ha)</label>
                            <input type="text" class="form-control" value="{{$dados->meta_plantio}}"  id="meta_plantio" name="meta_plantio" placeholder="Metas do Plantio(ha)" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="meta_colheita">Metas da Colheita(ton)</label>
                            <input type="text" class="form-control" value="{{$dados->meta_colheita}}" id="meta_colheita" name="meta_colheita" placeholder="Metas da Colheita(ton)" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="meta_tratos">Metas do Tratos</label>
                            <input type="text" class="form-control" value="{{$dados->meta_tratos}}" id="meta_tratos" name="meta_tratos" placeholder="Metas de Tratos" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="unidade">Unidade</label>
                            <input type="text" class="form-control" value="{{$dados->unidade}}" id="unidade" name="unidade" placeholder="Unidade" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="fiscal">Fiscal</label>
                            <input type="text" class="form-control" value="{{$dados->fiscal}}" id="fiscal"  name="fiscal" placeholder="Matricula do Fiscal" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="frota">Frota</label>
                            <input type="text" class="form-control" value="{{$dados->frota}}" id="frota"  name="frota" placeholder="Numero do Frota" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <label for="observacao">Observação</label>
                            <input type="text" class="form-control"  value="{{$dados->observacao}}" id="observacao"  name="observacao" placeholder="Pontos de Observação" style="width: 30%">
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