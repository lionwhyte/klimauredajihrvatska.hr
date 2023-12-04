@extends('layout')
@section('content')


<section class="container px-4 mx-auto space-y-8">
@include('partials._hero')
@include('partials._zatrazi-cjenik')

@include('components.search-product')
</section>

@endsection