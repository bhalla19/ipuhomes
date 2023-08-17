<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact Us</title>
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
        <div class="flex w-auto md:w-auto md:ml-44 md:mt-16 ml-5 mr-5 mt-9 border-2 border-[#892c6c] rounded-2xl">
            <form action="{{route('contactForm')}}" method="POST">
                @csrf
                <div class="mt-3 ml-4">
                    <label for="fullName" class="pr-2 text-lg font-mono ">Full Name</label>
                    <input type="text" name="name" placeholder="Enter your Name" class="rounded-lg pl-2 pb-3 pt-2">
                </div>
                <div class="mt-3 ml-4">
                    <label for="email" class="pr-2 text-lg font-mono ">Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" class="rounded-lg pl-2 pb-3 pt-2">
                </div>
                <div class="mt-3 ml-4">
                    <label for="phoneNo" class="pr-2 text-lg font-mono ">Phone no</label>
                    <input type="number" name="phoneNo" placeholder="Phone no" class="rounded-lg pl-2 pb-3 pt-2">
                </div>
                <div class="mt-3 ml-4 mb-3">
                    <label for="message" class="pr-2 text-lg font-mono ">Message</label>
                    <textarea name="message" id="" name="message" cols="20" rows="4" class="rounded-lg pl-2 pb-3 pt-2"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <img src="{{ 'images/contactus.jpg' }}" alt=""
            class="flex w-24 h-24 mr-5 mt-20 rounded-md md:rounded-3xl md:w-96 md:h-80 md:ml-60 md:mt-16 border-2 border-[#892c6c]">
    </div>
</body>

</html>
