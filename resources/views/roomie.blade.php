<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Find Your Roomie</title>
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
    <h1
        class="inline-flex md:ml-20 md:font-mono md:text-3xl md:font-bold ml-6 mt-10 text-2xl font-mono font-bold text-[#892c6c]">
        Roomie</h1>
    <div class="flex">
        <p class="inline-flex md:mt-12 md:ml-20 mt-7 ml-2 mr-2">"IpuHomes - The ultimate roommate matchmaker! With our
            state-of-the-art matching algorithm, finding your perfect roommate has never been easier. Say goodbye to
            awkward interviews and hello to compatible living with IpuHomes!"</p>
        <img src="{{ 'images/roommates.avif' }}" alt=""
            class="md:w-96 md:h-60 md:mt-2 md:border-4 md:border-[#892c6c] md:ml-0 md:mr-9 border-4 border-[#892c6c] w-40 h-28 mr-3 ml-4 mt-24 rounded-xl">
    </div>
    <a href="{{route('roomieForm')}}"><button
        class="inline-flex md:text-white md:bg-slate-800 md:mt-0 md:ml-52 md:text-lg text-white bg-slate-800 mt-7 ml-6 rounded-lg pl-3 pr-3 pt-2 pb-2">Find
        Your Roomie</button></a>

</body>

</html>
