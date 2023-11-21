@extends('layout')
@section('content')

@php
    $breadcrumbs = [
            ['title' => 'NASLOVNICA', 'url' => '/'],
            ['title' => 'KLIMA UREĐAJI', 'url' => '']
        ];
@endphp

@livewire("product-list")

@endsection

