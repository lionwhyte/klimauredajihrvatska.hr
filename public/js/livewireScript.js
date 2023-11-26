document.addEventListener('livewire:load', function () {
    Livewire.on('gotoTop', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    })
    // Check if the page was loaded from the cache (back button was pressed)
    if (performance.navigation.type === 2) {
        // Use Livewire.emit to send data to the Livewire component
        Livewire.emit('updateReceivedData', true);
    }
});