@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">Visualizar Equipes</li>
</ul>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap panel-body">
    <div class="page-title">                    
        <div class="col-md-10">
            <h2><span class="fa fa-puzzle-piece"></span> Lista de Equipes</h2>
        </div>
        <div class="col-md-1">
            <a href="{{ URL::to('equipe/create') }}"><button type="button" class="btn btn-primary">Nova Equipe</button></a>
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
                        <th>Membros</th>
                        <th>Responsáveis</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                	@if(isset($equipes) && !$equipes->isEmpty())
                		@foreach($equipes as $equipe)
		                    <tr>
		                        <td>{{ $equipe->id }}</td>
		                        <td>{{ $equipe->nome }}</td>
		                        <td data-toggle="tooltip" data-placement="bottom" title="
                                    @if($equipe->equipeUser->count())
                                        @foreach($equipe->equipeUser as $key => $equipeUser)
                                            @if($key > 0)
                                                , 
                                            @endif
                                            {{ $equipeUser->user->nome }}
                                        @endforeach
                                    @endif
                                ">{{ $equipe->equipeUser->count()}}
                                </td>
                                <td>
                                    {{--*/ $contador = 0;/*--}}
                                    @if($equipe->equipeUser->count())
                                        @foreach($equipe->equipeUser as $key => $equipeUser)
                                            @if($equipeUser->responsavel == 1)
                                                @if($contador > 0)
                                                    , 
                                                @endif
                                                {{ $equipeUser->user->nome }}
                                                {{--*/ $contador++;/*--}}
                                            @endif
                                        @endforeach
                                    @endif
                                </td>
		                        <td>
		                        	<a href="{{ URL::to('equipe/edit') }}/{{$equipe->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span>Editar</button></a>
                                    <a href="{{ URL::to('equipe/delete') }}/{{$equipe->id}}" class="remover-equipe"><button type="button" class="btn btn-danger"><span class="fa fa-remove">Deletar</span></button></a>
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
            var r = confirm("Deseja deletar esta equipe?");
            if (r == true) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>
@stop