@extends('layout')
@section('content')

@php
    $breadcrumbs = [
            ['title' => 'NASLOVNICA', 'url' => '/'],
            ['title' => 'KLIMA UREĐAJI', 'url' => '']
        ];
@endphp

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4" id="lista-proizvoda">
    @foreach($klimaUredaji as $klimaUredaj)
        <x-klimaUredaj-card :klimaUredaj="$klimaUredaj" /> {{--:listing="$listing" je način da se prosljede listing propsi u listing-card komponentu --}}
    @endforeach
</div>

<div class="mt-6 p-4">
    {{$klimaUredaji->links()}} {{--element za paginaciju--}}
</div>
@endsection

