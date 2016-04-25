@extends('template.index')


@section('content')
<div class="alert alert-warning" style="display:none;" id="alerta-novo-projeto">
    <!--<a class="close" data-dismiss="alert">×</a>-->
    <h4 class="alert-heading"> Atenção! </h4>
    <ul>
        <li>Deve clicar no botão de salvar para salvar as alterações do projeto</li>
    </ul>
</div>
<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>                    
        <li><a href="{{ URL::to('cliente/list') }}">Visualizar Clientes</a></li>
        <li class="active">@if(!isset($cliente)) Novo Cliente @else Editar Cliente {{ $cliente->nome }} @endif</li>
    </ul>
<div class="page-title">                    
    <div class="col-md-10">
        <h2><span class="fa fa-github-square"></span>@if(!isset($cliente)) Novo Cliente @else Editar Cliente {{ $cliente->nome }} @endif</h2>
    </div>
    @if(isset($cliente))
        <div class="col-md-1">
            <a href="{{ URL::to('cliente/create') }}"><button type="button" class="btn btn-primary">Novo Cliente</button></a>
        </div>
    @endif
</div>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<form action="{{URL::to("cliente/save")}}" method="post">
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
                                        <input name="nome" placeholder="Nome" class="form-control" required value="{{ $cliente->nome or '' }}" />
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 7px;">
                                    <div class="col-md-2">
                                        <h3>Projetos</h3>
                                        <div class="row">
                                            <div class="col-md-10">
                                                &nbsp;
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-primary" id="novo-projeto-btn">Novo projeto</button>
                                    </div>
                                </div>
                                <div class="row" id="novo-projeto-div" style="display:none;">
                                    <div class="col-md-9">
                                        <input name="nome-novo-projeto" id="nome-novo-projeto" placeholder="Nome do Projeto" class="form-control" value="" />
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-primary" id="adicionar-projeto-btn">Adicionar Projeto</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <table class="table table-bordered  table-hover" style="background-color: #fff">
                                        <thead>
                                            <tr>
                                                <th>Ações</th>
                                                <th>Nome do Projeto</th>
                                            </tr>
                                        </thead>
                                        <tbody id="projetos">
                                            @if(isset($cliente) && count($cliente->clientesprojetos) > 0)
                                                @foreach($cliente->clientesprojetos as $projeto)
                                                <tr id="projeto-{{ $projeto->id }}">
                                                    <td>
                                                        <a href="#" class="remove-projeto text-danger">
                                                            <span class="glyphicon glyphicon-remove"></span>
                                                        </a>
                                                        <a href="#" class="editar-projeto text-warning">
                                                            <span class="glyphicon glyphicon-edit"></span>
                                                        </a> 
                                                    </td>
                                                    <td>
                                                        <input type="hidden" name="projetoID[]" value="{{ $projeto->id }}" />
                                                        <input type="text" id="projeto-nome-field-{{ $projeto->id }}" name="projetoNome[]" value="{{ $projeto->nome }}" style="display:none;" />
                                                        <span id="span-projeto-nome-field-{{ $projeto->id }}">{{ $projeto->nome }}</span>
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
                    <input type="Submit" id="create-category" class="btn btn-primary btn-lg active" value="@if(!isset($cliente)) Cadastrar Cliente @else Atualizar Cliente @endif" />
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
    <input name="id" type="hidden" class="form-control" value="{{ $cliente->id or '' }}" />
</form>

@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#novo-projeto-btn').click(function(){
            $('#nome-novo-projeto').val('');
            $('#novo-projeto-div').show();
        });
        $('#adicionar-projeto-btn').click(function(){
            var nomeProjeto = $('#nome-novo-projeto').val();
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
            html += '        <input type="hidden" name="projetoID[]" value="0" />';
            html += '        <input type="text" id="projeto-nome-field-'+number+'" name="projetoNome[]" value="'+nomeProjeto+'" style="display:none;" />';
            html += '        <span id="span-projeto-nome-field">'+nomeProjeto+'</span>';
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