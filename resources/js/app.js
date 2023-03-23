import './bootstrap';

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