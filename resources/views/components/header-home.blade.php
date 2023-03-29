<div class="bg-black">
    <div id="particles-js" style="background-image: url({{asset('images/backgrounds/tavira-1.webp')}})" class="slider w-screen h-screen bg-cover bg-center bg-no-repeat bg-fixed flex flex-col justify-center items-center !bg-opacity-50">

      {{-- <div class="slide" style="background-image: url({{asset('images/backgrounds/tavira-1.webp')}})"></div>
      <div class="slide" style="background-image: url({{asset('images/backgrounds/tavira-2.webp')}})"></div>
      <div class="slide" style="background-image: url({{asset('images/backgrounds/tavira-3.webp')}})"></div>
      <div class="slide" style="background-image: url({{asset('images/backgrounds/tavira-4.webp')}})"></div>
      <div class="slide" style="background-image: url({{asset('images/backgrounds/tavira-5.webp')}})"></div> --}}

            
        <x-navbar />

        <h1 class="text-center m-auto text-[3rem] lg:text-[7rem] h-1/2 absolute lg:top-1/2 lg:-translate-y-[25%] font-bold text-white drop-shadow-xl">Web design in Tavira<span class="text-yellow-300">.</span></h1>
            
        <div class="absolute bottom-36 md:bottom-0 mx-auto py-6 w-full text-center z-30">
            <a href="#" onclick="return scrollToAnchor('what-i-do')" aria-label="Scroll down to learn more" class="animate-bounce shadow-xl bg-yellow-300 bg-opacity-70 border-black border-4 rounded-full mx-auto w-20 !aspect-square flex items-center justify-center transition-all duration-250 hover:bg-black hover:border-black group">
                <i class="fa-solid fa-chevron-down font-bold text-5xl text-black group-hover:text-white"></i>
            </a>
        </div>

        <div class="z-20 absolute bottom-8 md:bottom-0 w-full px-7 lg:px-16 pb-7 lg:pb-12 text-white flex flex-col-reverse md:flex-row justify-between items-center">
          	<ul class="flex space-x-8 text-4xl animate-pulse">
            	<li>
              		<a href="https://www.facebook.com/people/Frank-Jones-Web-Design-in-Tavira/100091050921324/" target="_blank" class="transition-all ease-in duration-150 block hover:scale-150">
                		<i class="fa-brands fa-facebook-f"></i>
					</a>
            	</li>
				<li>
					<a href="https://twitter.com/frankjonesco" target="_blank" class="transition-all ease-in duration-150 block hover:scale-150">
						<i class="fa-brands fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="https://github.com/frankjonesco" target="_blank" class="transition-all ease-in duration-150 block hover:scale-150">
						<i class="fa-brands fa-github"></i>
					</a>
				</li>
				<li>
					<a href="https://www.linkedin.com/in/frankjonesweb/" target="_blank" class="transition-all ease-in duration-150 block hover:scale-150">
						<i class="fa-brands fa-linkedin"></i>
					</a>
				</li>
          	</ul>
			<a href="#" onclick="return scrollToAnchor('contact')" class="hover-yellow-btn block text-3xl font-bold animate-pulse transition-all ease-in duration-150 hover:scale-125 hover:animate-none">
				Get Started
			</a>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script id="rendered-js" defer>
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
          "distance": 150,
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