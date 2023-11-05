<form action="" method="post" class="flex flex-col my-4">
    @csrf
    <label for="name">Vaše ime (obavezno)</label>
    <input class="mb-4 px-1 py-2 text-slate-300 bg-slate-600 rounded" type="text" id="name" name="name">
    <label for="email">Vaša e-pošta (obavezno) (molimo da pripazite na točnost e-mail adrese)</label>
    <input class="mb-4 px-1 py-2 text-slate-300 bg-slate-600 rounded" type="text" id="email" name="email">
    <label for="phone">Telefon (obavezno)</label>
    <input class="mb-4 px-1 py-2 text-slate-300 bg-slate-600 rounded" type="text" id="phone" name="phone">
    <label for="city">Grad ili mjesto obavljanja posla (obavezno)</label>
    <input class="mb-4 px-1 py-2 text-slate-300 bg-slate-600 rounded" type="text" id="city" name="city">
    <label for="item">Predmet</label>
    <input class="mb-4 px-1 py-2 text-slate-300 bg-slate-600 rounded" type="text" id="item" name="item">
    <label for="message">Vaša poruka</label>
    <textarea class="mb-4 px-1 py-2 text-slate-300 bg-slate-600 rounded" name="message" id="message" cols="30"
        rows="10"></textarea>
    <button
        class="w-40 px-1 py-2 text-slate-300 bg-slate-600 rounded border border-sky-500 translate duration-150 hover:border-sky-600"
        type="submit">Pošalji</button>
</form>