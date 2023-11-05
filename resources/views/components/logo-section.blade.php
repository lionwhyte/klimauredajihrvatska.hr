{{-- Logo section --}}
<section id="logo-section" class="z-50 container bg-white mx-auto px-6 flex justify-between items-center mb-4">
    <a href="/"><img class="w-24 md:w-32" src="{{asset('images/logo.gif')}}" alt="" class="logo" /></a>

    {{-- Shoping cart --}}
    <form action="" class="border-l-2 pl-2 relative group">
        <button type="submit" class="flex space-x-5 items-center relative">
            <span class="relative">
                <i class="fa-solid fa-cart-shopping text-3xl"></i>
                <span
                    class="absolute left-7 bottom-5 px-1 bg-red-500 rounded-full text-white text-sm font-bold">0</span>
            </span>
            <span class="leading-5 font-bold text-lg text-sky-600">
                <span class="block">Košarica</span>
                <span class="block text-start">0,00€</span>
            </span>
        </button>

        <!-- Shoping cart tooltip -->
        <div
            class="absolute top-6 right-3 pt-2 pb-4 px-2 w-80 bg-gray-800 text-white text-sm font-bold rounded-lg invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-[top] duration-500 group-hover:top-12">
            Nema proizvoda u košarici.
        </div>
        <div
            class="absolute left-12 top-4 bg-gray-800 w-4 h-4 rotate-45 invisible opacity-0 group-hover:visible group-hover:opacity-100 transition-[top] duration-500 group-hover:top-10">
        </div>
    </form>
</section>
<hr class="my-2">