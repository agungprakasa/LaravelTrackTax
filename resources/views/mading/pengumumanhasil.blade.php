@extends('layouts.master')

@section('content')

<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
<div class="row">
	
	<div class="col-sm-12">
		
		<h4 class="center">{{$pengumuman->judul}}</h4>
		<p class="content-group-sm text-muted text-center"><i>Published on :</i> <code class="ng-binding">{{$pengumuman->publish}}</code></p>
		<hr />
		
		<p>
		{!!$pengumuman->pengumuman!!}
		</p>
		<a href="{{ route('downloadfile',$pengumuman->files)}}" class="btn btn-success btn-sm">Downnload</a>
		


		
	</div>
	
</div>
</div>
@endsection