@extends('layouts.master')

@section('content')
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Kelola User</li>
						</ul><!-- /.breadcrumb -->
	</div>
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

							<!-- div.table-responsive -->

							<!-- div.dataTables_borderWrap -->
							<div>
								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											
											<th class="center">NAMA</th>
											<th class="center">ROLE</th>
											<th class="center">EMAIL</th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										@foreach ($data_user as $du)
										<tr>
											
											<th class="center">{{$du->name}} </th>
											<th class="center">
												@if($du->role == '1')
													Admin
												@else
													User Pendaftar
												@endif
											</th>
											<th class="center">{{$du->email}}</th>
											<th>
												<a href="/admin/{{$du->id}}/delete" class="btn btn-danger btn-sm " onclick="return confirm('Yakin mau dihapus?')">Delete</a>
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

	

@endsection
	
<!-- {{}} artinya echo di laravel -->