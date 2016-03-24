@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">Visualizar Tarefas</li>
</ul>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap panel-body">
    <form method="get" role="form">
        <div class="row" style="padding-bottom: 7px;">
        	<div class="col-md-3">
        		&nbsp;
        	</div>
            <div class="col-md-4">
                <input name="search" placeholder="Pesquisa" class="form-control" required value="{{ $search }}" />
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
            </div>
            <div class="col-md-1">
                &nbsp;
            </div>
        	<div class="col-md-1">
        		<a href="{{ URL::to('tarefa/create') }}"><button type="button" class="btn btn-primary">Nova Tarefa</button></a>
        	</div>
        </div>
    </form>
    <div class="row">
    </div>
        <div class="col-md-12">
            <div class="panel panel-default tabs">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#tab8" data-toggle="tab" aria-expanded="true">Minhas tarefas</a></li>
                    <li class=""><a href="#tab9" data-toggle="tab" aria-expanded="false">Tarefas que eu criei</a></li>
                    <li class=""><a href="#tab10" data-toggle="tab" aria-expanded="false">Minhas Tarefas Entregues</a></li>
                    <li class=""><a href="#tab11" data-toggle="tab" aria-expanded="false">Tarefas Entregues que eu criei</a></li>
                </ul>
                <div class="panel-body tab-content">
                    <div class="tab-pane active" id="tab8">
                        <table class="table table-bordered  table-hover" style="background-color: #fff">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Título</th>
                                    <th>Projeto</th>
                                    <th>Esforço</th>
                                    <th>Data Início</th>
                                    <th>Data Entrega</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($minhasTarefas) && !$minhasTarefas->isEmpty())
                                    @foreach($minhasTarefas as $minhaTarefa)
                                        <tr>
                                            <td>{{ $minhaTarefa->id }}</td>
                                            <td>{{ $minhaTarefa->nome }}</td>
                                            <td>{{ $minhaTarefa->cliente->nome }} / {{ $minhaTarefa->projeto->nome }}</td>
                                            <td>{{ Formatter::leadingZero($minhaTarefa->hora_esforco) }}:{{ Formatter::leadingZero($minhaTarefa->minuto_esforco) }}</td>
                                            <td>{{ Formatter::dateDbToString($minhaTarefa->data_ini) }}</td>
                                            <td>{{ Formatter::dateDbToString($minhaTarefa->data_fim) }}</td>
                                            <td>{{ $minhaTarefa->status->nome }}</td>
                                            <td>
                                                <a href="{{ URL::to('tarefa/edit') }}/{{$minhaTarefa->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                                <a href="{{ URL::to('tarefa /delete') }}/{{$minhaTarefa->id}}" class="remover-equipe"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab9">
                        <table class="table table-bordered  table-hover" style="background-color: #fff">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Título</th>
                                    <th>Projeto</th>
                                    <th>Responsável</th>
                                    <th>Esforço</th>
                                    <th>Data Início</th>
                                    <th>Data Entrega</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($tarefasCriadas) && !$tarefasCriadas->isEmpty())
                                    @foreach($tarefasCriadas as $tarefaCriada)
                                        <tr>
                                            <td>{{ $tarefaCriada->id }}</td>
                                            <td>{{ $tarefaCriada->nome }}</td>
                                            <td>{{ $tarefaCriada->cliente->nome }} / {{ $tarefaCriada->projeto->nome }}</td>
                                            <td>{{ $tarefaCriada->responsavel->nome }}</td>
                                            <td>{{ Formatter::leadingZero($tarefaCriada->hora_esforco) }}:{{ Formatter::leadingZero($tarefaCriada->minuto_esforco) }}</td>
                                            <td>{{ Formatter::dateDbToString($tarefaCriada->data_ini) }}</td>
                                            <td>{{ Formatter::dateDbToString($tarefaCriada->data_fim) }}</td>
                                            <td>{{ $tarefaCriada->status->nome }}</td>
                                            <td>
                                                <a href="{{ URL::to('tarefa/edit') }}/{{$tarefaCriada->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                                <a href="{{ URL::to('tarefa /delete') }}/{{$tarefaCriada->id}}" class="remover-equipe"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab10">
                        <table class="table table-bordered  table-hover" style="background-color: #fff">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Título</th>
                                    <th>Projeto</th>
                                    <th>Esforço</th>
                                    <th>Data Início</th>
                                    <th>Data Entrega</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($minhasTarefasEntregues) && !$minhasTarefasEntregues->isEmpty())
                                    @foreach($minhasTarefasEntregues as $minhaTarefaEntregue)
                                        <tr>
                                            <td>{{ $minhaTarefaEntregue->id }}</td>
                                            <td>{{ $minhaTarefaEntregue->nome }}</td>
                                            <td>{{ $minhaTarefaEntregue->cliente->nome }} / {{ $minhaTarefaEntregue->projeto->nome }}</td>
                                            <td>{{ Formatter::leadingZero($minhaTarefaEntregue->hora_esforco) }}:{{ Formatter::leadingZero($minhaTarefaEntregue->minuto_esforco) }}</td>
                                            <td>{{ Formatter::dateDbToString($minhaTarefaEntregue->data_ini) }}</td>
                                            <td>{{ Formatter::dateDbToString($minhaTarefaEntregue->data_fim) }}</td>
                                            <td>{{ $minhaTarefaEntregue->status->nome }}</td>
                                            <td>
                                                <a href="{{ URL::to('tarefa/edit') }}/{{$minhaTarefaEntregue->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                                <a href="{{ URL::to('tarefa /delete') }}/{{$minhaTarefaEntregue->id}}" class="remover-equipe"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab11">
                        <table class="table table-bordered  table-hover" style="background-color: #fff">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Título</th>
                                    <th>Projeto</th>
                                    <th>Responsável</th>
                                    <th>Esforço</th>
                                    <th>Data Início</th>
                                    <th>Data Entrega</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($tarefasCriadasEntregues) && !$tarefasCriadasEntregues->isEmpty())
                                    @foreach($tarefasCriadasEntregues as $tarefaCriadaEntregue)
                                        <tr>
                                            <td>{{ $tarefaCriadaEntregue->id }}</td>
                                            <td>{{ $tarefaCriadaEntregue->nome }}</td>
                                            <td>{{ $tarefaCriadaEntregue->cliente->nome }} / {{ $tarefaCriadaEntregue->projeto->nome }}</td>
                                            <td>{{ $tarefaCriadaEntregue->responsavel->nome }}</td>
                                            <td>{{ Formatter::leadingZero($tarefaCriadaEntregue->hora_esforco) }}:{{ Formatter::leadingZero($tarefaCriadaEntregue->minuto_esforco) }}</td>
                                            <td>{{ Formatter::dateDbToString($tarefaCriadaEntregue->data_ini) }}</td>
                                            <td>{{ Formatter::dateDbToString($tarefaCriadaEntregue->data_fim) }}</td>
                                            <td>{{ $tarefaCriadaEntregue->status->nome }}</td>
                                            <td>
                                                <a href="{{ URL::to('tarefa/edit') }}/{{$tarefaCriadaEntregue->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                                <a href="{{ URL::to('tarefa /delete') }}/{{$tarefaCriadaEntregue->id}}" class="remover-equipe"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->                                                 
</div>            
<!-- END PAGE CONTENT -->
@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.remover-equipe').click(function(){
            var r = confirm("Deseja deletar esta tarefa?");
            if (r == true) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>
@stop