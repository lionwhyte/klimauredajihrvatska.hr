@extends('layout')
@section('content')

<ul class="breadcrumb flex justify-center sm:text-2xl text-gray-500 font-semibold text-center space-x-4">
    <li>
        <a href="/kosarica" class="transition duration-150 hover:text-indigo-700">Pregled košarice</a>
    </li>
    <li class="self-center">
        <i class="fa-solid fa-angle-right"></i>
    </li>
    <li>
        <a href="/checkout" class="text-indigo-700">Podaci za račun i dostavu</a>
    </li>
    <li class="self-center">
        <i class="fa-solid fa-angle-right"></i>
    </li>
    <li>
        <span class="cursor-default">Potvrda narudžbe</span>
    </li>
</ul>

@if ($errors->any())
    <div class="container mx-auto mt-2 p-4 sm:text-lg text-white font-semibold">
        <ul class="space-y-2"> 
            @foreach ($errors->all() as $error)
                <li class="bg-red-500 p-4 rounded"><i class="fa-solid fa-triangle-exclamation"></i> {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="/checkout" method="POST"
    class="container mx-auto my-12 p-4 lg:grid lg:grid-cols-10 space-y-6 lg:space-y-0">
    @csrf
    
    {{-- PODACI KUPCA --}}
    <div class="col-span-6 pr-10">
        <h3 class="font-semibold text-2xl text-gray-700 mb-4">Podaci za plaćanje</h3>
        <div class="space-y-4">
            <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10">
                <label for="billing_first_name" class="">Ime<abbr class="required text-red-500"
                        title="Obavezno">*</abbr></label><br><input type="text"
                    class="input-text w-full border-2 p-2 rounded" name="billing_first_name" id="billing_first_name"
                    placeholder="" value="{{old('billing_first_name')}}" autocomplete="given-name">
            </p>

            @error('billing_first_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                <label for="billing_last_name" class="">Prezime<abbr class="required text-red-500"
                        title="Obavezno">*</abbr></label><br><input type="text"
                    class="input-text w-full border-2 p-2 roundedborder-2 p-2 rounded" name="billing_last_name"
                    id="billing_last_name" placeholder="" value="{{old('billing_last_name')}}" autocomplete="family-name">
            </p>

            @error('billing_last_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <p class="form-row form-row-wide" id="billing_company_field" data-priority="30"><label for="billing_company"
                    class="">Naziv poduzeća<span class="optional">(neobavezno)</span></label><br><input type="text"
                    class="input-text w-full border-2 p-2 rounded" name="billing_company" id="billing_company"
                    placeholder="" value="{{old('billing_company')}}" autocomplete="organization"></p>

            @error('billing_company_field')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <p class="form-row form-row-wide address-field update_totals_on_change validate-required"
                id="billing_country_field" data-priority="40"><label for="billing_country" class="">Država /
                    Regija<abbr class="required text-red-500" title="Obavezno">*</abbr></label><br>
                <strong>Hrvatska</strong><input type="hidden" name="billing_country" id="billing_country" value="HR"
                    autocomplete="country" class="country_to_state" readonly="readonly">
            </p>

            @error('billing_country')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <p class="form-row address-field validate-required form-row-wide" id="billing_address_1_field"
                data-priority="50"><label for="billing_address_1" class="">Ulica<abbr class="required text-red-500"
                        title="Obavezno">*</abbr></label><br><input type="text"
                    class="input-text w-full border-2 p-2 rounded" name="billing_address_1" id="billing_address_1"
                    placeholder="Ulica i kućni broj" value="{{old('billing_address_1')}}" autocomplete="address-line1"
                    data-placeholder="Ulica i kućni broj"></p>

            @error('billing_address_1')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <p class="form-row address-field form-row-wide" id="billing_address_2_field" data-priority="60"><label
                    for="billing_address_2" class="screen-reader-text">Kat, broj stana ili sl.<span
                        class="optional">(neobavezno)</span></label><br><input type="text"
                    class="input-text w-full border-2 p-2 rounded" name="billing_address_2" id="billing_address_2"
                    placeholder="Stan, apartman, kat, itd. (nije obavezno)" value="{{old('billing_address_2')}}" autocomplete="address-line2"
                    data-placeholder="Stan, apartman, kat, itd. (nije obavezno)"></p>

            @error('billing_address_2')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <p class="form-row address-field validate-required form-row-wide" id="billing_city_field" data-priority="70"
                data-o_class="form-row form-row-wide address-field validate-required"><label for="billing_city"
                    class="">Grad<abbr class="required text-red-500" title="Obavezno">*</abbr></label><br><input
                    type="text" class="input-text w-full border-2 p-2 rounded" name="billing_city" id="billing_city"
                    placeholder="" value="{{old('billing_city')}}" autocomplete="address-level2"></p>

            @error('billing_city')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <p class="form-row address-field validate-required validate-state form-row-wide" id="billing_state_field"
                data-priority="80" data-o_class="form-row form-row-wide address-field validate-required validate-state">
                <label for="billing_state" class="">Županija<abbr class="required text-red-500"
                        title="Obavezno">*</abbr></label><br><input type="text"
                    class="input-text w-full border-2 p-2 rounded" value="{{old('billing_state')}}" placeholder="" name="billing_state"
                    id="billing_state" autocomplete="address-level1" data-input-classes="">
            </p>

            @error('billing_state')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <p class="form-row address-field validate-required validate-postcode form-row-wide"
                id="billing_postcode_field" data-priority="90"
                data-o_class="form-row form-row-wide address-field validate-required validate-postcode"><label
                    for="billing_postcode" class="">Poštanski broj<abbr class="required text-red-500"
                        title="Obavezno">*</abbr></label><br><input type="text"
                    class="input-text w-full border-2 p-2 rounded" name="billing_postcode" id="billing_postcode"
                    placeholder="" value="{{old('billing_postcode')}}" autocomplete="postal-code">
            </p>

            @error('billing_postcode')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field"
                data-priority="100"><label for="billing_phone" class="">Telefon<abbr class="required text-red-500"
                        title="Obavezno">*</abbr></label><br><input type="tel"
                    class="input-text w-full border-2 p-2 rounded" name="billing_phone" id="billing_phone"
                    placeholder="" value="{{old('billing_phone')}}" autocomplete="tel"></p>

            @error('billing_phone')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field"
                data-priority="110"><label for="billing_email" class="">Adresa e-pošte<abbr
                        class="required text-red-500" title="Obavezno">*</abbr></label><br><input type="text"
                    class="input-text w-full border-2 p-2 rounded" name="billing_email" id="billing_email"
                    placeholder="" value="{{old('billing_email')}}" autocomplete="email username"></p>

            @error('billing_email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror

            <p class="form-row notes" id="order_comments_field" data-priority=""><label for="order_comments"
                    class="">Napomene uz narudžbu<span class="optional">(neobavezno)</span></label><br><textarea
                    name="order_comments" class="input-text w-full border-2 p-2 rounded" id="order_comments"
                    placeholder="Bilješke o vašoj narudžbi." rows="5" cols="50">{{old('order_comments')}}</textarea></p>

            @error('order_comments')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    </div>

    {{-- UVJETI PLAĆANJA --}}
    <div class="border-2 rounded border-indigo-300 p-8 col-span-4">
        <h3 class="text-xl font-bold text-gray-700">VAŠA NARUDŽBA</h3>
        <livewire:checkout />
        <h4 class="text-lg font-bold mt-4 py-2 text-gray-700 border-t-2">Metode plaćanja</h4>
        <div class="space-y-4 border-b-2 py-6">
            <div>
                <input type="radio" class="input-text border-2 p-2 rounded" name="metoda_placanja"
                    id="placanje-po-ponudi-input" value="1" @if (old('metoda_placanja') === "1") checked @endif>
                <label for="placanje-po-ponudi-input" class="font-semibold text-indigo-700">Plaćanje po ponudi. Obavezno
                    nas prethodno telefonski kontaktirati 095/123-0003</label>
                <p class="text-sm ml-6">Plaćanje po ponudi nakon obavljenog telefonskog razgovora dogovoriti ćemo sve
                    detalje vezano za plaćanje i kupnju navedenog uređaja iz košarice.
                    Obavezno nas prethodno telefonski kontaktirati 095/123-0003</p>
            </div>
            <div>
                <input type="radio" class="input-text border-2 p-2 rounded" name="metoda_placanja"
                    id="placanje-na-rate-input" value="2" @if (old('metoda_placanja') === "2") checked @endif>
                <label for="placanje-na-rate-input" class="font-semibold text-indigo-700">Plaćanje karticom na rate.
                    Obavezno nas prethodno telefonski kontaktirati 095/123-0003</label>
                <p class="text-sm ml-6">Kupnja na rate putem kreditnih kartica Visa premium ( bivši american ) do 24
                    rate, Diners do 36 rata, PBZ Viza klasična do 12 rata, Zagrebačka banka do 12 rata,
                    Otp banka neograničeno vi birate broj rata . Do 12 rata cijena se uvećava 10 % , ako je od 13 – 36
                    rata cijena se uvećava 12 % ili 15 % ovisno koja je banka i kartica.
                    Viza premium ( bivši american ) i diners autoriziramo telefonski,
                    a ostale kartice putem mobilnog pos aparata koji montažer ima kod sebe ili šaljemo putem pošte.
                    Obavezno nas prethodno telefonski kontaktirati 095/123-0003</p>
            </div>
            <div>
                <input type="radio" class="input-text border-2 p-2 rounded" name="metoda_placanja"
                    id="placanje-gotovinom-input" value="3" @if (old('metoda_placanja') === "3") checked @endif>
                <label for="placanje-gotovinom-input" class="font-semibold text-indigo-700">Gotovinsko plaćanje.
                    Obavezno nas prethodno telefonski kontaktirati 095/123-0003</label>
                <p class="text-sm ml-6">Možete platiti gotovinom nakon obavljenog posla majstorima na ruke ili direktno
                    kod nas u trgovini.
                    Obavezno nas prethodno telefonski kontaktirati 095/123-0003</p>
            </div>
        </div>

        @error('metoda_placanja')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

        <p class="m-6 text-sm">Vaši osobni podaci koristit će se za obradu vaše narudžbe, podršku vašem iskustvu na ovoj
            web stranici i
            za druge svrhe opisane u našim <a href="/pravila-o-privatnosti" class="text-indigo-700">pravilima
                privatnosti</a>.</p>

        <div class="woocommerce-terms-and-conditions border-2 p-1" style="max-height: 200px; overflow: auto;">
            <h2 class="text-xl font-bold text-gray-700 mb-4">UVJETI PRODAJE</h2>
            <ul>
                <li>Cijenom nije obuhvaćena montaža</li>
                <li>Rok isporuke: –&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; centralno skladište odmah
                    <ul>
                        <li>prema narudžbi&nbsp;<strong>3 – 5 radnih dana</strong></li>
                    </ul>
                </li>
                <li>Jamstveni rok:&nbsp;<strong>36 mjeseca</strong>(Mitsubishi electric, Toshiba, Fujitsu, Hyundai)</li>
                <li>Cijene u kunama su formirane prema tečaju EUR-a. Ukoliko dođe do značajnije promijene tečaja EUR-a
                    izvršit će se korekcija cijena</li>
                <li>Cijene su podložne promjenama bez prethodne najave</li>
                <li>Za gotovinsko plaćanje odobravamo popust</li>
                <li>Visa Premium – <strong>do </strong><strong>24 rate</strong></li>
                <li>Diners – <strong> do </strong><strong>36 rata</strong></li>
                <li>Maestro – <strong>do 12</strong>&nbsp;<strong>rata</strong></li>
                <li>VISA – <strong>do 12</strong>&nbsp;<strong>rata</strong></li>
                <li>Master Card – <strong>do 12</strong>&nbsp;<strong>rata</strong></li>
                <li>Zagrebačka banka</li>
                <li>OTP banka</li>
                <li>PBZ banka</li>
                <li>Do 12 rata cijena se uvećava 10 % , ako je od 13 – 36 rata cijena se uvećava 12 % ili 15 % ovisno
                    koja je banka i kartica</li>
                <li>Poslovni interes (rabat) utvrđuje se sporazumno sa svakim poslovnim partnerom</li>
            </ul>
        </div>
        <p class="mt-8 font-semibold">
            <label>
                <input type="checkbox" name="terms" id="terms" data-gtm-form-interact-field-id="4">
                <span>Pročitao/la sam i slažem se s uvjetima korištenja i odredbama web-stranice.</span><abbr
                    class="required text-red-500" title="Obavezno" >*</abbr>
            </label>
        </p>
        @error('terms')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        <div class="text-end mt-16">
            <button type="submit"
                class="w-full bg-gray-700 transition duration-150 hover:bg-gray-500 text-white text-xl text-center py-4 rounded">NARUČITE</button>
        </div>
       

    </div>
</form>

@endsection