@extends('layout')

@php
    $breadcrumbs = [
            ['title' => 'NASLOVNICA', 'url' => '/'],
            ['title' => 'KOMPLETAN CJENIK KLIMA 5KW ZA PROSTORE OD 40-60 M2', 'url' => '']
        ];
@endphp

@section('content')
@include('components.kontakt')
    
@endsection