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
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400&family=Hind:wght@300;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">











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
        $environment = 'prod';
    @endphp
    @if($environment == 'dev')
        {{-- Development scripts --}}
        {{-- @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js']) --}}
        @vite('resources/css/app.css')
    @else
        {{-- Production scripts --}}
        <link rel="stylesheet" href="{{ asset('build/assets/app-99f0e532.css') }}">
        <script src="{{ asset('build/assets/app-a6d2e222.js') }}" defer></script>
    @endif

</head>
<body>

    {{$slot}}

    <x-footer />

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
  <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js" defer></script>
</body>
</html>