@extends('template.login')


@section('content')
<div class="login-title"><strong>Crie</strong>  sua conta</div>

<form class="form-horizontal" method="post">
    <div class="form-group">
        <div class="col-md-12">
            <input type="text" name="nome" class="form-control" placeholder="Nome"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="text" name="email" class="form-control" placeholder="E-mail"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="text" name="celular" class="form-control celular" placeholder="Celular"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="password" name="password" class="form-control" placeholder="Senha"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirme senha"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            &nbsp;
        </div>
        <div class="col-md-6">
            <button class="btn btn-info btn-block">Cadastrar</button>
        </div>
    </div>
</form>

@stop