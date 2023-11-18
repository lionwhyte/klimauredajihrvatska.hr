@props(['klimaUredaj'])
@php
    $slike = explode(',', $klimaUredaj->slike);
@endphp

<div class="flex transition duration-150 translate-x-[-0%]" id="carousel"> {{-- ovdje obavezno translate klasa mora na zadnje mjesto u nizu klasa --}}
    @if (!strpos($slike[2], "400x400"))
    <img class="w-fit border-2 rounded" 
        src="{{ asset('images/' . $klimaUredaj->brend . '/' . (isset($slike[2]) && !empty($slike[2]) ? $slike[2] : $slike[0])) }}" alt="{{ $klimaUredaj->naslov }}" />
    @endif
    
    <img class="w-fit border-2 rounded" 
        src="{{ asset('images/' . $klimaUredaj->brend . '/' . (isset($slike[1]) && !empty($slike[1]) ? $slike[1] : $slike[0])) }}" alt="{{ $klimaUredaj->naslov }}" /> 
    @if (!strpos($slike[3], "400x400"))
    <img class="w-fit border-2 rounded" 
        src="{{ asset('images/' . $klimaUredaj->brend . '/' . $slike[3]) }}" alt="{{ $klimaUredaj->naslov }}" />
    @endif    
    <img class="w-fit border-2 rounded" 
        src="{{ asset('images/' . $klimaUredaj->brend . '/' . $slike[0]) }}" alt="{{ $klimaUredaj->naslov }}" /> 
</div>
<div class="flex justify-center space-x-4 my-2">
    @if (!strpos($slike[2], "400x400"))
    <img class="w-16 border-2 rounded cursor-pointer thumb border-gray-500" 
        src="{{ asset('images/' . $klimaUredaj->brend . '/' . (isset($slike[2]) && !empty($slike[2]) ? $slike[2] : $slike[0])) }}" alt="{{ $klimaUredaj->naslov }}" />
    @endif
    <img class="w-16 border-2 rounded cursor-pointer thumb" 
        src="{{ asset('images/' . $klimaUredaj->brend . '/' . (isset($slike[1]) && !empty($slike[1]) ? $slike[1] : $slike[0])) }}" alt="{{ $klimaUredaj->naslov }}" /> 
    @if (!strpos($slike[3], "400x400"))
    <img class="w-16 border-2 rounded cursor-pointer thumb" 
        src="{{ asset('images/' . $klimaUredaj->brend . '/' . $slike[3]) }}" alt="{{ $klimaUredaj->naslov }}" />  
    @endif    
    <img class="w-16 border-2 rounded cursor-pointer thumb" 
        src="{{ asset('images/' . $klimaUredaj->brend . '/' . $slike[0]) }}" alt="{{ $klimaUredaj->naslov }}" /> 
</div>