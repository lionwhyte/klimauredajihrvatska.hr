{{-- Footer --}}
<footer class="px-4 py-6 bg-slate-900 opacity-90">
    <div class="flex sm:justify-around flex-wrap space-x-6 text-slate-300">
        <address class="my-4 ml-6 space-y-4">
            <h3 class="text-sky-500 text-lg font-bold">Kontaktirajte nas</h3>
            <div class="mt-4">
                <h4>TELEFON</h4>
                <a href="tel:+385951230003">
                    <span class="text-sky-500 text-2xl mr-1"><i class="fa-solid fa-phone"></i></span>
                    <span class="text-white text-lg">+385 95 123 0003</span>
                </a>
            </div>
            <div>
                <h4>EMAIL</h4>
                <a href="mailto:luka.technoprom@gmail.com">
                    <span class="text-sky-500 text-2xl mr-1"><i class="fa-solid fa-envelope"></i></span>
                    <span class="text-white text-lg">luka.technoprom@gmail.com</span>
                </a>
            </div>
            <div>
                <h4>RADNO VRIJEME</h4>
                <span class="text-white text-lg">Pon. - Pet. / 8:00 - 16:00</span>
            </div>
            <div>
                <a href="https://www.facebook.com/people/Vedran-Company-Technoprom/100048825046617/"
                    class="text-sky-500 text-2xl">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </div>
        </address>
        <div class="my-4">
            <h3 class="text-sky-500 text-lg font-bold">Služba za korisnike</h3>
            <ul class="mt-4 space-y-1">
                <li><a href="kontakt" class="translate duration-150 hover:text-white">Kontakt</a></li>
                <li><a href="o-nama" class="translate duration-150 hover:text-white">O nama</a></li>
                <li><a href="cesta-pitanja" class="translate duration-150 hover:text-white">Česta pitanja</a></li>
                <li><a href="uvjeti-prodaje" class="translate duration-150 hover:text-white">Uvjeti prodaje</a></li>
                <li><a href="pravila-o-privatnosti" class="translate duration-150 hover:text-white">Pravila o privatnosti</a></li>
                <li><a href="cookie-policy" class="translate duration-150 hover:text-white">Politika kolačića</a></li>
                <li><a href="montaza-klima-uredaja" class="translate duration-150 hover:text-white">Montaža klima uređaja</a></li>
                <li><a href="servis-klima-uredaja" class="translate duration-150 hover:text-white">Servis klima uređaja</a></li>
                <li><a href="blog/dizalica-topline" class="translate duration-150 hover:text-white">Dizalice topline</a></li>
                <li><a href="https://www.technoprom.hr/centralno-solarno-podno-grijanje/" class="translate duration-150 hover:text-white">Centralno, solarno i podno grijanje</a>
                </li>
                <li><a href="https://www.technoprom.hr/termoakumulacijske-peci-prodaja/" class="translate duration-150 hover:text-white">Termoakumulacijske peći</a></li>
                <li><a href="https://www.technoprom.hr/peci-kotlovi-na-pelete-i-drva/" class="translate duration-150 hover:text-white">Peći - kotlovi na pelete i drva</a></li>
            </ul>
        </div>
        <div class="my-4 text-sm">
            <h3 class="text-sky-500 text-lg font-bold">PRIJAVITE SE NA NEWSLETTER</h3>
            <p class="my-4">i saznajte više o ekskluzivnim akcijama te svim detaljima aktualne ponude, uz vijesti o
                trendovima u technoprom.hr</p>
            @include('partials._kontakt-forma')
        </div>

    </div>
    <div
        class="container py-4 mx-auto border-t-[1px] flex flex-col lg:flex-row items-center justify-start font-bold text-white md:justify-around">
        <div class="text-sm text-slate-300">Technoprom &copy; 2022, All Rights reserved</div>
        <div class="flex justify-center flex-wrap space-x-2">
            <img class="mt-2 rounded-lg" src="{{asset('images/visa-premium.webp')}}" alt="visa-premium">
            <img class="mt-2 rounded-lg" src="{{asset('images/visa.gif')}}" alt="visa">
            <img class="mt-2 rounded-lg" src="{{asset('images/diners.gif')}}" alt="diners">
            <img class="mt-2 rounded-lg" src="{{asset('images/maestro.gif')}}" alt="maestro">
            <img class="mt-2 rounded-lg" src="{{asset('images/master.gif')}}" alt="master-card">
        </div>
    </div>
</footer>