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
        <li><a href="{{ URL::to('equipe/list') }}">Visualizar Equipes</a></li>
        <li class="active">@if(!isset($equipe)) Nova Equipe @else Editar Equipe {{ $equipe->nome }} @endif</li>
    </ul>
<div class="page-title">
    <div class="col-md-10">               
        <h2><span class="fa fa-puzzle-piece"></span>@if(!isset($equipe)) Nova Equipe @else Editar Equipe {{ $equipe->nome }} @endif</h2>
    </div>
    @if(isset($equipe))
        <div class="col-md-1">
            <a href="{{ URL::to('equipe/create') }}"><button type="button" class="btn btn-primary">Nova Equipe</button></a>
        </div>
    @endif
</div>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<form action="{{URL::to("equipe/save")}}" method="post">
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="tocify-content">
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Nome*
                                    </div>
                                    <div class="col-md-9">
                                        <input name="nome" placeholder="Nome" class="form-control" required value="{{ $equipe->nome or '' }}" />
                                    </div>
                                </div>
                                <p>
                                    <div class="row">
                                        <div class="col-md-3">
                                            Responsavel*
                                        </div>
                                        <div class="col-md-9">
                                            <select name="responsavel" class="form-control">
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}" @if(isset($equipe) && $user->id==$equipe->user_id) SELECTED @endif >{{ $user->nome }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </p>
                                <p>
                                    <div class="row">
                                        <div class="col-md-3">
                                            Clientes*
                                        </div>
                                        <div class="col-md-9">
                                            <select name="clientes[]" multiple="" class="form-control">
                                                @foreach($clientes as $cliente)
                                                    <option value="{{ $cliente->id }}" @if(isset($equipe) && $equipe->equipeClienteId($cliente->id)) SELECTED @endif >{{ $cliente->nome }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </p>
                                <div class="row" style="padding-top: 7px;">
                                    <div class="col-md-1">
                                        <h3>Membros</h3>
                                        <div class="row">
                                            <div class="col-md-10">
                                                &nbsp;
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-primary" id="novo-projeto-btn">Novo Membro</button>
                                    </div>
                                </div>
                                <div class="row" id="novo-projeto-div" style="display:none;">
                                    <div class="col-md-9">
                                        <select name="nome-novo-projeto" id="nome-novo-projeto" placeholder="Nome do Projeto" class="form-control">
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}" @if(isset($equipe) && $user->id==$equipe->user_id) SELECTED @endif >{{ $user->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-primary" id="adicionar-projeto-btn">Adicionar Membro</button>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 7px;">
                                    <table class="table table-bordered  table-hover" style="background-color: #fff">
                                        <thead>
                                            <tr>
                                                <th>Ações</th>
                                                <th>Nome dos Membros</th>
                                            </tr>
                                        </thead>
                                        <tbody id="projetos">
                                            @if(isset($equipe) && count($equipe->equipeUser) > 0)
                                                @foreach($equipe->equipeUser as $membro)
                                                <tr id="projeto-{{ $membro->user->id }}">
                                                    <td>
                                                        <a href="#" class="remove-projeto text-danger">
                                                            <span class="glyphicon glyphicon-remove"></span>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <input type="hidden" name="membroID[]" value="{{ $membro->id }}" />
                                                        <input type="hidden" name="userID[]" value="{{ $membro->user->id }}" />
                                                        <input type="text" id="projeto-nome-field-{{ $membro->user->id }}" name="membroNome[]" value="{{ $membro->user->nome }}" style="display:none;" />
                                                        <span id="span-projeto-nome-field-{{ $membro->user->id }}">{{ $membro->user->nome }}</span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </p>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="position: relative;">
                    <input type="Submit" id="create-category" class="btn btn-primary btn-lg active" value="@if(!isset($equipe)) Cadastrar Equipe @else Atualizar Equipe @endif" />
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
    <input name="id" type="hidden" class="form-control" value="{{ $equipe->id or '' }}" />
</form>

@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#novo-projeto-btn').click(function(){
            // $('#nome-novo-projeto').val('');
            $('#novo-projeto-div').show();
        });
        $('#adicionar-projeto-btn').click(function(){
            var nomeMembro = $('#nome-novo-projeto option:selected').text();
            var userID = $('#nome-novo-projeto').val();
            $('#novo-projeto-div').hide();
            $('#alerta-novo-projeto').show();
            var html = $('#projetos').html();
            var number = Math.floor((Math.random() * 1000) + 1);
            
            html += '<tr id="projeto-'+number+'">';
            html += '    <td>';
            html += '        <a href="#" class="remove-projeto text-danger">';
            html += '            <span class="glyphicon glyphicon-remove"></span>';
            html += '        </a> ';
            html += '    </td>';
            html += '    <td>';
            html += '        <input type="hidden" name="membroID[]" value="0" />';
            html += '        <input type="hidden" name="userID[]" value="'+userID+'" />';
            html += '        <input type="text" id="projeto-nome-field-'+number+'" name="membroNome[]" value="'+nomeMembro+'" style="display:none;" />';
            html += '        <span id="span-projeto-nome-field">'+nomeMembro+'</span>';
            html += '    </td>';
            html += '</tr>';
            $('#projetos').html(html);
        })
        $(document).on('click', '.remove-projeto', function(event){
            $( this ).parent().parent().remove();
            $('#alerta-novo-projeto').show();
        });
        $(document).on('click', '.editar-projeto', function(event){
            $( this ).parent().siblings().children().toggle();
            $( this ).remove();
            
            $('#alerta-novo-projeto').show();
        });
    });
</script>
@stop