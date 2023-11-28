@extends('layout')

@php
    $breadcrumbs = [
    ['title' => 'NASLOVNICA', 'url' => '/'],
    ['title' => 'UVJETI PRODAJE', 'url' => '']
    ];
@endphp

@section('content')

<div class="porto-u-heading porto-u-9085 my-12">
    <div class="porto-u-main-heading">
        <h2 class="text-2xl mb-10">UVJETI PRODAJE</h2>
    </div>
    <div class="porto-u-sub-heading">
        <ul>
            <li>Cijenom nije obuhvaćena montaža</li>
            <li>Rok isporuke: -&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; centralno skladište odmah<ul>
                    <li>prema narudžbi&nbsp;<strong>3 - 5 radnih dana</strong></li>
                </ul>
            </li>
            <li>Jamstveni rok:&nbsp;<strong>36 mjeseca</strong>(Mitsubishi electric, Toshiba, Fujitsu, Hyundai)</li>
            <li>Cijene u kunama su formirane prema tečaju EUR-a. Ukoliko dođe do značajnije promijene tečaja EUR-a
                izvršit će se korekcija cijena</li>
            <li>Cijene su podložne promjenama bez prethodne najave</li>
            <li>Za gotovinsko plaćanje odobravamo popust</li>
            <li>Visa Premium - <strong>do </strong><strong>24 rate</strong></li>
            <li>Diners - <strong> do </strong><strong>36 rata</strong></li>
            <li>Maestro - <strong>do 12</strong>&nbsp;<strong>rata</strong></li>
            <li>VISA - <strong>do 12</strong>&nbsp;<strong>rata</strong></li>
            <li>Master Card - <strong>do 12</strong>&nbsp;<strong>rata</strong></li>
            <li>Zagrebačka banka</li>
            <li>OTP banka</li>
            <li>PBZ banka</li>
            <li>Do 12 rata cijena se uvećava 10 % , ako je od 13 - 36 rata cijena se uvećava 12 % ili 15 % ovisno koja
                je banka i kartica</li>
            <li>Poslovni interes (rabat) utvrđuje se sporazumno sa svakim poslovnim partnerom</li>
        </ul>
    </div>
    <style>
        .porto-u-9085.porto-u-heading {
            text-align: center
        }
    </style>
</div>
@endsection