@extends('painel')

@section('title','Listagem de Colheita')

@section('content')

    <div class="box-footer">
        <a href="{{asset('/admin/colheita/novaColheita')}}"><button class="btn btn-primary">Novo Apontamento</button></a>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Lista de Colheita</h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="width: 10%; text-align: center;">ID</th>
                            <th style="width: 10%; text-align: left;">Matricula</th>
                            <th style="width: 10%; text-align: left;">Total de Cana(ton)</th>
                            <th style="width: 10%; text-align: left;">Pontos de Perda</th>
                            <th style="width: 10%; text-align: left;">Pontos de Erradicação</th>
                            <th style="width: 10%; text-align: left;">Pontos de Pisoteio</th>
                            <th style="width: 20%; text-align: center;">Observação</th>
                            <th style="width: 10%; text-align: center;">Editar</th>
                            <th style="width: 10%; text-align: center;">Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $dado)
                            <tr>
                                <td style="text-align: center;">{{$dado->id}}</td>
                                <td style="text-align: center;">{{$dado->matricula}}</td>
                                <td style="text-align: center;">{{$dado->total_cana}}</td>
                                <td style="text-align: center;">{{$dado->perda}}</td>
                                <td style="text-align: center;">{{$dado->erradicacao}}</td>
                                <td style="text-align: center;">{{$dado->pisoteio}}</td>
                                <td style="text-align: center;">{{$dado->observacao}}</td>

                                <td style="text-align: center;"><a href="{{asset('admin/colheita/editar/'.$dado->id)}}"><button class="btn btn-primary">Editar</button></a></td>
                                <td style="text-align: center;"><a href="{{asset('admin/colheita/deletar/'.$dado->id)}}"><button class="btn btn-primary">Excluir</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $("#example1").dataTable();
            $('#example2').dataTable({
            }); 
        });
    </script>

	

@stop