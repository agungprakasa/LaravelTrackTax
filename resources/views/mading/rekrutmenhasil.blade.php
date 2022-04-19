@extends('layouts.master')

@section('content')

<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->
<div class="row">
	
	<div class="col-sm-12">
		
		<h4 class="center">{{$rekrutmen->judul}}</h4>
		<hr />
		
		<p>
		{!!$rekrutmen->content!!}
		</p>

		<a href="/rekrutmen/{{$rekrutmen->id}}/daftar" class="btn btn-success btn-sm">APPLY</a>

		
	</div>
	
</div>
</div>
@endsection