<?php
function renderAlbumCard($album) {
    $comingSoonBadge = isset($album['is_coming_soon']) ?
        '<span class="absolute top-2 right-2 bg-indigo-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Coming Soon</span>' : '';

    return <<<HTML
    <div class="group relative bg-white rounded-2xl shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
        <div class="aspect-square overflow-hidden rounded-t-2xl">
            <img src="{$album['image']}"
             alt="{$album['title']}"
             class="h-full w-full object-cover object-center transform transition-transform duration-500 group-hover:scale-110">
            {$comingSoonBadge}
        </div>

        <div class="mt-4 space-y-3">
            <h3 class="album-title font-bold text-gray-900">{$album['title']}</h3>
            <p class="text-sm text-gray-500">{$album['year']}</p>

            <div class="flex gap-3">
                <a href="{$album['apple_music']}"
                   target="_blank"
                   class="flex items-center gap-2 rounded-lg bg-black px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-gray-800">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.152 6.896c-.948 0-2.415-1.078-3.96-1.04-2.04.027-3.91 1.183-4.961 3.014-2.117 3.675-.546 9.103 1.519 12.09 1.013 1.454 2.208 3.09 3.792 3.039 1.52-.065 2.09-.987 3.935-.987 1.831 0 2.35.987 3.96.948 1.637-.026 2.676-1.48 3.676-2.948 1.156-1.688 1.636-3.325 1.662-3.415-.039-.013-3.182-1.221-3.22-4.857-.026-3.04 2.48-4.494 2.597-4.559-1.429-2.09-3.623-2.324-4.39-2.376-2-.156-3.675 1.09-4.61 1.09zM15.53 3.83c.843-1.012 1.4-2.427 1.245-3.83-1.207.052-2.662.805-3.532 1.818-.78.896-1.454 2.338-1.273 3.714 1.338.104 2.715-.688 3.559-1.701"/>
                    </svg>
                    Apple Music
                </a>

                <a href="{$album['spotify']}"
                   target="_blank"
                   class="flex items-center gap-2 rounded-lg bg-[#1DB954] px-4 py-2 text-sm font-medium text-white transition-colors hover:bg-[#1ed760]">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/>
                    </svg>
                    Spotify
                </a>
            </div>
        </div>
    </div>
HTML;
}
