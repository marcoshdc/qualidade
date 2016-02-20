@extends('painel')

@section('title','Listagem de Colheita')

@section('content')

    <div class="box-footer">
        <a href="{{asset('/admin/colheita/novaColheita')}}"><button class="btn btn-primary">Novo Apontamento</button></a>
    </div>
    <br>
     <div class="table-responsive">
                <h2 class="box-title" style="text-align: center;">Lista de Colheita</h2>
                <br>

                    <table id="example2" class="table table-bordered">
                       <thead>
                        <tr>
                            <th>ID</th>
                            <th>Matricula</th>
                            <th>Total de Cana(ton)</th>
                            <th>Pontos de Perda</th>
                            <th>Pontos de Erradicação</th>
                            <th>Pontos de Pisoteio</th>
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
                                <td class="info" style="text-align: center;">{{$dado->total_cana}}</td>
                                <td class="info" style="text-align: center;">{{$dado->perda}}</td>
                                <td class="info" style="text-align: center;">{{$dado->erradicacao}}</td>
                                <td class="info" style="text-align: center;">{{$dado->pisoteio}}</td>
                                <td class="info" style="text-align: center;">{{$dado->observacao}}</td>

                                <td class="danger" style="text-align: center;"><a href="{{asset('admin/colheita/editar/'.$dado->id)}}"><button class="btn btn-primary">Editar</button></a></td>
                                <td class="danger" style="text-align: center;"><a href="{{asset('admin/colheita/deletar/'.$dado->id)}}"><button class="btn btn-primary">Excluir</button></a></td>
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