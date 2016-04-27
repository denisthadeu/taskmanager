@extends('template.index')


@section('content')

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>                    
        <li><a href="{{ URL::to('tarefa/list') }}">Visualizar Tarefas</a></li>
        <li class="active">@if(isset($tarefa)) {{ $tarefa->nome }} @else Nova Tarefa @endif</li>
    </ul>
<div class="page-title">
    <div class="col-md-10">               
        <h2><span class="fa fa-list"></span>@if(isset($tarefa)) {{ $tarefa->nome }} @else Nova Tarefa @endif</h2>
    </div>
    @if(isset($tarefa))
        <div class="col-md-1">
            <a href="{{ URL::to('tarefa/create') }}"><button type="button" class="btn btn-primary">Nova Tarefa</button></a>
        </div>
    @endif
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
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <input type="text" name="dt_ini" placeholder="Data de Início da tarefa" class="form-control selector" value="" id="dp-4" data-date="{{ date('d/m/Y') }}" data-date-format="dd/mm/yyyy" data-date-viewmode="months" REQUIRED />
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group bootstrap-timepicker">
                                            <input type="text" name="hr_ini" id="timepicker24" placeholder="Hora de Início da tarefa" class="form-control timepicker24" value="" REQUIRED />
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-12">
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
                                        <p id="p-responsavel">
                                            <select class="form-control" required name="responsavel" id="responsavel">
                                                <option value="">Responsável</option>
                                                {{ $optionUsers }}
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
                                                                                {{ $optionUsers }}
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
                                        <textarea name="descricao" placeholder="Descrição da tarefa" class="form-control summernote"></textarea>
                                    </div>
                                </div>
                            </p>
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
        </div>
    </div>
    <!-- END PAGE CONTENT -->
    <input type="hidden" style="display:none;" name="id" value="{{ $tarefa->id or '0' }}" />
</form>

@stop

@section('script')
<script type="text/javascript" src="{{ URL::asset('js/plugins/summernote/summernote.js') }}"></script>
<script src="//cdn.jsdelivr.net/select2/4.0.2/js/select2.min.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="//cdn.jsdelivr.net/select2/4.0.2/css/select2.min.css" />
<style>
.select2-container--default .select2-selection--single {
    background-color: #fafafa;
    border: 2px solid #e4e4e4;
    border-radius: 4px;
    height: 35px;
    text-align: left;
    margin-bottom: 10px;
}
.select2-dropdown {
    background-color: #fafafa;
    border: 2px solid #e4e4e4;
    border-radius: 4px;
    box-sizing: border-box;
    display: block;
    position: absolute;
    left: -100000px;
    width: 100%;
    z-index: 1051;
    top: -10px;
}

</style>
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

        $("#upload-button").click(function(){
            // var html = $("#p-upload-files").html();
            html = '<p><input type="file" name="files[]" class="form-control" /></p>';
            $("#p-upload-files").append(html);
        });

        $( ".selector" ).datepicker({ 
            dateFormat: 'dd/mm/yy' 
        });

        jQuery('select').select2();

        var oldtimepicker24 = $("#timepicker24").val();
        $("#timepicker24").click(function(){
            if($("#timepicker24").val() == ""){
                $("#timepicker24").val(oldtimepicker24);
            }
        })
        $(".timepicker24").val('');
    });
</script>
@stop