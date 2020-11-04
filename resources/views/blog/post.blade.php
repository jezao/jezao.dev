<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jezao.dev</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="" style="background: #edecf1">

<div class="container md:w-full lg:w-6/12 mx-auto overflow-hidden p-4">

    <nav class="font-sans flex justify-between mt-4">
        <a href="/" class=" flex block justify-items-center">
            <img src="/images/ninja-laptop-optmized.png" class="mr-4 h-12 md:h-20">
            <div class="align-middle md:mt-4"><span class="text-lg font-extrabold">JEZAO.DEV</span>
                <br>
                <span class="font-bold bg-gray-900 text-white hidden md:inline">Laravel | PHP | Javascript | DevOps</span>
                <span class="font-bold bg-gray-900 text-white visible md:hidden">PROGRAMMING</span>
            </div>

        </a>
        <ul class="text-sm text-gray-700 list-none p-0 flex items-center invisible md:visible">
            <li><a href="#" class="inline-block py-2 px-3 text-gray-900 hover:text-gray-700 no-underline">Articles</a>
            </li>
            <li class="pr-2"><a href="#"
                                class="inline-block py-2 px-3 text-gray-900 hover:text-gray-700 no-underline">About</a>
            </li>
            <li class="pl-2 border-l"><a href="#"
                                         class="inline-block py-2 px-3 text-gray-900 hover:text-gray-700 no-underline">E-books</a>
            </li>
            <button class="bg-green-400 hover:bg-text-gray-800 text-white ml-4 py-2 px-3">
                Cursos
            </button>
        </ul>
    </nav>

    <section class="text-lg font-light leading-relaxed whitespace-pre-line md:leading-loose md:text-base">

        <label class="text-sm uppercase">{{ \Carbon\Carbon::make($post->published_at)->format(\Carbon\Carbon::RFC850) }}</label>

        <div class="max-w-full m-auto text-left">
            <span class="text-3xl md:text-4xl lg:text-5xl font-medium text-white bg-green-400 pr-4"
              style="line-height: 60px">{{$post->title}}</span>
        </div>

        <div class=" text-md font-light text-purple-800 text-justify lg:mt-4 m-auto mb-6 text-left">
            @markdown($post->content)
        </div>
    </section>

    <div class="">
        <img class="inline object-cover w-16 h-16 mr-2 rounded-full" src="https://images.pexels.com/photos/2589653/pexels-photo-2589653.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Profile image"/>

        <div class="text-xs tracking-wide text-dark-purple-500 dark:text-dark-purple-300"><p>By <a
                        href="https://twitter.com/sandulat" class="font-medium">Alexandru Stratulat</a>.</p>
            <p>About Laravel and things.</p></div>
    </div>

</div>

<!-- footer -->
<script src="/js/app.js" type="text/javascript"></script>
</body>
</html>
