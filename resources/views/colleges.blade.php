<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Colleges</title>
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
    <div id="colleges" class="flex mt-5">
        <div class="">
            <a href="{{ route('tecniaPg') }}"><img src="{{ 'images/tecnia.jpg' }}" alt=""
                    class="w-36 rounded-2xl border-2 border-[#892c6c] border-solid ml-2 mt-4 md:w-3/5 md:mt-9 md:ml-10 md:rounded-3xl md:border-2 md:border-solid md:border-[#892c6c]"></a>
            <h1
                class="inline-flex font-medium text-xs ml-1 mt-2 text-[#892c6c] md:font-medium md:text-2xl md:ml-14 md:mt-3 md:text-[#892c6c]">
                Tecnia Institute of Advanced Studies</h1>

        </div>
        <div class="">
            <a href="{{route('rukmaniPg')}}"><img src="{{ 'images/rukmani.jpeg' }}" alt=""
                    class="w-36 rounded-2xl border-2 border-[#892c6c] border-solid ml-2 mt-4 md:w-3/5 md:mt-9 md:ml-10 md:rounded-3xl md:border-2 md:border-solid md:border-[#892c6c]"></a>
            <h1
                class="inline-flex font-medium text-xs ml-1 mt-2 text-[#892c6c] md:font-medium md:text-2xl md:ml-10 md:mt-3 md:text-[#892c6c]">
                Rukmani Devi Institute of Advanced Studies</h1>

        </div>
    </div>


</body>

</html>
