@extends('layout')
@section('content')


<section class="container px-4 mx-auto">
@include('partials._hero')
@include('components.search-product')
<div class="my-12">
    @livewire("hello-world")
</div>
</section>

@endsection