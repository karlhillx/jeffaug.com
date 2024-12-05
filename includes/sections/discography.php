<?php
$albums = require 'includes/sections/discography/albums-data.php';
require_once 'discography/album-card.php';
?>
<section id="discography" class="py-24 bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <?php include 'discography/header.php'; ?>

            <div class="mt-16 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 auto-rows-fr">
                <?php
                foreach ($albums as $album) {
                    echo renderAlbumCard($album);
                }
                ?>
            </div>
        </div>
    </div>
</section>

