<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>About Us</title>

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
        <h2
            class="inline-flex mt-7 ml-6 text-[#892c6c] font-serif text-xl md:mt-16 md:ml-20 md:text-5xl md:font-serif md:text-[#892c6c]">
            We are IpuHomes</h2>
    </div>
    <div class="flex">
        <p
            class="mt-5 ml-5 mr-2 text-lg font-semibold font-serif md:mt-10 md:ml-20 md:mr-8 md:text-4xl md:font-medium md:font-serif">
            IpuHomes - where finding your perfect roommate and dream accommodation is easier than finding a
            parking spot on campus!</p>
        <img src="{{ 'images/logo1.png' }}" alt=""
            class="flex w-32 mt-6 mr-5 rounded-2xl border-4 border-solid border-[#892c6c] md:w-2/4 md:h-96 md:rounded-3xl md:mr-12 md:border-4 md:border-solid md:border-[#892c6c]">
    </div>
    <marquee behavior="" direction="Right"
        class="bg-red-600 mt-5 rounded-2xl font-mono md:bg-red-600 md:mt-5 md:rounded-2xl md:font-mono">Book Your bed
        now !</marquee>
    <div class="flex bg-[#892c6c] w-full rounded-lg h-96 mt-16 mb-5">
        <img src="{{ 'images/image2.jpg' }}" alt="" class="flex w-40 md:w-96">
        <p class="flex text-xs mt-2 ml-3 mr-3 font-serif md:text-xl md:ml-10 md:mr-10 md:mt-10 md:font-serif">
            Welcome to IpuHomes - the ultimate student community for finding your dream accommodation near Christ
            University! We're not just another housing platform - we're the Tinder of roommates, the Yelp of apartments,
            and the Facebook of student life.
            <br>
            <br>
            Our team of student ambassadors has scoured every nook and cranny of Bangalore to bring you the best and
            most affordable accommodation options around campus. From luxurious private apartments to quirky PGs, we've
            got it all. But we're not just about finding you a roof over your head - we're about building a community
            that will be your home away from home.
        </p>
    </div>
    <div class="">
        <h1
            class="inline-flex text-xl ml-20 text-[#892c6c] font-mono md:text-4xl md:ml-96 md:text-[#892c6c] md:font-mono">
            What We are about</h1>
    </div>
    <div class="flex">
        <div
            class="ml-2 mt-5 w-44 h-3/4 border-4 rounded-lg border-solid border-[#892c6c] md:ml-20 md:mt-10 md:w-96 md:h-96 md:border-4 md:rounded-3xl md:border-solid md:border-[#892c6c]">
            <h1
                class="flex text-lg ml-16 mt-2 font-mono font-bold text-[#892c6c] md:text-2xl md:ml-44 md:mt-5 md:font-mono md:font-bold md:text-[#892c6c] ">
                Roof</h1>
            <p class="flex text-sm mb-3 ml-2 mr-2 md:text-lg md:ml-5 md:mr-5 md:mt-5 md:font-serif font-serif ">Our team of student ambassadors
                has scoured every nook and cranny of Bangalore to bring you the best and most affordable accommodation
                options around campus. From luxurious private apartments to quirky PGs, we've got it all. But we're not
                just about finding you a roof over your head - we're about building a community that will be your home
                away from home.</p>
        </div>
        <div
            class="ml-3 mt-5 w-44 h-96 border-4 rounded-lg border-solid border-[#892c6c] md:ml-56 md:mt-10 md:w-96 md:h-96 md:border-4 md:rounded-3xl md:border-solid md:border-[#892c6c]">
            <h1
                class="flex text-lg ml-16 mt-2 font-mono font-bold text-[#892c6c] md:text-2xl md:ml-36 md:mt-5 md:font-mono md:font-bold md:text-[#892c6c] ">
                Roomie</h1>
            <p class="flex text-sm ml-2 mr-2  md:text-lg md:ml-5 md:mr-5 md:mt-5 md:font-serif font-serif">We're here to help you navigate the
                tricky waters of roommate dynamics, lease agreements, and pesky landlords. Our platform allows you to
                create a profile that highlights your interests, personality traits, and pet peeves - so you can find a
                roomie who complements you like PB&J, or someone who challenges you like a spicy biryani.</p>
        </div>
    </div>
    <div class="md:w-2/4 md:ml-64 w-72 ml-14 mt-4 rounded-lg border-4 border-solid border-[#892c6c] md:mb-10 mb-10">
        <h1 class="flex md:text-[#892c6c] md:text-xl md:font-mono md:font-bold md:ml-64 md:mt-3 text-[#892c6c] font-mono font-bold ml-20 mt-2">Community</h1>
        <p class="ml-3 mr-3 mt-2 mb-3 md:font-serif font-serif">But that's not all - we' coming up with new and exciting ways to bring our community together. From weekend trips to nearby hill stations to potluck dinners to speed dating events (for both roomies and potential partners - because we're all about multitasking), we've got something for everyone.</p>
    </div>

</body>

</html>
