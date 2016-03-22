@extends('template.index')


@section('content')

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>                    
        <li><a href="#">Usuários</a></li>
        <li class="active">Novo Usuário</li>
    </ul>
<div class="page-title">                    
    <h2><span class="glyphicon glyphicon-user"></span> Novo usuário</h2>
</div>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<form action="{{URL::to("meusdados/save")}}" method="post">
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">                            
                        <div class="tocify-content">
                            <h2>Dados de Login</h2>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Nome*
                                    </div>
                                    <div class="col-md-9">
                                        <input name="nome" placeholder="Nome" class="form-control" value="" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Sobrenome*
                                    </div>
                                    <div class="col-md-9">
                                        <input name="sobrenome" placeholder="Sobrenome" class="form-control" value="" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        E-mail*
                                    </div>
                                    <div class="col-md-9">
                                        <input name="email" placeholder="E-mail" class="form-control" value="" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        CPF*
                                    </div>
                                    <div class="col-md-9">
                                        <input name="cpf" placeholder="CPF" id="cpf" class="form-control" value="" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Senha
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" name="senha" placeholder="Senha" class="form-control" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Confirmação de senha
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" name="senha_confirma" placeholder="Confirme senha" class="form-control" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Telefone*
                                    </div>
                                    <div class="col-md-9">
                                        <input name="telefone" placeholder="Telefone Fixo" class="form-control telefone-fixo telefone" value="" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Celular*
                                    </div>
                                    <div class="col-md-9">
                                        <input name="celular" placeholder="Telefone Celular" class="form-control telefone-celular celular" value="" />
                                    </div>
                                </div>
                            </p>
                        </div> 
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12" style="position: relative;">
                    <input type="Submit" id="create-category" class="btn btn-primary btn-lg active" value="Cadastrar" />
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
</form>

   @stop