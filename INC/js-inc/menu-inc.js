// animation nav bar and button
var navZone = document.getElementById("navZone");
var navButton = document.getElementById("navButton");
var menu = document.getElementById("menu");
var clicked = false;

var linkMenuOne = document.getElementById("linkMenuOne");
var linkMenuTwo = document.getElementById("linkMenuTwo");
var linkMenuThree = document.getElementById("linkMenuThree");
var linkMenuFore = document.getElementById("linkMenuFore");

navZone.addEventListener("click", function(){
    if(clicked){
        clicked = false;
        navButton.style.transform = "rotate(-135deg)";
        menu.style.left = "110vw"

        linkMenuOne.style.opacity = "0";
        linkMenuOne.style.marginBottom = "500px";
        linkMenuOne.style.transitionDelay = "500ms";

        linkMenuTwo.style.opacity = "0";
        linkMenuTwo.style.marginBottom = "500px";
        linkMenuTwo.style.transitionDelay = "500ms";

        linkMenuThree.style.opacity = "0";
        linkMenuThree.style.marginBottom = "500px";
        linkMenuThree.style.transitionDelay = "500ms";

        linkMenuFore.style.opacity = "0";
        linkMenuFore.style.marginBottom = "500px";
        linkMenuFore.style.transitionDelay = "500ms";
    }
    else{
        clicked = true;
        navButton.style.transform = "rotate(45deg)";
        menu.style.left = "0";

        linkMenuOne.style.opacity = "1";
        linkMenuOne.style.marginBottom = "0";
        linkMenuOne.style.transitionDelay = "100ms";

        linkMenuTwo.style.opacity = "1";
        linkMenuTwo.style.marginBottom = "0";
        linkMenuTwo.style.transitionDelay = "300ms";

        linkMenuThree.style.opacity = "1";
        linkMenuThree.style.marginBottom = "0";
        linkMenuThree.style.transitionDelay = "500ms";

        linkMenuFore.style.opacity = "1";
        linkMenuFore.style.marginBottom = "0";
        linkMenuFore.style.transitionDelay = "700ms";
    }
});