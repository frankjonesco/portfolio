<nav id="topNav" {{$attributes->merge(['class' => 'shift fixed top-0 w-full top-nav z-40 text-lg font-light text-black !bg-transparent !bg-opacity-50 drop-shadow transition-all ease-in duration-1000']);}} style="font-family: 'Hind', sans-serif !important;">
    <div class="flex justify-between items-center px-7 lg:px-20">
        <a href="/" id="siteLogo" class="active text-5xl font-bold drop-shadow transition-all ease-in duration-300 text-black hover:scale-110">FJ<span class="text-yellow-300">.</span></a>

        {{-- Hamburger menu --}}
        <div class="flex">
            {{-- <div id="hamburgerMenu" class="space-y-1.5" onclick="javascript: clickHamburgerMenu()">
                <span class="hamburger-segments"></span>
                <span class="hamburger-segments"></span>
                <span class="hamburger-segments"></span>
            </div> --}}

            <div class="close-icon">
                <span class=""></span>
                <span class=""></span>
                <span class=""></span>
              </div>

        </div>
    </div>

    

</nav>

