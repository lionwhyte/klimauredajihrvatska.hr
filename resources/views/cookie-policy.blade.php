@extends('layout')

@section('content')
    <div class="container mt-4 space-y-4 mx-auto mb-96 px-4">
        <h1 class="text-2xl text-indigo-700 font-semibold">Politika kolačića</h1>

        <p>Dobrodošli u Klima Uređaji Hrvatska! Ova politika kolačića osmišljena je kako bi vas informirala o korištenju kolačića na našoj web stranici.</p>

        <h2>Što su kolačići?</h2>
        <p>Kolačići su male tekstualne datoteke pohranjene na vašem uređaju koje nam omogućuju da vas prepoznamo i zapamtimo. 
            Kolačići su neophodni za pravilno funkcioniranje naše web stranice i pomažu nam poboljšati vaše iskustvo.</p>

        <h2>Vrste kolačića koje se koriste:</h2>
        <ol>
            <li><strong>XSRF-TOKEN:</strong> Ovaj kolačić je neophodan za zaštitu od Cross-Site Request Forgery (CSRF) napada. 
                Pomaže osigurati sigurnost vaše interakcije s našom web stranicom.</li>

            <li><strong>laravel_session:</strong> Ovaj kolačić upravlja vašom sesijom na našoj web stranici, 
                omogućujući nam da vas ovjerimo i pružamo besprijekorno iskustvo dok se krećete našom web trgovinom.</li>
        </ol>

        <h2>Upravljanje kolačićima:</h2>
        <p>Kolačićima možete upravljati i brisati ih putem postavki preglednika. 
            Međutim, imajte na umu da onemogućavanje bitnih kolačića može utjecati na funkcionalnost naše web stranice.</p>
    </div>
@endsection