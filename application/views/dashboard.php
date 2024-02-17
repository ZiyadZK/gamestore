<?php
    require('./assets/component/imagelist.php');
    require('./assets/component/ratinglist.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= base_url('')?>/assets/css/fonts.css">
</head>
<body class="bg-zinc-900 w-full h-screen overflow-hidden relative">
    <div class="absolute top-0 left-0 bg-orange-600 rounded-full w-80 h-80 blur-[250px] translate-x-80 z-10"></div>
    <div class="absolute top-0 left-0 w-full h-screen z-20 p-5 font-quicksand text-white">
        <?php $this->load->view('navbar') ?>
    <div class="px-20 grid grid-cols-12 gap-5 mt-3">
        <?php $this->load->view('sidebar'); ?>
        <div class="w-full col-span-10 overflow-auto h-[550px] p-2">
            <h1 class="font-bold font-nunito text-2xl">
                Featured Games
            </h1>
            <div class="grid grid-cols-4 gap-5">
                <?php foreach($featured_game as $g) { ?>
                    <div class="p-2 rounded-lg border border-orange-600/0 hover:border-orange-800 hover:bg-zinc-600/10 transition-all duration-300 group">
                        <div class="w-full h-36 rounded relative overflow-hidden">
                            <img class="w-full h-full object-cover object-center rounded group-hover:scale-[105%] transition-all duration-300" src="<?= gameImage($g['platform']) ?>" alt="">
                        </div>
                        <article class="mt-3">
                            <p class="text-sm font-extralight text-white/70">
                                <?= $g['genre'] ?>, <?= $g['platform'] ?>
                            </p>
                            <h1 class="font-bold font-nunito text-xl">
                                <?= $g['name_game'] ?>
                            </h1>
                            <?= getRating($g['rating']) ?>
                            <div class="flex justify-between items-center w-full mt-3">
                                <p class="text-xs font-extralight">
                                    $<?= $g['price'];?> 
                                </p>
                                <a href="" class="flex items-center gap-3 rounded-full hover:bg-zinc-900/60 text-white px-3 py-1 text-xs font-extralight group transition-all duration-300">
                                    <svg fill="currentColor" class="w-5 h-5 text-inherit " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32H360V134.1l23-23c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-64 64c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l23 23V32H120.1C111 12.8 91.6 0 69.5 0H24zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                                    <svg fill="currentColor" class="w-3 h-3 text-inherit " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                                </a>
                            </div>
                        </article>
                    </div>
                    <?php } ?>
                </div>

                <div class="mt-5">
                    <h1 class="font-bold text-2xl font-nunito">
                        PC Games
                    </h1>
                    <div class="grid grid-cols-4 gap-5">
                    <?php foreach($pc_game as $pcg) { ?>
                    <div class="p-2 rounded-lg border border-orange-600/0 hover:border-orange-800 hover:bg-zinc-600/10 transition-all duration-300 group">
                        <div class="w-full h-36 rounded relative overflow-hidden">
                            <img class="w-full h-full object-cover object-center rounded group-hover:scale-[105%] transition-all duration-300" src="<?= gameImage($pcg['platform']) ?>" alt="">
                        </div>
                        <article class="mt-3">
                            <p class="text-sm font-extralight text-white/70">
                                <?= $pcg['genre'] ?>, <?= $pcg['platform'] ?>
                            </p>
                            <h1 class="font-bold font-nunito text-xl">
                                <?= $pcg['name_game'] ?>
                            </h1>
                            <?= getRating($pcg['rating']) ?>
                            <div class="flex justify-between items-center w-full mt-3">
                                <p class="text-xs font-extralight">
                                    $<?= $pcg['price'];?> 
                                </p>
                                <a href="" class="flex items-center gap-3 rounded-full hover:bg-zinc-900/60 text-white px-3 py-1 text-xs font-extralight group transition-all duration-300">
                                    <svg fill="currentColor" class="w-5 h-5 text-inherit " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H69.5c3.8 0 7.1 2.7 7.9 6.5l51.6 271c6.5 34 36.2 58.5 70.7 58.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H199.7c-11.5 0-21.4-8.2-23.6-19.5L170.7 288H459.2c32.6 0 61.1-21.8 69.5-53.3l41-152.3C576.6 57 557.4 32 531.1 32H360V134.1l23-23c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-64 64c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l23 23V32H120.1C111 12.8 91.6 0 69.5 0H24zM176 512a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm336-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0z"/></svg>
                                    <svg fill="currentColor" class="w-3 h-3 text-inherit " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg>
                                </a>
                            </div>
                        </article>
                    </div>
                    <?php } ?>
                    <a href="" class="w-full border rounded-lg flex items-center justify-center border-zinc-800 group hover:border-orange-600 hover:bg-orange-600/5 transition-all duration-300">
                        <div class="w-full space-y-3">
                            <div class="flex justify-center w-full">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-zinc-900/20 group-hover:bg-zinc-900 transition-all duration-300">
                                    <svg class="w-6 h-6 text-zinc-700 group-hover:text-orange-600 transition-all duration-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
                                </div>
                            </div>
                            <p class="text-zinc-700 text-center tracking-tighter group-hover:text-orange-600 transition-all duration-300">
                                View more games
                            </p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>