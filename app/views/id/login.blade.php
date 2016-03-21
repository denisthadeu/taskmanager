@extends('template.login')


@section('content')
<div class="login-title"><strong>Bem-Vindo</strong></div>
<form class="form-horizontal" method="post" action="{{ URL::to('id/sign-in')}}">
    <div class="form-group">
        <div class="col-md-12">
            <input type="text" name="email" class="form-control" placeholder="E-mail"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="password" name="password" class="form-control" placeholder="Senha"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <a href="{{URL::to("password/remind")}}" class="btn btn-link btn-block">Esqueceu sua senha?</a><br/>
        </div>
        <div class="col-md-6">
            <button class="btn btn-info btn-block">Log In</button>
        </div>
    </div>
</form>
@stop