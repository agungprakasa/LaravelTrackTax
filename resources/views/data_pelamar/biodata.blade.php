
@extends('layouts.master')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Data Pelamar</a>
		</li>
		<li class="active">Biodata</li>
	</ul><!-- /.breadcrumb -->

	
</div>
					<div class="page-content">
						
						<div class="page-header">
							<h1>
								Pengisian Biodata Pelamar
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

										
										</div>

										<div class="col-xs-12 col-sm-9">

										@if(session('sukses'))
										<div class="alert alert-success" role="alert">
										  {{session('sukses')}}
										</div>
										<!-- menampilkan flash alert menggunakan fungsi with di laravel -->
										<!-- @=artinya php, -->
										@endif
											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name"> KTP </div>

													<div class="profile-info-value">
														<span class="editable" id="KTP">
															{{$up->KTP}}
														</span>
														
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Nama Lengkap </div>

													<div class="profile-info-value">
																										
														<span class="editable" id="nama_lengkap">{{$up->nama_lengkap}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Tempat Lahir </div>

													<div class="profile-info-value">
														<span class="editable" id="tempat_lahir">{{$up->tempat_lahir}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Tanggal Lahir </div>

													<div class="profile-info-value">
														<span class="editable" id="tanggal_lahir">{{$up->tanggal_lahir}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Email </div>

													<div class="profile-info-value">
														<span class="editable" id="email">{{$up->email}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Jenis Kelamin </div>

													<div class="profile-info-value">
														<span class="editable" id="jenis_kelamin">{{$up->jenis_kelamin}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Status Nikah </div>

													<div class="profile-info-value">
														<span class="editable" id="email">{{$up->status_nikah}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Kewarganegaraan </div>

													<div class="profile-info-value">
														<span class="editable" id="kewarganegaraan">{{$up->kewarganegaraan}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Agama </div>

													<div class="profile-info-value">
														<span class="editable" id="agama">{{$up->agama}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Provinsi </div>

													<div class="profile-info-value">
														<span class="editable" id="provinsi">{{$up->provinsi}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Kota/Kabupaten </div>

													<div class="profile-info-value">
														<span class="editable" id="kota_kabupaten">{{$up->kota_kabupaten}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Kecamatan </div>

													<div class="profile-info-value">
														<span class="editable" id="kecamatan">{{$up->kecamatan}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Kelurahan </div>

													<div class="profile-info-value">
														<span class="editable" id="kelurahan">{{$up->kelurahan}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> No.Handphone </div>

													<div class="profile-info-value">
														<span class="editable" id="handphone">{{$up->handphone}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Alamat KTP </div>

													<div class="profile-info-value">
														<span class="editable" id="alamat_ktp">{{$up->alamat_ktp}}</span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> NPWP </div>

													<div class="profile-info-value">
														<span class="editable" id="npwp">{{$up->npwp}}</span>
													</div>
												</div>
												<div class="profile-info-row">
												<div class="profile-info-name"> </div>
												<a href="#modal-wizard" data-toggle="modal" class="btn btn-success btn-sm">Edit Data Pelamar</a>
												</div>
											</div>
											

											<div class="space-20"></div>
										
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->

<!-- Modal -->
	<div class="modal fade" id="modal-wizard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">EDIT BIODATA PELAMAR</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="/pelamar/{{$up->KTP}}/update" method="POST" enctype="multipart/form-data">
	        {{csrf_field()}}
				  <div class="form-group{{$errors->has('KTP') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1"> KTP </label>
				    <input name="KTP" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$up->KTP}}" readonly>
				    @if($errors->has('KTP'))
							<span class="help-block">{{$errors->first('KTP')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('nama_lengkap') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1"> Nama </label>
				    <input name="nama_lengkap" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama_lengkap" value="{{$up->nama_lengkap}}">
				  	@if($errors->has('nama_lengkap'))
							<span class="help-block">{{$errors->first('nama_lengkap')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('tempat_lahir') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1"> Tempat Lahir </label>
				    <input name="tempat_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="tempat_lahir" value="{{$up->tempat_lahir}}">
				  	@if($errors->has('tempat_lahir'))
							<span class="help-block">{{$errors->first('tempat_lahir')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('tanggal_lahir') ? 'has-error' : ''}}">
				    <label for="id-date-picker-1"><i class="fa fa-calendar bigger-110"></i> Tanggal Lahir </label>
				    <input name="tanggal_lahir" type="text" class="form-control date-picker" id="id-date-picker-1" aria-describedby="emailHelp" value="{{$up->tanggal_lahir}}" data-date-format="dd-mm-yyyy" >
				    
				  	@if($errors->has('tanggal_lahir'))
							<span class="help-block">{{$errors->first('tanggal_lahir')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1"> Email </label>
				    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" value="{{$up->email}}" readonly>
				  	@if($errors->has('email'))
							<span class="help-block">{{$errors->first('email')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
				    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
				    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
				      <option>L</option>
				      <option>P</option>
				    </select>
				    @if($errors->has('jenis_kelamin'))
							<span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
					@endif
				  </div>

				  <div class="form-group{{$errors->has('status_nikah') ? 'has-error' : ''}}">
				    <label for="exampleFormControlSelect1">Status Nikah</label>
				    <select name="status_nikah" class="form-control" id="exampleFormControlSelect1">
				      <option>Kawin</option>
				      <option>Belum Kawin</option>
				      <option>Cerai</option>
				    </select>
				    @if($errors->has('status_nikah'))
							<span class="help-block">{{$errors->first('status_nikah')}}</span>
					@endif
				  </div>

				  <div class="form-group{{$errors->has('kewarganegaraan') ? 'has-error' : ''}}">
				    <label for="exampleFormControlSelect1">Status Nikah</label>
				    <select name="kewarganegaraan" class="form-control" id="exampleFormControlSelect1">
				      <option>WNI</option>
				      <option>WNA</option>
				    </select>
				    @if($errors->has('kewarganegaraan'))
							<span class="help-block">{{$errors->first('kewarganegaraan')}}</span>
					@endif
				  </div>
				  
				  <div class="form-group{{$errors->has('agama') ? 'has-error' : ''}}">
				    <label for="exampleFormControlSelect1">Agama</label>
				    <select name="agama" class="form-control" id="exampleFormControlSelect1">
				      <option >Islam</option>
				      <option >Kristen</option>
				      <option >Katolik</option>
				      <option >Hindu</option>
				      <option >Budha</option>
				    </select>
				    @if($errors->has('agama'))
							<span class="help-block">{{$errors->first('agama')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('provinsi') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1"> Provinsi </label>
				    <input name="provinsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="provinsi" value="{{$up->provinsi}}">
				  	@if($errors->has('provinsi'))
							<span class="help-block">{{$errors->first('provinsi')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('kota_kabupaten') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1"> Kota/Kabupaten </label>
				    <input name="kota_kabupaten" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kota_kabupaten" value="{{$up->kota_kabupaten}}">
				  	@if($errors->has('kota_kabupaten'))
							<span class="help-block">{{$errors->first('kota_kabupaten')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('kecamatan') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1"> Kecamatan </label>
				    <input name="kecamatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kecamatan" value="{{$up->kecamatan}}">
				  	@if($errors->has('kecamatan'))
							<span class="help-block">{{$errors->first('kecamatan')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('kelurahan') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1"> Kelurahan </label>
				    <input name="kelurahan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kelurahan" value="{{$up->kelurahan}}">
				  	@if($errors->has('kelurahan'))
							<span class="help-block">{{$errors->first('kelurahan')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('handphone') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1"> Nomor Handphone </label>
				    <input name="handphone" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Handphone" value="{{$up->handphone}}">
				  	@if($errors->has('handphone'))
							<span class="help-block">{{$errors->first('handphone')}}</span>
					@endif
				  </div>

				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Alamat KTP</label>
				    <textarea name="alamat_ktp" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
				  </div>

				  <div class="form-group{{$errors->has('npwp') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1"> NPWP </label>
				    <input name="npwp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NPWP" value="{{$up->npwp}}">
				  	@if($errors->has('npwp'))
							<span class="help-block">{{$errors->first('npwp')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('avatar') ? 'has-error' : ''}}">
					    <label for="exampleFormControlTextarea1">Avatar</label>
					    <input type="file" name="avatar" class="form-control" >
						@if($errors->has('avatar'))
							<span class="help-block">{{$errors->first('avatar')}}</span>
						@endif
				  </div>
				  @endforeach
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	      </form>
	      </div>
	    </div>
	  </div>


@endsection

