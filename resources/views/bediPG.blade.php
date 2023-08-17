<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bedi Guest House</title>
    <style>
        main {
            width: 60%;
            height: 300px;
            margin: auto;
            margin-top: 50px;
            margin-left: 450px;
            border: 3px solid #892c6c;
            border-radius: 20px;
            box-shadow: 0px 0px 3px grey;
            position: relative;
            overflow: hidden;
        }

        .slide {
            width: 100%;
            height: 100%;
            transition: 1s;
            position: absolute;
        }

        .buttons {
            text-align: center;
            margin-top: 10px;
            margin-left: 400px;

        }

        .buttons button {
            font-size: 20px;
            padding: 2px 20px 2px 20px;
            border-radius: 10px;
            border: 2px solid #892c6c;

        }
    </style>


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
    <main>
        <img src="{{'images/pg_room.jpg'}}" class="slide" alt="">
        <img src="{{'images/pgroom2.jpg'}}" class="slide" alt="">
        <img src="{{'images/pgroom3.jpg'}}" class="slide" alt="">
    </main>
    <div class="buttons">
        <button onclick="goPrev()">Prev</button>
        <button onclick="goNext()">Next</button>
    </div>
    <div class="">
        <h1>Facilities</h1>
    </div>
</body>
<script>
const slides = document.querySelectorAll(".slide")
var counter = 0;
// console.log(slides)
slides.forEach(
    (slide, index) => {
        slide.style.top = `${index * 100}%`
    }
)

const goPrev = () => {
    counter--
    slideImage()
}

const goNext = () => {
    counter++
    slideImage()
}

const slideImage = () => {
    slides.forEach(
        (slide) => {
            slide.style.transform = `translateY(-${counter * 100}%)`
        }
    )
}
</script>

</html>
