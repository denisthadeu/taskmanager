@extends('template.login')

@section('content')
<div class="login-box login-box-register animated fadeInDown row">
    <div class="login-body">
        <div class="login-title"><strong>Resetar</strong> Senha</div>

        <form class="form-horizontal" method="post" action="{{ action('RemindersController@postRemind') }}">
            <div class="form-group">
                <div class="col-md-12">
                    <input class="form-control" type="email" name="email" placeholder="E-mail" value="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    &nbsp;
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-info btn-block">Enviar Link Para Resetar Senha</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop