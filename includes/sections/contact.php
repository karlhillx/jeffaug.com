<!-- Contact Form -->
<section id="contact-us" class="bg-gray-100">
    <div class="relative bg-gradient-to-r from-indigo-600 to-purple-600 overflow-hidden py-12">
        <div class="max-w-7xl mx-auto px-4">
            <div class="relative z-10">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Let's Connect</h1>
                <p class="text-xl text-indigo-100">Get in touch for bookings, guitar lessons, or just to say hello</p>
            </div>
            <div class="absolute top-0 right-0 -translate-y-12 translate-x-12 transform">
                <svg class="w-64 h-64 opacity-20" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#FFFFFF" d="M45.7,-58.9C59.3,-51.4,70.3,-37.5,75.9,-21.3C81.5,-5,81.7,13.7,74.8,29.1C67.9,44.5,54,56.6,38.6,63.3C23.3,70.1,6.6,71.5,-10.4,69.4C-27.4,67.3,-44.7,61.7,-57.1,50.3C-69.5,38.9,-77,21.7,-77.1,4.5C-77.2,-12.7,-69.9,-29.9,-58.3,-38.9C-46.7,-47.9,-30.8,-48.7,-17.1,-56.1C-3.3,-63.5,8.3,-77.5,23.3,-77.8C38.3,-78,56.7,-64.5,45.7,-58.9Z" transform="translate(100 100)" />
                </svg>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="relative bg-white rounded-2xl shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-0">
                <!-- Left side info panel with enhanced styling -->
                <div class="relative overflow-hidden py-10 px-6 bg-gradient-to-br from-indigo-600 to-indigo-800 rounded-t-2xl lg:rounded-l-2xl lg:rounded-tr-none sm:px-10 xl:p-12">
                    <!-- Keep existing content but add animations -->
                    <div class="transform transition hover:scale-105">
                        <h3 class="text-lg font-medium text-white">Contact information</h3>
                        <p class="mt-6 text-base text-indigo-50 max-w-3xl">
                            Please contact us if you have any questions or feedback via the form or email address below.
                        </p>
                        <div class="font-medium text-white pt-10">
                            <dt class="sr-only">Postal address</dt>
                            <dd>
                                <p>Jeff Aug</p>
                                <p>MAXIMUM Booking</p>
                                <p>Weidachstraße 13</p>
                                <p>87541 Bad Hindelang</p>
                                <p>Bayern, Germany</p>
                            </dd>
                        </div>
                        <dl class="mt-8 space-y-6">
                            <dt><span class="sr-only">Phone number</span></dt>
                            <dd class="flex text-base text-indigo-50">
                                <!-- Heroicon name: outline/phone -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-200" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span class="ml-3"> <a href="tel:+491776424221">+49 177 642-4221</a></span>
                            </dd>
                            <dt><span class="sr-only">Email</span></dt>
                            <dd class="flex text-base text-indigo-50">
                                <!-- Heroicon name: outline/mail -->
                                <svg class="flex-shrink-0 w-6 h-6 text-indigo-200" xmlns="http://www.w3.org/2000/svg"
                                     fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span class="ml-3">  <a
                                        href="mailto:info@MAXIMUMBooking.com">info@MAXIMUMBooking.com</a></span>

                            </dd>
                        </dl>
                        <p class="mt-6 text-base text-white">
                            Looking for guitar lessons?
                            <a href="mailto:info@MAXIMUMBooking.com" class="font-medium text-white underline">Please get
                                in touch</a>.
                        </p>
                    </div>
                </div>

                <!-- Enhanced form section -->
                <div class="py-10 px-6 sm:px-10 lg:col-span-2 xl:p-12">
                    <form action="/forms/contact.php" method="post" class="space-y-8">
                        <!-- Add floating labels and smooth transitions -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Form fields with enhanced styling -->
                            <div class="relative">
                                <input type="text" name="first_name" id="first_name" required
                                    class="peer w-full border-b-2 border-gray-300 bg-transparent pt-4 pb-1.5 text-gray-900 focus:border-indigo-600 focus:outline-none"
                                    placeholder=" " />
                                <label class="absolute left-0 top-2 text-gray-600 transition-all peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-indigo-600">
                                    First name
                                </label>
                            </div>
                            <div class="relative">
                                <input type="text" name="last_name" id="last_name" required
                                    class="peer w-full border-b-2 border-gray-300 bg-transparent pt-4 pb-1.5 text-gray-900 focus:border-indigo-600 focus:outline-none"
                                    placeholder=" " />
                                <label class="absolute left-0 top-2 text-gray-600 transition-all peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-indigo-600">
                                    Last name
                                </label>
                            </div>
                            <div class="relative">
                                <input type="email" name="email" id="email" required
                                    class="peer w-full border-b-2 border-gray-300 bg-transparent pt-4 pb-1.5 text-gray-900 focus:border-indigo-600 focus:outline-none"
                                    placeholder=" " />
                                <label class="absolute left-0 top-2 text-gray-600 transition-all peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-indigo-600">
                                    Email
                                </label>
                            </div>
                            <div class="relative">
                                <input type="tel" name="phone" id="phone"
                                    class="peer w-full border-b-2 border-gray-300 bg-transparent pt-4 pb-1.5 text-gray-900 focus:border-indigo-600 focus:outline-none"
                                    placeholder=" " />
                                <label class="absolute left-0 top-2 text-gray-600 transition-all peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-indigo-600">
                                    Phone (Optional)
                                </label>
                            </div>
                            <div class="relative sm:col-span-2">
                                <input type="text" name="subject" id="subject" required
                                    class="peer w-full border-b-2 border-gray-300 bg-transparent pt-4 pb-1.5 text-gray-900 focus:border-indigo-600 focus:outline-none"
                                    placeholder=" " />
                                <label class="absolute left-0 top-2 text-gray-600 transition-all peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-indigo-600">
                                    Subject
                                </label>
                            </div>
                            <div class="relative sm:col-span-2">
                                <textarea name="message" id="message" rows="4" required
                                    class="peer w-full border-b-2 border-gray-300 bg-transparent pt-4 pb-1.5 text-gray-900 focus:border-indigo-600 focus:outline-none"
                                    placeholder=" "></textarea>
                                <label class="absolute left-0 top-2 text-gray-600 transition-all peer-placeholder-shown:top-4 peer-focus:top-2 peer-focus:text-indigo-600">
                                    Message (Max. 500 characters)
                                </label>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full sm:w-auto px-8 py-3 bg-gradient-to-r from-indigo-600 to-indigo-700 text-white rounded-lg shadow-lg hover:shadow-xl transform transition hover:-translate-y-0.5">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
