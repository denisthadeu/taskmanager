@extends('template.login')


@section('content')
<div class="login-title"><strong>Esqueci a senha</strong></div>

<form class="form-horizontal" method="post">
    <div class="form-group">
        <div class="col-md-12">
            <input type="text" name="email" class="form-control" placeholder="E-mail"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            &nbsp;
        </div>
        <div class="col-md-6">
            <button class="btn btn-info btn-block">Enviar por e-mail</button>
        </div>
    </div>
</form>

@stop