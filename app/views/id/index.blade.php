@extends('template.index')


@section('content')

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>                    
        <li class="active">Dashboard</li>
    </ul>
<div class="page-title">                    
    <h2><span class="fa fa-desktop"></span> Dashboard</h2>
</div>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
@if(!$minhasEquipes->isEmpty())
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="tocify-content">
                        <p>
                            <div class="row">
                                <div class="col-md-12">
                                	<form action="" method="get">
	                                	<h3>Filtro</h3>
	                                	<div class="col-md-1">
	                                		Data Inicial
	                                	</div>
	                                	<div class="col-md-2">
	                                		<div class="input-group bootstrap-timepicker">
		                                		<input type="text" name="dt_ini" placeholder="Data mínimo de início da tarefa" class="form-control selector" value="{{ $dt_ini }}" id="dp-4" data-date="{{ $dt_ini }}" data-date-format="dd/mm/yyyy" data-date-viewmode="months" />
		                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
		                                    </div>
	                                	</div>
	                                	<div class="col-md-1">
	                                		Data Final
	                                	</div>
	                                	<div class="col-md-2">
	                                		<div class="input-group bootstrap-timepicker">
		                                		<input type="text" name="dt_fim" placeholder="Data máxima de início da tarefa" class="form-control selector" value="{{ $dt_fim }}" id="dp-4" data-date="{{ $dt_fim }}" data-date-format="dd/mm/yyyy" data-date-viewmode="months" />
		                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
		                                    </div>
	                                	</div>
	                                	<div class="col-md-2">
	                                		<button type="submit" class="btn btn-primary">Filtrar</button>
	                                	</div>
	                                </form>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="tocify-content">
                        <p>
                            <div class="row">
                                <div class="col-md-12">
                                	<h3>Minhas tarefas de hoje</h3>
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
                                        <tbody>
                                    		@if(!empty($minhasTarefas))
		                                    	@foreach($minhasTarefas AS $minhaTarefa)
		                                    		<tr class="@if(count($minhaTarefa->usertempoplay) > 0) list-group-item-warning @endif">
		                                                <!-- <td>{{-- $minhaTarefa->id --}}</td> -->
		                                                <td><a href="{{ URL::to('tarefa/edit') }}/{{$minhaTarefa->id}}">{{ $minhaTarefa->nome }}</a></td>
		                                                <td>{{ $minhaTarefa->cliente->nome or '' }} / {{ $minhaTarefa->Equipecliente->equipe->nome or '' }}</td>
		                                                <td>{{ Formatter::leadingZero($minhaTarefa->hora_esforco) }}:{{ Formatter::leadingZero($minhaTarefa->minuto_esforco) }}</td>
		                                                <td>{{ Formatter::dateDbToString($minhaTarefa->data_ini) }}</td>
		                                                <td>{{ Formatter::dateDbToString($minhaTarefa->data_fim) }}</td>
		                                                <!-- <td>{{-- $minhaTarefa->statustarefa->nome --}}</td> -->
		                                                <td>
                                                    		<div class="btn-group" role="group">
		                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                                              Opções
		                                                              <span class="caret"></span>
		                                                        </button>
		                                                        <ul class="dropdown-menu">
		                                                            <li><a href="{{ URL::to('tarefa/delete') }}/{{$minhaTarefa->id}}" class="remover-equipe"><span class="fa fa-remove"></span>Deletar</a></li>
		                                                            <li><a href="{{ URL::to('tarefa/edit') }}/{{$minhaTarefa->id}}"><span class="fa fa-pencil"></span>Editar</a></li>
		                                                            <li><a href="{{ URL::to('tarefa/listentregar') }}/{{$minhaTarefa->id}}"><span class="glyphicon glyphicon-ok"></span> Entregar</a></li>
		                                                            @if(count($minhaTarefa->usertempoplay) > 0)
		                                                                <li><a href="{{ URL::to('tarefa/pausetarefa') }}/{{$minhaTarefa->id}}"><span class="fa fa-pause"></span>Pausar tarefa</a></li>
		                                                            @else
		                                                                <li><a href="{{ URL::to('tarefa/playtarefa') }}/{{$minhaTarefa->id}}"><span class="fa fa-play"></span>Iniciar tarefa</a></li>
		                                                            @endif
		                                                        </ul>
		                                                    </div>
		                                                </td>
		                                            </tr>
		                                    	@endforeach
	                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->                                                 
