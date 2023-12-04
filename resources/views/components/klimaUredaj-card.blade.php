@props(['klimaUredaj'])

@php
$slike = explode(',', $klimaUredaj->slike);

// Assuming $time_till_sale is in the format 'Y-m-d H:i:s'
if (isset($klimaUredaj->onSale->time_till_sale)) {
    date_default_timezone_set('Europe/Zagreb');
    $targetDateTime = \Carbon\Carbon::parse($klimaUredaj->onSale->time_till_sale);

    // Calculate the time difference
    $now = \Carbon\Carbon::now();
    $timeDifference = $targetDateTime->diff($now);

    // Format the time left
    $timeLeft = $timeDifference->format('%ad %hh %im %ss');
}
@endphp

<x-card class="{{ $klimaUredaj->onSale ? 'discounted-product' : '' }}"> {{-- x-card je importana komponenta od card.blade.php a child sadržaj od ispod će biti ubačen u njegov slot--}}
    <div class="grid md:grid-cols-3 md:space-x-6">
        <a href="/klima-uredaji/{{$klimaUredaj->slug}}" class="relative h-fit">
            <img class="w-fit md:col-span-1" 
                src="{{ asset('images/' . $klimaUredaj->brend . '/' . (isset($slike[2]) && !empty($slike[2]) ? $slike[2] : $slike[0])) }}" alt="{{ $klimaUredaj->naslov }}" />
            @if($klimaUredaj->onSale)
                <div class="absolute left-0 bottom-0 onSaleCountdown font-semibold text-white text-sm bg-indigo-700/75 inline-block px-4 py-2 w-full text-center" data-time="{{$klimaUredaj->onSale->time_till_sale}}">
                    {{$timeLeft}}
                </div>
                <span class="absolute top-2 left-2 z-10 text-white font-semibold bg-red-500 p-1 rounded text-sm">-{{ $klimaUredaj->onSale->discount }}%</span>
            @endif
        </a>
       
        <div class="md:col-span-2">
            <h3 class="text-2xl mt-2 md:mt-0">
                <a href="/klima-uredaji/{{$klimaUredaj->slug}}">{{$klimaUredaj->naslov}}</a> {{-- moze se pisati $listing['title'] ali $listing->title je preferiran način--}}
            </h3>
            {{-- <x-listing-tags :tagsCsv="$listing->tags" /> --}}

            <ul id="specifikacije" class="mt-4">
                <li>
                    <span>Učinak hlađenja:</span>
                    <span>{{$klimaUredaj->ucinak_hladenja_kw}} kW</span>
                </li>
                <li>
                    <span>Učinak grijanja:</span>
                    <span>{{$klimaUredaj->ucinak_grijanja_kw}} kW</span>
                </li>
                <li>
                    <span>Energetski razred:</span>
                    <span>{{$klimaUredaj->energetski_razred_hladenja}}</span>
                </li>
                <li>
                    <span>Veličina prostora (m2):</span>
                    <span>{{$klimaUredaj->velicina_prostora_m2}}</span>
                </li>
            </ul>
            @if($klimaUredaj->onSale && $klimaUredaj->BestBuy)
                <p class="mt-4 font-bold text-indigo-700">NAJEFTINIJE U PONUDI</p>
                <p class="text-xl font-bold mt-4 line-through"><span>{{$klimaUredaj->cijena}}</span><span>€</span></p>
                {{-- Display the discount information --}}
                <p class="text-xl font-bold text-red-700">
                    <span>{{round($klimaUredaj->cijena - ($klimaUredaj->cijena * ($klimaUredaj->onSale->discount / 100)), 2)}}</span><span>€</span>
                </p>
            @elseif($klimaUredaj->onSale)
                <p class="text-xl font-bold mt-4 line-through"><span>{{$klimaUredaj->cijena}}</span><span>€</span></p>
                {{-- Display the discount information --}}
                <p class="text-xl font-bold text-red-700">
                    <span>{{round($klimaUredaj->cijena - ($klimaUredaj->cijena * ($klimaUredaj->onSale->discount / 100)), 2)}}</span><span>€</span>
                </p>
            @elseif($klimaUredaj->BestBuy)
                <p class="mt-4 font-bold text-indigo-700">NAJEFTINIJE U PONUDI</p>
                <div class="text-xl font-bold mt-4"><span>{{$klimaUredaj->cijena}}</span><span>€</span></div>
            @else
                <div class="text-xl font-bold mt-4"><span>{{$klimaUredaj->cijena}}</span><span>€</span></div>
            @endif
            @php
                if ($klimaUredaj->ucinak_hladenja_kw >= 7) {
                    $zatrazi_cjenik_link = "/kompletan-cjenik-klima-7kw-za-prostore-od-60-90-m2";
                } elseif ($klimaUredaj->ucinak_hladenja_kw >= 5) {
                    $zatrazi_cjenik_link = "/kompletan-cjenik-klima-5kw-za-prostore-od-40-60-m2";
                } elseif ($klimaUredaj->ucinak_hladenja_kw >= 3.5) {
                    $zatrazi_cjenik_link = "/kompletan-cjenik-klima-35kw-za-prostore-od-25-40-m2";
                } elseif ($klimaUredaj->ucinak_hladenja_kw >= 2.5) {
                    $zatrazi_cjenik_link = "/kompletan-cjenik-klima-25kw-za-prostore-od-7-25-m2";
                }
            @endphp
            <a href={{$zatrazi_cjenik_link}} 
                class="inline-block space-x-2 mt-2 bg-green-500 hover:bg-green-700 text-white text-center font-semibold py-2 px-4 rounded transition duration-150" id="dodatni-popust">
                <i class="fa-solid fa-money-bill"></i><span>ŽELIM DODATNI POPUST</span>
            </a>
            {{-- <a href="{{ route('cart.add', ['id' => $klimaUredaj->id]) }}" --}}
            
            <livewire:add-to-cart :productId="$klimaUredaj->id" />
        </div>
    </div>
</x-card>