<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials._head')
    {{-- <script src="{{ asset('js/livewireScript.js') }}"></script> --}}
    
    
</head>

<body class="relative">
    <div class="fixed top-0 left-0 w-full h-full bg-black opacity-50 z-40 hidden lg:hidden" id="dark-element"></div>
    <div class="overflow-hidden mx-auto">
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
        @livewireScripts
    </div>  
    
</body>

<script src="{{ asset('js/styleScript.js') }}"></script>



</html>