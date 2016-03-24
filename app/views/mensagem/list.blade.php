@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">{{ $titulo }}</li>
</ul>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap panel-body">
    <div class="row" style="padding-bottom: 7px;">
    	<div class="col-md-10">
    		&nbsp;
    	</div>
    	<div class="col-md-1">
    		<a href="{{ URL::to('mensagem/create') }}"><button type="button" class="btn btn-primary">Nova Mensagem</button></a>
    	</div>
    </div>
    <div class="row">
    </div>
        <div class="col-md-12">
            <table class="table table-bordered  table-hover" style="background-color: #fff">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>@if($titulo == "Caixa de Entrada") Remetente @else Destinatário @endif</th>
                        <th>Assunto</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                	@if(isset($mensagens) && !$mensagens->isEmpty())
                		@foreach($mensagens as $mensagem)
		                    <tr @if($mensagem->status != 1) style="background-color: #ccc; @endif">
		                        <td>{{ $mensagem->id }}</td>
		                        <td>@if($titulo == "Caixa de Entrada") {{ $mensagem->remetente->nome}} @else {{$mensagem->destinatario->nome}} @endif</td>
		                        <td>{{ $mensagem->assunto }}</td>
		                        <td>
		                        	<a href="{{ URL::to('mensagem/mensagem') }}/{{$mensagem->id}}"><button type="button" class="btn btn-info"><span class="fa fa-eye">Ver</span></button></a>
                                    <!-- <a href="{{ URL::to('mensagem/delete') }}/{{$mensagem->id}}" class="remover-cliente"><button type="button" class="btn btn-danger"><span class="fa fa-remove">Deletar</span></button></a> -->
		                        </td>
		                    </tr>
		                @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
</div>
<!-- END PAGE CONTENT WRAPPER -->                                                 
</div>            
<!-- END PAGE CONTENT -->
@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.remover-cliente').click(function(){
            var r = confirm("Deseja deletar esta mensagem?");
            if (r == true) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>
@stop