
@extends('layouts.master')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Home</a>
		</li>
		<li class="active">User Baru</li>
	</ul><!-- /.breadcrumb -->

	
</div>
	<div class="page-content">
		
		<div class="page-header">
			<h1>
				Data Pelamar
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					
				</small>
			</h1>
		</div><!-- /.page-header -->

		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
		  {{session('sukses')}}
		</div>
		<!-- menampilkan flash alert menggunakan fungsi with di laravel -->
		<!-- @=artinya php, -->
		@endif

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->
				<table id="simple-table" class="table  table-bordered table-hover">
							<thead>
								<tr>
									<th class="center">
										<label class="pos-rel">
											<input type="checkbox" class="ace" />
											<span class="lbl"></span>
										</label>
									</th>
									<th class="detail-col">Details</th>
									<th>Nama</th>
									<th>Jenjang</th>
									<th class="hidden-480">Sekolah</th>

									<th>
										<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
										Jurusan
									</th>
									<th class="hidden-480">Nilai UAN/IPK</th>
									<th class="hidden-480">Akreditasi</th>
									<th class="hidden-480">Lowongan yang di daftar</th>
									<th class="hidden-480">Status</th>
									<th>AKSI</th>
								</tr>
							</thead>

							<tbody>
								@foreach ($Rekrutmen as $du)
								<tr>
									<td class="center">
										<label class="pos-rel">
											<input type="checkbox" class="ace" />
											<span class="lbl"></span>
										</label>
									</td>

									<td class="center">
										<div class="action-buttons">
											<a href="#" class="green bigger-140 show-details-btn" title="Show Details">
												<i class="ace-icon fa fa-angle-double-down"></i>
												<span class="sr-only">Details</span>
											</a>
										</div>
									</td>

									<td>
										<a href="#">{{$du->nama_lengkap}}</a>
									</td>
									<td>{{$du->jenjang}}</td>
									<td class="hidden-480">{{$du->sekolah}}</td>
									<td>{{$du->jurusan}}</td>

									<td class="hidden-480">
										<span class="label label-sm label-warning">{{$du->nilai_uan_ipk}}</span>
									</td>
									<td>{{$du->akreditasi}}</td>
									<td>{{$du->judul}}</td>
									<td>{{$du->keterangan}}</td>
									<td>
										<div class="hidden-sm hidden-xs btn-group">
											<a href="/pelamar/{{$du->KTP}}/updateterima" class="btn btn-success btn-sm" onclick="return confirm('Yakin akan diterima?')">
												<i class="ace-icon fa fa-check bigger-120"></i>
											</a>

										</div>

										<div class="hidden-md hidden-lg">
											<div class="inline pos-rel">
												<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
													<i class="ace-icon fa fa-cog icon-only bigger-110"></i>
												</button>

												<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
													<li>
														<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
															<span class="blue">
																<i class="ace-icon fa fa-search-plus bigger-120"></i>
															</span>
														</a>
													</li>

													<li>
														<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
															<span class="green">
																<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
															</span>
														</a>
													</li>

													<li>
														<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
															<span class="red">
																<i class="ace-icon fa fa-trash-o bigger-120"></i>
															</span>
														</a>
													</li>
												</ul>
											</div>
										</div>
									</td>
								</tr>

								<tr class="detail-row">
									<td colspan="10">
										<div class="table-detail">
											<div class="row">
												<div class="col-xs-12 col-sm-2">
													<div class="text-center">
														<img height="150" class="thumbnail inline no-margin-bottom" alt="Domain Owner's Avatar" src="{{asset('images/'.$du->avatar)}}" />
														<br />
														<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
															<div class="inline position-relative">
																<a class="user-title-label" href="#">
																	<i class="ace-icon fa fa-circle light-green"></i>
																	&nbsp;
																	<span class="white">{{$du->nama_lengkap}}</span>
																</a>
															</div>
														</div>
													</div>
												</div>

												<div class="col-xs-12 col-sm-7">
													<div class="space visible-xs"></div>

													<div class="profile-user-info profile-user-info-striped">
														<div class="profile-info-row">
															<div class="profile-info-name"> Username </div>

															<div class="profile-info-value">
																<span>{{$du->nama_lengkap}}</span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Alamat </div>

															<div class="profile-info-value">
																<i class="fa fa-map-marker light-orange bigger-110"></i>
																<span>{{$du->alamat_ktp}}</span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Tanggal Lahir </div>

															<div class="profile-info-value">
																<span>{{$du->tanggal_lahir}}</span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Jenjang </div>

															<div class="profile-info-value">
																<span>{{$du->jenjang}}</span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Universitas / Sekolah </div>

															<div class="profile-info-value">
																<span>{{$du->sekolah}}</span>
															</div>
														</div>

														<div class="profile-info-row">
															<div class="profile-info-name"> Jurusan </div>

															<div class="profile-info-value">
																<span>{{$du->jurusan}}</span>
															</div>
														</div>
														<div class="profile-info-row">
															<div class="profile-info-name"> Nilai UAN / IPK </div>

															<div class="profile-info-value">
																<span>{{$du->nilai_uan_ipk}}</span>
															</div>
														</div>
														<div class="profile-info-row">
															<div class="profile-info-name"> Akreditasi </div>

															<div class="profile-info-value">
																<span>{{$du->akreditasi}}</span>
															</div>
														</div>
													</div>
												</div>

												</div>
											</div>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
				</table>
				

				

				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->






@endsection

