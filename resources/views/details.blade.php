@extends('layout.master')

@section('content')
    <div class="row">
        @if( isset( $post ) )
            <div data-alert class="alert-box warning radius">
                Datos guardados
                <a href="#" class="close">&times;</a>
            </div>
        @endif
        @include('partial.form')
    </div>
@stop