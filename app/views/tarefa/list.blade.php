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
    <h3><span class="fa fa-tasks"></span> Lista de Tarefas - {{ $user->nome }} {{ $user->sobrenome }}</h3>
    <form method="get" role="form">
        <div class="row" style="padding-bottom: 7px;">
        	<div class="col-md-3">
        		&nbsp;
        	</div>
            <div class="col-md-4">
                <input name="search" placeholder="Pesquisa" class="form-control" value="{{ $search }}" />
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
                            <tbody class="connectedSortable sortable droptrue" data-user="{{Auth::id()}}">
                                @if(isset($minhasTarefas) && !$minhasTarefas->isEmpty())
                                    @foreach($minhasTarefas as $minhaTarefa)
                                        @if($minhaTarefa->tarefa_status_id != 6)
                                            <tr  class="ui-state-default" data-tarefa="{{$minhaTarefa->id}}">
                                                <td>{{ $minhaTarefa->id }}</td>
                                                <td>{{ $minhaTarefa->nome }}</td>
                                                <td>{{ $minhaTarefa->cliente->nome }} / {{ $minhaTarefa->projeto->nome }}</td>
                                                <td>{{ Formatter::leadingZero($minhaTarefa->hora_esforco) }}:{{ Formatter::leadingZero($minhaTarefa->minuto_esforco) }}</td>
                                                <td>{{ Formatter::dateDbToString($minhaTarefa->data_ini) }}</td>
                                                <td>{{ Formatter::dateDbToString($minhaTarefa->data_fim) }}</td>
                                                <td>{{ $minhaTarefa->statustarefa->nome }}</td>
                                                <td>
                                                    <a href="{{ URL::to('tarefa/edit') }}/{{$minhaTarefa->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                                    <a href="{{ URL::to('tarefa /delete') }}/{{$minhaTarefa->id}}" class="remover-equipe"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
                                                </td>
                                            </tr>
                                        @endif
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
                                        @if($tarefaCriada->tarefa_status_id != 6)
                                            <tr>
                                                <td>{{ $tarefaCriada->id }}</td>
                                                <td>{{ $tarefaCriada->nome }}</td>
                                                <td>{{ $tarefaCriada->cliente->nome }} / {{ $tarefaCriada->projeto->nome }}</td>
                                                <td>{{ $tarefaCriada->responsavel->nome }}</td>
                                                <td>{{ Formatter::leadingZero($tarefaCriada->hora_esforco) }}:{{ Formatter::leadingZero($tarefaCriada->minuto_esforco) }}</td>
                                                <td>{{ Formatter::dateDbToString($tarefaCriada->data_ini) }}</td>
                                                <td>{{ Formatter::dateDbToString($tarefaCriada->data_fim) }}</td>
                                                <td>{{ $tarefaCriada->statustarefa->nome }}</td>
                                                <td>
                                                    <a href="{{ URL::to('tarefa/edit') }}/{{$tarefaCriada->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                                    <a href="{{ URL::to('tarefa /delete') }}/{{$tarefaCriada->id}}" class="remover-equipe"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
                                                </td>
                                            </tr>
                                        @endif
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
                                @if(isset($minhasTarefas) && !$minhasTarefas->isEmpty())
                                    @foreach($minhasTarefas as $minhaTarefa)
                                        @if($minhaTarefa->tarefa_status_id == 6)
                                            <tr>
                                                <td>{{ $minhaTarefa->id }}</td>
                                                <td>{{ $minhaTarefa->nome }}</td>
                                                <td>{{ $minhaTarefa->cliente->nome }} / {{ $minhaTarefa->projeto->nome }}</td>
                                                <td>{{ Formatter::leadingZero($minhaTarefa->hora_esforco) }}:{{ Formatter::leadingZero($minhaTarefa->minuto_esforco) }}</td>
                                                <td>{{ Formatter::dateDbToString($minhaTarefa->data_ini) }}</td>
                                                <td>{{ Formatter::dateDbToString($minhaTarefa->data_fim) }}</td>
                                                <td>{{ $minhaTarefa->statustarefa->nome }}</td>
                                                <td>
                                                    <a href="{{ URL::to('tarefa/edit') }}/{{$minhaTarefa->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                                    <a href="{{ URL::to('tarefa /delete') }}/{{$minhaTarefa->id}}" class="remover-equipe"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
                                                </td>
                                            </tr>
                                        @endif
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
                                @if(isset($tarefasCriadas) && !$tarefasCriadas->isEmpty())
                                    @foreach($tarefasCriadas as $tarefaCriada)
                                        @if($tarefaCriada->tarefa_status_id == 6)
                                            <tr>
                                                <td>{{ $tarefaCriada->id }}</td>
                                                <td>{{ $tarefaCriada->nome }}</td>
                                                <td>{{ $tarefaCriada->cliente->nome }} / {{ $tarefaCriada->projeto->nome }}</td>
                                                <td>{{ $tarefaCriada->responsavel->nome }}</td>
                                                <td>{{ Formatter::leadingZero($tarefaCriada->hora_esforco) }}:{{ Formatter::leadingZero($tarefaCriada->minuto_esforco) }}</td>
                                                <td>{{ Formatter::dateDbToString($tarefaCriada->data_ini) }}</td>
                                                <td>{{ Formatter::dateDbToString($tarefaCriada->data_fim) }}</td>
                                                <td>{{ $tarefaCriada->statustarefa->nome }}</td>
                                                <td>
                                                    <a href="{{ URL::to('tarefa/edit') }}/{{$tarefaCriada->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                                    <a href="{{ URL::to('tarefa /delete') }}/{{$tarefaCriada->id}}" class="remover-equipe"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
                                                </td>
                                            </tr>
                                        @endif
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

        $( ".sortable" ).sortable({
            connectWith: ".connectedSortable",
            update: function( ) {
                var userID = $(this).data( "user" );
                var order = 0;
                var tarefaId = 0;
                var totMin = 0;
                var hora = 0;
                var realMin = 0;
                $.each( $(this).children(".ui-state-default"), function( key, value ) {
                    tarefaId = $(this).data("tarefa");
                    order = key;
                    // alert("usuario: "+userID+" | ordem:"+ key + " | tarefa:" + tarefaId );
                    var feedback = $.ajax({
                       type: "POST",
                       url: "{{ URL::to('tarefa/atualizarresponsavel') }}",
                       async: false,
                       data:{user_id:userID,tarefa_id:tarefaId,ordem:key}
                    }).responseText;
                    // obj = jQuery.parseJSON(feedback);
                });
            }
        }).disableSelection();
    });
</script>
@stop