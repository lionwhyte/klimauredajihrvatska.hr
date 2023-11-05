@props(['listing']) {{--listing propsi dohvaceni sa listings viewa--}}


<x-card> {{-- x-card je importana komponenta od card.blade.php a child sadržaj od ispod će biti ubačen u njegov slot--}}
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
            src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{$listing->slug}}">{{$listing->title}}</a> {{-- moze se pisati $listing['title'] ali
                $listing->title je preferiran način--}}
            </h3>
            <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
        </div>
    </div>
</x-card>