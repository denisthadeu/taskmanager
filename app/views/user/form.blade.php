@extends('template.index')


@section('content')

<!-- START BREADCRUMB -->
    <ul class="breadcrumb">
        <li><a href="{{ URL::to('/') }}">Home</a></li>                    
        <li><a href="{{ URL::to('user/list') }}">Visualizar Usuários</a></li>
        <li class="active">@if(isset($user)) {{ $user->nome }} @else Novo Usuário @endif</li>
    </ul>
<div class="page-title">                    
    <h2><span class="glyphicon glyphicon-user"></span>@if(isset($user)) {{ $user->nome }} @else Novo Usuário @endif</h2>
</div>
<!-- END PAGE TITLE -->                   
<!-- PAGE CONTENT WRAPPER -->
<form action="{{URL::to("user/save")}}" method="post" enctype="multipart/form-data">
    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">                            
                        <div class="tocify-content">
                            <h2>Dados do Usuário</h2>
                            <p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile" style="background-color: #fff">
                                            <div class="profile-image">
                                                @if(isset($user) && !empty($user->foto_caminho_completo))
                                                    <img src="{{ URL::asset($user->foto_caminho_completo) }}" class="image_perfil" alt="John Doe">
                                                @else    
                                                    <img src="{{ URL::asset('assets/images/users/images.png') }}" class="image_perfil" alt="John Doe">
                                                @endif
                                            </div>
                                            <div class="profile-data">
                                                <input name="foto" id="foto" type="file" placeholder="Faça upload de imagem" class="form-control" value="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <p>
                                            <input name="nome" placeholder="Nome" class="form-control" value="{{ $user->nome or '' }}" required />
                                        </p>
                                        <p>
                                            <input name="sobrenome" placeholder="Sobrenome" class="form-control" value="{{ $user->sobrenome or '' }}" />
                                        </p>
                                        <p>
                                            <input name="email" id="email" placeholder="E-mail" class="form-control" value="{{ $user->email or '' }}" required />
                                        </p>
                                        <p>
                                            <input name="telefone" placeholder="Telefone Fixo" class="form-control telefone-fixo telefone" value="{{ $user->telefone or '' }}" />
                                        </p>
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Celular*
                                    </div>
                                    <div class="col-md-9">
                                        <input name="celular" placeholder="Telefone Celular" class="form-control telefone-celular celular" value="{{ $user->celular or '' }}" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        CPF*
                                    </div>
                                    <div class="col-md-9">
                                        <input name="cpf" placeholder="CPF" id="cpf" class="form-control" value="{{ $user->cpf or '' }}" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Sexo
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control" name="sexo">
                                            <option value="Feminino">Feminino</option>
                                            <option value="Masculino" @if(isset($user) && $user->sexo == "Masculino") SELECTED @endif>Masculino</option>
                                        </select>
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Data de nascimento*
                                    </div>
                                    <div class="col-md-9">
                                        <input name="data_nascimento" placeholder="Data de nascimento" id="data_nascimento" class="form-control date" value="{{ $user->data_nascimento or '' }}" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Estado Civil
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control" name="estado_civil ">
                                            @if(isset($estadocivil) && !$estadocivil->isEmpty())
                                                @foreach($estadocivil as $estado)
                                                    <option value="{{ $estado->id }}" @if(isset($user) && $user->estadocivil_id == $estado->id) SELECTED @endif>{{ $estado->nome }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Cargo
                                    </div>
                                    <div class="col-md-9">
                                        <input name="cargo" placeholder="Cargo" id="cargo" class="form-control" value="{{ $user->cargo or '' }}" />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Senha
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" name="senha" placeholder="Senha" class="form-control" @if(!isset($user)) REQUIRED @endif />
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="row">
                                    <div class="col-md-3">
                                        Confirmação de senha
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" name="senha_confirma" placeholder="Confirme senha" class="form-control"  @if(!isset($user)) REQUIRED @endif />
                                    </div>
                                </div>
                            </p>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="position: relative;">
                    <input type="Submit" id="create-category" class="btn btn-primary btn-lg active" value="@if(isset($user)) Atualizar @else Cadastrar @endif" />
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
<script type="text/javascript">
    $(document).ready(function() {
        $(".date").mask("99/99/9999");
        $("#cpf").mask("999.999.999-99");
        $(".telefone").mask("(99) 9999-9999");
        $(".celular").mask("(99) 9999-9999?9");
        $('#email').change(function(){
            var email = $(this).val();
            if(email != ""){
                var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
                if(filtro.test(email)){
                    // alert("Este endereço de email é válido!");
                } else {
                    alert("Este endereço de email não é válido!");
                    $(this).val('');
                }
            }
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.image_perfil').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#foto").change(function(){
            readURL(this);
        });
    });
</script>
@stop