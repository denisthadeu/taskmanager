@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">Visualizar Clientes</li>
</ul>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap panel-body">
    <div class="page-title">                    
        <div class="col-md-10">
            <h2><span class="fa fa-github-square"></span> Lista de Clientes</h2>
        </div>
        <div class="col-md-1">
            <a href="{{ URL::to('cliente/create') }}"><button type="button" class="btn btn-primary">Novo Cliente</button></a>
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
                        <th>Total de Projetos</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                	@if(isset($clientes) && !$clientes->isEmpty())
                		@foreach($clientes as $cliente)
		                    <tr>
		                        <td>{{ $cliente->id }}</td>
		                        <td>{{ $cliente->nome }}</td>
		                        <td data-toggle="tooltip" data-placement="bottom" title="
                                    @if($cliente->clientesprojetos->count())
                                        @foreach($cliente->clientesprojetos as $key => $projetos)
                                            @if($key > 0)
                                                , 
                                            @endif
                                            {{ $projetos->nome }}
                                        @endforeach
                                    @endif
                                ">{{ $cliente->clientesprojetos->count() }}</td>
		                        <td>
		                        	<a href="{{ URL::to('cliente/edit') }}/{{$cliente->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span>Editar</button></a>
                                    <a href="{{ URL::to('cliente/delete') }}/{{$cliente->id}}" class="remover-cliente"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span>Deletar</button></a>
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
            var r = confirm("Deseja deletar este cliente?");
            if (r == true) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>
@stop