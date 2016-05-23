<!DOCTYPE html>
{{--*/ $myProfile = Auth::user(); /*--}}
<html lang="en" ng-app="taskmanager">
	<head>        
		<!-- META SECTION -->
		<title>Bluefoot</title>            
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="{{ URL::asset('favicon.ico') }}" type="image/x-icon" />
		<!-- END META SECTION -->
		
		<!-- CSS INCLUDE -->
		<link rel="stylesheet" type="text/css" id="theme" href="{{ URL::asset('css/theme-default.css') }}"/>
		<!-- EOF CSS INCLUDE -->                                    
	</head>
	<body>
		<!-- START PAGE CONTAINER -->
		<div class="page-container">
			
			<!-- START PAGE SIDEBAR -->
			<div class="page-sidebar">
				<!-- START X-NAVIGATION -->
				<ul class="x-navigation">
					<li class="xn-logo">
						<a href="{{ URL::to('/') }}">Bluefoot</a>
						<a href="{{ URL::to('/') }}" class="x-navigation-control"></a>
					</li>
					<li class="xn-profile">
						<a href="#" class="profile-mini">
							@if(!empty($myProfile->foto_caminho_completo))
								<img src="{{ URL::asset($myProfile->foto_caminho_completo) }}" class="image_perfil" alt="John Doe">
							@else    
								<img src="{{ URL::asset('assets/images/users/images.png') }}" class="image_perfil" alt="John Doe">
							@endif
						</a>
						<div class="profile">
							<div class="profile-image">
								@if(!empty($myProfile->foto_caminho_completo))
									<img src="{{ URL::asset($myProfile->foto_caminho_completo) }}" class="image_perfil" alt="John Doe">
								@else    
									<img src="{{ URL::asset('assets/images/users/images.png') }}" class="image_perfil" alt="John Doe">
								@endif
							</div>
							<div class="profile-data">
								<div class="profile-data-name">{{ $myProfile->nome }}</div>
								<div class="profile-data-title">
									@if($myProfile->equipeUser->count())
										@foreach($myProfile->equipeUser AS $key => $equipeuserPerfil)
											@if($key > 0)
												/
											@endif
											{{ $equipeuserPerfil->equipe->nome }}
										@endforeach
									@else
										Nenhum setor
									@endif
								</div>
							</div>
							<div class="profile-controls">
								<a href="{{ URL::to('user/edit/'.$myProfile->id) }}" class="profile-control-left"><span class="fa fa-info"></span></a>
								<a href="{{ URL::to('mensagem/in') }}" class="profile-control-right"><span class="fa fa-envelope"></span></a>
							</div>
						</div>                                                                        
					</li>
					<li class="active">
						<a href="{{ URL::to('/') }}"><span class="fa fa-desktop"></span> <span class="xn-text">Home</span></a>                        
					</li>
					@if($myProfile->perfil == 1)    
						 <li class="xn-openable">
							<a href="#"><span class="fa fa-github"></span> <span class="xn-text">Clientes</span></a>
							<ul>
								<li><a href="{{ URL::to('cliente/list') }}"><span class="fa fa-github-square"></span> Visualizar Clientes</a></li>
								<li><a href="{{ URL::to('cliente/create') }}"><span class="fa fa-plus"></span> Novo Cliente</a></li>
							</ul>
						</li>
						<li class="xn-openable">
							<a href="#"><span class="fa fa-puzzle-piece"></span> <span class="xn-text">Equipes</span></a>
							<ul>
								<li><a href="{{ URL::to('equipe/list') }}"><span class="fa fa-users"></span> Visualizar Equipes</a></li>
								<li><a href="{{ URL::to('equipe/create') }}"><span class="fa fa-plus"></span> Nova Equipe</a></li>
							</ul>
						</li>
					@endif
					<li class="xn-openable">
						<a href="#"><span class="fa fa-envelope"></span> <span class="xn-text">Mensagens</span></a>
						<ul>
							<li><a href="{{ URL::to('mensagem/in') }}"><span class="glyphicon glyphicon-check"></span> Caixa de entrada</a></li>
							<li><a href="{{ URL::to('mensagem/out') }}"><span class="fa fa-external-link"></span> Caixa de saída</a></li>
							<li><a href="{{ URL::to('mensagem/create') }}"><span class="fa fa-envelope-o"></span> Nova Mensagem</a></li>
						</ul>
					</li>
					@if($myProfile->perfil == 1)
						<li class="xn-openable">
							<a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Relatórios</span></a>
							<ul>
								<li><a href="{{ URL::to('relatorio/cronogramademanda') }}"><span class="fa fa-align-justify"></span> Serviço por Cliente</a></li>
								<li><a href="{{ URL::to('relatorio') }}"><span class="fa fa-align-justify"></span> Relatório em Construção</a></li>
							</ul>
						</li>
					@endif
					@if($myProfile->perfil == 1)
					<li class="xn-openable">
						<a href="#"><span class="fa fa-clock-o"></span> <span class="xn-text">Cronogramas</span></a>
						<ul>
							<li><a href="{{ URL::to('cronograma/list') }}"><span class="fa fa fa-sitemap"></span> Visualizar Cronograma</a></li>
							<li><a href="{{ URL::to('cronograma/create') }}"><span class="fa fa-plus"></span> Novo Cronograma</a></li>
						</ul>
					</li>
					@endif
					<li class="xn-openable">
						<a href="#"><span class="fa fa-tasks"></span> <span class="xn-text">Tarefas</span></a>
						<ul>
							<li><a href="{{ URL::to('tarefa/list') }}"><span class="fa fa-list"></span> Visualizar Tarefas</a></li>
							<li><a href="{{ URL::to('tarefa/create') }}"><span class="fa fa-plus"></span> Nova Tarefa</a></li>
							@if($myProfile->perfil == 1)
								<li><a href="{{ URL::to('tarefatipo/list') }}"><span class="fa fa-th-large"></span> Visualizar Tipos Tarefas</a></li>
								<li><a href="{{ URL::to('tarefatipo/create') }}"><span class="fa fa-plus"></span> Novo Tipo de Tarefa</a></li>
							@endif
						</ul>
					</li>
					<li class="xn-openable">
						<a href="#"><span class="fa fa-users"></span> <span class="xn-text">Usuários</span></a>
						<ul>
							@if($myProfile->perfil == 1)
								<li><a href="{{ URL::to('user/list') }}"><span class="fa fa-user"></span> Visualizar usuários</a></li>
								<li><a href="{{ URL::to('user/create') }}"><span class="fa fa-plus"></span> Novo usuario</a></li>
							@endif
							<li><a href="{{ URL::to('user/edit/'.$myProfile->id) }}"><span class="fa fa-edit"></span> Editar seu perfil</a></li>
						</ul>
					</li>
					
				</ul>
				<!-- END X-NAVIGATION -->
			</div>
			<!-- END PAGE SIDEBAR -->
			
			<!-- PAGE CONTENT -->
			<div class="page-content">
				
				<!-- START X-NAVIGATION VERTICAL -->
				<ul class="x-navigation x-navigation-horizontal x-navigation-panel">
					<!-- TOGGLE NAVIGATION -->
					<li class="xn-icon-button">
						<a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
					</li>
					<!-- END TOGGLE NAVIGATION -->
					<!-- END SEARCH -->
					<!-- SIGN OUT -->
					<li class="xn-icon-button pull-right">
						<a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
					</li> 
					<!-- END SIGN OUT -->
					<!-- MESSAGES -->
					<li class="xn-icon-button pull-right alerta-li-mensagem">
						<a href="#"><span class="fa fa-comments"></span></a>
						<div class="informer informer-danger count-mensagens">0</div>
						<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
							<div class="panel-heading">
								<h3 class="panel-title"><span class="fa fa-comments"></span> Mensagens</h3>                                
								<div class="pull-right">
									<span class="label label-danger count-mensagens">0 new</span>
								</div>
							</div>
							<div class="panel-body list-group list-group-contacts scroll div-group-mensagens">
								<a href="#" class="list-group-item">
									<div class="list-group-status status-online"></div>
									<img src="{{ URL::asset('assets/images/users/user2.jpg') }}" class="pull-left" alt="John Doe"/>
									<span class="contacts-title">John Doe</span>
									<p>Praesent placerat tellus id augue condimentum</p>
								</a>
								<a href="#" class="list-group-item">
									<div class="list-group-status status-away"></div>
									<img src="{{ URL::asset('assets/images/users/user.jpg') }}" class="pull-left" alt="Dmitry Ivaniuk"/>
									<span class="contacts-title">Dmitry Ivaniuk</span>
									<p>Donec risus sapien, sagittis et magna quis</p>
								</a>
								<a href="#" class="list-group-item">
									<div class="list-group-status status-away"></div>
									<img src="{{ URL::asset('assets/images/users/user3.jpg') }}" class="pull-left" alt="Nadia Ali"/>
									<span class="contacts-title">Nadia Ali</span>
									<p>Mauris vel eros ut nunc rhoncus cursus sed</p>
								</a>
								<a href="#" class="list-group-item">
									<div class="list-group-status status-offline"></div>
									<img src="{{ URL::asset('assets/images/users/user6.jpg') }}" class="pull-left" alt="Darth Vader"/>
									<span class="contacts-title">Darth Vader</span>
									<p>I want my money back!</p>
								</a>
							</div>     
							<div class="panel-footer text-center">
								<a href="{{ URL::to('mensagem/in') }}">Todas as mensagems</a>
							</div>                            
						</div>                        
					</li>
					<!-- END MESSAGES -->
					<!-- TASKS -->
					<!-- <li class="xn-icon-button pull-right">
						<a href="#"><span class="fa fa-tasks"></span></a>
						<div class="informer informer-warning">3</div>
						<div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
							<div class="panel-heading">
								<h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
								<div class="pull-right">
									<span class="label label-warning">3 active</span>
								</div>
							</div>
							<div class="panel-body list-group scroll" style="height: 200px;">                                
								<a class="list-group-item" href="#">
									<strong>Phasellus augue arcu, elementum</strong>
									<div class="progress progress-small progress-striped active">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
									</div>
									<small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
								</a>
								<a class="list-group-item" href="#">
									<strong>Aenean ac cursus</strong>
									<div class="progress progress-small progress-striped active">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
									</div>
									<small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
								</a>
								<a class="list-group-item" href="#">
									<strong>Lorem ipsum dolor</strong>
									<div class="progress progress-small progress-striped active">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
									</div>
									<small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
								</a>
								<a class="list-group-item" href="#">
									<strong>Cras suscipit ac quam at tincidunt.</strong>
									<div class="progress progress-small">
										<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
									</div>
									<small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
								</a>                                
							</div>     
							<div class="panel-footer text-center">
								<a href="{{ URL::to('tarefa/list') }}">Exibir todas as Tarefas</a>
							</div>                            
						</div>                        
					</li> -->
					<!-- END TASKS -->
				</ul>
				<!-- END X-NAVIGATION VERTICAL -->                     
				@if (!empty(Session::get('success')))
				<?php
				$successes = Session::get('success');
				?>
				<div class="alert alert-success">
					<a class="close" data-dismiss="alert">×</a>
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
				@if (!empty(Session::get('info')))
				<?php
				$infos = !empty(Session::get('info'));
				?>
				<div class="alert alert-info">
					<a class="close" data-dismiss="alert">×</a>
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
				@if (!empty(Session::get('warning')))
				<?php
				$warnings = Session::get('warning');
				?>
				<div class="alert alert-warning">
					<a class="close" data-dismiss="alert">×</a>
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

				@if (!empty(Session::get('danger')))
				
				<?php
				$dangers = Session::get('danger');
				?>
				<div class="alert alert-danger">
					<a class="close" data-dismiss="alert">×</a>
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
		<!-- END PAGE CONTAINER -->

		<!-- MESSAGE BOX-->
		<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
			<div class="mb-container">
				<div class="mb-middle">
					<div class="mb-title"><span class="fa fa-sign-out"></span> <strong>Sair</strong> ?</div>
					<div class="mb-content">
						<p>Você tem certeza que quer deslogar?</p>
					</div>
					<div class="mb-footer">
						<div class="pull-right">
							<a href="{{ URL::to('id/sign-out') }}" class="btn btn-success btn-lg">Yes</a>
							<button class="btn btn-default btn-lg mb-control-close">No</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END MESSAGE BOX-->

		<!-- START PRELOADS -->
		<audio id="audio-alert" src="{{ URL::asset('audio/alert.mp3') }}" preload="auto"></audio>
		<audio id="audio-fail" src="{{ URL::asset('audio/fail.mp3') }}" preload="auto"></audio>
		<!-- END PRELOADS -->                  
		
	<!-- START SCRIPTS -->
		<!-- START PLUGINS -->
		<script type="text/javascript" src="{{ URL::asset('js/plugins/jquery/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/jquery/jquery-ui.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/bootstrap/bootstrap.min.js') }}"></script>        
		<!-- END PLUGINS -->

		<!-- START THIS PAGE PLUGINS-->        
		<script type='text/javascript' src="{{ URL::asset('js/plugins/icheck/icheck.min.js') }}"></script>        
		<script type="text/javascript" src="{{ URL::asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/scrolltotop/scrolltopcontrol.js') }}"></script>
		
		<script type="text/javascript" src="{{ URL::asset('js/plugins/morris/raphael-min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/morris/morris.min.js') }}"></script>       
		<script type="text/javascript" src="{{ URL::asset('js/plugins/rickshaw/d3.v3.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/rickshaw/rickshaw.min.js') }}"></script>
		<script type='text/javascript' src="{{ URL::asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
		<script type='text/javascript' src="{{ URL::asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>                
		<script type='text/javascript' src="{{ URL::asset('js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/bootstrap/bootstrap-timepicker.min.js') }}"></script>          
		<script type="text/javascript" src="{{ URL::asset('js/plugins/owl/owl.carousel.min.js') }}"></script>                 
		
		<script type="text/javascript" src="{{ URL::asset('js/plugins/moment.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/plugins/daterangepicker/daterangepicker.js') }}"></script>
		<!-- END THIS PAGE PLUGINS-->        

		<script type="text/javascript" src="{{ URL::asset('js/plugins.js') }}"></script>        
		<script type="text/javascript" src="{{ URL::asset('js/actions.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/maskedinput.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/angular/angular.min.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/angular/app.js') }}"></script>
		@section('script')

		@show
		<script type="text/javascript">
			$('<audio id="chatAudio"><source src="{{ URL::asset("\/audio\/alert.mp3") }}" type="audio/ogg"></audio>').appendTo('body');
			function get_mensagem(){
				var feedback = $.ajax({
					type: "POST",
					url: "{{ URL::to('mensagem/ajaxmensagem') }}",
					async: false
				}).complete(function(){
					setTimeout(function(){get_mensagem();}, 1000000);
				}).responseText;

				// $('div.feedback-box').html(feedback);
				obj = jQuery.parseJSON(feedback);
				$('.count-mensagens').html(obj.total);
				$('.div-group-mensagens').html('');

				jQuery.each( obj.resultados, function( i, val ) {
					$( ".div-group-mensagens").append('<a href="'+val.url+'" class="list-group-item"><div class="list-group-status status-online"></div><img src="{{ URL::asset("'+val.userfoto+'") }}" class="pull-left" alt="John Doe"/><span class="contacts-title">'+val.usernome+'</span><p>'+val.mensagemassunto+'</p></a>' );
				});
				if(obj.alerta){
					$('#chatAudio')[0].play();
				}
			}
			$(document).ready(function() {
				get_mensagem();
			});

		</script>
		<script type="text/javascript" src="{{ URL::asset('js/demo_dashboard.js') }}"></script>
		
		<!-- END TEMPLATE -->
	<!-- END SCRIPTS -->         
	</body>
</html>