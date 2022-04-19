@extends('layouts.master')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Entri Pengumuman Terbaru</li>
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
							<h4 class="widget-title">Pengumuman Terbaru PT.POS INDONESIA (PERSERO)</h4>

							<div class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
							</div>
						</div>
						<form action="/admin/entripengumuman" method="POST" enctype="multipart/form-data">
		        		{{csrf_field()}}
						<div class="widget-body">
							<div class="widget-main">
								<div>
									<label for="form-field-8">Judul</label>

									<textarea class="form-control" id="judul" name="judul" ></textarea>
									<span class="text-danger">{{ $errors->first('judul') }}</span>
								</div>

								<hr />

								<div>
									<label for="form-field-9">Pengumuman</label>

									<textarea class="form-control limited" id="pengumuman" name="pengumuman"></textarea>
									<span class="text-danger">{{ $errors->first('pengumuman') }}</span>
								</div>

								<hr />
								<div>
									<label for="form-field-9">Files</label>

									<div class="profile-info-value ">
										<div class="form-group">
										    <input type="file" name="files" id="files" class="form-control" >
										    <span class="text-danger">{{ $errors->first('files') }}</span>
									  </div>
									</div>
								</div>

								<div>
									<label for="form-field-11">Publish</label>

									<div class="row">
										<div class="col-xs-6">
											<div class="input-group">
												<input class="form-control date-picker" id="publish" name="publish" type="text" data-date-format="dd-mm-yyyy" />
												<span class="input-group-addon">
													<i class="fa fa-calendar bigger-110"></i>
												</span>
												<span class="text-danger">{{ $errors->first('publish') }}</span>
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
					<table id="dynamic-table3" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Pengumuman</th>
								<th>Files</th>
								<th>Publish</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($notice as $tabel)
							<tr>
								<td>{{$tabel->id}}</td>
								<td>{{$tabel->judul}}</td>
								<td>@if(strlen($tabel->pengumuman)>=209)
								{!!substr($tabel->pengumuman,0,209).'...'!!}
								@else
								{!!$tabel->pengumuman!!}
								@endif</td>
								<td>{{$tabel->files}}</td>
								<td>{{$tabel->publish}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>

			
		</div>
		</div>
</div>

<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable3 = 
				$('#dynamic-table3')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null,null
					 
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
			    } );
			    } );
			</script>
@endsection

