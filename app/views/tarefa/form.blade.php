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
                                    <div class="col-md-12">
                                        <input name="nome" placeholder="Título da Tarefa" REQUIRED class="form-control" value="{{ $tarefa->nome or '' }}" />
                                        @if(isset($tarefa))
                                        	<p>
                                        		#{{$tarefa->id}} Criado por: {{ $tarefa->criado_por->nome }} em {{ Formatter::getDataHoraFormatada($tarefa->created_at) }}
                                        	</p>
                                        @endif
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p id="p-responsavel">
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
                                        <p style="text-align: center;">
                                            <input name="opcao" id="opcao1" value="tipo" type="radio" class="iradio" /> Tipo de Tarefa &nbsp;&nbsp;&nbsp;
                                            <input name="opcao" id="opcao2" value="cronograma" type="radio" class="iradio" /> Cronograma
                                        </p>
                                        <p id="tipo-p" style="display: none;">
                                            <select class="form-control" name="tipo" id="tipo">
                                                <option value="">Tipo</option>
                                                @if(isset($tarefaTipos) && !$tarefaTipos->isEmpty())
                                                    @foreach($tarefaTipos AS $tarefaTipo)
                                                        <option value="{{ $tarefaTipo->id }}" @if(isset($tarefa) && $tarefa->tarefa_tipo_id == $tarefaTipo->id) SELECTED @endif>{{ $tarefaTipo->nome }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </p>
                                        <p id="cronograma-p" style="display: none;">
                                            <select class="form-control" name="cronograma" id="cronograma">
                                                <option value="">Cronograma</option>
                                                @if(isset($cronogramas) && !$cronogramas->isEmpty())
                                                    @foreach($cronogramas AS $cronograma)
                                                        <option value="{{ $cronograma->id }}" @if(isset($tarefa) && $tarefa->tarefa_tipo_id == $cronograma->id) SELECTED @endif>{{ $cronograma->nome }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </p>
                                        @if(isset($cronogramas) && !$cronogramas->isEmpty())
                                            @foreach($cronogramas AS $cronograma)
                                                @if($cronograma->descricao->count() > 0)
                                                    <p class="cronograma-descricao cronograma-descricao-{{$cronograma->id}}" style="display:none;">
                                                        <table class="table table-bordered  table-hover cronograma-descricao cronograma-descricao-{{$cronograma->id}}" style="background-color: #fff;display:none;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Descricao</th>
                                                                    <th>Responsável</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach($cronograma->descricao as $descricao)
                                                                    <tr>
                                                                        <td>{{ $descricao->nome }}</td>
                                                                        <td>
                                                                            <select class="form-control field-select-user-{{$cronograma->id}} all-field-select-user" name="responsavelCronograma[{{$cronograma->id}}][{{$descricao->id}}]" >
                                                                                <option value="">Responsável</option>
                                                                                @if(isset($users) && !$users->isEmpty())
                                                                                    @foreach($users AS $user)
                                                                                        <option value="{{ $user->id }}" @if(isset($tarefa) && $tarefa->user_id == $user->id) SELECTED @endif >{{ $user->nome }}</option>
                                                                                    @endforeach
                                                                                @endif
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </p>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea name="descricao" placeholder="Descrição da tarefa" class="form-control"></textarea>
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                	<div class="col-md-10">
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
        </div>
    </div>
    <!-- END PAGE CONTENT -->
    <input type="hidden" style="display:none;" name="id" value="{{ $tarefa->id or '0' }}" />
</form>

@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $("input[name = 'opcao']").click(function(){
            var val = $(this).val();
            var other = 'tipo';
            if(other == val ){
                other = "cronograma";
            }
            if(val == "tipo"){
                $("#responsavel").prop('required',true);
                $('#p-responsavel').show();
            }
            if(val == "cronograma"){
                $("#responsavel").prop('required',false);
                $('#p-responsavel').hide();
            }
            $(".all-field-select-user").prop('required',false);
            $('.cronograma-descricao').hide();
            $("#"+val).prop('required',true);
            $("#"+other).prop('required',false);
            $("#"+val+"-p").show();
            $("#"+other+"-p").hide();
            $("#"+other).val('');
        });

        $("#opcao1").trigger('click');

        $("#cronograma").change(function(){
            $(".all-field-select-user").prop('required',false);
            var cronograma = $(this).val();
            $(".cronograma-descricao-"+cronograma).show();
            $(".field-select-user-"+cronograma).prop('required',true);
        });
    });
</script>
@stop