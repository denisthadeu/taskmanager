@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">Visualizar Cronogramas</li>
</ul>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap panel-body">
    <div class="page-title">                    
        <h2><span class="fa fa-sitemap"></span> Cronograma</h2>
    </div>
    <div class="row" style="padding-bottom: 7px;">
    	<div class="col-md-10">
    		&nbsp;
    	</div>
    	<div class="col-md-1">
    		<a href="{{ URL::to('cronograma/create') }}"><button type="button" class="btn btn-primary">Novo Cronograma</button></a>
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
                        <th>Etapas</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                	@if(isset($cronogramas) && !$cronogramas->isEmpty())
                		@foreach($cronogramas as $cronograma)
		                    <tr>
		                        <td>{{ $cronograma->id }}</td>
		                        <td>{{ $cronograma->nome }}</td>
                                <td data-toggle="tooltip" data-placement="bottom" title="
                                    @if($cronograma->descricao->count())
                                        @foreach($cronograma->descricao as $key => $descricao)
                                            @if($key > 0)
                                                ,&nbsp;
                                            @endif
                                            {{ $descricao->nome }}
                                        @endforeach
                                    @endif
                                ">{{ $cronograma->descricao->count() }}</td>
		                        <td>
		                        	<a href="{{ URL::to('cronograma/edit') }}/{{$cronograma->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                    <a href="{{ URL::to('cronograma/delete') }}/{{$cronograma->id}}" class="remover-equipe"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
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
        $('.remover-equipe').click(function(){
            var r = confirm("Deseja deletar este cronograma?");
            if (r == true) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>
@stop