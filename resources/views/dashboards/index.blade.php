@extends('layouts.master')

@section('content')
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->
					</div>
	<div class="main-content-inner">
		<div class="page-content">
			<div id="ace-setting-container" class="ace-setting-container">
				
			</div>
			<div class="pages-header">
				
			</div>
			<div class="row">
			@if(auth()->user()->role == '3')
			<div class="col-sm-12">
				<h3 class="header smaller lighter green">
					<i class="ace-icon fa fa-bullhorn"></i>
					Pemberitahuan
				</h3>

				<div class="alert alert-info">
					Lihat summary perlengkapan data anda, dan lengkapi jika ada yang belum diisi
					<br>

					<strong>
						<i class="ace-icon glyphicon glyphicon-ok"></i>
						(Lengkap)
					</strong>
					<br>
					<strong>
						<i class="ace-icon fa fa-times"></i>
						(Tidak Lengkap)
					</strong>
					<br>
					Pelamar yang sudah apply rekrutmen, maka data informasi pelamar tidak dapat diubah sampai dengan berakhirnya tahapan rekrutmen yang telah dipilih / apply. 
					
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6">
					<div class="dd" id="nestable">
					<li class="dd-item" data-id="2">
					<div class="dd-handle">BIODATA</div>
					<ol class="dd-list">
					<ol class="dd-list">
							<ol class="dd-list">
								<li class="dd-item item-red" data-id="6">
									<div class="dd-handle"> 
										KTP
										<div style="float:right">
										@if($KTP)
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										NAMA
										<div style="float:right">
										@if(Session::get('nama_lengkap'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										EMAIL
										<div style="float:right">
										@if(Session::get('email'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										JENIS KELAMIN
										<div style="float:right">
										@if(Session::get('jenis_kelamin'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										KEWARGANEGARAAN
										<div style="float:right">
										@if(Session::get('kewarganegaraan'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										AGAMA
										<div style="float:right">
										@if(Session::get('agama'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										ALAMAT
										<div style="float:right">
										@if(Session::get('alamat_ktp'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										DESA (KELURAHAN)
										<div style="float:right">
										@if(Session::get('kelurahan'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										KECAMATAN
										<div style="float:right">
										@if(Session::get('kecamatan'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										KOTA / KABUPATEN
										<div style="float:right">
										@if(Session::get('kota_kabupaten'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										PROVINSI
										<div style="float:right">
										@if(Session::get('provinsi'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										TELEPHONE
										<div style="float:right">
										@if(Session::get('handphone'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										PAS PHOTO (LATAR BELAKANG MERAH)
										<div style="float:right">
										@if(Session::get('avatar'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

							</ol>
					</ol>
					</ol>
					</li>
					</div>
				</div>
				
				<div class="col-sm-6">
					<div class="dd" id="nestable">
					<li class="dd-item" data-id="2">
					<div class="dd-handle">PENDIDIKAN</div>

					<ol class="dd-list">
						<ol class="dd-list">
							<ol class="dd-list">
						<li class="dd-item item-red" data-id="7">
							<div class="dd-handle">
								JENJANG PENDIDIKAN TERAKHIR
								<div style="float:right">
								@if(Session::get('jenjang'))
								<i class="ace-icon glyphicon glyphicon-ok"></i>
								@else
								<i class="ace-icon fa fa-times"></i>
								@endif
								</div>
							</div>
						</li>
						</ol>
						</ol>
					</ol>
					</li>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="dd" id="nestable">
					<li class="dd-item" data-id="2">
					<div class="dd-handle">DOKUMEN</div>

					<ol class="dd-list">
						<ol class="dd-list">
						<ol class="dd-list">
								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										KTP
										<div style="float:right">
										@if(Session::get('foto_ktp'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										IJASAH
										<div style="float:right">
										@if(Session::get('ijasah'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>

								<li class="dd-item item-red" data-id="7">
									<div class="dd-handle">
										TRANSKRIP NILAI
										<div style="float:right">
										@if(Session::get('transkrip_nilai'))
										<i class="ace-icon glyphicon glyphicon-ok"></i>
										@else
										<i class="ace-icon fa fa-times"></i>
										@endif
										</div>
									</div>
								</li>
							</ol>
					</ol>
					</ol>
				</li>
				</div>
				</div>			
				<!-- Dashboard Aplikasi {{Session::get('email')}} -->
			</div>
			@endif
			@if(auth()->user()->role == '1')
			<div class="alert alert-info">
					Welcome Admin "{{auth()->user()->name}}".
			</div>
			@endif
		</div>
	</div>
</div>
	
@endsection