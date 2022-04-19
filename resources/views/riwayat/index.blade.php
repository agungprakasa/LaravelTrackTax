@extends('layouts.master')

@section('content')
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="#">Riwayat Apply</a>
		</li>
	</ul><!-- /.breadcrumb -->

	
</div>
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
<div class="row">
	<div class="clearfix">
		<div class="pull-right tableTools-container"></div>
	</div>
	<div class="col-sm-12">
			<div class="table-header">
				STATUS LAMARAN
			</div>
			<div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>	
						<th class="center">JUDUL LOWONGAN</th>
						<th class="center">STATUS</th>
					</tr>
				</thead>

				<tbody>
					@foreach ($Rekrutmen as $a)
					<tr>
						<th>{{$a->judul}}</th>
						<th>{{$a->keterangan}}</th>
						
						
						
					</tr>
					@endforeach	
				</tbody>
			</table>
		</div>
	</div>

</div>
</div>
@endsection