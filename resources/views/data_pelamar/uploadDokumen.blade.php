
@extends('layouts.master')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Data Pelamar</a>
		</li>
		<li class="active">Pendidikan</li>
	</ul><!-- /.breadcrumb -->

</div>
					<div class="page-content">
						
						<div class="page-header">
							<h1>
								Upload Dokumen
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="hr dotted"></div>

								<div>
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12">
											
										@foreach($User_pendaftarans as $up)

										@if(session('sukses'))
										<div class="alert alert-success" role="alert">
										  {{session('sukses')}}
										</div>
										<!-- menampilkan flash alert menggunakan fungsi with di laravel -->
										<!-- @=artinya php, -->
										@endif
											<form action="/uploadDokumen/{{$up->email}}/upload" method="POST" enctype="multipart/form-data">
	        								{{csrf_field()}}
											<div class="profile-user-info profile-user-info-striped">
											
												<div class="profile-info-row">
													<div class="profile-info-name center"> Foto KTP </div>

													<div class="profile-info-value {{$errors->has('foto_ktp') ? 'has-error' : ''}}">
														<div class="form-group{{$errors->has('foto_ktp') ? 'has-error' : ''}}">
														    <input type="file" name="foto_ktp" class="form-control" >
															@if($errors->has('foto_ktp'))
																<span class="help-block">{{$errors->first('foto_ktp')}}</span>
															@endif
													  </div>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name center"> IJASAH </div>

													<div class="profile-info-value {{$errors->has('ijasah') ? 'has-error' : ''}}">
														<div class="form-group{{$errors->has('ijasah') ? 'has-error' : ''}}">
														    <input type="file" name="ijasah" class="form-control" >
															@if($errors->has('ijasah'))
																<span class="help-block">{{$errors->first('ijasah')}}</span>
															@endif
													  </div>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name center"> TRANSKRIP NILAI </div>

													<div class="profile-info-value {{$errors->has('transkrip_nilai') ? 'has-error' : ''}}">
														<div class="form-group{{$errors->has('transkrip_nilai') ? 'has-error' : ''}}">
														    <input type="file" name="transkrip_nilai" class="form-control" >
															@if($errors->has('transkrip_nilai'))
																<span class="help-block">{{$errors->first('transkrip_nilai')}}</span>
															@endif
													  </div>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name center"> AKSI </div>
											      	<div class="profile-info-value">
											        <button type="submit" class="btn btn-primary">Save</button>
											       	</div>
										    	</div>
										    </div>
										    </form>

										    
										    @endforeach
											

											<div class="space-20"></div>

											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">KTP</th>
														<th class="center">IJASAH</th>
														<th class="center">TRANSKRIP NILAI</th>
												</thead>

												<tbody>
													@foreach ($User_pendaftarans as $tabel)
													<tr>
														
														<th>{{$tabel->foto_ktp}} </th>
														<th>{{$tabel->ijasah}}</th>
														<th>{{$tabel->transkrip_nilai}}</th>
													</tr>
													@endforeach
												</tbody>
											</table>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

@endsection

