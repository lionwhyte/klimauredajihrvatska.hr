@extends('layout') {{-- Assuming you have a layout file --}}

@section('content')
<ul class="breadcrumb flex justify-center sm:text-2xl text-gray-500 font-semibold text-center space-x-4">
    <li>
        <a href="/kosarica" class="transition duration-150 hover:text-indigo-700">Pregled košarice</a>
    </li>
    <li class="self-center">
        <i class="fa-solid fa-angle-right"></i>
    </li>
    <li>
        <a href="/checkout" class="transition duration-150 hover:text-indigo-700">Podaci za račun i dostavu</a>
    </li>
    <li class="self-center">
        <i class="fa-solid fa-angle-right"></i>
    </li>
    <li>
        <span class="text-indigo-700">Potvrda narudžbe</span>
    </li>
</ul>

<div class="container mx-auto mt-8 mb-16 px-12 space-y-12">
    <div class="text-center">
        <h1
            class="inline-block border-2 border-green-500 py-12 px-12 lg:px-48 text-center sm:text-xl font-semibold text-gray-700">
            Hvala. Vaša narudžba je zaprimljena.</h1>
    </div>
    <div class="flex justify-around text-gray-700 flex-col space-y-4 xl:flex-row xl:space-y-0">
        <div class="woocommerce-order-overview__order order order-item">
            <h3>Broj narudžbe:</h3>
            <mark class="font-bold order-number bg-transparent">{{ $order->order_id }}</mark>
        </div>
        <div class="woocommerce-order-overview__order order order-item">
            <h3>Status:</h3>
            <mark class="font-bold order-number bg-transparent text-indigo-700">NA ČEKANJU</mark>
        </div>
        <div class="woocommerce-order-overview__order order order-item">
            <h3>Datum:</h3>
            <mark class="font-bold order-number bg-transparent">@php
                $originalDate = $order->created_at;
                // Create a DateTime object from the original date
                $dateTime = new DateTime($originalDate);

                // Format the date using the desired format
                $formattedDate = $dateTime->format('j. n. Y.');

                echo $formattedDate;
                @endphp</mark>
        </div>
        <div class="woocommerce-order-overview__order order order-item">
            <h3>Ukupno:</h3>
            <mark class="font-bold order-number bg-transparent">{{ $order->total_amount }}€</mark>
        </div>
        <div class="woocommerce-order-overview__order order order-item">
            <h3>Način plaćanja:</h3>
            <mark class="font-bold order-number bg-transparent">
                @if ($order->payment_method_id === 1)
                Plaćanje po ponudi. Obavezno nas prethodno telefonski kontaktirati 095/123-0003
                @elseif($order->payment_method_id === 2)
                Plaćanje karticom na rate. Obavezno nas prethodno telefonski kontaktirati 095/123-0003
                @elseif($order->payment_method_id === 3)
                Gotovinsko plaćanje. Obavezno nas prethodno telefonski kontaktirati 095/123-0003
                @endif
            </mark>
        </div>
    </div>

    <p class="text-center font-semibold text-sky-700">
        @if ($order->payment_method_id === 1)
        Plaćanje po ponudi nakon obavljenog telefonskog razgovora dogovoriti ćemo sve detalje vezano za plaćanje i
        kupnju navedenog uređaja iz košarice.
        Obavezno nas prethodno telefonski kontaktirati 095/123-0003
        @elseif($order->payment_method_id === 2)
        Kupnja na rate putem kreditnih kartica Visa premium ( bivši american ) do 24 rate, Diners do 36 rata, PBZ Viza
        klasična do 12 rata, Zagrebačka banka do 12 rata,
        Otp banka neograničeno vi birate broj rata . Do 12 rata cijena se uvećava 10 % , ako je od 13 – 36 rata cijena
        se uvećava 12 % ili 15 % ovisno koja je banka i kartica.
        Viza premium ( bivši american ) i diners autoriziramo telefonski,
        a ostale kartice putem mobilnog pos aparata koji montažer ima kod sebe ili šaljemo putem pošte. Obavezno nas
        prethodno telefonski kontaktirati 095/123-0003
        @elseif($order->payment_method_id === 3)
        Možete platiti gotovinom nakon obavljenog posla majstorima na ruke ili direktno kod nas u trgovini. Obavezno nas
        prethodno telefonski kontaktirati 095/123-0003
        @endif
    </p>
    <div class="woocommerce-bacs-bank-details">
        <h2 class="wc-bacs-bank-details-heading text-2xl font-bold text-indigo-700">Detalji o našoj banci</h2>
        <ul class="mt-2 list-disc">
            <li class="bank_name ml-6">Banka: <strong class="font-bold">Addiko banka</strong></li>
            <li class="iban ml-6">IBAN: <strong class="font-bold">HR5525000091101440278</strong></li>
        </ul>
    </div>
    <div class="border-2 p-4">
        <h4 class="card-sub-title text-lg font-semibold">Vaša narudžba</h4>
        <table class="mt-4 w-full">
            <thead>
                <tr class="border-b-2">
                    <th class="text-start py-4" colspan="2">Proizvod</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                <tr>
                    <td class="text-start py-4">
                        <a href="/klima-uredaji/{{ $item->product->slug }}" class="text-indigo-500 hover:text-indigo-700">{{ $item->product->naslov }}
                        </a><strong class="product-quantity">×&nbsp;{{$item->quantity}}</strong>
                    </td>
                    <td class="text-gray-500 font-semibold text-end py-4">
                        <span class="woocommerce-Price-amount amount"><bdi>{{$item->unit_price}}<span>€</span></bdi></span>
                    </td>
                </tr>
                <tr class="border-b-2">
                    <th class="text-start py-4">
                        <h4>Ukupno:</h4>
                    </th>
                    <td class="text-gray-500 font-semibold text-end py-4"><span class="woocommerce-Price-amount amount">{{$item->subtotal}}<span>€</span></span></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="border-b-2">
                    <th class="text-start py-4">
                        <h4>Dostava:</h4>
                    </th>
                    <td class="text-gray-500 font-semibold text-end py-4">Besplatna dostava</td>
                </tr>
                <tr class="border-b-2">
                    <th class="text-start py-4">
                        <h4>Način plaćanja:</h4>
                    </th>
                    <td class="text-gray-500 font-semibold text-end py-4">
                        @if ($order->payment_method_id === 1)
                        Plaćanje po ponudi. Obavezno nas prethodno telefonski kontaktirati 095/123-0003
                        @elseif($order->payment_method_id === 2)
                        Plaćanje karticom na rate. Obavezno nas prethodno telefonski kontaktirati 095/123-0003
                        @elseif($order->payment_method_id === 3)
                        Gotovinsko plaćanje. Obavezno nas prethodno telefonski kontaktirati 095/123-0003
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="text-start py-4">
                        <h4>Ukupno:</h4>
                    </th>
                    <td class="text-end py-4"><span class="text-lg font-semibold">{{ $order->total_amount }}<span
                                class="woocommerce-Price-currencySymbol">€</span></span></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection