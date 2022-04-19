@extends('layouts.master')

@section('content')
		<div class="main-content-inner">
		<div class="page-content">
			<div id="ace-setting-container" class="ace-setting-container">
				
			</div>
			<div class="pages-header">
				
			</div>
			<h1>Edit Data Siswa</h1>
			@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
			<!-- menampilkan flash alert menggunakan fungsi with di laravel -->
			<!-- @=artinya php, -->
			@endif
			<div class="row">
				<div class="col-lg-12">
				<form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
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
				    @if($errors->has('avatar'))
							<span class="help-block">{{$errors->first('avatar')}}</span>
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
					<button type="submit" class="btn btn-warning">UPDATE</button>
					
				</form>
				</div>
			</div>
		</div>
	</div>

@endsection
<!-- {{}} artinya echo di laravel -->