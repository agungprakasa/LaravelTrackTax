<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login Page - Aplikasi Recruitment POS</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{asset('admin/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

		<!-- text fonts -->
		<link rel="stylesheet" href="{{asset('admin/assets/css/fonts.googleapis.com.css')}}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{asset('admin/assets/css/ace.min.css')}}" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="{{asset('admin/assets/css/ace-rtl.min.css')}}" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout light-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<br><br><br><br>
						<div class="login-container">
							<div class="center">
								<h1>
									
									<span class="yellow">Recruitment</span><br>
									<span class="yellow" id="id-text2">Pos Indonesia</span>
								</h1>
								
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												LOGIN YOUR ID
											</h4>

											<div class="space-6"></div>

											<form action="/postlogin" method="POST">
												{{csrf_field()}}
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input id="username" name="username" type="text" class="form-control" placeholder=" Your username" />
															<i class="ace-icon fa fa-user"></i>
														</span>
														<span class="text-danger">{{ $errors->first('username') }}</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input id="password" name="password" type="password" class="form-control" placeholder="Your Password" />
															<i class="ace-icon fa fa-lock"></i>
														</span>
														<span class="text-danger">{{ $errors->first('password') }}</span>
													</label>

													<div class="form-group">
												        <label for="captcha">Captcha</label>
												          {!! NoCaptcha::renderJs() !!}
												          {!! NoCaptcha::display() !!}
												        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
												     </div>


													<div class="space"></div>

													<div class="clearfix">
														
														<button type="submit" class="width-35 pull-left btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>
									</div><!-- /.widget-body -->
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->
						@if(session('alert'))
						<div class="alert alert-warning" role="alert">
						  {{session('alert')}}
						</div>
						<!-- menampilkan flash alert menggunakan fungsi with di laravel -->
						<!-- @=artinya php, -->
						@endif
						<h4 class="blue align-center" id="id-company-text">&copy; Developer Agung Prakasa</h4>
						{{Session::get('email')}}

						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="{{asset('admin/assets/js/jquery-2.1.4.min.js')}}"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing backgroun

		</script>
	</body>
</html>
