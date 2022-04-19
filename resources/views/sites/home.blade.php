@extends ('layouts.frontend')


@section('content')


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg">
				</div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-12 ">
							<div class="row">
							<div class="col-md-8 offset-md-2">
							<form action="/search" method="POST">
								@csrf
								<div class="input-group">
								<input type="search" class="form-control form-control-lg" name="barcode" placeholder="Lacak kiriman Anda...">
									<div class="input-group-append">
									<button type="submit" class="btn btn-lg btn-default">
										<i class="fa fa-search"></i>
									</button>
									</div>
								</div>
							</form>
							</div>
							</div>
						</div>
					</div>										
				</div>					
			</section>
			

		@stop
			<!-- End cta-two Area -->