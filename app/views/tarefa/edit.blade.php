@extends('template.index')


@section('content')

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>                    
        <li><a href="{{ URL::to('tarefa/list') }}">Visualizar Tarefas</a></li>
        <li class="active">@if(isset($tarefa)) {{ $tarefa->nome }} @else Nova Tarefa @endif</li>
    </ul>
<div class="page-title">                    
    <h2><span class="fa fa-list"></span>@if(isset($tarefa)) {{ $tarefa->nome }} @else Nova Tarefa @endif</h2> <br/> Criado por: {{ $tarefa->criadopor->nome }} em {{ Formatter::getDataHoraFormatada($tarefa->created_at) }}
</div>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<form action="{{URL::to("tarefa/edittarefa")}}" method="post" enctype="multipart/form-data">
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="tocify-content">
                            <p>
                                <div class="row">
                                    <div class="col-md-8">
                                        <p>
                                            <input name="nome" placeholder="Título da Tarefa" class="form-control" value="{{ $tarefa->nome or '' }}" />
                                        </p>
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
                                        	<select class="form-control" name="tipo" id="tipo">
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
	                                        						<option value="{{ $projeto->id }}" @if(isset($tarefa) && $tarefa->clientes_projetos_id == $projeto->id) SELECTED @endif>{{ $projeto->nome }}</option>
	                                        					@endforeach
	                                        				@endif
                                        				</optgroup>
                                        			@endforeach
                                        		@endif
                                        	</select>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="panel-heading ui-draggable-handle">
                                            <p>
                                                <div class="input-group">
                                                    @if(empty($tarefausertempo->data_fim) && !empty($tarefausertempo))
                                                        <span class="input-group-addon play" data-tipo="pause" style="cursor:pointer;"><span class="fa fa-play" style="display:none;"></span><span class="fa fa-pause"></span></span>
                                                    @else
                                                        <span class="input-group-addon play" data-tipo="play" style="cursor:pointer;"><span class="fa fa-play"></span><span class="fa fa-pause" style="display:none;"></span></span>
                                                    @endif
                                                    <select class="form-control">
                                                        @foreach($tarefaStatus AS $status)
                                                            <option value="{{ $status->id }}" @if($status->id == $tarefa->tarefa_status_id) SELECTED @endif>{{ $status->nome }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </p>
                                            <p>
                                                Esforço: 
                                                <span id="esforco-field">
                                                    <span>{{ Formatter::leadingZero($tarefa->hora_esforco) }}:{{ Formatter::leadingZero($tarefa->minuto_esforco) }}</span>
                                                    <span style="display:none;">
                                                        <select name="hora">
                                                            @for ($i = 0; $i <= 120; $i++)
                                                                <option value="{{ Formatter::leadingZero($i) }}" @if(isset($tarefa) && $tarefa->hora_esforco == $i) SELECTED @endif >{{ Formatter::leadingZero($i) }}</option>
                                                            @endfor
                                                        </select>
                                                        <select name="minuto">
                                                            @for ($i = 0; $i <= 4; $i++)
                                                                {{--*/ $count = Formatter::leadingZero(($i * 15)) /*--}} 
                                                                <option value="{{ $count }}" @if(isset($tarefa) && $tarefa->minuto_esforco == ($i * 15)) SELECTED @endif >{{ $count }}</option>
                                                            @endfor
                                                        </select>
                                                    </span>
                                                </span>
                                            </p>
                                            <p>
                                                Data Início: 
                                                <span id="dt-ini-field">
                                                    <span>{{ $tarefa->data_ini }}</span>
                                                    <span style="display:none;">
                                                        <input name="dt_ini" />
                                                    </span>
                                                </span>
                                            </p>
                                            <p>
                                                Data Entrega: 
                                                <span id="dt-fim-field">
                                                    <span>{{ $tarefa->data_fim }}</span>
                                                    <span style="display:none;">
                                                        <input name="dt_fim" />
                                                    </span>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="descricao" placeholder="Descrição da tarefa" class="form-control">{{ $tarefa->descricao }}</textarea>
                                    </div>
                                </div>
                            </p>
                            @if($tarefa->anexos->count() > 0)
                                <p>
                                    <h3><span class="fa fa-paperclip"></span> Anexos</h3>
                                    @foreach($tarefa->anexos AS $anexos)
                                        <p><a href="{{ URL::asset($anexos->caminho_completo) }}" target="_blank">{{ $anexos->nome }}</a></p>
                                    @endforeach
                                </p>
                            @endif
                            <p id="p-upload-files"></p>
                            <p>
                                <div class="row">
                                    <div class="col-md-8">
                                        &nbsp;
                                    </div>
                                    <div class="col-md-2">
                                        <input type="button" id="upload-button" class="btn btn-info btn-lg active" value="Adicionar upload" />
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
    <input type="hidden" style="display:none;" name="id" value="{{ $tarefa->id or '0' }}" />
</form>

<form action="{{URL::to("tarefa/createmensagem")}}" method="post" enctype="multipart/form-data">
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="tocify-content">
                            <p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3><span class="fa fa-comments"></span> Comentários ({{$tarefa->comentarios->count()}})</h3>
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="descricao" placeholder="Seu Comentário" class="form-control" rows="7"></textarea>
                                    </div>
                                </div>
                                <p id="p-upload-files-comentario" style="padding-top: 7px;"></p>
                                <div class="row" style="padding-top: 7px;">
                                    <div class="col-md-8">
                                        &nbsp;
                                    </div>
                                    <div class="col-md-2">
                                        <input type="button" id="upload-button-comentario" class="btn btn-info btn-lg active" value="Adicionar upload" />
                                    </div>
                                    <div class="col-md-1">
                                        <input type="Submit" id="create-category" class="btn btn-primary btn-lg active" value="Novo Comentário" />
                                    </div>
                                </div>
                            </p>
                            @if($tarefa->comentarios->count() > 0)
                                <div class="messages messages-img" style="padding-top: 15px;">
                                    @foreach($tarefa->comentarios AS $key => $comentario)
                                        <p>
                                            <div class="item item-visible @if( $key % 2 ) in @endif">
                                                <div class="image">
                                                    <img src="{{ URL::asset($comentario->user->foto_caminho_completo) }}" alt="Dmitry Ivaniuk">
                                                </div>
                                                <div class="text">
                                                    <div class="heading">
                                                        <b>{{ $comentario->user->nome }}</b>
                                                        <span class="date">{{ Formatter::getDataHoraFormatada($comentario->created_at) }}</span>
                                                    </div>
                                                    {{ $comentario->descricao }}
                                                    @if($comentario->anexos->count() > 0)
                                                        <hr>
                                                        @foreach($comentario->anexos AS $comentarioAnexo)
                                                            <p><a href="{{ URL::asset($comentarioAnexo->caminho_completo) }}" target="_blank">{{ $comentarioAnexo->nome }}</a></p>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </p>
                                    @endforeach
                                </div>
                            @endif
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" style="display:none;" name="id" id="id" value="{{ $tarefa->id or '0' }}" />
    </div>
</form>
@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $("#upload-button").click(function(){
            html = '<p><input type="file" name="files[]" class="form-control" /></p>';
            $("#p-upload-files").append(html);
        });
        $("#upload-button-comentario").click(function(){
            html = '<p><input type="file" name="files[]" class="form-control" /></p>';
            $("#p-upload-files-comentario").append(html);
        });

        $('.play').click(function(){
            $(this).children().toggle();
            var tipoVar = $(this).data( "tipo" );
            var idVar = $("#id").val();
            if(tipoVar == "play"){
                $(this).data( "tipo" ,"pause");
                var feedback = $.ajax({
                    type: "POST",
                    url: "{{ URL::to('tarefa/play') }}",
                    async: false,
                    data: { tipo: tipoVar, id: idVar }
                }).responseText;
            } else {
                $(this).data( "tipo" ,"play");
                var feedback = $.ajax({
                    type: "POST",
                    url: "{{ URL::to('tarefa/pause') }}",
                    async: false,
                    data: { tipo: tipoVar, id: idVar }
                }).responseText;
            }
        });
    });
</script>
@stop