@if(!$minhasEquipes->isEmpty())
	<div class="col-md-12">
	    <div class="panel panel-default tabs">
	        <ul class="nav nav-tabs nav-justified">
	        	@foreach($minhasEquipes AS $key => $equipe)
		            <li @if($key == 0) class="active" @endif><a href="#tab{{$key}}" data-toggle="tab" aria-expanded="true"><span class="fa fa-chevron-circle-right"></span> {{$equipe->nome}}</a></li>
	            @endforeach
	        </ul>
	        <div class="panel-body tab-content">
	        	@foreach($minhasEquipes AS $key => $equipe)
		            <div class="tab-pane @if($key == 0) active @endif " id="tab{{$key}}">
		                <div class="page-content-wrap">
		                    <div class="row">
		                        <div class="col-md-12">
		                            <div class="panel panel-default">
		                                <div class="panel-body">
		                                    <div class="tocify-content">
		                                        <p>
		                                            <div class="row">
		                                                <div class="col-md-12">
		                                                    <h3><span class="fa fa-chevron-circle-right"></span> {{$equipe->nome}}</h3>
		                                                </div>
		                                            </div>
		                                        </p>
		                                        <p>
		                                        	@if($equipe->equipeUser->count())
			                                        	{{-- */$count=0;/* --}}
				                                        @foreach($equipe->equipeUser AS $equipeUser)
				                                        	{{-- */$user = $equipeUser->user;/* --}}
				                                        	{{-- */$count++;/* --}}
				                                        	@if($count == 1)
				                                            	<div class="row">
				                                            @endif
				                                                <div class="col-md-3">
					                                                <div class="panel panel-default">
										                                <div class="panel-body profile">
										                                    <div class="profile-image">
										                                    	@if(!empty($user->foto_caminho_completo))
													                                <img src="{{ URL::asset($user->foto_caminho_completo) }}" class="image_perfil" alt="{{ $user->nome }}">
													                            @else    
													                                <img src="{{ URL::asset('assets/images/users/images.png') }}" class="image_perfil" alt="{{ $user->nome }}">
													                            @endif
										                                    </div>
										                                    <div class="profile-data">
										                                        <div class="profile-data-name">{{ $user->nome }}</div>
										                                    </div>
										                                </div>                                
										                                <table class="panel-body table table-bordered table-hover" style="background-color: #fff">
									                                    	<tbody class=" connectedSortable sortable droptrue table-task-user-{{$user->id}}" data-user="{{$user->id}}">
									                                    		{{-- */$minutos = 0;/* --}}
									                                    		@if($user->tarefasresponsavel->count())
									                                    			@foreach($user->tarefasresponsavel AS $tarefa)
											                                    		<tr class="ui-state-default" data-tarefa="{{$tarefa->id}}">
											                                    			<td><a href="{{ URL::to('tarefa/edit') }}/{{$tarefa->id}}">{{ $tarefa->nome }}</a></td>
											                                    			<td>{{ Formatter::convertToHoursMins($tarefa->minutos) }}</td>
											                                    			{{-- */$minutos += $tarefa->minutos ;/* --}}
											                                    		</tr>
									                                    			@endforeach
									                                    		@endif
									                                    		<tr>
									                                    			<td>Total</td>
									                                    			<td class="hora-user-{{$user->id}}">{{ Formatter::convertToHoursMins($minutos) }}</td>
									                                    		</tr>
									                                    	</tbody>
									                                    </table>                                
										                            </div>
				                                                </div>
				                                            @if($count == 4)
			                                                	</div>
			                                                	{{-- */$count=0;/* --}}
			                                               	@endif
			                                            @endforeach
			                                            @if($count != 0)
		                                                	</div>
		                                               	@endif 
		                                            @endif
		                                        </p>
		                                    </div> 
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
	            @endforeach
	        </div>
	    </div>
	</div>
@endif


@stop

@section('script')
<script type="text/javascript">
	function pad (str, max) {
	  str = str.toString();
	  return str.length < max ? pad("0" + str, max) : str;
	}
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
			    	obj = jQuery.parseJSON(feedback);
			    	totMin = totMin + obj.total;
				});
				if(totMin > 0) {
					realMin = totMin % 60;
					hora = Math.floor(totMin / 60);
					$('.hora-user-'+userID).html(pad(hora,2)+":"+pad(realMin,2));
				}
       			$('.table-task-user-'+userID).html($(this).html());
        	}
	    }).disableSelection();
	    $( ".selector" ).datepicker({ 
            dateFormat: 'dd/mm/yy' 
        });
    });
</script>
@stop