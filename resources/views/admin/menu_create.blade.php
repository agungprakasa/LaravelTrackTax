@extends('layouts.master')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Kelola User</li>
							<li class="active">Create User Admin</li>
						</ul><!-- /.breadcrumb -->
</div>

		<div class="main-content-inner">
		<div class="page-content">
			<div id="ace-setting-container" class="ace-setting-container">
				
			</div>
			<div class="pages-header">
				
			</div>
			<div class="alert alert-info">
			 CREATE USER ADMIN
			</div>
			@if(session('sukses'))
							<div class="alert alert-success" role="alert">
							  {{session('sukses')}}
							</div>
							<!-- menampilkan flash alert menggunakan fungsi with di laravel -->
							<!-- @=artinya php, -->
			@endif
			<div class="row">
				<div class="col-sm-3">
				<form action="/admin/create" method="POST" enctype="multipart/form-data">
		        {{csrf_field()}}
				<div class="form-group">
				    <label for="exampleInputEmail1">Nama Lengkap</label>
				    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
				   
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Email</label>
				    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
				</div>
				<div class="form-group">
				    <label for="exampleInputEmail1">Password Login</label>
				    <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
				</div>
				
					<button type="submit" class="btn btn-warning">Create</button>
					
				</form>
				</div>
			</div>
		</div>
	</div>

@endsection
<!-- {{}} artinya echo di laravel -->