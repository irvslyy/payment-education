
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SPP</title>
	@toastr_css
    
	<!-- Global stylesheets -->
    <link rel="stylesheet" href="{{asset('aset/css/icons/icomoon/styles.css')}}">
    <link rel="stylesheet" href="{{asset('aset/css/icons/fontawesome/styles.min.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-light">

		<!-- Header with logos -->
		<div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
			<div class="navbar-brand navbar-brand-md">
				<a href="index.html" class="d-inline-block">
					<img src="../../../../global_assets/images/logo_light.png" alt="">
				</a>
			</div>
			
			<div class="navbar-brand navbar-brand-xs">
				<a href="index.html" class="d-inline-block">
					<img src="../../../../global_assets/images/logo_icon_light.png" alt="">
				</a>
			</div>
		</div>
		<!-- /header with logos -->
	

		<!-- Mobile controls -->
		<div class="d-flex flex-1 d-md-none">
			<div class="navbar-brand mr-auto">
				<a href="index.html" class="d-inline-block">
					<img src="../../../../global_assets/images/logo_dark.png" alt="">
				</a>
			</div>	

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>

			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>
		<!-- /mobile controls -->


		<!-- Navbar content -->
		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-people"></i>
						<span class="d-md-none ml-2">Users</span>
						<span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
					</a>
					
					<div class="dropdown-menu dropdown-content wmin-md-300">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Users online</span>
							<a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<a href="#" class="media-title font-weight-semibold">Vanessa Aurelius</a>
										<span class="d-block text-muted font-size-sm">Calon karyawan</span>
									</div>
									<div class="ml-3 align-self-center"><span class="badge badge-mark border-grey-400"></span></div>
								</li>

							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All users</a>
							<a href="#" class="text-grey"><i class="icon-gear"></i></a>
						</div>
					</div>
				</li>
			</ul>

			<span class="badge bg-pink-400 badge-pill ml-md-3 mr-md-auto">1 users online</span>

			<ul class="navbar-nav">
				<!-- <li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
						<img src="../../../../global_assets/images/lang/gb.png" class="img-flag mr-2" alt="">
						English
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item english active"><img src="../../../../global_assets/images/lang/gb.png" class="img-flag" alt=""> English</a>
						<a href="#" class="dropdown-item ukrainian"><img src="../../../../global_assets/images/lang/ua.png" class="img-flag" alt=""> Українська</a>
						<a href="#" class="dropdown-item deutsch"><img src="../../../../global_assets/images/lang/de.png" class="img-flag" alt=""> Deutsch</a>
						<a href="#" class="dropdown-item espana"><img src="../../../../global_assets/images/lang/es.png" class="img-flag" alt=""> España</a>
						<a href="#" class="dropdown-item russian"><img src="../../../../global_assets/images/lang/ru.png" class="img-flag" alt=""> Русский</a>
					</div>
				</li> -->

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Messages</span>
						<span class="badge badge-mark border-pink-400 ml-auto ml-md-0"></span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Messages</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">

								<li class="media">
									<div class="mr-3">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Lyy23</span>
												<span class="text-muted float-right font-size-sm">Mon</span>
											</a>
										</div>
										
										<span class="text-muted">kontrak Lyy23 habis</span>
									</div>
								</li>
							</ul>
						</div>

						<div class="dropdown-content-footer bg-light">
							<a href="#" class="text-grey mr-auto">All messages</a>
							<div>
								<a href="#" class="text-grey" data-popup="tooltip" title="Mark all as read"><i class="icon-radio-unchecked"></i></a>
								<a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="{{asset('aset/images/placeholders/placeholder.jpg')}}" class="rounded-circle mr-2" height="34" alt="">
						<span>{{Auth::user()->name}}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
						<!-- <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-indigo-400 ml-auto">58</span></a> -->
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="icon-switch2"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
					</div>
				</li>
			</ul>
		</div>
		<!-- /navbar content -->
		
	</div>
	<!-- /main navbar -->

					
	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark  sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">
				
				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="{{asset('aset/images/placeholders/placeholder.jpg')}}" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">{{Auth::user()->name}}</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Dimana-mana, IYA
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->

				
				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="{{route('home')}}" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
									<span class="d-block font-weight-normal opacity-50">welcome to dashboard</span>
								</span>
							</a>
						</li>

                        <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-database4"></i> <span>Data</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{route('siswa.index')}}" class="nav-link">Siswa</a></li>
								<li class="nav-item"><a href="{{route('petugas.index')}}" class="nav-link">Petugas</a></li>
							</ul>
						</li>
						
                        <li class="nav-item"><a href="{{route('chart.index')}}" class="nav-link"><i class="icon-chart"></i> <span>Reporting chart</span></a></li>
                        <li class="nav-item"><a href="{{route('pembayaran.index')}}" class="nav-link"><i class="icon-paypal"></i> <span>Pembayaran</span></a></li>
                        <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-users"></i> <span>users management</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{route('user.index')}}" class="nav-link">users</a></li>
							</ul>
						</li>
                        <li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-history"></i> <span>Transaksi & History</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="{{route('history.index')}}" class="nav-link">history pembayaran</a></li>
                                <li class="nav-item"><a href="{{route('transaksi.index')}}" class="nav-link">Transaksi</a></li>
							</ul>
						</li>
                        <li class="nav-item"><a href="{{route('setting.index')}}" class="nav-link"><i class="icon-cog2"></i> <span>Setting SPP</span></a></li>

                        <li class="nav-item"><a href="{{route('trash.index')}}" class="nav-link"><i class="icon-trash"></i> <span>Trash</span></a></li>

						<!-- /main -->
							
					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none text-center text-md-left mb-3 mb-md-0">
						<div class="btn-group">
							<button type="button" class="btn bg-indigo-400"><i class="icon-stack2 mr-2"></i> New report</button>
							<button type="button" class="btn bg-indigo-400 dropdown-toggle" data-toggle="dropdown"></button>
							<div class="dropdown-menu dropdown-menu-right">
								<!-- <div class="dropdown-header">Actions</div> -->
								<!-- <a href="#" class="dropdown-item"><i class="icon-file-eye"></i> View reports</a>
								<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Edit reports</a>
								<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Statistics</a> -->
								<div class="dropdown-header">Export</div>
								<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to PDF</a>
								<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to CSV</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content pt-0">

			@yield('content')

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2020 
					</span>

					<!-- <ul class="navbar-nav ml-lg-auto">
						<li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
						<li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
						<li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
					</ul> -->
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>


	<!-- Core JS files -->
    
	<script src="{{asset('aset/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('aset/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('aset/js/main/app.js')}}"></script>
	@toastr_js
	@toastr_render
	<!-- <script src="{{asset('aset/js/plugins/loaders/blockui.min.js')}}"></script> -->
	<!-- <script src="{{asset('aset/js/plugins/ui/ripple.min.js')}}"></script> -->
	<!-- /core JS files -->
	<!-- Theme JS files -->
            <script src="{{asset('aset/js/plugins/visualization/d3/d3.min.js')}}"></script>
            <script src="{{asset('aset/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
            <script src="{{asset('aset/js/plugins/forms/styling/switchery.min.js')}}"></script>
            <script src="{{asset('aset/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
            <script src="{{asset('aset/js/plugins/ui/moment/moment.min.js')}}"></script>
            <script src="{{asset('aset/js/plugins/pickers/daterangepicker.js')}}"></script>
            <script src="{{asset('aset/js/demo_pages/dashboard.js')}}"></script>
	<!-- /theme JS files -->



</body>
</html>