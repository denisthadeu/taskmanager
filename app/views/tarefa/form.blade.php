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
                                            <select class="form-control" required name="setor" id="setor" >
                                                <option value="">Meu Setor</option>
                                                @if(Auth::user()->equipeUser->count())
                                                    @foreach(Auth::user()->equipeUser AS $key => $equipeuserPerfil)
                                                        <option value="{{ $equipeuserPerfil->equipe->id }}" @if($key == 0) selected="SELECTED" @endif>{{ $equipeuserPerfil->equipe->nome }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </p>
                                        <p>
                                            <div class="input-group input-group-select2">
                                                <select class="form-control" required name="cliente" id="cliente" >
                                                    <option value="">Cliente</option>
                                                    @if(isset($clientes) && !$clientes->isEmpty())
                                                        @foreach($clientes AS $cliente)
                                                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                <span class="input-group-addon" id="span-add-cliente" data-backdrop="static" data-toggle="modal" data-target="#modal_create_cliente"><span class="fa fa-plus"></span></span>
                                            </div>
                                        </p>
                                        <p>
                                            <div class="input-group input-group-select2">
                                                <select class="form-control" required name="projeto" id="projeto" >
                                                    <option value="">Setor que Produzirá</option>
                                                </select>
                                                <span class="input-group-addon" id="span-add-projeto" data-backdrop="static" data-toggle="modal" data-target="#modal_create_projeto"><span class="fa fa-plus"></span></span>
                                            </div>
                                        </p>
                                        <p style="text-align: center;">
                                            <input name="opcao" id="opcao1" value="tipo" type="radio" /> Tipo de Tarefa &nbsp;&nbsp;&nbsp;
                                            <input name="opcao" id="opcao2" value="cronograma" type="radio" /> Cronograma
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
                                    <div class="col-md-1">
                                        <input type="checkbox" name="ongoing" id="ongoing" class="icheckbox"> <span data-toggle="tooltip" data-placement="right" data-title="Tarefas simples do dia a dia, sem início ou fim determinado, e sem esforço estimado. Use-as para contar tempo em demandas que não precisem de uma data de entrega e são realizadas frequentemente." data-original-title="" title="">Tarefa ongoing</span>
                                    </div>
                                    <div class="col-md-2 daysoftheweekcheckbox">
                                        <input type="checkbox" name="tarefaagendada" id="tarefaagendada" class="icheckbox"> Tarefa Agendada
                                    </div>
                                    <div class="col-md-5 daysoftheweek">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox1" class="icheckbox" name="segunda" value="2"> Segunda-Feira
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox2" class="icheckbox" name="terca" value="3"> Terça-Feira
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox3" class="icheckbox" name="quarta" value="4"> Quarta-Feira
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox4" class="icheckbox" name="quinta" value="5"> Quinta-Feira
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" id="inlineCheckbox5" class="icheckbox" name="sexta" value="6"> Sexta-Feira
                                        </label>
                                    </div>
                                    <div class="col-md-1 daysoftheweek">
                                        <label class="checkbox-inline">
                                            Quantidade
                                        </label>
                                    </div>
                                    <div class="col-md-2 daysoftheweek">
                                        <div class="input-group">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="qtd">
                                                      <span class="glyphicon glyphicon-minus"></span>
                                                  </button>
                                              </span>
                                              <input type="text" name="qtd" class="form-control input-number" value="1">
                                              <span class="input-group-btn">
                                                  <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="qtd">
                                                      <span class="glyphicon glyphicon-plus"></span>
                                                  </button>
                                              </span>
                                        </div>
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
<!-- MODALS -->        
<div class="modal" id="modal_create_cliente" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Novo Cliente</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <input class="form-control" id="novo_cliente_field" value="" placeholder="Nome do novo cliente" />
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="cadastrar_novo_cliente" >Cadastrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="modal_create_projeto" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="defModalHead">Novo Projeto</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <select class="form-control" id="novo_projeto_field" >
                            @if(!empty($equipes))
                                @foreach($equipes as $equipe)
                                    <option value="{{$equipe->id}}">{{$equipe->nome}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="cadastrar_novo_projeto" >Cadastrar</button>
            </div>
        </div>
    </div>
</div>
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
.select2-container{
    width: 100% !important;
    /*height: 35px;*/
}
.select2-dropdown{
    width: 90.% !important;
    position: absolute;
}
.input-group-select2{
    width: 100%;
    display: flex;
}
.select2 + .input-group-addon {
    height: 35px;
    display: table;
    cursor: pointer;
}
.icheckbox{
    position: absolute; 
    opacity: 0;
}
.daysoftheweek {
    display: none;
}

</style>
<script type="text/javascript">
    $(document).ready(function() {
        $("input[name = 'opcao']").change(function(){
            var val = $(this).val();
            var other = 'tipo';
            if(other == val ){
                other = "cronograma";
            }
            if(val == "tipo"){
                $("#responsavel").prop('required',true);
                $('#p-responsavel').show();
                $('.daysoftheweekcheckbox').show();
                var n = $( "#tarefaagendada:checked" ).length;
                if(n > 0){
                    $('.daysoftheweek').show();
                } else {
                    $('.daysoftheweek').hide();
                }
            }
            if(val == "cronograma"){
                $("#responsavel").prop('required',false);
                $('#p-responsavel').hide();
                $('.daysoftheweekcheckbox').hide();
                $('.daysoftheweek').hide();
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

        $("#cliente").change(function(){
            var cliente_select_id = $( this ).val();
            $.post("{{ URL::to('tarefa/updateprojetos') }}",
            {
                cliente_id: cliente_select_id,
            },
            function(data){
                $("#projeto").html(data);
                $("#projeto").val($("#target option:first").val());
                $("#select2-projeto-container").html('Projeto');
            });
        });
        // span-add-cliente
        // span-add-projeto
        $("#cadastrar_novo_cliente").click(function(){
            var nome_cliente_field = $("#novo_cliente_field").val();
            if(nome_cliente_field != ""){
                $.post("{{ URL::to('tarefa/createcliente') }}",
                {
                    cliente_nome: nome_cliente_field,
                },
                function(data){
                    $("#cliente").html(data);
                    $("#cliente").val($("#target option:first").val());
                    $("#select2-projeto-container").html('Cliente');
                    $( "#cliente" ).trigger( "change" );
                    $('#modal_create_cliente').modal('toggle');
                });
            }
        });

        $("#cadastrar_novo_projeto").click(function(){
            var nome_projeto_field = $("#novo_projeto_field").val();
            var id_cliente_field = $("#cliente").val();
            if(id_cliente_field != "" && nome_projeto_field != ""){
                $.post("{{ URL::to('tarefa/createprojeto') }}",
                {
                    projeto_id: nome_projeto_field,
                    cliente_id: id_cliente_field,
                },
                function(data){
                    $("#projeto").html(data);
                    $("#projeto").val($("#target option:first").val());
                    $("#select2-projeto-container").html('Projeto');
                    $('#modal_create_projeto').modal('toggle');
                });
            }
        });

        $('.iCheck-helper').click(function() {
            if($("#tarefaagendada").is(':checked'))
                $(".daysoftheweek").show();  // checked
            else
                $(".daysoftheweek").hide();  // unchecked
        });

        $('.btn-number').click(function(e){
            e.preventDefault();
            
            var fieldName = $(this).attr('data-field');
            var type      = $(this).attr('data-type');
            var input = $("input[name='"+fieldName+"']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if(type == 'minus') {
                    var minValue = parseInt(input.attr('min')); 
                    if(!minValue) minValue = 1;
                    if(currentVal > minValue) {
                        input.val(currentVal - 1).change();
                    } 
                    if(parseInt(input.val()) == minValue) {
                        $(this).attr('disabled', true);
                    }
        
                } else if(type == 'plus') {
                    var maxValue = parseInt(input.attr('max'));
                    if(!maxValue) maxValue = 9999999999999;
                    if(currentVal < maxValue) {
                        input.val(currentVal + 1).change();
                    }
                    if(parseInt(input.val()) == maxValue) {
                        $(this).attr('disabled', true);
                    }
        
                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').focusin(function(){
           $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {
            
            var minValue =  parseInt($(this).attr('min'));
            var maxValue =  parseInt($(this).attr('max'));
            if(!minValue) minValue = 1;
            if(!maxValue) maxValue = 9999999999999;
            var valueCurrent = parseInt($(this).val());
            
            var name = $(this).attr('name');
            if(valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Valor muito baixo');
                $(this).val($(this).data('oldValue'));
            }
            if(valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
            } else {
                alert('Valor muito alto');
                $(this).val($(this).data('oldValue'));
            }
            
            
        });
        $(".input-number").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                     // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) || 
                     // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                         // let it happen, don't do anything
                         return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
        });
    });
</script>
@stop