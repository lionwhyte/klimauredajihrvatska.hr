<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials._head')
</head>

<body>
    <header class="py-4">
        @include('components.top-nav')

        @include('components.logo-section')

        @include('components.main-nav')

        @include('components.mobile-nav')

        @include('partials._breadcrumbs')

    </header>

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @include('partials._toTheTopButton')
</body>

<script src="{{ asset('js/styleScript.js') }}"></script>

</html>