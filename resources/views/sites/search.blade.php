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

							<body>
								<div class="row">
									<div class="col">
										<div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
										@foreach ($b as $key =>$value)

											<div class="timeline-step">
												<div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
													<div class="inner-circle"></div>
											
													<p class="h6 mt-3 mb-1">{{$b[$key]->Date}}</p>
													<p class="h6 mt-3 mb-1">{{$b[$key]->Time}}</p>
													<p class="h6 text-muted mb-0 mb-lg-0">{{$b[$key]->Status}}</p>
													<p class="h6 text-muted mb-0 mb-lg-0">{{$b[$key]->Office_Name}}</p>
												</div>
											</div>
										@endforeach
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col">
									<h1 class="m-0" style="text-align: center">MOHON PERHATIAN!</h1>
									</div>
								</div>

								<div class="row">
									<div class="col-lg-3 mb-4">
										<div class="card">
											<img class="card-img-top" src="" alt="">

											<div class="card-body">
												<h5 class="card-title">Card title</h5>
												<p class="card-text">
													Some quick example text to build on 
													the card title and make up the bulk 
													of the card's content.
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-3 mb-4">
										<div class="card">
											<img class="card-img-top" src="" alt="">

											<div class="card-body">
												<h5 class="card-title">Card title</h5>
												<p class="card-text">
													Some quick example text to build on the 
													card title and make up the bulk of the 
													card's content.
												</p>
											</div>
										</div>
									</div>
									<div class="col-lg-3 mb-4">
										<div class="card">
											<img class="card-img-top" src="" alt="">

											<div class="card-body">
												<h5 class="card-title">Card title</h5>
												<p class="card-text">
													Some quick example text to build on the 
													card title and make up the bulk of the 
													card's content.
												</p>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col">
										<p class="h6 text-muted mb-0 mb-lg-0"><i>*Apabila paket tidak diambil lebih dari 3 hari akan dikenakan biaya simpan sebesar Rp2.500,-</i></p>
									</div>
								</div>

								<style type="text/css">
									body{margin-top:20px;}
									.timeline-steps {
										display: flex;
										justify-content: center;
										flex-wrap: wrap
									}
									
									.timeline-steps .timeline-step {
										align-items: center;
										display: flex;
										flex-direction: column;
										position: relative;
										margin: 1rem
									}
									
									@media (min-width:768px) {
										.timeline-steps .timeline-step:not(:last-child):after {
											content: "";
											display: block;
											border-top: .25rem dotted #3b82f6;
											width: 3.46rem;
											position: absolute;
											left: 7.5rem;
											top: .3125rem
										}
										.timeline-steps .timeline-step:not(:first-child):before {
											content: "";
											display: block;
											border-top: .25rem dotted #3b82f6;
											width: 3.8125rem;
											position: absolute;
											right: 7.5rem;
											top: .3125rem
										}
									}
									
									.timeline-steps .timeline-content {
										width: 10rem;
										text-align: center
									}
									
									.timeline-steps .timeline-content .inner-circle {
										border-radius: 1.5rem;
										height: 1rem;
										width: 1rem;
										display: inline-flex;
										align-items: center;
										justify-content: center;
										background-color: #3b82f6
									}
									
									.timeline-steps .timeline-content .inner-circle:before {
										content: "";
										background-color: #3b82f6;
										display: inline-block;
										height: 3rem;
										width: 3rem;
										min-width: 3rem;
										border-radius: 6.25rem;
										opacity: .5
									}

									.card {
										margin: 0 auto; /* Added */
										float: none; /* Added */
										margin-bottom: 10px; /* Added */
									}
									</style>
									
									<script type="text/javascript">
									
									</script>
								</body>					
						</div>
					</div>										
				</div>					
			</section>
			

		@stop
			<!-- End cta-two Area -->