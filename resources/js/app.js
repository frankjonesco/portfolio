import './bootstrap';

// Constants
const body = document.getElementsByTagName('body')[0];
const navbar = document.querySelector("#topNav");
const siteLogo = document.querySelector("#siteLogo");

// Check scroll for nav function
function checkScrollForNav(){
    var scroll = window.pageYOffset;
    if (scroll > 40) {
        // Adjust navbar
        navbar.classList.remove('bg-transparent', 'text-white', 'py-10');
        navbar.classList.add('bg-white', 'text-black', 'py-5');
        // Adjust site logo
        siteLogo.classList.remove('text-5xl', 'text-white');
        siteLogo.classList.add('text-4xl', 'text-black');            
    } else {
        // Adjust navbar
        navbar.classList.remove('bg-white', 'text-black', 'py-5');
        navbar.classList.add('bg-transparent', 'text-white', 'py-10');
        // Adjust site logo
        siteLogo.classList.remove('text-4xl', 'text-black');
        siteLogo.classList.add('text-5xl', 'text-white');
    }
}

// Check scroll on page load
window.onload = function (event) {
    checkScrollForNav();
}

// Check scroll when page scrolled
window.onscroll = function (event) {
    checkScrollForNav();
}












// Get all the elements you want to show on scroll
const targets = document.querySelectorAll(".js-show-on-scroll");

// Callback for IntersectionObserver
const callback = function(elements) {
    elements.forEach(element => {
  
      // Is the element in the viewport?
      if (element.isIntersecting) {
        console.log("In view");
        // Add the fadeIn class:
        element.target.classList.remove('-translate-x-32');
        element.target.classList.add('translate-x-0');
      } else {
        console.log("Not in view");
        // Otherwise remove the fadein class
        element.target.classList.remove('translate-x-0'); 
        element.target.classList.add('-translate-x-32');
      }
    });
  };
  

// Set up a new observer
const observer = new IntersectionObserver(callback);

// Loop through each of the target
targets.forEach(function(target) {
  // Hide the element
  target.classList.add('-translate-x-32', 'transition-all', 'ease-out', 'duration-500');

  // Add the element to the watcher
  observer.observe(target);
});

