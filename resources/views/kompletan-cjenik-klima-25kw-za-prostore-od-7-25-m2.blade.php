@extends('layout')

@php
    $breadcrumbs = [
            ['title' => 'NASLOVNICA', 'url' => '/'],
            ['title' => 'KOMPLETAN CJENIK KLIMA 2,5KW ZA PROSTORE OD 7- 25 M2', 'url' => '']
        ];
@endphp

@section('content')
@include('components.kontakt')
    
@endsection