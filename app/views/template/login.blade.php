<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Bluefoot</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="../css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <div class="login-container">

            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    @if (isset($success))
                    <?php
                    $successes = $success;
                    ?>
                    <div class="alert alert-success">
                        <!--<a class="close" data-dismiss="alert">×</a>-->
                        <h4 class="alert-heading"> Sucesso! </h4>
                        <ul>
                            @if(is_array($successes))
                                @foreach($successes as $sucesso)
                                    <li>{{$sucesso}}</li>
                                @endforeach
                            @else
                                <li>{{$successes}}</li>
                            @endif
                        </ul>
                    </div>
                    @endif
                    @if (isset($info))
                    <?php
                    $infos = $info;
                    ?>
                    <div class="alert alert-info">
                        <!--<a class="close" data-dismiss="alert">×</a>-->
                        <h4 class="alert-heading"> Informações: </h4>
                        <ul>
                            @if(is_array($infos))
                                @foreach($infos as $info)
                                    <li>{{$info}}</li>
                                @endforeach
                            @else
                                <li>{{$infos}}</li>
                            @endif
                        </ul>
                    </div>
                    @endif
                    @if (isset($warning))
                    <?php
                    $warnings = $warning;
                    ?>
                    <div class="alert alert-warning">
                        <!--<a class="close" data-dismiss="alert">×</a>-->
                        <h4 class="alert-heading"> Atenção! </h4>
                        <ul>
                            @if(is_array($warnings))
                                @foreach($warnings as $warning)
                                    <li>{{$warning}}</li>
                                @endforeach
                            @else
                                <li>{{$warnings}}</li>
                            @endif
                        </ul>
                    </div>
                    @endif
                    @if (isset($danger))
                    <?php debug($danger) ?>
                    
                    <?php
                    $dangers = $danger;
                    ?>
                    <div class="alert alert-danger">
                        <!--<a class="close" data-dismiss="alert">×</a>-->
                        <h4 class="alert-heading"> Os seguintes erros foram encontrados: </h4>
                        <ul>
                            @if(is_array($dangers))
                                @foreach($dangers as $danger)
                                    @if (is_array($danger))
                                        @foreach ($danger as $msg)              
                                            <li>{{$msg}}</li>
                                        @endforeach
                                    @else
                                        <li>{{$danger}}</li>
                                    @endif
                                @endforeach
                            @else
                                <li>{{$dangers}}</li>
                            @endif
                        </ul>
                    </div>
                    @endif
                    @section('content')

                    @show
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        Bluefoot
                    </div>
                    <div class="pull-right">
                        <!-- <a href="#">A Empresa</a> |
                        <a href="#">Contato</a> | --> 
                        <a href="{{ URL::to('/') }}">Login</a> |
                        <a href="{{ URL::to('id/forgot') }}">Esqueci a Senha</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
 <!-- START PLUGINS -->
<script type="text/javascript" src="../js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/plugins/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.maskMoney.js"></script>
<script type="text/javascript" src="../js/maskedinput.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".celular").mask("(99) 9999-9999?9");
    });
</script>






