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
    <form method="get" role="form" action="@if($user->id == Auth::user()->id ) {{ URL::to('tarefa/list/') }} @else {{ URL::to('tarefa/list/').'/'.$user->id }} @endif">
        <div class="row" style="padding-bottom: 7px;">
        	<div class="col-md-2">
                <select class="form-control" name="titulo">
                    <option value="Minhas Tarefas" @if($titulo == "Minhas Tarefas") SELECTED @endif >Minhas Tarefas</option>
                    <option value="Minhas Tarefas Entregues" @if($titulo == "Minhas Tarefas Entregues") SELECTED @endif >Minhas Tarefas Entregues</option>
                    <option value="Tarefas que eu criei" @if($titulo == "Tarefas que eu criei") SELECTED @endif >Tarefas que eu criei</option>
                    <option value="Tarefas Entregues que eu criei" @if($titulo == "Tarefas Entregues que eu criei") SELECTED @endif >Tarefas Entregues que eu criei</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="form-control" name="sort">
                    <option value="order" @if($sort == "order") SELECTED @endif >Prioridade (do maior para o menor)</option>
                    <option value="orderdesc" @if($sort == "orderdesc") SELECTED @endif >Prioridade (do menor para o maior)</option>
                    <option value="minutos" @if($sort == "minutosdesc") SELECTED @endif >Esforço (do maior para o menor)</option>
                    <option value="minutosdesc" @if($sort == "minutos") SELECTED @endif >Esforço (do menor para o maior)</option>
                    <option value="data_ini" @if($sort == "data_ini") SELECTED @endif >Data de Início da Tarefa (do maior para o menor)</option>
                    <option value="data_inidesc" @if($sort == "data_inidesc") SELECTED @endif >Data de Início da Tarefa (do menor para o maior)</option>
                    <option value="data_fim" @if($sort == "data_fim") SELECTED @endif >Data de Entrega da Tarefa (do maior para o menor)</option>
                    <option value="data_fimdesc" @if($sort == "data_fimdesc") SELECTED @endif >Data de Entrega da Tarefa (do menor para o maior)</option>
                </select>
            </div>
            <div class="col-md-3">
                <input name="search" placeholder="Pesquisa" class="form-control" value="{{ $search }}" />
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-primary">Pesquisar</button>
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
                    <li class="active"><a href="#tab8" data-toggle="tab" aria-expanded="true">{{ $titulo }}</a></li>
                </ul>
                <div class="panel-body tab-content">
                    <div class="tab-pane active" id="tab8">
                        <table class="table table-bordered  table-hover" style="background-color: #fff">
                            <thead>
                                <tr>
                                    <!-- <th>id</th> -->
                                    <th>Título</th>
                                    <th>Projeto</th>
                                    <th>Esforço</th>
                                    <th>Data Início</th>
                                    <th>Data Entrega</th>
                                    <!-- <th>Status</th> -->
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody class="connectedSortable sortable droptrue" data-user="{{ $user->id }}">
                                @if(isset($minhasTarefas) && !$minhasTarefas->isEmpty())
                                    @foreach($minhasTarefas as $minhaTarefa)
                                        <tr  class="ui-state-default @if(count($minhaTarefa->usertempoplay) > 0) list-group-item-success @endif" data-tarefa="{{$minhaTarefa->id}}">
                                            <!-- <td>{{-- $minhaTarefa->id --}}</td> -->
                                            <td><a href="{{ URL::to('tarefa/edit') }}/{{$minhaTarefa->id}}">{{ $minhaTarefa->nome }}</a></td>
                                            <td>{{ $minhaTarefa->cliente->nome or '' }} / {{ $minhaTarefa->Equipecliente->equipe->nome or '' }}</td>
                                            <td>{{ Formatter::leadingZero($minhaTarefa->hora_esforco) }}:{{ Formatter::leadingZero($minhaTarefa->minuto_esforco) }}</td>
                                            <td>{{ Formatter::dateDbToString($minhaTarefa->data_ini) }}</td>
                                            <td>{{ Formatter::dateDbToString($minhaTarefa->data_fim) }}</td>
                                            <!-- <td>{{-- $minhaTarefa->statustarefa->nome --}}</td> -->
                                            <td>
                                                <a href="{{ URL::to('tarefa/duplicar') }}/{{$minhaTarefa->id}}" class="duplicar-equipe" data-toggle="tooltip" data-placement="bottom" title="Duplicar Tarefa"><button type="button" class="btn btn-warning"><span class="fa fa-copy"></span></button></a>
                                                <a href="{{ URL::to('tarefa/delete') }}/{{$minhaTarefa->id}}" class="remover-equipe" data-toggle="tooltip" data-placement="bottom" title="Deletar Tarefa"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
                                                @if(isset($minhaTarefa) && $minhaTarefa->tarefa_status_id != 6)
                                                    <a href="{{ URL::to('tarefa/entregar') }}/{{$minhaTarefa->id}}" data-toggle="tooltip" data-placement="bottom" title="Entregar Tarefa"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button></a>
                                                @endif
                                                @if(count($minhaTarefa->usertempoplay) > 0)
                                                    <a href="{{ URL::to('tarefa/pausetarefa') }}/{{$minhaTarefa->id}}" data-toggle="tooltip" data-placement="bottom" title="Pausar Tarefa"><button type="button" class="btn btn-primary"><span class="fa fa-pause"></span></button></a>
                                                @else
                                                    <a href="{{ URL::to('tarefa/playtarefa') }}/{{$minhaTarefa->id}}" data-toggle="tooltip" data-placement="bottom" title="Iniciar Tarefa"><button type="button" class="btn btn-primary"><span class="fa fa-play"></span></button></a>
                                                @endif
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

        $('.duplicar-equipe').click(function(){
            var r = confirm("Deseja duplicar esta tarefa?");
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