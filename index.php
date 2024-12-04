<!DOCTYPE html>
<html lang="en">
<?php
    include 'includes/sections/head.php';
?>
<body class="antialiased">
<div class="container-fluid">
    <?php
    include 'includes/sections/header.php';
    include 'includes/sections/intro.php';
    include 'includes/sections/tour-dates.php';
    include 'includes/sections/discography.php';
    include 'includes/sections/videos.php';
    include 'includes/sections/statistics.php';
    include 'includes/sections/endorsements.php';
    include 'includes/sections/lessons.php';
    include 'includes/sections/contact.php';
    include 'includes/sections/footer.php';
    ?>

    <!-- Newsletter CTA -->
    <div class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center">
            <div class="lg:w-0 lg:flex-1">
                <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl" id="newsletter-headline">
                    Sign up for our newsletter
                </h2>
                <p class="mt-3 max-w-3xl text-lg leading-6 text-gray-300">
                    Subscribe to our monthly newsletter and receive exclusive content, album updates, and tour dates as
                    well as special ticketing offers and invitations to pre-release events.</p>
            </div>
            <div class="mt-8 lg:mt-0 lg:ml-8">
                <form class="sm:flex" action="/forms/newsletter.php" method="post">
                    <label for="emailAddress" class="sr-only">Email address</label>
                    <input id="emailAddress" name="email" size="50" type="email" autocomplete="email" required
                           class="w-full px-5 py-3 border border-transparent placeholder-gray-500 focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white focus:border-white sm:max-w-xs rounded-md"
                           placeholder="Enter your email">
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button type="submit" value="Subscribe"
                                class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-indigo-500">
                            Notify me
                        </button>
                    </div>
                </form>
                <p class="mt-3 text-sm text-gray-300">
                    We care about the protection of your data. Please sign-up now!
                </p>
            </div>
        </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <section class="bg-white overflow-hidden">
        <div class="relative max-w-7xl mx-auto pt-20 pb-12 px-4 sm:px-6 lg:px-8 lg:py-20">
            <svg class="absolute top-full left-0 transform translate-x-80 -translate-y-24 lg:hidden" width="784"
                 height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
                <defs>
                    <pattern id="e56e3f81-d9c1-4b83-a3ba-0d0ac8c32f32" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="784" height="404" fill="url(#e56e3f81-d9c1-4b83-a3ba-0d0ac8c32f32)"/>
            </svg>

            <svg class="hidden lg:block absolute right-full top-1/2 transform translate-x-1/2 -translate-y-1/2"
                 width="404"
                 height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                <defs>
                    <pattern id="56409614-3d62-4985-9a10-7ca758a8f4f0" x="0" y="0" width="20" height="20"
                             patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#56409614-3d62-4985-9a10-7ca758a8f4f0)"/>
            </svg>

            <div class="relative lg:flex lg:items-center">


                <div class="relative lg:ml-10">
                    <svg
                        class="absolute top-0 left-0 transform -translate-x-8 -translate-y-24 h-36 w-36 text-indigo-200 opacity-50"
                        stroke="currentColor" fill="none" viewBox="0 0 144 144" aria-hidden="true">
                        <path stroke-width="2"
                              d="M41.485 15C17.753 31.753 1 59.208 1 89.455c0 24.664 14.891 39.09 32.109 39.09 16.287 0 28.386-13.03 28.386-28.387 0-15.356-10.703-26.524-24.663-26.524-2.792 0-6.515.465-7.446.93 2.327-15.821 17.218-34.435 32.11-43.742L41.485 15zm80.04 0c-23.268 16.753-40.02 44.208-40.02 74.455 0 24.664 14.891 39.09 32.109 39.09 15.822 0 28.386-13.03 28.386-28.387 0-15.356-11.168-26.524-25.129-26.524-2.792 0-6.049.465-6.98.93 2.327-15.821 16.753-34.435 31.644-43.742L121.525 15z"/>
                    </svg>
                    <blockquote class="relative">
                        <div class="text-lg font-medium text-gray-900">
                            <p>
                                The lights go down, and we’re ready for some hardcore Holdsworth action. And then Jeff
                                Aug steps out, with an acoustic six-string, and hammers seven shades of shale out of it.
                                Support acts usually have only one purpose, and that is to suck. They’re the ugly friend
                                you go to the bar with when you’re out to score. They’re the bad stats you give the boss
                                before you present him with the report on how you are going to save the company. They
                                have a place in life, a rung on the ladder, and they’d better not blow the main act out
                                of the water.
                            </p>
                            <p>&nbsp;</p>
                            <p>
                                It is a brave lead guitarist who has Jeff Aug open for him. Playing what can only be
                                described as high-speed country funk, he shreds his way up and down the strings with
                                breathtaking speed. He also provides his own percussion, striking the body of the
                                instrument hard enough to sound like a bass drum. This is extreme acoustic guitar and
                                extremely good, rendering the audience unusually silent.
                            </p>
                        </div>
                        <div class="mt-8">
                            <div class="flex">
                                <div class="flex-shrink-0 lg:hidden">

                                </div>
                                <div class="ml-4 lg:ml-0">
                                    <div class="text-base font-medium text-gray-900"><a
                                            href=mailto:"PragueJazzHQ@gmail.com" target="_blank">Tony Emmerson</a>
                                    </div>
                                    <div class="text-base font-bold text-indigo-600">
                                        <a href="http://praguejazz.blogspot.com/" target="_blank">Prague Jazz
                                            Online
                                        </a>
                                    </div>
                                    <div class="text-base font-medium text-indigo-600">(April 2008)</div>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

</div>

</body>
</html>
