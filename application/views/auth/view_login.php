
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Store - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?= base_url('')?>/assets/css/fonts.css">
</head>
<body class="overflow-hidden flex w-full h-screen relative">
    <img class="w-full object-cover object-bottom" src="https://wallpapers.com/images/hd/horizon-zero-dawn-aloy-robot-54a7pr6oew26cl7d.jpg" alt="">
    <div class="absolute top-0 left-0 w-full h-screen p-10 z-50 bg-gradient-to-r from-zinc-950">
        <div class="flex items-center justify-between w-full">
            <h1 class="font-bold font-quicksand text-white text-2xl">
                Game <span class="text-orange-600">Store</span>
            </h1>
            <article class="flex flex-col items-end rounded p-4 backdrop-blur-3xl border border-white">
                <p class="font-quicksand white text-sm">
                    Integrated with
                </p>
                <div class="flex items-center gap-5 mt-2">
                    <a href="https://steamcommunity.com">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 text-zinc-800 hover:scale-125 transition-all duration-300" viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M496 256c0 137-111.2 248-248.4 248-113.8 0-209.6-76.3-239-180.4l95.2 39.3c6.4 32.1 34.9 56.4 68.9 56.4 39.2 0 71.9-32.4 70.2-73.5l84.5-60.2c52.1 1.3 95.8-40.9 95.8-93.5 0-51.6-42-93.5-93.7-93.5s-93.7 42-93.7 93.5v1.2L176.6 279c-15.5-.9-30.7 3.4-43.5 12.1L0 236.1C10.2 108.4 117.1 8 247.6 8 384.8 8 496 119 496 256zM155.7 384.3l-30.5-12.6a52.8 52.8 0 0 0 27.2 25.8c26.9 11.2 57.8-1.6 69-28.4 5.4-13 5.5-27.3 .1-40.3-5.4-13-15.5-23.2-28.5-28.6-12.9-5.4-26.7-5.2-38.9-.6l31.5 13c19.8 8.2 29.2 30.9 20.9 50.7-8.3 19.9-31 29.2-50.8 21zm173.8-129.9c-34.4 0-62.4-28-62.4-62.3s28-62.3 62.4-62.3 62.4 28 62.4 62.3-27.9 62.3-62.4 62.3zm.1-15.6c25.9 0 46.9-21 46.9-46.8 0-25.9-21-46.8-46.9-46.8s-46.9 21-46.9 46.8c.1 25.8 21.1 46.8 46.9 46.8z"/></svg>
                    </a>
                    <a href="https://playstation.com">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 text-zinc-800 hover:scale-125 transition-all duration-300" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M570.9 372.3c-11.3 14.2-38.8 24.3-38.8 24.3L327 470.2v-54.3l150.9-53.8c17.1-6.1 19.8-14.8 5.8-19.4-13.9-4.6-39.1-3.3-56.2 2.9L327 381.1v-56.4c23.2-7.8 47.1-13.6 75.7-16.8 40.9-4.5 90.9 .6 130.2 15.5 44.2 14 49.2 34.7 38 48.9zm-224.4-92.5v-139c0-16.3-3-31.3-18.3-35.6-11.7-3.8-19 7.1-19 23.4v347.9l-93.8-29.8V32c39.9 7.4 98 24.9 129.2 35.4C424.1 94.7 451 128.7 451 205.2c0 74.5-46 102.8-104.5 74.6zM43.2 410.2c-45.4-12.8-53-39.5-32.3-54.8 19.1-14.2 51.7-24.9 51.7-24.9l134.5-47.8v54.5l-96.8 34.6c-17.1 6.1-19.7 14.8-5.8 19.4 13.9 4.6 39.1 3.3 56.2-2.9l46.4-16.9v48.8c-51.6 9.3-101.4 7.3-153.9-10z"/></svg>
                    </a>
                    <a href="https://store.microsoft.com">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4 text-zinc-800 hover:scale-125 transition-all duration-300" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 32h214.6v214.6H0V32zm233.4 0H448v214.6H233.4V32zM0 265.4h214.6V480H0V265.4zm233.4 0H448V480H233.4V265.4z"/></svg>
                    </a>
                </div>
            </article>
        </div>
        <h1 class="font-quicksand font-bold text-white text-5xl">
            <span class="underline decoration-orange-600 underline-offset-6">Sign in</span> with your Account<span class="text-orange-600">.</span>
        </h1>
        <form action="" class="mt-8 font-quicksand text-white w-full space-y-4">
            <div class="">
                <p class="font-extralight">
                    Username or Email
                </p>
                <input type="text" name="username_email" class="w-1/4 h-10 px-2 rounded outline-none bg-white/10 backdrop-blur border border-zinc-500/0 hover:border-zinc-500 transition-all duration-300 focus:border-zinc-500" autocomplete="off" required>
            </div>
            <div class="">
                <p class="font-extralight">
                    Password
                </p>
                <input type="password" name="username_email" class="w-1/4 h-10 px-2 rounded outline-none bg-white/10 backdrop-blur border border-zinc-500/0 hover:border-zinc-500 transition-all duration-300 focus:border-zinc-500" autocomplete="off" required>
            </div>
            <div class="flex items-center gap-5">
                <input type="checkbox" name="logged" id="" class="accent-orange-500 bg-transparent outline-none cursor-pointer">
                <p class="text-sm">
                    Stay Logged in?
                </p>
            </div>
            <div class="flex items-center justify-center w-1/4">
                <button type="button" class="rounded bg-orange-600 text-zinc-900 font-bold px-3 py-2 hover:bg-orange-700 focus:bg-orange-800">
                    Sign in
                </button>
            </div>
        </form>
    </div>
</body>
</html>


