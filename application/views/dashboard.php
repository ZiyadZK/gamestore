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
        <div class="flex w-full justify-between items-center px-20">
            <div class="flex items-center gap-10 text-sm">
                <h1 class="font-bold text-2xl">
                    Game <span class="text-orange-600">Store</span>
                </h1>
                <a href="<?= base_url('/store') ?>" class="hover:text-orange-400">
                    Store
                </a>
                <a href="<?= base_url('/library') ?>" class="hover:text-orange-400">
                    Library
                </a>
                <a href="<?= base_url('/about') ?>" class="hover:text-orange-400">
                    About
                </a>
            </div>
            <div class="flex items-center gap-5">
                <a href="<?= base_url('/cart') ?>" class="flex items-center justify-center w-10 h-10 rounded-full hover:bg-zinc-800 group transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5 text-zinc-700 group-hover:text-orange-700 transition-all duration-300" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg>
                </a>
                <a href="<?= base_url('/profile') ?>">
                    <img class="w-8 h-8 rounded-full object-cover hover:scale-125 transition-all duration-300" src="https://i.pinimg.com/564x/a3/2b/50/a32b50bee050b64e256e09785130b387.jpg" alt="">
                </a>
            </div>
        </div>
    <div class="px-20 grid grid-cols-12 gap-5 mt-3">
        <div class="w-full col-span-2 rounded p-5 bg-zinc-900/40 backdrop-blur-md">
            <p class="text-zinc-600">Menu</p>
            <div class="my-3 space-y-3">
                <a href="" class="flex items-center gap-3 text-sm text-zinc-200 hover:text-orange-600 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 text-inherit" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M353.8 54.1L330.2 6.3c-3.9-8.3-16.1-8.6-20.4 0L286.2 54.1l-52.3 7.5c-9.3 1.4-13.3 12.9-6.4 19.8l38 37-9 52.1c-1.4 9.3 8.2 16.5 16.8 12.2l46.9-24.8 46.6 24.4c8.6 4.3 18.3-2.9 16.8-12.2l-9-52.1 38-36.6c6.8-6.8 2.9-18.3-6.4-19.8l-52.3-7.5zM256 256c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H384c17.7 0 32-14.3 32-32V288c0-17.7-14.3-32-32-32H256zM32 320c-17.7 0-32 14.3-32 32V480c0 17.7 14.3 32 32 32H160c17.7 0 32-14.3 32-32V352c0-17.7-14.3-32-32-32H32zm416 96v64c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32V416c0-17.7-14.3-32-32-32H480c-17.7 0-32 14.3-32 32z"/></svg>
                    Best Rating
                </a>
                <a href="" class="flex items-center gap-3 text-sm text-zinc-200 hover:text-orange-600 transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 text-inherit" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z"/></svg>
                    Best Seller
                </a>
            </div>
            <hr class="my-2 opacity-0">
            <p class="text-zinc-600">Platform</p>
            <div class="my-3 space-y-3">
                <a href="" class="flex items-center gap-3 text-sm text-zinc-200 hover:text-orange-600 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 text-inherit" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M384 96V320H64L64 96H384zM64 32C28.7 32 0 60.7 0 96V320c0 35.3 28.7 64 64 64H181.3l-10.7 32H96c-17.7 0-32 14.3-32 32s14.3 32 32 32H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H277.3l-10.7-32H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm464 0c-26.5 0-48 21.5-48 48V432c0 26.5 21.5 48 48 48h64c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H528zm16 64h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16s7.2-16 16-16zm-16 80c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16zm32 160a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg>
                    Desktop / PC
                </a>
                <a href="" class="flex items-center gap-3 text-sm text-zinc-200 hover:text-orange-600 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 text-inherit" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z"/></svg>
                    Mobile
                </a>
                <a href="" class="flex items-center gap-3 text-sm text-zinc-200 hover:text-orange-600 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 text-inherit" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M192 64C86 64 0 150 0 256S86 448 192 448H448c106 0 192-86 192-192s-86-192-192-192H192zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24v32h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H216v32c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V200z"/></svg>
                    Console
                </a>
            </div>
            <hr class="my-2 opacity-0">
            <p class="text-zinc-600">Category</p>
            <div class="my-3 space-y-3">
                <a href="" class="flex items-center gap-3 text-sm text-zinc-200 hover:text-orange-600 transition-all duration-300">
                    Action Adventure
                </a>
                <a href="" class="flex items-center gap-3 text-sm text-zinc-200 hover:text-orange-600 transition-all duration-300">
                    RPG
                </a>
                <a href="" class="flex items-center gap-3 text-sm text-zinc-200 hover:text-orange-600 transition-all duration-300">
                    First Person Shooter
                </a>
                <a href="" class="flex items-center gap-3 text-sm text-zinc-200 hover:text-orange-600 transition-all duration-300">
                    Puzzle
                </a>
                <a href="" class="flex items-center gap-3 text-sm text-zinc-200 hover:text-orange-600 transition-all duration-300">
                    Sports
                </a>
            </div>
        </div>
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