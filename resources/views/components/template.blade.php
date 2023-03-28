<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="{{asset('favicon.png')}}">

    <title>Web design in Tavira - Professional web design for local business</title>
    <meta name="description" content="Professional web design for local business in the Algarve. We specialise in creating attractive websites for small business such at affordable prices.">
    <meta name="viewport" content="width=device-width, user-scalable=no">


    {{-- Open graph information --}}
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Web design in Tavira - Professional web design for local business" />
    <meta property="og:description" content="Professional web design for local business in the Algarve. We specialise in creating attractive websites for small business such at affordable prices." />
    <meta property="og:image" content="{{asset('images/fj-banner.webp')}}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@400&family=Hind:wght@300;700&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="preload"  as="style" onload="this.rel='stylesheet'">

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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        {{-- Production scripts --}}
        <link href="{{ asset('build/assets/app-792b1097.css') }}"  rel="preload" as="style" onload="this.rel='stylesheet'">
        <script src="{{ asset('build/assets/app-b304fa97.js') }}" defer></script>
    @endif

</head>
<body>

    {{$slot}}

    @unless(isset($hideFooter))
        <x-footer />
    @endunless


    
</body>
</html>