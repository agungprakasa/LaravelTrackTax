@extends('layouts.frontend')

@section('content')
	<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								Pendaftaran <br>
								Jadilah yang terbaik disini.
							</h1>
							<p>
								inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
							</p>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							<form method="post" class="form-wrap" action="/register/userbaru">
								{{csrf_field()}}
								<h4 class="text-white pb-20 text-center mb-30">Form Pendaftaran</h4>
				    			
								<div class="form-group{{$errors->has('KTP') ? 'has-error' : ''}}">
								<input type="number" class="form-control" name="KTP" placeholder="Your KTP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your KTP'">
								@if($errors->has('KTP'))
								<span class="help-block">{{$errors->first('KTP')}}</span>
									@endif
								</div>

								<div class="form-group{{$errors->has('nama_lengkap') ? 'has-error' : ''}}">
								<input type="text" class="form-control" name="nama_lengkap" placeholder="Your Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Full Name'">
								@if($errors->has('nama_lengkap'))
								<span class="help-block">{{$errors->first('nama_lengkap')}}</span>
									@endif
								</div>

								<div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
								<input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
								@if($errors->has('email'))
								<span class="help-block">{{$errors->first('email')}}</span>
									@endif
								</div>
								<div class="form-group{{$errors->has('username') ? 'has-error' : ''}}">
								<input type="text" class="form-control" name="username" placeholder="Your username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your username'" >
								@if($errors->has('username'))
								<span class="help-block">{{$errors->first('username')}}</span>
								@endif
								</div>
								<div class="form-group{{$errors->has('password') ? 'has-error' : ''}}">
								<input type="password" class="form-control" name="password" placeholder="Your Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Password'" >
								@if($errors->has('password'))
								<span class="help-block">{{$errors->first('password')}}</span>
								@endif
								</div>									
								<button class="primary-btn text-uppercase">Submit</button>
								<br>
								<br>
								@if(session('sukses'))
									<div class="alert alert-success" role="alert">
									  {{session('sukses')}}
									</div>
									<!-- menampilkan flash alert menggunakan fungsi with di laravel -->
									<!-- @=artinya php, -->
								@endif
							</form>
						</div>
						
					</div>
				</div>	
			</section>
@stop