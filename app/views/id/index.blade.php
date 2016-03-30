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
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="tocify-content">
                        <p>
                            <div class="row">
                                <div class="col-md-12">
                                	<h3>Minhas tarefas</h3>
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
                                    		@if(!empty($minhasTarefas))
		                                    	@foreach($minhasTarefas AS $minhaTarefa)
		                                    		<tr>
		                                                <td>{{ $minhaTarefa->id }}</td>
		                                                <td>{{ $minhaTarefa->nome }}</td>
		                                                <td>{{ $minhaTarefa->cliente->nome }} / {{ $minhaTarefa->projeto->nome }}</td>
		                                                <td>{{ Formatter::leadingZero($minhaTarefa->hora_esforco) }}:{{ Formatter::leadingZero($minhaTarefa->minuto_esforco) }}</td>
		                                                <td>{{ Formatter::dateDbToString($minhaTarefa->data_ini) }}</td>
		                                                <td>{{ Formatter::dateDbToString($minhaTarefa->data_fim) }}</td>
		                                                <td>{{ $minhaTarefa->statustarefa->nome }}</td>
		                                                <td>
		                                                    <a href="{{ URL::to('tarefa/edit') }}/{{$minhaTarefa->id}}"><button type="button" class="btn btn-info"><span class="fa fa-eye"></span> Ver</button></a>
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
		                                        	{{-- */$count=0;/* --}}
			                                        @for ($i = 1; $i <= 10; $i++)
			                                        	{{-- */$count++;/* --}}
			                                        	@if($count == 1)
			                                            	<div class="row">
			                                            @endif
			                                                <div class="col-md-2">
				                                                <div class="panel panel-default">
									                                <div class="panel-body profile">
									                                    <div class="profile-image">
									                                        <img src="{{ URL::asset(Auth::user()->foto_caminho_completo) }}" alt="Nadia Ali">
									                                    </div>
									                                    <div class="profile-data">
									                                        <div class="profile-data-name">Nadia Ali</div>
									                                    </div>
									                                </div>                                
									                                <table class="panel-body table table-bordered  table-hover" style="background-color: #fff">
								                                    	<tbody>
								                                    		<tr>
								                                    			<td>Nome da tarefa</td>
								                                    			<td>00:30</td>
								                                    		</tr>
								                                    		<tr>
								                                    			<td>Nome da tarefa</td>
								                                    			<td>00:30</td>
								                                    		</tr>
								                                    		<tr>
								                                    			<td>Nome da tarefa</td>
								                                    			<td>00:30</td>
								                                    		</tr>
								                                    		<tr>
								                                    			<td>Nome da tarefa</td>
								                                    			<td>00:30</td>
								                                    		</tr>
								                                    		<tr>
								                                    			<td>Nome da tarefa</td>
								                                    			<td>00:30</td>
								                                    		</tr>
								                                    		<tr>
								                                    			<td>Nome da tarefa</td>
								                                    			<td>00:30</td>
								                                    		</tr>
								                                    		<tr>
								                                    			<td>Nome da tarefa</td>
								                                    			<td>00:30</td>
								                                    		</tr>
								                                    		<tr>
								                                    			<td>Total</td>
								                                    			<td>03:30</td>
								                                    		</tr>
								                                    	</tbody>
								                                    </table>                                
									                            </div>
			                                                </div>
			                                            @if($count == 6)
		                                                	</div>
		                                                	{{-- */$count=0;/* --}}
		                                               	@endif
		                                            @endfor
		                                            @if($count != 0)
	                                                	</div>
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
    $(document).ready(function() {
        
    });
</script>
@stop