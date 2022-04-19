@extends('layouts.master')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Lowongan</a>
			</li>
		<li class="active">Rekrutmen</li>
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
																<i class="ace-icon fa fa-sliders light-green bigger-130"></i>&nbsp; Cari Job Terbaru Disini
															</h5>
														</div>

														<div class="space-10"></div>

														<form method="GET" action="/Rekrutmen">
															<div class="row">
																<div class="col-xs-12 col-sm-11 col-md-10">
																	<div class="input-group">
																		<input type="text" class="form-control" 
																		name="cari" placeholder="Look within results" />
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
																<b class="text-primary">LIST LOWONGAN</b>
															</div>

															
														</div>
													</div>
													@if(session('sukses'))
													<div class="alert alert-success" role="alert">
													  {{session('sukses')}}
													</div>
													@elseif(session('gagal'))
													<div class="alert alert-danger" role="alert">
													  {{session('gagal')}}
													</div>
													<!-- menampilkan flash alert menggunakan fungsi with di laravel -->
													<!-- @=artinya php, -->
													@endif
													<div class="space-12"></div>

													<div class="row">
														<div class="col-xs-12">
															@foreach($rekrutmen as $up)
															<div class="media search-media">
																<div class="media-body">
																	<div>
																		<h4 class="media-heading">
																			<a href="#" class="blue">
																				{{$up->judul}}
																			</a>
																		</h4>
																	</div>
																	<p>@if(strlen($up->content)>=209)
																		{!!substr($up->content,0,209).'...'!!}
																	@else
																		{!!$up->content!!}
																	@endif</p>

																	<div class="search-actions text-center">

																		<a href="/rekrutmen/{{$up->id}}/rekrutmenhasil" class="search-btn-action btn btn-sm btn-block btn-info">VIEW MORE</a>
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

								<div class="hide">
									<div class="row search-page" id="search-page-2">
										<div class="col-xs-12 col-md-10 col-md-offset-1">
											<div class="search-area well no-margin-bottom">
												<form>
													<div class="row">
														<div class="col-md-6">
															<div class="input-group">
																<input type="text" class="form-control" name="search" value="Hello World" />
																<div class="input-group-btn">
																	<button type="button" class="btn btn-primary btn-sm">
																		<i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
																	</button>
																</div>
															</div>
														</div>
													</div>
												</form>

												<div class="space space-6"></div>
												<span class="grey">About 263,000,000 results (0.74 seconds)</span>
											</div>

											<div class="search-results">
												<div class="search-result">
													<h5 class="search-title">
														<a href="#">&quot;Hello, World!&quot; - Wikipedia, the free encyclopedia</a>
													</h5>
													<a class="text-success" href="#">en.wikipedia.org</a>

													<p class="search-content">
														A &quot;
														<b>Hello</b>
,
														<b>World</b>
!&quot; program is a computer program that outputs &quot;
														<b>Hello</b>
,
														<b>World</b>!&quot; (or some variant thereof) on a display device. Because it is typically one of the ...
													</p>
												</div>

												<div class="search-result">
													<h5 class="search-title">
														<a href="#">Hello World! - GNU Project</a>
													</h5>
													<a class="text-success" href="#">www.gnu.org</a>

													<p class="search-content">
														<b>Hello World</b>
! How the way people code “
														<b>Hello World</b>” varies depending on their age and job ...
													</p>
												</div>

												<div class="search-result">
													<h5 class="search-title">
														<a href="#">HelloWorld.java - Introduction to Programming in Java</a>
													</h5>
													<a class="text-success" href="#">introcs.cs.princeton.edu</a>

													<p class="search-content">
														<b>HelloWorld</b>
														code in Java. ...
														<b>HelloWorld</b>
.java. Below is the syntax highlighted version of
														<b>HelloWorld</b>.java from ...
													</p>
												</div>

												<div class="search-result">
													<h5 class="search-title">
														<a href="#">Hello, World! - Learn Python - Free Interactive Python Tutorial</a>
													</h5>
													<a class="text-success" href="#">www.learnpython.org</a>

													<p class="search-content">
														<b>Hello</b>
,
														<b>World</b>! Python is a very simple language, and has a very straightforward syntax. It encourages programmers to program without boilerplate (prepared) ...
													</p>
												</div>

												<div class="search-result">
													<h5 class="search-title">
														<a href="#">Hello World · GitHub Guides</a>
													</h5>
													<a class="text-success" href="#">guides.github.com</a>

													<p class="search-content">
														The
														<b>Hello World</b>
														project is a time-honored tradition in computer programming. It is a simple exercise that gets you started when learning something new. Let's get ...
													</p>
												</div>
											</div>

											<div class="search-area well well-sm text-center">
												<ul class="pagination">
													<li class="disabled">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li>
														<a href="#">4</a>
													</li>

													<li>
														<a href="#">5</a>
													</li>

													<li>
														<a href="#">
															<i class="ace-icon fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
								<!-- PAGE CONTENT ENDS -->

@endsection