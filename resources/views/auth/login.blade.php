
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>SPP</title>

	<!-- Global stylesheets -->
    <link rel="stylesheet" href="{{asset('aset/css/icons/icomoon/styles.css')}}">
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

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login card -->
				 <form method="POST" action="{{ route('login') }}" class="login-form">
                        @csrf
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<!-- <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i> -->
								<h5 class="mb-0">Login to your account</h5>
								<span class="d-block text-muted">Your credentials</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="email" class="form-control" name="email" required autocomplete="email" autofocus placeholder="enter email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="enter password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>

							<div class="form-group">
								<a href="#" class="btn btn-light btn-block">Sign up</a>
							</div> 

							<span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
						</div>
					</div>
				</form>
				<!-- /login card -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


<!-- Core JS files -->
<script src="{{asset('aset/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('aset/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('aset/js/main/app.js')}}"></script>

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