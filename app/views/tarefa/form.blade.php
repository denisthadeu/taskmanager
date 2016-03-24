@extends('template.index')


@section('content')

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>                    
        <li><a href="{{ URL::to('tarefa/list') }}">Visualizar Tarefas</a></li>
        <li class="active">@if(isset($tarefa)) {{ $tarefa->nome }} @else Nova Tarefa @endif</li>
    </ul>
<div class="page-title">                    
    <h2><span class="fa fa-list"></span>@if(isset($tarefa)) {{ $tarefa->nome }} @else Nova Tarefa @endif</h2>
</div>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<form action="{{URL::to("tarefa/savetarefa")}}" method="post" enctype="multipart/form-data">
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">                            
                        <div class="tocify-content">
                            <p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <input name="nome" placeholder="Título da Tarefa" class="form-control" value="{{ $tarefa->nome or '' }}" />
                                        @if(isset($tarefa))
                                        	<p>
                                        		#{{$tarefa->id}} Criado por: {{ $tarefa->criado_por->nome }} em {{ Formatter::getDataHoraFormatada($tarefa->created_at) }}
                                        	</p>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                    	@if(isset($tarefa))
                                        	fazer as opções do tempo
                                        @endif
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>
                                        	<select class="form-control" required name="responsavel" id="responsavel">
                                        		<option value="">Responsável</option>
                                        		@if(isset($users) && !$users->isEmpty())
                                        			@foreach($users AS $user)
                                        				<option value="{{ $user->id }}" @if(isset($tarefa) && $tarefa->user_id == $user->id) SELECTED @endif >{{ $user->nome }}</option>
                                        			@endforeach
                                        		@endif
                                        	</select>
                                        </p>
                                        <p>
                                        	<select class="form-control" required name="tipo" id="tipo">
                                        		<option value="">Tipo</option>
                                        		@if(isset($tarefaTipos) && !$tarefaTipos->isEmpty())
                                        			@foreach($tarefaTipos AS $tarefaTipo)
                                        				<option value="{{ $tarefaTipo->id }}" @if(isset($tarefa) && $tarefa->tarefa_tipo_id == $tarefaTipo->id) SELECTED @endif>{{ $tarefaTipo->nome }}</option>
                                        			@endforeach
                                        		@endif
                                        	</select>
                                        </p>
                                        <p>
                                        	<select class="form-control" required name="projeto" id="projeto" >
                                        		<option value="">Projeto</option>
                                        		@if(isset($clientes) && !$clientes->isEmpty())
                                        			@foreach($clientes AS $cliente)
                                        				<optgroup label="{{ $cliente->nome }}">
	                                        				@if($cliente->clientesprojetos->count() > 0)
	                                        					@foreach($cliente->clientesprojetos as $projeto)
	                                        						<option value="{{ $projeto->id }}" @if(isset($tarefa) && $tarefa->clientes_projetos_id == $projeto->id) SELECTED @endif>>{{ $projeto->nome }}</option>
	                                        					@endforeach
	                                        				@endif
                                        				</optgroup>
                                        			@endforeach
                                        		@endif
                                        	</select>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        @if(isset($tarefa))
                                        	mais dados da tarefa
                                        @endif
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                	<div class="col-md-9">
                                		&nbsp;
                                	</div>
                                    <div class="col-md-1">
                                    	<input type="Submit" id="create-category" class="btn btn-primary btn-lg active" value="@if(isset($tarefa)) Atualizar @else Cadastrar @endif" />
                                    </div>
                                </div>
                            </p>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="position: relative;">
                <div id="tocify"></div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT WRAPPER -->                                                 
    </div>            
    <!-- END PAGE CONTENT -->
    <input type="hidden" style="display:none;" name="id" value="{{ $tarefa->id or '0' }}" />
</form>

@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        
    });
</script>
@stop