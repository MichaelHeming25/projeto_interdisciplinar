<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Dashboard | Usuários</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="QueenAdmin - Beautiful Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="{{ asset('templates/theme/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/main.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/skins/full-white.css') }}" rel="stylesheet" type="text/css">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
	<!-- Fav and touch icons -->
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="144x144" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon144x144.png') }} ">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="114x114" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon114x114.png') }} ">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="72x72" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon72x72.png') }} ">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="57x57" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon57x57.png') }} ">
	<link rel="shortcut icon" href="{{ asset('templates/theme/assets/ico/favicon.ico')}}">
</head>

<body class="fixed-top-active dashboard fixed-left-active">
	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- TOP NAV BAR -->
		@include('templates.nav-top')

		{{-- MENU DE NAVEGAÇÃO --}}
		@include('templates.nav-left')

		<div id="col-right" class="col-right ">
			<div class="container-fluid primary-content">

				<div class="title">
					<span>
						Despesas
					</span>
				</div>

				<div class="infos">

					<div class="info-text">
						<div class="quick-info">
							<i class="fas fa-calculator"></i>
							{{-- <i class="fas fa-calculator"></i> --}}
							<div>Total de despesas <span>R$ 200,00</span></div>
						</div>
					</div>
					<div class="info-text">
						<div class="quick-info">
							<i class="ion-cash"></i>
							<div>Em aberto <span>R$ 200,00</span></div>
						</div>
					</div>
					<div class="info-text">
						<div class="quick-info">
							<i class="far fa-check-circle"></i>
							<div>Pago <span>R$ 200,00</span></div>
						</div>
					</div>

				</div>

				{{-- TABLE --}}
				<div class="widget" id="widget">
					<div class="widget-header clearfix">
						<h3><i class="icon ion-pricetag"></i> <span>Administradores do sistema</span></h3>
						<div class="btn-group widget-header-toolbar">

							<button type="button" class="btn-plus" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="margin-bottom: 1rem;"><i class="fas fa-plus"></i></button>

							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-user-plus" style="padding-right:0.5rem;"></i>Cadastrar despesa</h5>
											</button>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" id="form" role="form" action="{{ route('usuario.cadastrado') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
												@csrf
												<div class="form-group">
													<label for="name" class="control-label sr-only">Username</label>
													<div class="col-sm-12">
														<input type="text" class="form-control" id="name" name="name" placeholder="Username" required data-parsley-minlength="8">
													</div>
												</div>
												
												<div class="form-group">
													<label for="email" class="control-label sr-only">Email</label>
													<div class="col-sm-12">
														<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
													</div>
												</div>

												<div class="form-group">
													<label for="phone" class="control-label sr-only">Telefone</label>
													<div class="col-sm-12">
														<input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone" required>
													</div>
												</div>
												
												<div class="form-group">
													<label for="password" class="control-label sr-only">Password</label>
													<div class="col-sm-12">
														<input type="password" class="form-control" id="password" name="password" placeholder="Password" required data-parsley-minlength="8">
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-12">
														<button type="submit" class="btn btn-success"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Cadastrar conta</button>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					@if (session('mensagem'))
						<div class="sacefull">
							
							<div class="alert alert-success">
								<span>
									<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
									{{ session('mensagem') }}
								</span>
								<div class="alert-close">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fas fa-times"></i></span>
									</button>
								</div>
							</div>
						</div>
					@elseif(session('invalido'))
						
						<div class="alert alert-danger">
							<span>
								<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
								{{ session('invalido') }}
							</span>
							<div class="alert-close">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true"><i class="fas fa-times"></i></span>
								</button>
							</div>
						</div>
					@endif

					<div class="widget-content table-responsive">
						<table id="ticket-table" class="table table-sorting">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nome</th>
									<th>Telefone</th>
									<th>Email</th>
									<th>Criado em</th>
									<th>Editar / Remover</th>
								</tr>
							</thead>
							<tbody>
                                @for ($i = 0; $i < sizeof($users); $i++)
								<tr>
                                    @isset($users[$i]['id'])
                                        <td><a href="#">#{{ $users[$i]['id'] }}</a></td>
                                    @endisset

                                    @isset($users[$i]['name'])
                                        <td>{{ $users[$i]['name'] }}</td>
									@endisset
									
									@isset($users[$i]['phone'])
                                        <td>{{ $users[$i]['phone'] }}</td>
									@endisset
									
                                    @isset($users[$i]['email'])
                                        <td>{{ $users[$i]['email'] }}</td>
									@endisset
									
                                    @isset($users[$i]['created_at'])
                                        <td>{{ $users[$i]['created_at'] }}</td>
									@endisset
									
									<td>
                                      <div class="botoes">
										<button type="button" class="botao-editar" style="margin-right: 10px;" onclick="javascript:location.href='usuarios/editar/{{ $users[$i]['id'] }}'"><span class="entypo-tools"><i class="fas fa-edit"></i></span></button>
                                        <button type="button" class="botao-remover" onclick="javascript:location.href='usuarios/remover/{{ $users[$i]['id'] }}'"><i class="far fa-trash-alt"></i></button>  
                                      </div>
									</td>

								</tr>
							@endfor
							</tbody>
						</table>
					</div>
				</div>
				
				<!-- END TICKETS -->
			</div>
			<div class="right-sidebar">
				<!-- CHAT -->
				<div class="widget widget-chat-contacts">
					<div class="widget-header clearfix">
						<h3 class="sr-only">CHAT</h3>
						<div class="btn-group btn-group-justified widget-header-toolbar visible-lg">
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs"><i class="icon ion-plus-circled"></i> Add</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn dropdown-toggle btn-xs btn-success" data-btnclass="btn-success" data-toggle="dropdown">Online <span class="caret"></span></button>
								<ul class="dropdown-menu dropdown-menu-right chat-status" role="menu">
									<li><a href="#" class="online" data-btnclass="btn-success">Online</a></li>
									<li><a href="#" class="away" data-btnclass="btn-warning">Away</a></li>
									<li><a href="#" class="busy" data-btnclass="btn-danger">Busy</a></li>
									<li><a href="#" class="offline" data-btnclass="btn-default">Offline</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="widget-content">
						<strong>Online (4)</strong>
						<ul class="list-unstyled chat-contacts">
							<li>
								<a href="#" id="theusername"><img src="{{ asset('templates/theme/assets/img/user1.png')}}" class="img-circle" alt="Antonius">Antonius</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user2.png')}}" class="img-circle" alt="Antonius">Michael Smith</a>
							</li>
							<li class="away">
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user3.png')}}" class="img-circle" alt="Antonius">Stella Ray</a>
							</li>
							<li class="busy">
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user4.png')}}" class="img-circle" alt="Antonius">Jane Doe</a>
							</li>
						</ul>
						<strong>Offline (6)</strong>
						<ul class="list-unstyled chat-contacts contacts-offline">
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user5.png')}}" class="img-circle" alt="John Simmons">John Simmons</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user6.png')}}" class="img-circle" alt="Jack Bay">Jack Bay</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user7.png')}}" class="img-circle" alt="Daraiana">Daraiana</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user8.png')}}" class="img-circle" alt="Alessio Ferrara">Alessio Ferrara</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user9.png')}}" class="img-circle" alt="Sorana">Sorana</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user10.pn')}}" class="img-circle" alt="Regan Morton">Regan Morton</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- END CHAT -->
			</div>
		</div>
		<!-- END COLUMN RIGHT -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src=" {{ asset('templates/theme/assets/js/jquery/jquery-2.1.0.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/bootstrap/bootstrap.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/queen-common.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/jquery-ui/jquery-ui-1.10.4.custom.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.resize.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.time.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.orderBars.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/dropzone/dropzone.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/datatable/jquery.dataTables.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/datatable/dataTables.bootstrap.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/google-map/google-map.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/jquery-easypiechart/jquery.easypiechart.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/queen-charts.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/queen-table.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/queen-maps.js') }}"></script>
	<script src=" {{ asset('dropdown.js') }}"></script>
	<script src=" {{ asset('parsley.min.js') }}"></script>
</body>

</html>
