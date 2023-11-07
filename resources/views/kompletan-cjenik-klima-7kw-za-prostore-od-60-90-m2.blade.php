@extends('layout')

@php
    $breadcrumbs = [
            ['title' => 'NASLOVNICA', 'url' => '/'],
            ['title' => 'KOMPLETAN CJENIK KLIMA 7KW ZA PROSTORE OD 60-90 M2', 'url' => '']
        ];
@endphp

@section('content')
@include('components.kontakt')
    
@endsection