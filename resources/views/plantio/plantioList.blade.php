@extends('painel')

@section('title','Listagem de Plantio')

@section('content')

    <div class="box-footer">
        <a href="{{asset('/admin/plantio/novoPlantio')}}"><button class="btn btn-primary">Novo Apontamento</button></a>
    </div>
    <br>
    <div class="table-responsive">
                <h2 class="box-title" style="text-align: center;">Lista de Plantio</h2>
                <br>

                    <table id="example2" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Matricula</th>
                            <th>Total Plantado(ha)</th>
                            <th>Distribuição Gemas</th>
                            <th>Cobrição</th>
                            <th>Fertilizante</th>
                            <th>Calda</th>
                            <th>Gemas Viaveis</th>
                            <th>Toletes Amassados</th>
                            <th>Toletes Rachados</th>
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
                                <td class="info" style="text-align: center;">{{$dado->total_plantado}}</td>
                                <td class="info" style="text-align: center;">{{$dado->distribuicao_gema}}</td>
                                <td class="info" style="text-align: center;">{{$dado->cobricao}}</td>
                                <td class="info" style="text-align: center;">{{$dado->fertilizante}}</td>
                                <td class="info" style="text-align: center;">{{$dado->calda}}</td>
                                <td class="info" style="text-align: center;">{{$dado->gemas_viaveis}}</td>
                                <td class="info" style="text-align: center;">{{$dado->toletes_amassados}}</td>
                                <td class="info" style="text-align: center;">{{$dado->toletes_rachados}}</td>
                                <td class="info" style="text-align: center;">{{$dado->observacao}}</td>

                                <td class="danger" style="text-align: center;"><a href="{{asset('admin/plantio/editar/'.$dado->id)}}"><button class="btn btn-primary">Editar</button></a></td>
                                <td class="danger" style="text-align: center;"><a href="{{asset('admin/plantio/deletar/'.$dado->id)}}"><button class="btn btn-primary">Excluir</button></a></td>
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
 
@stop