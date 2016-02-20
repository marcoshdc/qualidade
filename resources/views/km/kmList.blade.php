@extends('painel')

@section('title','Listagem de Plantio')

@section('content')

    <div class="box-footer">
        <a href="{{asset('/admin/km/novoKm')}}"><button class="btn btn-primary">Novo Apontamento</button></a>
    </div>
    <br>
     <div class="table-responsive">
                <h2 class="box-title" style="text-align: center;">Lista de Km</h2>
                <br>

                    <table id="example2" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Matricula</th>
                            <th>Unidade</th>
                            <th>Frota</th>
                            <th>Destinos</th>
                            <th>Km Inicial</th>
                            <th>Hora Inicial</th>
                            <th>Km Final</th>
                            <th>Hora Final</th>
                            <th>Km de Abastecimento</th>
                            <th>Quantidade de Litros</th>
                            <th>Unidade de Abastecimento</th>
                            <th>Observação</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dados as $dado)
                            <tr>
                                <td class="info" style="text-align: center;">{{$dado->id}}</td>
                                <td class="info" style="text-align: center;">{{$dado->matricula}}</td>
                                <td class="info" style="text-align: center;">{{$dado->unidade}}</td>
                                <td class="info" style="text-align: center;">{{$dado->frota}}</td>
                                <td class="info" style="text-align: center;">{{$dado->destinos}}</td>
                                <td class="info" style="text-align: center;">{{$dado->km_inicial}}</td>
                                <td class="info" style="text-align: center;">{{$dado->hora_inicial}}</td>
                                <td class="info" style="text-align: center;">{{$dado->km_final}}</td>
                                <td class="info" style="text-align: center;">{{$dado->hora_final}}</td>
                                <td class="info" style="text-align: center;">{{$dado->km_abastecimento}}</td>
                                <td class="info" style="text-align: center;">{{$dado->qnt_litros}}</td>
                                <td class="info" style="text-align: center;">{{$dado->unidade_abastecimento}}</td>
                                <td class="info" style="text-align: center;">{{$dado->observacao}}</td>

                                <td class="danger" style="text-align: center;"><a href="{{asset('admin/km/editar/'.$dado->id)}}"><button class="btn btn-primary">Editar</button></a></td>
                                <td class="danger" style="text-align: center;"><a href="{{asset('admin/km/deletar/'.$dado->id)}}"><button class="btn btn-primary">Excluir</button></a></td>
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