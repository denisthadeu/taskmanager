@extends('template.index')


@section('content')

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>                    
        <li><a href="{{ URL::to('mensagem/in') }}">Caixa de Entrada</a></li>
        <li class="active">Visualizar mensagem</li>
    </ul>
<div class="page-title">
    <div class="col-md-8">
        <h2><span class="fa fa-envelope"></span>Visualizar Mensagem</h2>
    </div>
    <div class="col-md-2">
        <a href="{{ URL::to('mensagem/create') }}"><button type="button" class="btn btn-info">Nova Mensagem</button></a>
    </div>
    <div class="col-md-1">
        <a href="{{ URL::to('mensagem/responder/'.$mensagem->id) }}"><button type="button" class="btn btn-primary">Responder Mensagem</button></a>
    </div>
</div>
<!-- END PAGE TITLE -->
<!-- PAGE CONTENT WRAPPER -->
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">                            
                    <div class="tocify-content">
                        <h2>Mensagem</h2>
                        <p>
                            <div class="row">
                                <div class="col-md-3">
                                    Destinatário
                                </div>
                                <div class="col-md-9">
                                    {{ $mensagem->destinatario->nome }}
                                </div>
                            </div>
                        </p>
                        <p>
                            <div class="row">
                                <div class="col-md-3">
                                    Assunto*
                                </div>
                                <div class="col-md-9">
                                    {{ $mensagem->assunto }}
                                </div>
                            </div>
                        </p>
                        <p>
                            <div class="row">
                                <div class="col-md-3">
                                    Mensagem
                                </div>
                                <div class="col-md-9">
                                    {{ $mensagem->mensagem }}
                                </div>
                            </div>
                        </p>
                    </div> 
                </div>
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

@stop

@section('script')
<script type="text/javascript">
    $(document).ready(function() {

    });
</script>
@stop