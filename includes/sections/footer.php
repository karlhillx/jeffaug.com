<!-- Footer -->
<footer class="bg-gradient-to-r from-gray-900 to-gray-800 text-white" itemscope itemtype="http://schema.org/WPFooter">
    <!-- Main Footer Content -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <!-- Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- About Section -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-gray-100">Jeff Aug</h3>
                <p class="text-gray-300">Professional guitarist, producer, and touring musician based in Germany.</p>
                <div class="flex space-x-4">
                    <a href="mailto:contact@jeffaug.com" class="text-gray-300 hover:text-white transition-colors">
                        <i class="fas fa-envelope text-xl"></i>
                    </a>
                    <a href="tel:+123456789" class="text-gray-300 hover:text-white transition-colors">
                        <i class="fas fa-phone text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-gray-100">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="/music" class="text-gray-300 hover:text-white transition-colors">Music</a></li>
                    <li><a href="/tour" class="text-gray-300 hover:text-white transition-colors">Tour Dates</a></li>
                    <li><a href="/gallery" class="text-gray-300 hover:text-white transition-colors">Gallery</a></li>
                    <li><a href="/contact" class="text-gray-300 hover:text-white transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Social Media Grid -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-gray-100">Connect</h3>
                <div class="grid grid-cols-4 gap-4">
                    <a href="https://www.facebook.com/Jeff-Aug-216593050485/" class="transform hover:scale-110 transition-transform" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-facebook text-2xl text-gray-300 hover:text-blue-400"></i>
                    </a>
                    <a href="https://www.instagram.com/ape_shifter/" class="transform hover:scale-110 transition-transform" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-instagram text-2xl text-gray-300 hover:text-pink-400"></i>
                    </a>
                    <a href="https://twitter.com/jeffaug" class="transform hover:scale-110 transition-transform" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-twitter text-2xl text-gray-300 hover:text-blue-300"></i>
                    </a>
                    <a href="https://open.spotify.com/artist/5vAVBEWfsaFRXUJ0eXcrjz" class="transform hover:scale-110 transition-transform" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-spotify text-2xl text-gray-300 hover:text-green-400"></i>
                    </a>
                    <a href="https://jeffaug.bandcamp.com" class="transform hover:scale-110 transition-transform" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-bandcamp text-2xl text-gray-300 hover:text-blue-400"></i>
                    </a>
                    <a href="https://www.youtube.com/results?search_query=jeff+aug" class="transform hover:scale-110 transition-transform" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-youtube text-2xl text-gray-300 hover:text-red-500"></i>
                    </a>
                    <a href="https://music.apple.com/sg/artist/161175264" class="transform hover:scale-110 transition-transform" target="_blank" rel="noopener noreferrer">
                        <i class="fab fa-apple text-2xl text-gray-300 hover:text-gray-100"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="border-t border-gray-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm">
                © <?php echo(date('Y')); ?> Jeff Aug. All rights reserved.
            </p>
            <p class="text-gray-400 text-sm mt-4 md:mt-0">
                Managed by <a href="http://MAXIMUMBooking.com/" class="hover:text-white transition-colors" target="_blank">MAXIMUM Booking</a>
            </p>
        </div>
    </div>

    <!-- Back to Top Button -->
    <button id="backToTop" class="fixed bottom-8 right-8 bg-gray-700 hover:bg-gray-600 text-white p-3 rounded-full opacity-0 transition-all duration-300 shadow-lg">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>
</footer>

<script>
const backToTopButton = document.getElementById('backToTop');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        backToTopButton.classList.toggle('opacity-0', entry.isIntersecting);
        backToTopButton.classList.toggle('translate-y-0', !entry.isIntersecting);
    });
}, { threshold: 0.1 });

observer.observe(document.querySelector('header'));

backToTopButton.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
</script>
