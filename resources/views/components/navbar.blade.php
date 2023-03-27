<nav id="topNav" {{$attributes->merge(['class' => 'shift fixed top-0 w-full top-nav z-50 flex justify-between items-center text-lg font-light text-white px-7 lg:px-20 py-10 bg-transparent bg-opacity-90 drop-shadow transition-all ease duration-1000']);}} style="font-family: 'Hind', sans-serif !important;">
    <a href="/" id="siteLogo" class="active text-5xl font-bold drop-shadow transition-all ease duration-1000 text-white">FJ<span class="text-yellow-300">.</span></a>
    <ul class="hidden space-x-8 lg:flex">
        <li>
            <a href="/#what-i-do">What I do</a>
        </li>
        <li>
            <a href="/#why-hire-me">Why hire me</a>
        </li>
        <li>
            <a href="/#how-it-works">How it works</a>
        </li>
        {{-- <li>
            <a href="/#see-my-portfolio">See my portfolio</a>
        </li>
        <li>
            <a href="/#reviews">Reviews</a>
        </li> --}}
        <li>
            <a href="/#contact">Contact me</a>
        </li>
        <li>
            <a href="/#faq">FAQs</a>
        </li>
    </ul>


    {{-- Hamburger menu --}}
    <div class="flex lg:hidden">
        <div id="hamburger-menu" class="space-y-1.5">
          <span class="block rounded-sm shadow w-10 h-1.5 bg-white hamburger-segments transition-all ease duration-1000"></span>
          <span class="block rounded-sm shadow w-10 h-1.5 bg-white hamburger-segments transition-all ease duration-1000"></span>
          <span class="block rounded-sm shadow w-10 h-1.5 bg-white hamburger-segments transition-all ease duration-1000"></span>
        </div>
      </div>

   
</nav>
