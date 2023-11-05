<h2>{{$heading}}</h2>

@php //sa pomoću php direktive možemo ubacivati php varijable unutar view datoteke
$test = 'tekst iz php varijable unutar php direktive';   
@endphp



@if(count($listings) > 0) {{-- postoji i @unless direktiva koja radi obrnuto of @if direktive --}}
    <p>{{count($listings)}} results found</p>
@else
    <p>No results found</p>
@endif


@foreach($listings as $listing)
    <h2><a href="/tutorial/listings/{{$listing['id']}}">{{$listing['title']}}</a></h2>
    <p>{{$listing['description']}}</p>
    <p>{{$test}}</p>
@endforeach