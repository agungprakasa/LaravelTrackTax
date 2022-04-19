@extends('layouts.master')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Lowongan</a>
			</li>
		<li class="active">Pengumuman</li>
	</ul><!-- /.breadcrumb -->

	
</div>
		<div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<div class="clearfix">
						<div class="pull-right">
							<span class="green middle bolder">Choose result page type: &nbsp;</span>

							<div class="btn-toolbar inline middle no-margin">
								<div id="toggle-result-page" data-toggle="buttons" class="btn-group no-margin">
									<label class="btn btn-sm btn-yellow active">
										<span class="bigger-110">1</span>

										<input type="radio" value="1" />
									</label>

									<label class="btn btn-sm btn-yellow">
										<span class="bigger-110">2</span>

										<input type="radio" value="2" />
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="hr dotted"></div>

					<div>
						<div class="row search-page" id="search-page-1">
							<div class="col-xs-12">
								<div class="row">
									<div class="col-xs-12 col-sm-3">
										<div class="search-area well well-sm">
											<div class="search-filter-header bg-primary">
												<h5 class="smaller no-margin-bottom">
													<i class="ace-icon fa fa-sliders light-green bigger-130"></i>&nbsp; CARI PENGUMUMAN TERBARU DISINI
												</h5>
											</div>

											<div class="space-10"></div>

											<form method="GET" action="/Pengumuman">
												<div class="row">
													<div class="col-xs-12 col-sm-11 col-md-10">
														<div class="input-group">
															<input name="cari" type="text" class="form-control" placeholder="Tulis Judul Pengumumannya" />
															<div class="input-group-btn">
																<button type="button" class="btn btn-default no-border btn-sm">
																	<i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
																</button>
															</div>
														</div>
													</div>
												</div>
											</form>

											
											<div class="space-4"></div>
										</div>
									</div>

									<div class="col-xs-12 col-sm-9">
										<div class="row">
											<div class="search-area well col-xs-12">
												<div class="pull-left">
													<b class="text-primary">PENGUMUMAN HASIL REKRUTMEN</b>
												</div>	
											</div>
										</div>

										<div class="space-12"></div>

										<div class="row">
											<div class="col-xs-12">
												@foreach($pengumuman as $up)
												<div class="media search-media">
													
													<div class="media-body">
														<div>
															<h4 class="media-heading">
																<a href="#" class="blue">
																{{$up->judul}}</a>
															</h4>
															<p class="content-group-sm text-muted"><i>Published on :</i> <code class="ng-binding">{{$up->publish}}</code></p>
															<hr />
														</div>
														<p>
														@if(strlen($up->pengumuman)>=209)
															{!!substr($up->pengumuman,0,209).'...'!!}
														@else
															{!!$up->pengumuman!!}
														@endif

														</p>

														<div class="search-actions text-center">
														
															<a href="/pengumuman/{{$up->id}}/profile" class="search-btn-action btn btn-sm btn-block btn-info">VIEW MORE</a>
														</div>

													</div>
													
												</div>
												@endforeach

												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
					
								<!-- PAGE CONTENT ENDS -->

@endsection