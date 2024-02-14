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
                <a href="<?= base_url('/store') ?>" class="hover:text-orange-400">
                    Library
                </a>
                <a href="<?= base_url('/store') ?>" class="hover:text-orange-400">
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
    </div>
</body>
</html>