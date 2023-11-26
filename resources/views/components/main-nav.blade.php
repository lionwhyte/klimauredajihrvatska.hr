{{-- Main navbar --}}
<nav class="container hidden lg:block mx-auto my-8 text-gray-700 font-semibold text-center">
    <ul class="px-4 flex justify-around">
        <li
            class="pb-2 {{ (request()->is('klima-uredaji') || request()->is('klima-uredaji/search')) ? 'text-indigo-700  border-b-4 rounded-b border-indigo-700' : 'hover:text-indigo-700 transition duration-150'}}">
            <a class="pb-3" href="/klima-uredaji">KLIMA UREĐAJI SHOP</a>
        </li>
        <li
            class="pb-2 {{ request()->is('akcije') ? 'text-indigo-700  border-b-4 rounded-b border-indigo-700' : 'hover:text-indigo-700 transition duration-150' }}">
            <a class="pb-3" href="/akcije">AKCIJA KLIMA UREĐAJI</a>
        </li>
        <li
            class="pb-2 {{ request()->is('best-buy-klima-uredaji') ? 'text-indigo-700  border-b-4 rounded-b border-indigo-700' : 'hover:text-indigo-700 transition duration-150' }}">
            <a class="pb-3" href="/best-buy-klima-uredaji">NAJJEFTINIJI KLIMA UREĐAJI</a>
        </li>
        <li
            class="pb-2 {{ request()->is('montaza-klima-uredaja') ? 'text-indigo-700  border-b-4 rounded-b border-indigo-700' : 'hover:text-indigo-700 transition duration-150' }}">
            <a class="pb-3" href="/montaza-klima-uredaja">MONTAŽA KLIMA UREĐAJA</a>
        </li>
        <li
            class="pb-2 {{ request()->is('servis-klima-uredaja') ? 'text-indigo-700  border-b-4 rounded-b border-indigo-700' : 'hover:text-indigo-700 transition duration-150' }}">
            <a class="pb-3" href="/servis-klima-uredaja">SERVIS KLIMA UREĐAJA</a>
        </li>
        <li
            class="pb-2 {{ request()->is('blog/dizalica-topline') ? 'text-indigo-700  border-b-4 rounded-b border-indigo-700' : 'hover:text-indigo-700 transition duration-150' }}">
            <a class="pb-3" href="/blog/dizalica-topline">DIZALICE TOPLINE</a>
        </li>
    </ul>
</nav>