@extends('painel')

@section('title','Listagem de Metas')

@section('content')

<div class="box-footer">
        <a href="{{asset('/admin/metas/novaMetas')}}"><button class="btn btn-primary">Novo Apontamento</button></a>
    </div>
    <br>
     <div class="table-responsive">
                <h2 class="box-title" style="text-align: center;">Lista de Metas das Unidades</h2>
                <br>

                    <table id="example2" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Meta do Plantio</th>
                            <th>Meta da Colheita</th>
                            <th>Meta de Tratos</th>
                            <th>Unidade</th>
                            <th>Fiscal</th>
                            <th>Frota</th>
                            <th>Observação</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $dado)
                            <tr>
                                <td class="info" style="text-align: center;">{{$dado->id}}</td>
                                <td class="info" style="text-align: center;">{{$dado->meta_plantio}}</td>
                                <td class="info" style="text-align: center;">{{$dado->meta_colheita}}</td>
                                <td class="info" style="text-align: center;">{{$dado->meta_tratos}}</td>
                                <td class="info" style="text-align: center;">{{$dado->unidade}}</td>
                                <td class="info" style="text-align: center;">{{$dado->fiscal}}</td>
                                <td class="info" style="text-align: center;">{{$dado->frota}}</td>
                                <td class="info" style="text-align: center;">{{$dado->observacao}}</td>

                                <td class="danger" style="text-align: center;"><a href="{{asset('admin/metas/editar/'.$dado->id)}}"><button class="btn btn-primary">Editar</button></a></td>
                                <td class="danger" style="text-align: center;"><a href="{{asset('admin/metas/deletar/'.$dado->id)}}"><button class="btn btn-primary">Excluir</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
    </div>
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
            }); 
        });
    </script>
@stop