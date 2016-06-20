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
								<li><a href="{{ URL::to('relatorio/cronogramademandainline') }}"><span class="fa fa-align-justify"></span> Serviço por Cliente (inline)</a></li>
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
					setTimeout(function(){get_mensagem();}, 3000000);
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
		<?php
		 	$localhost = array(
		    	'127.0.0.1',
		    	'::1'
			);
		?>
		@if(!in_array($_SERVER['REMOTE_ADDR'], $localhost))
			<script type="text/javascript">
			window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o||e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e,n){function r(t){try{s.console&&console.log(t)}catch(e){}}var o,i=t("ee"),a=t(13),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,-1!==o.indexOf("dev")&&(s.dev=!0),-1!==o.indexOf("nr_dev")&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,e,n){r(n.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,e){return t}).join(", ")))},{}],2:[function(t,e,n){function r(t,e,n,r,o){try{d?d-=1:i("err",[o||new UncaughtException(t,e,n)])}catch(s){try{i("ierr",[s,(new Date).getTime(),!0])}catch(c){}}return"function"==typeof f?f.apply(this,a(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function o(t){i("err",[t,(new Date).getTime()])}var i=t("handle"),a=t(14),s=t("ee"),c=t("loader"),f=window.onerror,u=!1,d=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(l){"stack"in l&&(t(7),t(6),"addEventListener"in window&&t(4),c.xhrWrappable&&t(8),u=!0)}s.on("fn-start",function(t,e,n){u&&(d+=1)}),s.on("fn-err",function(t,e,n){u&&(this.thrown=!0,o(n))}),s.on("fn-end",function(){u&&!this.thrown&&d>0&&(d-=1)}),s.on("internal-error",function(t){i("ierr",[t,(new Date).getTime(),!0])})},{}],3:[function(t,e,n){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(7),s=t(6);t("loader").features.stn=!0,t(5);var c=NREUM.o.EV;o.on("fn-start",function(t,e){var n=t[0];n instanceof c&&(this.bstStart=Date.now())}),o.on("fn-end",function(t,e){var n=t[0];n instanceof c&&i("bst",[n,e,this.bstStart,Date.now()])}),a.on("fn-start",function(t,e,n){this.bstStart=Date.now(),this.bstType=n}),a.on("fn-end",function(t,e){i("bstTimer",[e,this.bstStart,Date.now(),this.bstType])}),s.on("fn-start",function(){this.bstStart=Date.now()}),s.on("fn-end",function(t,e){i("bstTimer",[e,this.bstStart,Date.now(),"requestAnimationFrame"])}),o.on("pushState-start",function(t){this.time=Date.now(),this.startPath=location.pathname+location.hash}),o.on("pushState-end",function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),"addEventListener"in window.performance&&(window.performance.clearResourceTimings?window.performance.addEventListener("resourcetimingbufferfull",function(t){i("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.clearResourceTimings()},!1):window.performance.addEventListener("webkitresourcetimingbufferfull",function(t){i("bstResource",[window.performance.getEntriesByType("resource")]),window.performance.webkitClearResourceTimings()},!1)),document.addEventListener("scroll",r,!1),document.addEventListener("keypress",r,!1),document.addEventListener("click",r,!1)}},{}],4:[function(t,e,n){function r(t){for(var e=t;e&&!e.hasOwnProperty(u);)e=Object.getPrototypeOf(e);e&&o(e)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,e){return t[1]}var a=t("ee").get("events"),s=t(15)(a),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";e.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,e){if(t[1]){var n=t[1];if("function"==typeof n){var r=c(n,"nr@wrapped",function(){return s(n,"fn-",null,n.name||"anonymous")});this.wrapped=t[1]=r}else"function"==typeof n.handleEvent&&s.inPlace(n,["handleEvent"],"fn-")}}),a.on(d+"-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{}],5:[function(t,e,n){var r=t("ee").get("history"),o=t(15)(r);e.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],6:[function(t,e,n){var r=t("ee").get("raf"),o=t(15)(r);e.exports=r,o.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],7:[function(t,e,n){function r(t,e,n){t[0]=a(t[0],"fn-",null,n)}function o(t,e,n){this.method=n,this.timerDuration="number"==typeof t[1]?t[1]:0,t[0]=a(t[0],"fn-",this,n)}var i=t("ee").get("timer"),a=t(15)(i);e.exports=i,a.inPlace(window,["setTimeout","setImmediate"],"setTimer-"),a.inPlace(window,["setInterval"],"setInterval-"),a.inPlace(window,["clearTimeout","clearImmediate"],"clearTimeout-"),i.on("setInterval-start",r),i.on("setTimer-start",o)},{}],8:[function(t,e,n){function r(t,e){d.inPlace(e,["onreadystatechange"],"fn-",s)}function o(){var t=this,e=u.context(t);t.readyState>3&&!e.resolved&&(e.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,v,"fn-",s)}function i(t){w.push(t),h&&(g=-g,b.data=g)}function a(){for(var t=0;t<w.length;t++)r([],w[t]);w.length&&(w=[])}function s(t,e){return e}function c(t,e){for(var n in t)e[n]=t[n];return e}t(4);var f=t("ee"),u=f.get("xhr"),d=t(15)(u),l=NREUM.o,p=l.XHR,h=l.MO,m="readystatechange",v=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],w=[];e.exports=u;var y=window.XMLHttpRequest=function(t){var e=new p(t);try{u.emit("new-xhr",[e],e),e.addEventListener(m,o,!1)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}return e};if(c(p,y),y.prototype=p.prototype,d.inPlace(y.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,e){r(t,e),i(e)}),u.on("open-xhr-start",r),h){var g=1,b=document.createTextNode(g);new h(a).observe(b,{characterData:!0})}else f.on("fn-end",function(t){t[0]&&t[0].type===m||a()})},{}],9:[function(t,e,n){function r(t){var e=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;l>r;r++)t.removeEventListener(d[r],this.listener,!1);if(!e.aborted){if(n.duration=(new Date).getTime()-this.startTime,4===t.readyState){e.status=t.status;var i=o(t,this.lastSize);if(i&&(n.rxSize=i),this.sameOrigin){var a=t.getResponseHeader("X-NewRelic-App-Data");a&&(e.cat=a.split(", ").pop())}}else e.status=0;n.cbTime=this.cbTime,u.emit("xhr-done",[t],t),c("xhr",[e,n,this.startTime])}}}function o(t,e){var n=t.responseType;if("json"===n&&null!==e)return e;var r="arraybuffer"===n||"blob"===n||"json"===n?t.response:t.responseText;return i(r)}function i(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(e){return}}}function a(t,e){var n=f(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}var s=t("loader");if(s.xhrWrappable){var c=t("handle"),f=t(10),u=t("ee"),d=["load","error","abort","timeout"],l=d.length,p=t("id"),h=t(12),m=window.XMLHttpRequest;s.features.xhr=!0,t(8),u.on("new-xhr",function(t){var e=this;e.totalCbs=0,e.called=0,e.cbTime=0,e.end=r,e.ended=!1,e.xhrGuids={},e.lastSize=null,h&&(h>34||10>h)||window.opera||t.addEventListener("progress",function(t){e.lastSize=t.loaded},!1)}),u.on("open-xhr-start",function(t){this.params={method:t[0]},a(this,t[1]),this.metrics={}}),u.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),u.on("send-xhr-start",function(t,e){var n=this.metrics,r=t[0],o=this;if(n&&r){var a=i(r);a&&(n.txSize=a)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof e.onload))&&o.end(e)}catch(n){try{u.emit("internal-error",[n])}catch(r){}}};for(var s=0;l>s;s++)e.addEventListener(d[s],this.listener,!1)}),u.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),u.on("xhr-load-added",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),u.on("xhr-load-removed",function(t,e){var n=""+p(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),u.on("addEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&u.emit("xhr-load-added",[t[1],t[2]],e)}),u.on("removeEventListener-end",function(t,e){e instanceof m&&"load"===t[0]&&u.emit("xhr-load-removed",[t[1],t[2]],e)}),u.on("fn-start",function(t,e,n){e instanceof m&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),u.on("fn-end",function(t,e){this.xhrCbStart&&u.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}},{}],10:[function(t,e,n){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!e.protocol||":"===e.protocol||e.protocol===n.protocol,a=e.hostname===document.domain&&e.port===n.port;return r.sameOrigin=i&&(!e.hostname||a),r}},{}],11:[function(t,e,n){function r(t,e){return function(){o(t,[(new Date).getTime()].concat(a(arguments)),null,e)}}var o=t("handle"),i=t(13),a=t(14);"undefined"==typeof window.newrelic&&(newrelic=NREUM);var s=["setPageViewName","setCustomAttribute","finished","addToTrace","inlineHit"],c=["addPageAction"],f="api-";i(s,function(t,e){newrelic[e]=r(f+e,"api")}),i(c,function(t,e){newrelic[e]=r(f+e)}),e.exports=newrelic,newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),o("err",[t,(new Date).getTime()])}},{}],12:[function(t,e,n){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),e.exports=r},{}],13:[function(t,e,n){function r(t,e){var n=[],r="",i=0;for(r in t)o.call(t,r)&&(n[i]=e(r,t[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],14:[function(t,e,n){function r(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=r},{}],15:[function(t,e,n){function r(t){return!(t&&"function"==typeof t&&t.apply&&!t[a])}var o=t("ee"),i=t(14),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;e.exports=function(t){function e(t,e,n,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof n?n(r,a):n||{}}catch(u){d([u,"",[r,a,o],s])}f(e+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(l){throw f(e+"err",[r,a,l],s),l}finally{f(e+"end",[r,a,c],s)}}return r(t)?t:(e||(e=""),nrWrapper[a]=t,u(t,nrWrapper),nrWrapper)}function n(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function f(e,n,r){if(!c){c=!0;try{t.emit(e,n,r)}catch(o){d([o,e,n,r])}c=!1}}function u(t,e){if(Object.defineProperty&&Object.keys)try{var n=Object.keys(t);return n.forEach(function(n){Object.defineProperty(e,n,{get:function(){return t[n]},set:function(e){return t[n]=e,e}})}),e}catch(r){d([r])}for(var o in t)s.call(t,o)&&(e[o]=t[o]);return e}function d(e){try{t.emit("internal-error",e)}catch(n){}}return t||(t=o),e.inPlace=n,e.flag=a,e}},{}],ee:[function(t,e,n){function r(){}function o(t){function e(t){return t&&t instanceof r?t:t?s(t,a,i):i()}function n(n,r,o){t&&t(n,r,o);for(var i=e(o),a=l(n),s=a.length,c=0;s>c;c++)a[c].apply(i,r);var u=f[v[n]];return u&&u.push([w,n,r,i]),i}function d(t,e){m[t]=l(t).concat(e)}function l(t){return m[t]||[]}function p(t){return u[t]=u[t]||o(n)}function h(t,e){c(t,function(t,n){e=e||"feature",v[n]=e,e in f||(f[e]=[])})}var m={},v={},w={on:d,emit:n,get:p,listeners:l,context:e,buffer:h};return w}function i(){return new r}var a="nr@context",s=t("gos"),c=t(13),f={},u={},d=e.exports=o();d.backlog=f},{}],gos:[function(t,e,n){function r(t,e,n){if(o.call(t,e))return t[e];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[e]=r,r}var o=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(t,e,n){function r(t,e,n,r){o.buffer([t],r),o.emit(t,e,n)}var o=t("ee").get("handle");e.exports=r,r.ee=o},{}],id:[function(t,e,n){function r(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");e.exports=r},{}],loader:[function(t,e,n){function r(){if(!m++){var t=h.info=NREUM.info,e=u.getElementsByTagName("script")[0];if(t&&t.licenseKey&&t.applicationID&&e){c(l,function(e,n){t[e]||(t[e]=n)});var n="https"===d.split(":")[0]||t.sslForHttp;h.proto=n?"https://":"http://",s("mark",["onload",a()],null,"api");var r=u.createElement("script");r.src=h.proto+t.agent,e.parentNode.insertBefore(r,e)}}}function o(){"complete"===u.readyState&&i()}function i(){s("mark",["domContent",a()],null,"api")}function a(){return(new Date).getTime()}var s=t("handle"),c=t(13),f=window,u=f.document;NREUM.o={ST:setTimeout,CT:clearTimeout,XHR:f.XMLHttpRequest,REQ:f.Request,EV:f.Event,PR:f.Promise,MO:f.MutationObserver},t(11);var d=""+location,l={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-943.min.js"},p=window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent),h=e.exports={offset:a(),origin:d,features:{},xhrWrappable:p};u.addEventListener?(u.addEventListener("DOMContentLoaded",i,!1),f.addEventListener("load",r,!1)):(u.attachEvent("onreadystatechange",o),f.attachEvent("onload",r)),s("mark",["firstbyte",a()],null,"api");var m=0},{}]},{},["loader",2,9,3]);
			;NREUM.info={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",licenseKey:"2aec705621",applicationID:"20256253",sa:1}
			</script>
		@endif
		
		<!-- END TEMPLATE -->
	<!-- END SCRIPTS -->         
	</body>
</html>