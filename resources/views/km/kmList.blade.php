@extends('painel')

@section('title','Listagem de Plantio')

@section('content')

    <div class="box-footer">
        <a href="{{asset('/admin/km/novoKm')}}"><button class="btn btn-primary">Novo Apontamento</button></a>
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
                            <th style="width: 5%; text-align: center;">ID</th>
                            <th style="width: 10%; text-align: left;">Matricula</th>
                            <th style="width: 10%; text-align: left;">Unidade</th>
                            <th style="width: 5%; text-align: left;">Frota</th>
                            <th style="width: 5%; text-align: left;">Destinos</th>
                            <th style="width: 5%; text-align: left;">Km Inicial</th>
                            <th style="width: 5%; text-align: center;">Hora Inicial</th>
                            <th style="width: 5%; text-align: center;">Km Final</th>
                            <th style="width: 5%; text-align: center;">Hora Final</th>
                            <th style="width: 5%; text-align: center;">Km de Abastecimento</th>
                            <th style="width: 5%; text-align: center;">Quantidade de Litros</th>
                            <th style="width: 5%; text-align: center;">Unidade de Abastecimento</th>
                            <th style="width: 20%; text-align: center;">Observação</th>
                            <th style="width: 5%; text-align: center;">Editar</th>
                            <th style="width: 5%; text-align: center;">Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $dado)
                            <tr>
                                <td style="text-align: center;">{{$dado->id}}</td>
                                <td style="text-align: center;">{{$dado->matricula}}</td>
                                <td style="text-align: center;">{{$dado->unidade}}</td>
                                <td style="text-align: center;">{{$dado->frota}}</td>
                                <td style="text-align: center;">{{$dado->destinos}}</td>
                                <td style="text-align: center;">{{$dado->km_inicial}}</td>
                                <td style="text-align: center;">{{$dado->hora_inicial}}</td>
                                <td style="text-align: center;">{{$dado->km_final}}</td>
                                <td style="text-align: center;">{{$dado->hora_final}}</td>
                                <td style="text-align: center;">{{$dado->km_abastecimento}}</td>
                                <td style="text-align: center;">{{$dado->qnt_litros}}</td>
                                <td style="text-align: center;">{{$dado->unidade_abastecimento}}</td>
                                <td style="text-align: center;">{{$dado->observacao}}</td>

                                <td style="text-align: center;"><a href="{{asset('admin/km/editar/'.$dado->id)}}"><button class="btn btn-primary">Editar</button></a></td>
                                <td style="text-align: center;"><a href="{{asset('admin/km/deletar/'.$dado->id)}}"><button class="btn btn-primary">Excluir</button></a></td>
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