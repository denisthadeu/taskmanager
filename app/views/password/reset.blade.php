@extends('template.login')


@section('content')

<div class="login-box login-box-register animated fadeInDown row">
    <div class="login-body">
        <div class="login-title"><strong>Resetar</strong> Senha</div>
        {{ Form::open(['class' => 'form-horizontal', 'action' => 'RemindersController@postReset', 'method' => 'POST']) }}
            <div class="form-group">
                <div class="col-md-12">
                    <input class="form-control" type="email" name="email" placeholder="E-mail">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input class="form-control" type="password" name="password" placeholder="Nova Senha">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input class="form-control" type="password" name="password_confirmation" placeholder="Confirmar Senha">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="hidden" name="token" value="{{ $token }}">
                    <button class="btn btn-info btn-block" type="submit" value="Resetar Senha">Resetar Senha</button>
                </div>
            </div>
        {{ Form::close() }}
    </div>
</div>
@stop