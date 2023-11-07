@extends('layout')

@php
    $breadcrumbs = [
            ['title' => 'NASLOVNICA', 'url' => '/'],
            ['title' => 'NOVOSTI', 'url' => '/blog'],
            ['title' => 'ODABIR KLIMA UREĐAJA - ULTIMATIVNI VODIČ', 'url' => '']
        ];
@endphp

@section('content')
<section class="container mx-auto space-y-12 mb-20 px-4">
    <img src="{{asset('/images/Savjeti-za-ekonomicnu-upotrebu-klima-uredjaja-Featured-960x445.png')}}" class="mx-auto">
    <article class="space-y-6">
        <h2 class="text-3xl text-sky-600">Odabir klima uređaja - ultimativni vodič</h2>
        @include('partials._zatrazi-cjenik')
    </article>
</section>
@endsection