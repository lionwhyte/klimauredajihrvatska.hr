{{-- Mobile nav --}}
<nav class="container mx-auto px-4 lg:hidden h-0 mt-0 mb-4 overflow-hidden" id="mobile-nav">
    <ul class="text-white">
        <li>
            <a href="/klima-uredaji"
                class="block mb-0.5 py-1 px-4 {{ request()->is('klima-uredaji') ? 'bg-sky-700' : 'bg-sky-500 hover:bg-sky-700'}}">KLIMA UREĐAJI SHOP</a>
        </li>
        <li>
            <a href="/akcije"
                class="block mb-0.5 py-1 px-4 {{ request()->is('akcije') ? 'bg-sky-700' : 'bg-sky-500 hover:bg-sky-700'}}">AKCIJA KLIMA UREĐAJI</a>
        </li>
        <li>
            <a href="/best-buy-klima-uredaji"
                class="block mb-0.5 py-1 px-4 {{ request()->is('best-buy-klima-uredaji') ? 'bg-sky-700' : 'bg-sky-500 hover:bg-sky-700'}}">NAJJEFTINIJI KLIMAUREĐAJI</a>
        </li>
        <li>
            <a href="/montaza-klima-uredaja"
                class="block mb-0.5 py-1 px-4 {{ request()->is('montaza-klima-uredaja') ? 'bg-sky-700' : 'bg-sky-500 hover:bg-sky-700'}}">MONTAŽA KLIMA UREĐAJA</a>
        </li>
        <li>
            <a href="/servis-klima-uredaja"
                class="block mb-0.5 py-1 px-4 {{ request()->is('servis-klima-uredaja') ? 'bg-sky-700' : 'bg-sky-500 hover:bg-sky-700'}}">SERVIS KLIMA UREĐAJA</a>
        </li>
        <li>
            <a href="/blog/dizalica-topline"
                class="block mb-0.5 py-1 px-4 {{ request()->is('blog/dizalica-topline') ? 'bg-sky-700' : 'bg-sky-500 hover:bg-sky-700'}}">DIZALICE TOPLINE</a>
        </li>
        <li>
            <a href="/"
                class="block mb-0.5 py-1 px-4 {{ request()->is('/') ? 'bg-sky-700' : 'bg-sky-500 hover:bg-sky-700'}}">NASLOVNICA</a>
        </li>
        <li>
            <a href="/kontakt"
                class="block mb-0.5 py-1 px-4 {{ request()->is('kontakt') ? 'bg-sky-700' : 'bg-sky-500 hover:bg-sky-700'}}">KONTAKT</a>
        </li>
        <li>
            <a href="/o-nama"
                class="block mb-0.5 py-1 px-4 {{ request()->is('o-nama') ? 'bg-sky-700' : 'bg-sky-500 hover:bg-sky-700'}}">O NAMA</a>
        </li>
        <li>
            <a href="/blog"
                class="block mb-0.5 py-1 px-4 {{ request()->is('blog') ? 'bg-sky-700' : 'bg-sky-500 hover:bg-sky-700'}}">NOVOSTI</a>
        </li>
        <li>
            <a href="/cesta-pitanja"
                class="block mb-0.5 py-1 px-4 {{ request()->is('cesta-pitanja') ? 'bg-sky-700' : 'bg-sky-500 hover:bg-sky-700'}}">ČESTA PITANJA</a>
        </li>
    </ul>
</nav>