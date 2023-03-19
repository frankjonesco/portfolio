<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/x-icon" href="{{asset('favicon.png')}}">

    <title>Web design in Tavira - Professional web design for local business</title>
    <meta name="description" content="Professional web design for local business in the Algarve. We specialise in creating attractive websites for small business such at affordable prices.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400;500;600;700&family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var scrollStart = 0;
            var nav = document.querySelector("#topNav");

            document.onscroll = function (e) {
                scrollStart = e.target.scrollingElement.scrollTop;
                if (scrollStart > nav.top) {
                    nav.style.background-color, rgba(34,34,34,0.9);
                } else {
                    nav.style.background-color = "transparent";
                }
            };
        });
    </script>



<script>
    function scrollTo(element) {
      window.scroll({
        behavior: 'smooth',
        left: 0,
        top: element.offsetTop
      });
    }

    document.getElementById("scrollDown").addEventListener('click', () => {
      scrollTo(document.getElementById("blog"));
    });

</script>



<script>
    function submitContactForm(e){
        e.preventDefault();
        alert('34');
        document.getElementById('contactForm').submit();         
    }
</script>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VJ2FXLCM4S"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VJ2FXLCM4S');
    </script>


    
    {{-- Assert builds --}}
    @php
        $environment = 'dev';
    @endphp
    @if($environment == 'dev')
        {{-- Development scripts --}}
        {{-- @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js']) --}}
        @vite('resources/css/app.css')
    @else
        {{-- Production scripts --}}
        <link rel="stylesheet" href="{{ asset('build/assets/app-2e3c9967.css') }}">
        <script src="{{ asset('build/assets/app-a6d2e222.js') }}" defer></script>
    @endif

</head>
<body>
    


    <div id="particles-js" style="background-image: url({{asset('images/backgrounds/developer-1.jpg')}});" class="w-screen h-screen bg-cover bg-center bg-no-repeat bg-fixed flex flex-col justify-center items-center">
        <nav id="topNav" class="shift fixed top-0 w-full top-nav z-50 flex justify-between items-center text-lg font-thin text-white px-20 py-10 bg-transparent bg-opacity-90 drop-shadow transition-all ease duration-1000">
            <a href="/" id="siteLogo" class="text-5xl font-bold text-white transition-all ease duration-1000">FJ<span class="text-yellow-300">.</span></a>
            <ul class="flex">
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#what-i-do">What I do</a>
                </li>
                <li>
                    <a href="#recent-works">Works</a>
                </li>
                <li>
                    <a href="#blog">Blog</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </nav>

        <h1 class="text-center m-auto text-[7rem] h-1/2 absolute top-1/2 -translate-y-[25%] font-bold text-white">Web design in Tavira<span class="text-yellow-300">.</span></h1>
        
        <div class="absolute bottom-0 mx-auto py-6 w-full text-center">
            <a href="#about" aria-label="Scroll down to learn more">
                <i class="fa-solid fa-chevron-down font-bold text-5xl text-white animate-bounce transition-all duration-250 hover:scale-150"></i>
            </a>
        </div>
    </div>


    <section id="about">
        <div class="container py-40">
            <h1 class="eczar text-5xl leading-tight mb-5">
                I'm Frank Jones,<br>
                Web Designer & Web Developer<br>
                based in Tavira, Alrgarve.
            </h1>
            <p class="text-xl text-gray-500 w-4/5 leading-relaxed font-thin mb-10">
                I'm a web designer & developer local to Tavira, Algarve. I specialise in creating attractive websites for small business such as accountants, dental practices, restaurants, private healthcare, and estate agents.<br>With more than 15 years experience in the industry, I produce quality work at competitive prices.<br>
                <a href="#contact" class="bg-yellow-400 text-black px-2 py-0.5 transition-all ease duration-500 hover:bg-lime-500 hover:text-white">Contact me</a> today to discuss your next project and get a quote.
            </p>
            <a href="/" class="btn btn-positive mr-6">Download CV</a>

            <a href="#recent-works" class="btn btn-negative">Recent works</a>
        </div>
    </section>

    <section id="what-i-do" class="bg-gradient-to-tr from-pink-600 to-orange-500 py-28">
        <div class="container">
            <h2 class="eczar mb-10 text-white">What I Do</h2>
            <div class="grid grid-cols-3 gap-10 text-white">
                {{-- Feature 1 --}}
                <div class="flex flex-col gap-3">
                    <i class="fa-solid fa-wand-magic-sparkles text-3xl"></i>
                    <h3>
                        UI/UX Design
                    </h3>
                    <p class="text-white">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                </div>
                {{-- Feature 2 --}}
                <div class="flex flex-col gap-3">
                    <i class="fa-solid fa-shuffle text-3xl"></i>
                    <h3>
                        Brand Identity
                    </h3>
                    <p class="text-white">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                </div>
                {{-- Feature 3 --}}
                <div class="flex flex-col gap-3">
                    <i class="fa-solid fa-object-group text-3xl"></i>
                    <h3>
                        Web Design
                    </h3>
                    <p class="text-white">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                </div>
                {{-- Feature 4 --}}
                <div class="flex flex-col gap-3">
                    <i class="fa-solid fa-mobile-screen text-3xl"></i>
                    <h3>
                        Mobile Apps
                    </h3>
                    <p class="text-white">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                </div>
                {{-- Feature 5 --}}
                <div class="flex flex-col gap-3">
                    <i class="fa-solid fa-line-chart text-3xl"></i>
                    <h3>
                        Analytics
                    </h3>
                    <p class="text-white">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                </div>
                {{-- Feature 6 --}}
                <div class="flex flex-col gap-3">
                    <i class="fa-solid fa-camera text-3xl"></i>
                    <h3>
                        Photography
                    </h3>
                    <p class="text-white">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.
                    </p>
                </div>
                
            </div>
        </div>
    </section>



    <section id="recent-works" class="py-28">
        <div class="container">
            <h2 class="eczar mb-10">Recent works</h2>

            <ul class="flex gap-10 mb-10">
                <li class="text-2xl text-gray-500 font-thin">
                    <a href="/">
                        All
                    </a>
                </li>
                <li class="text-2xl text-gray-500 font-thin">
                    <a href="/">
                        Branding
                    </a>
                </li>
                <li class="text-2xl text-gray-500 font-thin">
                    <a href="/">
                        Mockups
                    </a>
                </li>
                <li class="text-2xl text-gray-500 font-thin">
                    <a href="/">
                        UI Kits
                    </a>
                </li>
                <li class="text-2xl text-gray-500 font-thin">
                    <a href="/">
                        Photography
                    </a>
                </li>
            </ul>

            <div class="grid grid-cols-2 gap-10">
                <div class="w-full aspect-square overflow-hidden">
                    <img src="{{asset('images/works/work-1.jpg')}}" alt="" class="mb-6">
                    <div class="text-base">Mockups</div>
                    <h3 class="mt-2">Shopping Bag PSD Mockup</h3>
                </div>

                <div class="w-full aspect-square overflow-hidden">
                    <img src="{{asset('images/works/work-2.jpg')}}" alt="" class="mb-6">
                    <div class="text-base">Branding</div>
                    <h3 class="mt-2">Realistic Business Cards</h3>
                </div>

                <div class="w-full aspect-square overflow-hidden">
                    <img src="{{asset('images/works/work-3.jpg')}}" alt="" class="mb-6">
                    <div class="text-base">Mockups</div>
                    <h3 class="mt-2">Printed Business Cards</h3>
                </div>

                <div class="w-full aspect-square overflow-hidden">
                    <img src="{{asset('images/works/work-4.jpg')}}" alt="" class="mb-6">
                    <div class="text-base">Branding</div>
                    <h3 class="mt-2">Juice Bottle Packaging</h3>
                </div>

                <div class="w-full aspect-square overflow-hidden">
                    <img src="{{asset('images/works/work-5.jpg')}}" alt="" class="mb-6">
                    <div class="text-base">Photography</div>
                    <h3 class="mt-2">Mug PSD Mockup</h3>
                </div>

                <div class="w-full aspect-square overflow-hidden">
                    <img src="{{asset('images/works/work-6.jpg')}}" alt="" class="mb-6">
                    <div class="text-base">UI Kits</div>
                    <h3 class="mt-2">A4 Paper PSD</h3>
                </div>
            </div>
        </div>
    </section>



    <section id="blog" class="bg-gray-50 py-28">
        <div class="container">
            <h2>Latest blogs</h2>
            <div class="grid grid-cols-3 gap-10">
                <div>
                    <img src="{{asset('images/blogs/blog-1.png')}}" alt="" class="animate-wiggle">
                    <h3>By spite about do of do allow blush</h3>
                    <p class="text-general">Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat.</p>
                    <p class="blog-date">Larry Stark - 7 September 2016</p>
                </div>
                <div>
                    <img src="{{asset('images/blogs/blog-2.png')}}" alt="">
                    <h3>Two Before Arrow Not Relied</h3>
                    <p class="text-general">Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat.</p>
                    <p class="blog-date">Larry Stark - 7 September 2016</p>
                </div>
                <div>
                    <img src="{{asset('images/blogs/blog-3.png')}}" alt="">
                    <h3>By spite about do of do allow blush</h3>
                    <p class="text-general">Quick six blind smart out burst. Perfectly on furniture dejection determine my depending an to. Add short water court fat.</p>
                    <p class="blog-date">Larry Stark - 7 September 2016</p>
                </div>
            </div>
        </div>
    </section>



    <section id="contact">
        <div class="container py-28">
            <h2>Contact me</h2>

            <form id="contactForm" action="/go" method="POST">

                @csrf

                <div class="grid grid-cols-2 gap-10">
                    <input type="text" name="name" placeholder="Name *" class="border-b border-1 border-gray-200 px-2 py-2 focus:outline-none focus:border-gray-400">
                    <input type="text" name="phone" placeholder="Phone *" class="border-b border-1 border-gray-200 px-2 py-2 focus:outline-none focus:border-gray-400">
                    <input type="text" name="email" placeholder="Email *" class="border-b border-1 border-gray-200 px-2 py-2 focus:outline-none focus:border-gray-400">
                    <input type="text" name="subject" placeholder="Subject *" class="border-b border-1 border-gray-200 px-2 py-2 focus:outline-none focus:border-gray-400">
                    <textarea name="message" placeholder="Message *" rows="4" class="col-span-2 border-b border-1 border-gray-200 px-2 py-2 focus:outline-none focus:border-gray-400" style="resize: none;"></textarea>
                </div>
                
                <button type="submit" class="btn mt-10 border">Send message</button>
            </form>
        </div>
    </section>



    <footer class="py-12 text-center text-gray-500 text-sm flex flex-col">
        <div>&copy; {{date('Y', time())}} <span class="mx-4 text-gray-300">|</span> ALL RIGHTS RESERVED.</div>
        <ul class="flex gap-3 mx-auto mt-4">
            <li>
                <a href="https://facebook.com" aria-label="Connent with Frank Jones on Facebook">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com" aria-label="Connent with Frank Jones on Twitter">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="https://linkedin.com" aria-label="Connent with Frank Jones on Linkedin">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="https://instagram.com" aria-label="Connent with Frank Jones on Instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
        </ul>
    </footer>



    <script>
        var body = document.getElementsByTagName('body')[0];
        // body.style.backgroundColor = 'green';

        var navbar = document.querySelector("#topNav");

        var siteLogo = document.querySelector("#siteLogo");

        // trigger this function every time the user scrolls
        window.onscroll = function (event) {
            var scroll = window.pageYOffset;

            // console.log(scroll);
            if (scroll > 40) {
                navbar.classList.remove('bg-transparent', 'text-white', 'py-10');
                navbar.classList.add('bg-white', 'text-black', 'py-5');

                siteLogo.classList.remove('text-5xl', 'text-white');
                siteLogo.classList.add('text-4xl', 'text-black');

                // green
                // body.style.backgroundColor = 'green';
            
            } else {

                navbar.classList.remove('bg-white', 'text-black', 'py-5');
                navbar.classList.add('bg-transparent', 'text-white', 'py-10');

                siteLogo.classList.remove('text-4xl', 'text-black');
                siteLogo.classList.add('text-5xl', 'text-white');
                // purple
                // body.style.backgroundColor = 'purple';
            }
        }
    </script>



    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script id="rendered-js">
        /* ---- particles.js config ---- */
    
        particlesJS("particles-js", {
          "particles": {
            "number": {
              "value": 100,
              "density": {
                "enable": true,
                "value_area": 1000 } },
    
    
            "color": {
              "value": ["#e91e63", "#8bc34a"] },
    
    
            "shape": {
              "type": "circle",
              "stroke": {
                "width": 0,
                "color": "#fff" },
    
              "polygon": {
                "nb_sides": 5 },
    
              "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100 } },
    
    
            "opacity": {
              "value": 1,
              "random": false,
              "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false } },
    
    
            "size": {
              "value": 2,
              "random": true,
              "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false } },
    
    
            "line_linked": {
              "enable": true,
              "distance": 120,
              "color": "#ffffff",
              "opacity": 1.0,
              "width": 1 } },
    
    
          "interactivity": {
            "detect_on": "canvas",
            "events": {
              "onhover": {
                "enable": true,
                "mode": "grab" },
    
              "onclick": {
                "enable": false },
    
              "resize": true },
    
            "modes": {
              "grab": {
                "distance": 140,
                "line_linked": {
                  "opacity": 1 } },
    
    
              "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3 },
    
              "repulse": {
                "distance": 200,
                "duration": 0.4 },
    
              "push": {
                "particles_nb": 4 },
    
              "remove": {
                "particles_nb": 2 } } },
    
    
    
          "retina_detect": true });
        //# sourceURL=pen.js
            </script>
    
</body>
</html>