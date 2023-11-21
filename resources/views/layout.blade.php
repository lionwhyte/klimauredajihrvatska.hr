<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials._head')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Check if the page was loaded from the cache (back button was pressed)
            if (performance.navigation.type === 2) {
                // Use Livewire.emit to send data to the Livewire component
                Livewire.emit('updateReceivedData', true);
            }
        });
    </script>
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
    @livewireScripts
</body>
{{-- <script>
    Livewire.init();
</script> --}}
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Check if the page was loaded from the cache (back button was pressed)
        if (performance.navigation.type === 2) {
            // Use Livewire.emit to send data to the Livewire component
            Livewire.emit('updateReceivedData');
        }
    });
</script> --}}

<script src="{{ asset('js/styleScript.js') }}"></script>

</html>