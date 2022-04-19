
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
								Biodata Pendidikan Pelamar
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
										<div class="col-xs-12 col-sm-3 center">
											<div>
												@foreach($User_pendaftarans as $up)
												<span class="profile-picture">
													@if($up->avatar != '' || $up->avatar != null)
														<img id="avatar" class="editable img-responsive"  src="{{asset('images/'.$up->avatar)}}" />
													@else
														<img id="avatar" class="editable img-responsive"  src="{{asset('images/default.jpg')}}" />	
													@endif
												</span>

												<div class="space-4"></div>
												
												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="">
															<span class="white">{{$up->nama_lengkap}}</span>
														</a>
													</div>
												</div>
											</div>

											<div class="space-6"></div>

											<div class="hr hr12 dotted"></div>

											<!-- <div class="clearfix">
												<div class="grid2">
													<span class="bigger-175 blue">1</span>

													<br />
													Job yang dilamar
												</div>

												<div class="grid2">
													<span class="bigger-175 blue">12</span>

													<br />
													Info Job Terbaru
												</div>
											</div> -->

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">

										@if(session('sukses'))
										<div class="alert alert-success" role="alert">
										  {{session('sukses')}}
										</div>
										<!-- menampilkan flash alert menggunakan fungsi with di laravel -->
										<!-- @=artinya php, -->
										@endif
											<form action="/pendidikan/{{$up->email}}/update" method="POST" enctype="multipart/form-data">
	        								{{csrf_field()}}
											<div class="profile-user-info profile-user-info-striped">
											
												<div class="profile-info-row">
													<div class="profile-info-name"> JENJANG </div>

													<div class="profile-info-value {{$errors->has('jenjang') ? 'has-error' : ''}}">
														<select name="jenjang" class="form-control" id="exampleFormControlSelect1">
													      <option>SLTA</option>
													      <option>D3</option>
													      <option>D4/S1</option>
													      <option>S2</option>
													      <option>S3</option>
													    </select>
													    	@if($errors->has('jenjang'))
																	<span class="help-block">{{$errors->first('jenjang')}}</span>
															@endif
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> SEKOLAH (INSTITUSI) </div>

													<div class="profile-info-value {{$errors->has('sekolah') ? 'has-error' : ''}}">
																										
														<input name="sekolah" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sekolah/Universitas" value="{{$up->sekolah}}" >
														@if($errors->has('sekolah'))
																	<span class="help-block">{{$errors->first('sekolah')}}</span>
														@endif
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> JURUSAN </div>

													<div class="profile-info-value {{$errors->has('jurusan') ? 'has-error' : ''}}">
														<input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" placeholder="Jurusan" value="{{$up->jurusan}}" >
														@if($errors->has('jurusan'))
																	<span class="help-block">{{$errors->first('jurusan')}}</span>
														@endif
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> KOTA </div>

													<div class="profile-info-value {{$errors->has('kota') ? 'has-error' : ''}}">
														<input name="kota" type="text" class="form-control" id="exampleInputEmail1" placeholder="Kota Institusi/Sekolah" value="{{$up->kota}}" >
														@if($errors->has('kota'))
																	<span class="help-block">{{$errors->first('kota')}}</span>
														@endif
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> TANGGAL LULUS </div>

													<div class="profile-info-value {{$errors->has('tanggal_lulus') ? 'has-error' : ''}}">
														
														<input name="tanggal_lulus" type="text" class="form-control date-picker" id="id-date-picker-1" aria-describedby="emailHelp" value="{{$up->tanggal_lulus}}" data-date-format="dd-mm-yyyy" >
														
														@if($errors->has('tanggal_lulus'))
																<span class="help-block">{{$errors->first('tanggal_lulus')}}</span>
														@endif
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> NILAI RATA-RATA UAN/IPK </div>

													<div class="profile-info-value {{$errors->has('nilai_uan_ipk') ? 'has-error' : ''}}">
														<input name="nilai_uan_ipk" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nilai UAS / IPK" value="{{$up->nilai_uan_ipk}}">
														@if($errors->has('nilai_uan_ipk'))
																<span class="help-block">{{$errors->first('nilai_uan_ipk')}}</span>
														@endif
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> AKREDITASI </div>

													<div class="profile-info-value {{$errors->has('akreditasi') ? 'has-error' : ''}}">
														<select name="akreditasi" class="form-control" id="exampleFormControlSelect1">
													      <option>A</option>
													      <option>B</option>
													    </select>
													    @if($errors->has('akreditasi'))
																<span class="help-block">{{$errors->first('akreditasi')}}</span>
														@endif
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> </div>
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
														<th>Tingkat</th>
														<th>Jurusan</th>
														<th>Nama Sekolah (Institusi)</th>
														<th>Kota</th>
														<th>Nilai UAN (IPK)</th>
														<th>Tanggal Kelulusan</th>
														<th>Akreditasi</th>
													</tr>
												</thead>

												<tbody>
													@foreach ($User_pendaftarans as $tabel)
													<tr>
														
														<th>{{$tabel->jenjang}} </th>
														<th>{{$tabel->jurusan}}</th>
														<th>{{$tabel->sekolah}}</th>
														<th>{{$tabel->kota}}</th>
														<th>{{$tabel->nilai_uan_ipk}}</th>
														<th>{{$tabel->tanggal_lulus}}</th>
														<th>{{$tabel->akreditasi}}</th>
													</tr>
													@endforeach
												</tbody>
											</table>
										
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

@endsection

