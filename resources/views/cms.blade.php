@extends('layout.master')

@section('content')
<div class="row">
{{--	@if(count($errors))
		@foreach($errors->all() as $error)
			<div data-alert class="alert-box alert radius">
				{{$error}}
				<a href="#" class="close">&times;</a>
			</div>
		@endforeach
	@endif--}}
	@if( isset( $post ) )
		<div data-alert class="alert-box warning radius">
			Datos guardados
			<a href="#" class="close">&times;</a>
		</div>
	@endif
	@include('partial.form')
</div>
@stop