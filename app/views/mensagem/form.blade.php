@extends('template.index')


@section('content')

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>                    
        <li><a href="{{ URL::to('mensagem/in') }}">Caixa de Entrada</a></li>
        <li class="active">Nova Mensagem</li>
    </ul>
<div class="page-title">        
    <h2><span class="fa fa-envelope"></span>Nova Mensagem</h2>
</div>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<form action="{{URL::to("mensagem/save")}}" method="post">
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
                                        <select class="form-control" name="user">
                                            @if(isset($users) && !$users->isEmpty())
                                                @foreach($users as $user)
                                                    <option value="{{ $user->id }}" @if(isset($mensagem) && $mensagem->remetente_id == $user->id) SELECTED @endif>{{ $user->nome }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Assunto*
                                    </div>
                                    <div class="col-md-9">
                                        <input name="assunto" placeholder="Assunto" id="assunto" class="form-control" value="{{ $mensagem->assunto or '' }}" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Mensagem
                                    </div>
                                    <div class="col-md-9">
                                        <textarea class="summernote form-control" name="mensagem"></textarea>
                                    </div>
                                </div>
                            </p>
                            @if(isset($mensagem))
                                <p style="padding-top: 7px;">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <b>Mensagem do {{ $mensagem->remetente->nome }}</b>
                                        </div>
                                        <div class="col-md-9">
                                            {{ $mensagem->mensagem }}
                                        </div>
                                    </div>
                                </p>
                            @endif
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="position: relative;">
                    <input type="Submit" id="create-category" class="btn btn-primary btn-lg active" value="Enviar mensagem" />
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
    <input type="hidden" style="display:none;" name="id" value="{{ $user->id or '0' }}" />
</form>

@stop

@section('script')
<script type="text/javascript" src="{{ URL::asset('js/plugins/summernote/summernote.js') }}"></script>
@stop