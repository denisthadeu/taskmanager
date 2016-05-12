@extends('template.index')


@section('content')
<div class="alert alert-warning" style="display:none;" id="alerta-novo-projeto">
    <!--<a class="close" data-dismiss="alert">×</a>-->
    <h4 class="alert-heading"> Atenção! </h4>
    <ul>
        <li>Deve clicar no botão de salvar para salvar as alterações das estapas do cronograma</li>
    </ul>
</div>
<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>                    
        <li><a href="{{ URL::to('cronograma/list') }}">Visualizar Cronogramas</a></li>
        <li class="active">@if(!isset($cronograma)) Novo Cronograma @else Editar Cronograma {{ $cronograma->nome }} @endif</li>
    </ul>
<div class="page-title">
    <div class="col-md-10">          
        <h2><span class="fa fa-sitemap"></span>@if(!isset($cronograma)) Novo Cronograma @else Editar cronograma {{ $cronograma->nome }} @endif</h2>
    </div>
    @if(isset($cronograma))
        <div class="col-md-1">
            <a href="{{ URL::to('cronograma/create') }}"><button type="button" class="btn btn-primary">Novo Cronograma</button></a>
        </div>
    @endif
</div>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<form action="{{URL::to("cronograma/save")}}" method="post">
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
                                        <input name="nome" placeholder="Nome" class="form-control" required value="{{ $cronograma->nome or '' }}" />
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 7px;">
                                    <div class="col-md-2">
                                        <h3>Etapas do Cronograma</h3>
                                        <div class="row">
                                            <div class="col-md-10">
                                                &nbsp;
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-primary" id="novo-projeto-btn">Nova etapa</button>
                                    </div>
                                </div>
                                <div class="row" id="novo-projeto-div" style="display:none;">
                                    <div class="col-md-9">
                                        <input name="nome-novo-projeto" id="nome-novo-projeto" placeholder="Nome do Projeto" class="form-control" value="" />
                                        <select name="hora-novo-projeto" id="hora-novo-projeto" placeholder="Hora" class="form-control">
                                            <option value="00">Hora</option>
                                            @for ($i = 0; $i <= 120; $i++)
                                                <option value="{{ Formatter::leadingZero($i) }}">{{ Formatter::leadingZero($i) }}</option>
                                            @endfor
                                        </select>
                                        <select name="minuto-novo-projeto" id="minuto-novo-projeto" placeholder="Minuto" class="form-control">
                                            <option value="00">Minuto</option>
                                            @for ($i = 0; $i <= 4; $i++)
                                                {{--*/ $count = Formatter::leadingZero(($i * 15)) /*--}} 
                                                <option value="{{ $count }}">{{ $count }}</option>
                                            @endfor
                                        </select>
                                        <select name="duracao-novo-projeto" id="duracao-novo-projeto" placeholder="Minuto" class="form-control">
                                            <option value="0">Duração da etapa(em horas)</option>
                                            @for ($i = 0; $i <= 120; $i++)
                                                <option value="{{ Formatter::leadingZero($i) }}">{{ Formatter::leadingZero($i) }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-primary" id="adicionar-projeto-btn">Adicionar Etapa</button>
                                    </div>
                                </div>
                                <div class="row" style="padding-top: 7px;">
                                    <table class="table table-bordered  table-hover" style="background-color: #fff">
                                        <thead>
                                            <tr>
                                                <th>Ações</th>
                                                <th>Nome das Etapas</th>
                                            </tr>
                                        </thead>
                                        <tbody id="projetos" class="connectedSortable sortable droptrue">
                                            @if(isset($cronograma) && count($cronograma->descricao) > 0)
                                                @foreach($cronograma->descricao as $descricao)
                                                <tr id="projeto-{{ $descricao->id }}">
                                                    <td>
                                                        <a href="#" class="remove-projeto text-danger">
                                                            <span class="glyphicon glyphicon-remove"></span>
                                                        </a>
                                                        <a href="#" class="editar-projeto text-warning">
                                                            <span class="glyphicon glyphicon-edit"></span>
                                                        </a> 
                                                    </td>
                                                    <td>
                                                        <input type="hidden" name="etapasID[]" value="{{ $descricao->id }}" />
                                                        <input type="text" id="projeto-nome-field-{{ $descricao->id }}" name="etapaNome[]" value="{{ $descricao->nome }}" style="display:none;" />
                                                        <select name="etapaHora[]" id="projeto-hora-field-{{ $descricao->id }}" placeholder="Hora" class="form-control" required style="display:none;">
                                                            <option value="00">Hora</option>
                                                            @for ($i = 0; $i <= 120; $i++)
                                                                <option value="{{ Formatter::leadingZero($i) }}" @if(isset($descricao) && $descricao->hora_esforco == $i) SELECTED @endif >{{ Formatter::leadingZero($i) }}</option>
                                                            @endfor
                                                        </select>
                                                        <select name="etapaMinuto[]" id="projeto-minuto-field-{{ $descricao->id }}" placeholder="Minuto" class="form-control" required style="display:none;">
                                                            <option value="00">Minuto</option>
                                                            @for ($i = 0; $i <= 4; $i++)
                                                                {{--*/ $count = Formatter::leadingZero(($i * 15)) /*--}} 
                                                                <option value="{{ $count }}" @if(isset($descricao) && $descricao->minuto_esforco == ($i * 15)) SELECTED @endif >{{ $count }}</option>
                                                            @endfor
                                                        </select>
                                                        <select name="etapaDuracao[]" id="projeto-duracao-field-{{ $descricao->id }}" placeholder="Duração" class="form-control" style="display:none;">
                                                            <option value="0">Duração da etapa(em horas)</option>
                                                            @for ($i = 0; $i <= 120; $i++)
                                                                <option value="{{ Formatter::leadingZero($i) }}" @if(isset($descricao) && $descricao->duracao == $i) SELECTED @endif >{{ Formatter::leadingZero($i) }}</option>
                                                            @endfor
                                                        </select>
                                                        <span id="span-projeto-nome-field-{{ $descricao->id }}">{{ $descricao->nome }} ({{ Formatter::leadingZero($descricao->hora_esforco) }}:{{ Formatter::leadingZero($descricao->minuto_esforco) }})</span>
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
                    <input type="Submit" id="create-category" class="btn btn-primary btn-lg active" value="@if(!isset($cronograma)) Cadastrar Cronograma @else Atualizar Cronograma @endif" />
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
    <input name="id" type="hidden" class="form-control" value="{{ $cronograma->id or '' }}" />
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
            var nomeEtapa = $('#nome-novo-projeto').val();
            var horaEtapa = $('#hora-novo-projeto').val();
            var minutoEtapa = $('#minuto-novo-projeto').val();
            var duracao = $('#duracao-novo-projeto').val();
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
            html += '        <input type="hidden" name="etapasID[]" value="0" />';
            html += '        <input type="text" id="projeto-nome-field-'+number+'" name="etapaNome[]" value="'+nomeEtapa+'" style="display:none;" />';
            html += '        <input type="text" id="projeto-hora-field-'+number+'" name="etapaHora[]" value="'+horaEtapa+'" style="display:none;" />';
            html += '        <input type="text" id="projeto-minuto-field-'+number+'" name="etapaMinuto[]" value="'+minutoEtapa+'" style="display:none;" />';
            html += '        <input type="text" id="projeto-duracao-field-'+number+'" name="etapaDuracao[]" value="'+duracao+'" style="display:none;" />';
            html += '        <span id="span-projeto-nome-field">'+nomeEtapa+' ('+horaEtapa+':'+minutoEtapa+')</span>';
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
        $( ".sortable" ).sortable({
            connectWith: ".connectedSortable",
            update: function() {
                $('#alerta-novo-projeto').show();
            }
        }).disableSelection();
    });
</script>
@stop