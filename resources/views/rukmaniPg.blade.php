<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bedi Guest House</title>

</head>

<body class="bg-[#bdb9b3]">
    <nav class="flex md:ml-48 ml-0">
        <img src="{{ 'images/logo-main.png' }}" alt="" class="w-14 h-12 mt-2 md:w-40 md:h-24 md:mt-7">
        <ul class="flex text-base md:justify-center md:text-xl md:mt-10">
            <a href="{{ route('homepage') }}">
                <li class="p-3 md:pl-8">Home</li>
            </a>
            <a href="{{ route('about') }}">
                <li class="p-3 md:pl-8">About Us</li>
            </a>
            <a href="{{ route('college') }}">
                <li class="p-3 md:pl-8">Colleges</li>
            </a>
            <a href="{{ route('roomie') }}">
                <li class="p-3 md:pl-8">Find Your Roomie</li>
            </a>
        </ul>
    </nav>
    <div class="flex">
        <div class="">
            <img src="{{'images/pgroom3.jpg'}}" alt="" class="w-40 ml-1 mt-9 rounded-xl border-2 border-[#892c6c] md:w-96 md:mt-12 md:ml-12 md:rounded-xl md:border-2 md:border-solid md:border-[#892c6c]">
            <h1 class="font-mono text-sm text-[#892c6c] ml-3 mt-1 md:ml-20 md:text-xl md:font-mono md:font-medium md:mt-2 md:text-[#892c6c]">Bedi Guest House</h1>
        </div>
    </div>
</body>

</html>

