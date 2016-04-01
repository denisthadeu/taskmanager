@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">Visualizar Tipos de Tarefas</li>
</ul>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap panel-body">
    <div class="page-title">                    
        <h2><span class="fa fa-th-large"></span> Tipo de Tarefa</h2>
    </div>
    <div class="row" style="padding-bottom: 7px;">
    	<div class="col-md-10">
    		&nbsp;
    	</div>
    	<div class="col-md-1">
    		<a href="{{ URL::to('tarefatipo/create') }}"><button type="button" class="btn btn-primary">Novo Tipo de Tarefa</button></a>
    	</div>
    </div>
    <div class="row">
    </div>
    <div class="col-md-12">
        <table class="table table-bordered  table-hover" style="background-color: #fff">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Tempo estimado</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
            	@if(isset($tarefatipos) && !$tarefatipos->isEmpty())
            		@foreach($tarefatipos as $tarefatipo)
                        <tr>
                            <td>{{ $tarefatipo->id }}</td>
                            <td>{{ $tarefatipo->nome }}</td>
                            <td>{{ Formatter::leadingZero($tarefatipo->hora_esforco) }}:{{ Formatter::leadingZero($tarefatipo->minuto_esforco) }}</td>
                            <td>
                            	<a href="{{ URL::to('tarefatipo/edit') }}/{{$tarefatipo->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                <a href="{{ URL::to('tarefatipo/delete') }}/{{$tarefatipo->id}}" class="remover-user"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
<!-- END PAGE CONTENT -->
@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.remover-user').click(function(){
            var r = confirm("Deseja deletar este tipo de tarefa?");
            if (r == true) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>
@stop