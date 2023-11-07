@extends('layout')

@php
    $breadcrumbs = [
            ['title' => 'NASLOVNICA', 'url' => '/'],
            ['title' => 'KOMPLETAN CJENIK KLIMA 3,5KW ZA PROSTORE OD 25-40 M2', 'url' => '']
        ];
@endphp

@section('content')
@include('components.kontakt')
    
@endsection