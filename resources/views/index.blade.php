<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Homepage</title>

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
    {{-- #892c6c --}}
    <div class="flex font-mono text-2xl">
        <h1
            class="inline-flex ml-2 mt-6 font-semibold md:text-5xl md:font-sans md:font-semibold md:ml-32 md:mt-20 text-[#892c6c]">
            Cool crib. Squad <br> sorted.
            IpuHomes</h1>
    </div>
    <div class="flex">
        <p class="flex text-sm ml-2 mt-6 md:text-3xl md:mt-16 md:ml-32 md:font-light md:font-serif">IpuHomes - Your
            ultimate wingman for finding the
            coolest crib and your ideal squad at Ipu University! Because life's too short for bad roommates and long
            commutes.</p>
        <img src="{{ 'images/image.jpg' }}" alt="" id="image"
            class="flex w-40 h-26 ml-4 mr-2 mb-9 rounded-3xl  md:mr-8 md:ml-7 md:mt-0 md:w-2/4 md:h-92 md:rounded-3xl md:border-4 md:border-solid md:border-[#892c6c]">
    </div>

    <div class="flex md:ml-32 md:mt-inset-10 md:text-2xl ml-4 mt-4 text-sm font-mono md:font-mono">
        <a href="{{route('contactUsForm')}}"><button
            class="flex md:rounded-md md:bg-[#892c6c] md:p-2 md:pl-3 md:pr-3 rounded-md bg-[#892c6c] p-1 pl-2 pr-2">Request
            Call back</button></a>
    </div>
    <div class="flex mb-2 md:mb-3 ">
        <img src="{{ 'images/roof.jpg' }}" alt=""
            class="flex w-10 mt-6 rounded-xl ml-3 md:w-14 md:mt-9 md:mb-0 md:ml-36 md:rounded-xl ">
        <p
            class="inline-flex ml-2 mt-9 text-sm text-black-700 font-mono md:ml-4 md:mt-12 md:text-xl md:font-mono md:text-black-700 ">
            Roof</p>
        <img src="{{ 'images/rooms1.png' }}" alt=""
            class="flex w-10 h-7 ml-6 mt-8 rounded-lg md:w-14 md:h-9 md:ml-10 md:mt-11 md:rounded-lg ">
        <p
            class="inline-flex ml-2 mt-9 text-sm text-black-700 font-mono  md:ml-5 md:mt-12 md:text-xl md:font-mono md:text-black-700">
            Rooms</p>
        <img src="{{ 'images/community.jpg' }}" alt=""
            class="flex w-10 h-8 ml-6 mt-7 rounded-lg  md:w-12 md:h-10 md:rounded-md md:ml-10 md:mt-10 ">
        <p
            class="inline-flex ml-2 mt-9 text-sm text-black-700 font-mono  md:ml-5 md:mt-12 md:text-xl md:font-mono md:text-black-700">
            Community</p>
    </div>
    <div class="flex">
        <h1
            class="inline-flex mt-7 ml-5 text-[#892c6c] font-mono text-xl md:mt-7 md:ml-28 md:text-[#892c6c] md:font-mono md:text-4xl">
            Contact Information</h1>
    </div>
    <div>
        <p
            class="inline-flex mt-4 ml-3 text-lg text-[#892c6c] font-mono md:mt-9 md:ml-44 md:text-2xl md:text-[#892c6c] md:font-mono">
            Mail :</p>
        <p class="inline-flex md:ml-5 md:text-lg">ipuHomesSupport@gmail.com</p>
        <p
            class="inline-flex mt-2 ml-3 text-[#892c6c] text-lg font-mono md:text-2xl md:ml-28 md:text-[#892c6c] md:font-mono">
            Phone No :</p>
        <p class="inline-flex md:mb-20 md:ml-5 md:text-lg">+91 9315175990</p>
</body>

</html>
