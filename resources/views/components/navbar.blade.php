<nav id="topNav" {{$attributes->merge(['class' => 'shift fixed top-0 w-full top-nav z-40 text-lg font-light text-white bg-transparent !bg-opacity-50 drop-shadow transition-all ease-in duration-300']);}} style="font-family: 'Hind', sans-serif !important;">
    <div class="flex justify-between items-center px-7 lg:px-20">
        <a href="/" id="siteLogo" class="active text-5xl font-bold drop-shadow text-white hover:scale-125">FJ<span class="text-yellow-300">.</span></a>

        {{-- Full screen menu --}}
        <ul id="navLinksFull" class="hidden lg:flex flex-row justify-end items-center w-screen text-xl transition-all ease-in duration-300">
            <li class="text-center">
                <a href="#" onclick="return scrollToAnchor('what-i-do')" class="bg-transparent font-bold bg-opacity-10 hover:bg-opacity-0 hover:border-none hover:scale-125 hover:z-50">What I do</a>
            </li>
            <li class="text-center">
                <a href="#" onclick="return scrollToAnchor('why-hire-me')" class="bg-transparent font-bold bg-opacity-10 hover:bg-opacity-0 hover:border-none hover:scale-125 hover:z-50">Why hire me</a>
            </li>
            <li class="text-center">
                <a href="#" onclick="return scrollToAnchor('how-it-works')" class="bg-transparent font-bold bg-opacity-10 hover:bg-opacity-0 hover:border-none hover:scale-125 hover:z-50">How it works</a>
            </li>
            {{-- <li>
                <a href="/#see-my-portfolio">See my portfolio</a>
            </li>
            <li>
                <a href="/#reviews">Reviews</a>
            </li> --}}
            <li class="text-center">
                <a href="#" onclick="return scrollToAnchor('contact')" class="bg-transparent font-bold bg-opacity-10 hover:border-none hover:bg-opacity-0 hover:scale-125 hover:z-50">Contact me</a>
            </li>
            <li class="text-center">
                <a href="#" onclick="return scrollToAnchor('faq')" class="bg-transparent font-bold bg-opacity-10 hover:border-none hover:scale-125 hover:z-50">FAQs</a>
            </li>
        </ul>

        {{-- Hamburger menu --}}
        <div class="flex lg:hidden">
            {{-- <div id="hamburgerMenu" class="space-y-1.5" onclick="javascript: clickHamburgerMenu()">
                <span class="hamburger-segments"></span>
                <span class="hamburger-segments"></span>
                <span class="hamburger-segments"></span>
            </div> --}}

            <div id="hamburgerMenu" class="flex flex-col space-y-2 items-end w-16 transition-all ease-in duration-300">
                <span class="bg-white w-12 h-1.5 rounded-sm transition-all ease-in duration-300"></span>
                <span class="bg-white w-12 h-1.5 rounded-sm transition-all ease-in duration-300"></span>
                <span class="bg-white w-12 h-1.5 rounded-sm transition-all ease-in duration-300"></span>
              </div>

        </div>
    </div>

    

</nav>


{{-- Mobile menu --}}
<ul id="navLinks" class="fixed top-0 z-40 opacity-0 flex flex-col justify-center items-center bg-black text-white bg-opacity-80 w-screen transition-all ease-in duration-500 -translate-x-full text-2xl font-bold">
    <li class="text-center bg-black w-full py-4 bg-opacity-80">
        <a href="#" onclick="return scrollToAnchor('what-i-do')" class="inline-block hover:translate-y-1 transition-transform ease-in duration-200">What I do</a>
    </li>
    <li class="text-center bg-black w-full py-4 bg-opacity-80">
        <a href="#" onclick="return scrollToAnchor('why-hire-me')" class="inline-block hover:translate-y-1 transition-transform ease-in duration-200">Why hire me</a>
    </li>
    <li class="text-center bg-black w-full py-4 bg-opacity-80">
        <a href="#" onclick="return scrollToAnchor('how-it-works')" class="inline-block hover:translate-y-1 transition-transform ease-in duration-200">How it works</a>
    </li>
    {{-- <li>
        <a href="/#see-my-portfolio">See my portfolio</a>
    </li>
    <li>
        <a href="/#reviews">Reviews</a>
    </li> --}}
    <li class="text-center bg-black w-full py-4 bg-opacity-80">
        <a href="#" onclick="return scrollToAnchor('contact')" class="inline-block hover:translate-y-1 transition-transform ease-in duration-200">Contact me</a>
    </li>
    <li class="text-center bg-black w-full py-4 bg-opacity-80">
        <a href="#" onclick="return scrollToAnchor('faq')" class="inline-block hover:translate-y-1 transition-transform ease-in duration-200">FAQs</a>
    </li>
</ul>

<script>





    function scrollToAnchor(anchor){
        var element = document.getElementById(anchor);
        var headerOffset = 84;
        var elementPosition = element.getBoundingClientRect().top;
        var offsetPosition = elementPosition + window.pageYOffset - headerOffset;
  
        window.scrollTo({
             top: offsetPosition,
             behavior: "smooth"
        });

        return false;
    }




    function toggleMiniNav(){
        hamburgerMenu.classList.toggle('open');
        navLinks.classList.toggle('-translate-x-full');
        navLinks.classList.toggle('opacity-0');
    }

    hamburgerMenu.onclick = function() {
      toggleMiniNav();

    }

    var miniNavLinks = document.querySelectorAll('ul#navLinks>li>a');

    [].forEach.call(miniNavLinks, el => {
      el.onclick = function () {
        toggleMiniNav();
      }
    });

</script>
