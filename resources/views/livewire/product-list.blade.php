@php
    $ucinci_hladenja = array("2.5" , "3.5");
    $energetski_razredi = array("A" , "A++", "A+++");
@endphp

<div class="lg:grid lg:grid-cols-6 mx-4 mb-4">

    <div id="filter-proizvoda lg:col-span-1">
        <button wire:click="resetAllFilters" class="bg-orange-500 p-2 mb-4 text-white text-xl rounded">PONIŠTI ODABRANO</button>
        <div class="p-4 border-2 rounded">
            <h3 class="text-2xl font-semibold mb-4">BRENDOVI</h3>
            <label class="block ml-4">
                <input type="radio" wire:click="resetFilter('selected_brend')" wire:model="selected_brend" value=""> SVI PROIZVODI
            </label>
            @foreach($brands as $brand)
                <label class="block ml-4">
                    <input type="radio" wire:model="selected_brend" value="{{ $brand }}">
                    {{ strtoupper($brand) }}
                </label>
            @endforeach
        </div>
        <div class="my-4 p-4 border-2 rounded">
            <h3 class="text-2xl font-semibold mb-4">SNAGA</h3>
            <label class="block ml-4">
                <input type="radio" wire:click="resetFilter('selected_ucinak_hladenja')" wire:model="selected_ucinak_hladenja" value=""> SVI PROIZVODI
            </label>
            @foreach ($ucinci_hladenja as $ucinak_hladenja)
                <label class="block ml-4">
                    <input type="radio" wire:model="selected_ucinak_hladenja" value="{{ $ucinak_hladenja }}">
                    {{ $ucinak_hladenja }}
                </label>
            @endforeach
        </div>
        <div class="my-4 p-4 border-2 rounded">
            <h3 class="text-2xl font-semibold mb-4">ENERGETSKA KLASA</h3>
            <label class="block ml-4">
                <input type="radio" wire:click="resetFilter('selected_energetski_razred')" wire:model="selected_energetski_razred" value=""> SVI PROIZVODI
            </label>
            @foreach ($energetski_razredi as $energetski_razred)
                <label class="block ml-4">
                    <input type="radio" wire:model="selected_energetski_razred" value="{{ $energetski_razred }}">
                    {{ $energetski_razred }}
                </label>
            @endforeach
        </div>
        <button wire:click="resetAllFilters" class="bg-orange-500 p-2 mb-4 text-white text-xl rounded">PONIŠTI ODABRANO</button>
    </div>


    <div class="lg:col-span-5 " id="lista-proizvoda">
        <div wire:loading class="w-full text-2xl font-semibold text-indigo-700 text-center">
            <!-- Show loading animation or message here -->
            Učitavanje...
        </div>

        <div wire:loading.remove class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 ml-4">
            @if ($klimaUredaji->isEmpty())
                <p class="text-gray-500 font-semibold">Nema nađenih proizvoda.</p>
            @else
                @foreach($klimaUredaji as $klimaUredaj)
                    <x-klimaUredaj-card :klimaUredaj="$klimaUredaj" />
                @endforeach
            @endif
        </div>
        
    </div>
    
    <div class="mt-6 p-4 lg:col-span-6">        
        {{ $klimaUredaji->links() }}
    </div>
    
</div>

