@extends('painel')

@section('title','Listagem de Plantio')

@section('content')

    <div class="box-footer">
        <a href="{{asset('/admin/plantio/novoPlantio')}}"><button class="btn btn-primary">Novo Apontamento</button></a>
    </div>
    <br>
    <div class="panel panel-default">
        <div class="panel-heading">Lista de Colheita</div>
                    <table id="example2" class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 5%; text-align: center;">ID</th>
                            <th style="width: 10%; text-align: left;">Matricula</th>
                            <th style="width: 10%; text-align: left;">Total Plantado(ha)</th>
                            <th style="width: 5%; text-align: left;">Distribuição Gemas</th>
                            <th style="width: 5%; text-align: left;">Cobrição</th>
                            <th style="width: 5%; text-align: left;">Fertilizante</th>
                            <th style="width: 5%; text-align: center;">Calda</th>
                            <th style="width: 5%; text-align: center;">Gemas Viaveis</th>
                            <th style="width: 5%; text-align: center;">Toletes Amassados</th>
                            <th style="width: 5%; text-align: center;">Toletes Rachados</th>
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
                                <td style="text-align: center;">{{$dado->total_plantado}}</td>
                                <td style="text-align: center;">{{$dado->distribuicao_gema}}</td>
                                <td style="text-align: center;">{{$dado->cobricao}}</td>
                                <td style="text-align: center;">{{$dado->fertilizante}}</td>
                                <td style="text-align: center;">{{$dado->calda}}</td>
                                <td style="text-align: center;">{{$dado->gemas_viaveis}}</td>
                                <td style="text-align: center;">{{$dado->toletes_amassados}}</td>
                                <td style="text-align: center;">{{$dado->toletes_rachados}}</td>
                                <td style="text-align: center;">{{$dado->observacao}}</td>

                                <td style="text-align: center;"><a href="{{asset('admin/plantio/editar/'.$dado->id)}}"><button class="btn btn-primary">Editar</button></a></td>
                                <td style="text-align: center;"><a href="{{asset('admin/plantio/deletar/'.$dado->id)}}"><button class="btn btn-primary">Excluir</button></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
        </div>
    <script type="text/javascript">
        $(function () {
            $('#example2').dataTable({
            }); 
        });
    </script>
 </section>

@stop