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

<div id="particles-js" style="background-image: url({{asset('images/backgrounds/developer-1.jpg')}});" class="w-screen h-screen bg-cover bg-center bg-no-repeat bg-fixed flex flex-col justify-center items-center">
        
    <x-navbar/>

    <h1 class="text-center m-auto text-[7rem] h-1/2 absolute top-1/2 -translate-y-[25%] font-bold text-white">Web design in Tavira<span class="text-yellow-300">.</span></h1>
        
    <div class="absolute bottom-0 mx-auto py-6 w-full text-center">
        <a href="/#what-i-do" aria-label="Scroll down to learn more">
            <i class="fa-solid fa-chevron-down font-bold text-5xl text-white animate-bounce transition-all duration-250 hover:scale-150"></i>
        </a>
    </div>
</div>

