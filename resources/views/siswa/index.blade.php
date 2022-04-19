@extends('layouts.master')

@section('content')
	<div class="main-content-inner">
		<div class="page-content">
			<div id="ace-setting-container" class="ace-setting-container">
				
			</div>
			<div class="pages-header">
				
			</div>
			<div class="row">
						<div class="col-xs-12">
							<div class="clearfix">
								<div class="pull-right tableTools-container"></div>
							</div>
							@if(session('sukses'))
							<div class="alert alert-success" role="alert">
							  {{session('sukses')}}
							</div>
							<!-- menampilkan flash alert menggunakan fungsi with di laravel -->
							<!-- @=artinya php, -->
							@endif
							<div class="table-header">
								Data Siswa
							</div>
							<div class="col-xs-6">
	<!-- Button trigger modal -->
								<h4 class="lighter">
									<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
									<a href="#modal-wizard" data-toggle="modal" class="pink"> Tambah Siswa </a>
								</h4>
								<!-- <button type="button" class="btn btn-app btn-purple btn-sm" data-toggle="modal" data-target="#exampleModal">
								<i class="glyphicon-plus "> Siswa</i>
								
								</button> -->
							</div>

							<!-- div.table-responsive -->

							<!-- div.dataTables_borderWrap -->
							<div>
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											
											<th>Nama Depan</th>
											<th>Nama Belakang</th>
											<th>Jenis Kelamin</th>
											<th>Agama</th>
											<th>Alamat</th>
											<th>Aksi</th>
										</tr>
									</thead>

									<tbody>
										@foreach ($data_siswa as $siswa)
										<tr>
											
											<th><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_depan}}</a> </th>
											<th><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_belakang}}</a></th>
											<th>{{$siswa->jenis_kelamin}}</th>
											<th>{{$siswa->agama}}</th>
											<th>{{$siswa->alamat}}</th>
											<th>
												<a href="/siswa/{{$siswa->id}}/edit" class="btn btn-success btn-sm">Edit</a>
												<a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm " onclick="return confirm('Yakin mau dihapus?')">Delete</a>
											</th>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
		</div>
		
	</div>
<!-- Modal -->
	<div class="modal fade" id="modal-wizard" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Masukkan Data Siswa</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form action="/siswa/create" method="POST" enctype="multipart/form-data">
	        {{csrf_field()}}
				  <div class="form-group{{$errors->has('nama_depan') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1">Nama Depan</label>
				    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{old('nama_depan')}}">
				    @if($errors->has('nama_depan'))
							<span class="help-block">{{$errors->first('nama_depan')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('nama_belakang') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1">Nama Belakang</label>
				    <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{old('nama_belakang')}}">
				  	@if($errors->has('nama_belakang'))
							<span class="help-block">{{$errors->first('nama_belakang')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}">
				    <label for="exampleInputEmail1">Email</label>
				    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
				  	@if($errors->has('email'))
							<span class="help-block">{{$errors->first('email')}}</span>
					@endif
				  </div>
				  <div class="form-group{{$errors->has('jenis_kelamin') ? 'has-error' : ''}}">
				    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
				    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
				      <option value="L"{{(old('jenis_kelamin') == 'L') ? 'selected' : ''}}>Laki-laki</option>
				      <option value="P"{{(old('jenis_kelamin') == 'P') ? 'selected' : ''}}>Perempuan</option>
				    </select>
				    @if($errors->has('jenis_kelamin'))
							<span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
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
				  <div class="form-group">
				    <label for="exampleFormControlTextarea1">Alamat</label>
				    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
				  </div>
				  <div class="form-group{{$errors->has('avatar') ? 'has-error' : ''}}">
					    <label for="exampleFormControlTextarea1">Avatar</label>
					    <input type="file" name="avatar" class="form-control" >
						@if($errors->has('avatar'))
							<span class="help-block">{{$errors->first('avatar')}}</span>
						@endif
				  </div>

	      
	      	<div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Submit</button>
	    	</div>
	      </form>
	      </div>
	      </div>
	    </div>
	  </div>
	

@endsection
	
<!-- {{}} artinya echo di laravel -->