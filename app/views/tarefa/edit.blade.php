@extends('template.index')


@section('content')

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>                    
        <li><a href="{{ URL::to('tarefa/list') }}">Visualizar Tarefas</a></li>
        <li class="active">@if(isset($tarefa)) {{ $tarefa->nome }} @else Nova Tarefa @endif</li>
    </ul>
<div class="page-title">            
    <div class="col-md-8">
        <h2><span class="fa fa-list"></span>@if(isset($tarefa)) {{ $tarefa->nome }} @else Nova Tarefa @endif</h2> <br/><br/><br/> Criado por: {{ $tarefa->criadopor->nome }} em {{ Formatter::getDataHoraFormatada($tarefa->created_at) }}
    </div>
    @if(isset($tarefa))
        <div class="col-md-4">
            <a href="{{ URL::to('tarefa/duplicar') }}/{{$tarefa->id}}" class="duplicar-equipe"><button type="button" class="btn btn-warning">Duplicar Tarefa</button></a>
            <a href="{{ URL::to('tarefa/delete') }}/{{$tarefa->id}}" class="remover-equipe"><button type="button" class="btn btn-danger">Deletar</button></a>
            <a href="{{ URL::to('tarefa/create') }}"><button type="button" class="btn btn-primary">Nova Tarefa</button></a>
            @if(isset($tarefa) && $tarefa->tarefa_status_id != 6)
                <a href="{{ URL::to('tarefa/entregar') }}/{{$tarefa->id}}"><button type="button" class="btn btn-success">Entregar</button></a>
            @endif
        </div>
    @endif
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
                                        	<select class="form-control select2" required name="responsavel" id="responsavel">
                                        		<option value="">Responsável</option>
                                        		@if(isset($users) && !$users->isEmpty())
                                        			@foreach($users AS $user)
                                        				<option value="{{ $user->id }}" @if(isset($tarefa) && $tarefa->user_id == $user->id) SELECTED @endif >{{ $user->nome }}</option>
                                        			@endforeach
                                        		@endif
                                        	</select>
                                        </p>
                                        <p>
                                        	<select class="form-control select2" name="tipo" id="tipo">
                                        		<option value="">Tipo</option>
                                        		@if(isset($tarefaTipos) && !$tarefaTipos->isEmpty())
                                        			@foreach($tarefaTipos AS $tarefaTipo)
                                        				<option value="{{ $tarefaTipo->id }}" @if(isset($tarefa) && $tarefa->tarefa_tipo_id == $tarefaTipo->id) SELECTED @endif>{{ $tarefaTipo->nome }}</option>
                                        			@endforeach
                                        		@endif
                                        	</select>
                                        </p>
                                        <p>
                                        	<select class="form-control select2" required name="projeto" id="projeto" >
                                        		<option value="">Projeto</option>
                                        		@if(isset($clientes) && !$clientes->isEmpty())
                                        			@foreach($clientes AS $cliente)
                                        				<optgroup label="{{ $cliente->nome }}">
	                                        				@if($cliente->equipecliente->count() > 0)
	                                        					@foreach($cliente->equipecliente as $equipecliente)
                                                                    {{-- */$equipe = $equipecliente->equipe;/* --}}
                                                                    @if(isset($equipe->nome))
	                                        						 <option value="{{ $equipecliente->id }}" @if(isset($tarefa) && $tarefa->clientes_projetos_id == $equipecliente->id) SELECTED @endif>{{ $equipe->nome }}</option>
                                                                    @endif
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
                                                    <select class="form-control" name="tarefa_status_id">
                                                        @foreach($tarefaStatus AS $status)
                                                            <option value="{{ $status->id }}" @if($status->id == $tarefa->tarefa_status_id) SELECTED @endif>{{ $status->nome }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </p>
                                            <p>
                                                Esforço: 
                                                <span id="esforco-field">
                                                    <span class="fa fa-pencil edit-extra-info" style="cursor: pointer;"></span>
                                                    <span>{{ Formatter::leadingZero($tarefa->hora_esforco) }}:{{ Formatter::leadingZero($tarefa->minuto_esforco) }}</span>
                                                    <span style="display:none;">
                                                        <select name="hora" required>
                                                            @for ($i = 0; $i <= 120; $i++)
                                                                <option value="{{ Formatter::leadingZero($i) }}" @if(isset($tarefa) && $tarefa->hora_esforco == $i) SELECTED @endif >{{ Formatter::leadingZero($i) }}</option>
                                                            @endfor
                                                        </select>
                                                        <select name="minuto" required>
                                                            @for ($i = 0; $i <= 4; $i++)
                                                                {{--*/ $count = Formatter::leadingZero(($i * 15)) /*--}} 
                                                                <option value="{{ $count }}" @if(isset($tarefa) && $tarefa->minuto_esforco == ($i * 15)) SELECTED @endif >{{ $count }}</option>
                                                            @endfor
                                                        </select>
                                                    </span>
                                                </span>
                                            </p>
                                            <p>
                                                Tempo: <span class="tempo-duracao"></span>
                                            </p>
                                            <p>
                                                Data Início: 
                                                <span id="dt-ini-field">
                                                    <span class="fa fa-pencil edit-extra-info" style="cursor: pointer;"></span>
                                                    <span>{{ Formatter::getDataHoraFormatada($tarefa->data_ini) }}</span>
                                                    <span style="display:none;">
                                                        <input name="dt_ini" required value="{{ Formatter::getDataHoraFormatada($tarefa->data_ini) }}" />
                                                    </span>
                                                </span>
                                            </p>
                                            <p>
                                                Data Entrega: 
                                                <span id="dt-fim-field">
                                                    <span class="fa fa-pencil edit-extra-info" style="cursor: pointer;"></span>
                                                    <span>{{ Formatter::getDataHoraFormatada($tarefa->data_fim) }}</span>
                                                    <span style="display:none;">
                                                        <input name="dt_fim" required value="{{ Formatter::getDataHoraFormatada($tarefa->data_fim) }}" />
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
                                        <textarea name="descricao" placeholder="Descrição da tarefa" class="form-control summernote">{{ $tarefa->descricao }}</textarea>
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
                                    <div class="col-md-4">
                                        <input type="button" id="upload-button" class="btn btn-info btn-lg active" value="Adicionar upload" />
                                        @if(isset($tarefa) && $tarefa->tarefa_status_id != 6)
                                            <a href="{{ URL::to('tarefa/entregar') }}/{{$tarefa->id}}"><button type="button" class="btn btn-success btn-lg">Entregar</button></a>
                                        @endif
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

<div class="col-md-12">
    <div class="panel panel-default tabs">
        <ul class="nav nav-tabs nav-justified">
            <li class="active"><a href="#tab8" data-toggle="tab" aria-expanded="true"><span class="fa fa-comments"></span> Comentários</a></li>
            <li class=""><a href="#tab9" data-toggle="tab" aria-expanded="false"><span class="glyphicon glyphicon-time"></span> Histórico de tempo</a></li>
        </ul>
        <div class="panel-body tab-content">
            <div class="tab-pane active" id="tab8">
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
            </div>
            <div class="tab-pane" id="tab9">
                <div class="page-content-wrap">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="tocify-content">
                                        <p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3><span class="glyphicon glyphicon-time"></span> Histórico de tempo</h3>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <table class="table table-bordered  table-hover" style="background-color: #fff">
                                                <thead>
                                                    <tr>
                                                        <th>Usuário</th>
                                                        <th>Data Início</th>
                                                        <th>Data Fim</th>
                                                        <th>Tempo Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if($tarefa->usertempo->count() > 0)
                                                        @foreach($tarefa->usertempo AS $tempo)
                                                            <tr>
                                                                <td>{{ $tempo->user->nome }}</td>
                                                                <td>{{ Formatter::getDataHoraFormatada($tempo->data_ini) }}</td>
                                                                <td>{{ Formatter::getDataHoraFormatada($tempo->data_fim) }}</td>
                                                                <td style="text-align: center;">{{ Formatter::convertToHoursMins(Formatter::minutesBetweenDates($tempo->data_ini,$tempo->data_fim)) }}</td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    <tr>
                                                        <th colspan="3">Total</th>
                                                        <th class="tempo-duracao" style="text-align: center;"></th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('script')
<script src="//cdn.jsdelivr.net/select2/4.0.2/js/select2.min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="//cdn.jsdelivr.net/select2/4.0.2/css/select2.min.css" />
<style type="text/css">
    .select2-container{
        width: 100% !important;
    }
    .select2-dropdown{
        width: 90.% !important;
        position: absolute;
    }
</style>
<script type="text/javascript" src="{{ URL::asset('js/plugins/summernote/summernote.js') }}"></script>
<script type="text/javascript">
    function get_tempo(){
        var id_tarefa = $("#id").val();
        var feedback = $.ajax({
            type: "POST",
            url: "{{ URL::to('tarefa/tempoduracao') }}",
            async: false,
            data:{id:id_tarefa}
        }).complete(function(){
            setTimeout(function(){get_tempo();}, 60000);
        }).responseText;

        // $('div.feedback-box').html(feedback);
        obj = jQuery.parseJSON(feedback);
        $('.tempo-duracao').html(obj.totalformatado);

    }

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

        $('.edit-extra-info').click(function(){
            $(this).siblings().toggle();
            $(this).toggle();
        });
        $('.duplicar-equipe').click(function(){
            var r = confirm("Deseja duplicar esta tarefa?");
            if (r == true) {
                return true;
            } else {
                return false;
            }
        });
        $('.remover-equipe').click(function(){
            var r = confirm("Deseja deletar esta tarefa?");
            if (r == true) {
                return true;
            } else {
                return false;
            }
        });
        jQuery('.select2').select2();
        get_tempo();
    });
</script>
@stop