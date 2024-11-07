$(document).ready(function() {
    // Auto-scroll interval in milliseconds (adjust as needed)
    const autoScrollInterval = 3000;

    // Start the carousel auto-scroll
    const startAutoScroll = () => {
        setInterval(function() {
            $('#myCarousel').carousel('next');
        }, autoScrollInterval);
    }

    // Initialize the carousel
    $('#myCarousel').carousel();

    // Start the auto-scroll after the carousel is initialized
    startAutoScroll();
});