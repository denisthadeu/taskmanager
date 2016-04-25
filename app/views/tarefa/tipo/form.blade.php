@extends('template.index')


@section('content')
<div class="alert alert-warning" style="display:none;" id="alerta-novo-projeto">
    <!--<a class="close" data-dismiss="alert">×</a>-->
    <h4 class="alert-heading"> Atenção! </h4>
    <ul>
        <li>Deve clicar no botão de salvar para salvar as alterações dos membros</li>
    </ul>
</div>
<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>                    
        <li><a href="{{ URL::to('tarefatipo/list') }}">Visualizar Tipo de tarefas</a></li>
        <li class="active">@if(!isset($tarefatipo)) Novo Tipo de Tarefa @else Editar Tipo de tarefa {{ $tarefatipo->nome }} @endif</li>
    </ul>
<div class="page-title">
    <div class="col-md-10">             
        <h2><span class="fa fa-th-large"></span>@if(!isset($tarefatipo)) Novo Tipo de Tarefa @else Editar Tipo de Tarefa {{ $tarefatipo->nome }} @endif</h2>
    </div>
    @if(isset($tarefatipo))
        <div class="col-md-2">
            <a href="{{ URL::to('tarefatipo/create') }}"><button type="button" class="btn btn-primary">Novo Tipo de Tarefa</button></a>
        </div>
    @endif
</div>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<form action="{{URL::to("tarefatipo/save")}}" method="post">
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="tocify-content">
                            <p>
                                <div class="row">
                                    <div class="col-md-2">
                                        Nome*
                                    </div>
                                    <div class="col-md-10">
                                        <input name="nome" placeholder="Nome" class="form-control" required value="{{ $tarefatipo->nome or '' }}" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-2">
                                        Esforço*
                                    </div>
                                    <div class="col-md-5">
                                        <select name="hora" placeholder="Hora" class="form-control" required >
                                            <option value="">Hora</option>
                                            @for ($i = 0; $i <= 120; $i++)
                                                <option value="{{ Formatter::leadingZero($i) }}" @if(isset($tarefatipo) && $tarefatipo->hora_esforco == $i) SELECTED @endif >{{ Formatter::leadingZero($i) }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <select name="minuto" placeholder="Minuto" class="form-control" required >
                                            <option value="">Minuto</option>
                                            @for ($i = 0; $i <= 4; $i++)
                                                {{--*/ $count = Formatter::leadingZero(($i * 15)) /*--}} 
                                                <option value="{{ $count }}" @if(isset($tarefatipo) && $tarefatipo->minuto_esforco == ($i * 15)) SELECTED @endif >{{ $count }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </p>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="position: relative;">
                    <input type="Submit" id="create-category" class="btn btn-primary btn-lg active" value="@if(!isset($tarefatipo)) Cadastrar Tipo de tarefa @else Atualizar Tipo de tarefa @endif" />
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
    <input name="id" type="hidden" class="form-control" value="{{ $tarefatipo->id or '' }}" />
</form>

@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {

    });
</script>
@stop