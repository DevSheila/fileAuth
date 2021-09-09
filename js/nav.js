//when the user scrolls the page execute myFunction
window.onscroll = function(){
    myFunction()
};
// get the navbar
var navbar = document.getElementsByClassName("nav");
//get the offset position of the navbar
var stickyNav = nav.offsetTop;
//add the sticky class to the navbar when you  reach its scroll position.Remove "stickyNav" when you leave the position

function myFunction() {
    if(window.pageYOffset >= stickyNav){
    navbar.classList.add("stickyNav");
    } else{
        navbar.classList.remove("stickyNav");
    }
}