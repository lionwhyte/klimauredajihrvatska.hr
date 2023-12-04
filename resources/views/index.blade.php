@extends('layout')
@section('content')


<section class="container px-4 mx-auto mb-10">
    @include('partials._hero')
</section>
<section class="container px-4 mx-auto mb-10">
    @include('partials._zatrazi-cjenik')
</section>
<section class="container px-4 mx-auto mb-10">
    @include('components.search-product')
</section>
<section class="container px-4 py-8 mx-auto bg-gray-200 rounded-t">
    <livewire:on-sale-products />
</section>
<section class="container px-4 mx-auto bg-slate-700 text-white font-semibold py-12 text-center">
    <div class="space-y-2">
        <h4 class="text-lg">POTRAŽITE POMOĆ U ODABIRU IDALNE KLIME ZA VAS!</h4>
        <h2 class="text-2xl">Veliki izbor klima uređaja pristupačnih cijena usluga montaže dajemo u cijeloj Hrvatskoj</h2>
        <h3 class="text-lg text-gray-400">Pozovite nas ili ostavite poruku kroz našu kontakt formu</h3>
    </div>
    <div class="flex items-center justify-center gap-4 mt-6">
        <div>
            <span class="text-sm">Nazovite nas</span>
            <i class="fa-solid fa-phone"></i><a href="tel:+385951230003" class="block">+385 95 123 0003</a>
        </div>
        <div><a href="/kontakt" class="inline-block p-2 border-2 border-white rounded transition duration-150 hover:bg-white hover:text-slate-700">Pošaljite nam poruku</a></div>
    </div>
</section>
<section class="container px-4 py-12 mx-auto bg-gray-200">
    <livewire:best-buy-products />
</section>
<section class="container px-4 mx-auto py-10">
    <h3 class="mb-4 text-2xl font-semibold text-gray-700">VODIČ ZA KLIMA UREĐAJE</h3>
    @include('partials._vodic-za-klima-uredaje')
</section>
<hr class="container my-4 mx-auto">
<section class="container px-4 mx-auto py-10">
    <h3 class="text-2xl font-semibold text-gray-700">BLOG</h3>
    @include('partials._blogLinkovi')
</section>


@endsection