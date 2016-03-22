@extends('template.index')


@section('content')
<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li class="active">Visualizar Usuários</li>
</ul>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap panel-body">
    <div class="row" style="padding-bottom: 7px;">
    	<div class="col-md-10">
    		&nbsp;
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
                        <th>Setor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                	@if(isset($users) && !$users->isEmpty())
                		@foreach($users as $user)
		                    <tr>
		                        <td>{{ $user->id }}</td>
		                        <td>{{ $user->nome }}</td>
		                        <td>
                                    @if(count($user->equipe_user) > 0)
                                        @foreach($user->equipe_user as $key => $equipe)
                                            @if($key > 0)
                                                , 
                                            @endif
                                            {{ $equipe->nome }}
                                        @endforeach
                                    @else 
                                        Nenhum setor ainda
                                    @endif
                                </td>
		                        <td>
		                        	<a href="{{ URL::to('user/edit') }}/{{$user->id}}"><button type="button" class="btn btn-info"><span class="fa fa-pencil"></span></button></a>
                                    <a href="{{ URL::to('user/delete') }}/{{$user->id}}" class="remover-user"><button type="button" class="btn btn-danger"><span class="fa fa-remove"></span></button></a>
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
        $('.remover-user').click(function(){
            var r = confirm("Deseja deletar este usuário?");
            if (r == true) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>
@stop