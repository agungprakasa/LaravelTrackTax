@extends('layouts.master')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Entri Loker Terbaru</li>
						</ul><!-- /.breadcrumb -->
</div>
<div class="main-content-inner">
		<div class="page-content">
			<div id="ace-setting-container" class="ace-setting-container">
				
			</div>
			<div class="pages-header">
				
			</div>
			<div class="alert alert-info">
			 *Notes : Untuk Content menggunakan format html.
			</div>
			@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
			<!-- menampilkan flash alert menggunakan fungsi with di laravel -->
			<!-- @=artinya php, -->
			@endif
			<div class="row">
				<div class="col-sm-6">
				
		        <div class="col-xs-12">
					<div class="widget-box">
						<div class="widget-header">
							<h4 class="widget-title">Lowongan Terbaru PT.POS INDONESIA (PERSERO)</h4>

							<div class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<form action="/admin/entriloker" method="POST" enctype="multipart/form-data">
		        		{{csrf_field()}}
						<div class="widget-body">
							<div class="widget-main">
								<div>
									<label for="form-field-8">Judul</label>

									<textarea class="form-control" id="judul" name="judul" ></textarea>
								</div>

								<hr />

								<div>
									<label for="form-field-9">Content</label>

									<textarea class="form-control limited" id="content" name="content"></textarea>
								</div>

								<hr />

								<div>
									<label for="form-field-11">Batas Akhir</label>

									<div class="row">
										<div class="col-xs-6">
											<div class="input-group">
												<input class="form-control date-picker" id="batas_akhir" name="batas_akhir" type="text" data-date-format="dd-mm-yyyy" />
												<span class="input-group-addon">
													<i class="fa fa-calendar bigger-110"></i>
												</span>
											</div>
										</div>
									</div>
								</div>
								<br>
						      	<div>
						        <button type="submit" class="btn btn-primary">Save</button>
						       	</div>
								
							</div>
						</div>
						</form>
					</div>
				</div><!-- /.span -->
				
				</div>
<!-- ----------------------------------------line table------------------- -->
				<div class="col-sm-6">
					<table id="dynamic-table" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Content</th>
								<th>Batas Akhir</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($loker as $tabel)
							<tr>
								<td>{{$tabel->id}} </td>
								<td>{{$tabel->judul}}</td>
								<td>@if(strlen($tabel->content)>=209)
								{!!substr($tabel->content,0,209).'...'!!}
								@else
								{!!$tabel->content!!}
								@endif</td>
								<td>{{$tabel->batas_akhir}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
		</div>
		</div>
</div>
@endsection