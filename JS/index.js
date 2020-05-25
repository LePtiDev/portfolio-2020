
// variables
var image = document.getElementById('presentation-picture');
var project = document.getElementById("project");
var overlay = document.getElementById("overlay-project");
var nameProject = document.getElementById("nameProject");
var descriptionProject = document.getElementById("descriptionProject");
var knowMore = document.getElementById("knowMore");
var containerLeft = document.getElementById("containerLeft");
var numberProjectLeft = document.getElementById("numberProjectLeft");

// scroll
window.onscroll = function(){
    var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
    if (scrollTop > 250 && scrollTop < 1250){
        image.style.top = (15 / scrollTop) * 800 + "%";
        image.style.transitionDuration = "50ms";
    }

    if(scrollTop >= 1250){
        image.style.top = "-20%";
        image.style.transitionDuration = "1000ms";
    }
};

// hover
project.addEventListener('mouseenter', function(){
    console.log("hover");

    // overlay
    overlay.style.width = "100%";
    overlay.style.transitionDelay = "0ms";
    overlay.style.padding = "90px 70px 70px 70px";

    // title
    nameProject.style.opacity = "1";
    nameProject.style.transitionDelay = "300ms";
    nameProject.style.transitionDuration = "500ms";

    // descritpion
    descriptionProject.style.opacity = "1";
    descriptionProject.style.transitionDelay = "600ms";
    descriptionProject.style.transitionDuration = "500ms";

    // more information
    knowMore.style.opacity = "1";
    knowMore.style.transitionDelay = "800ms";
    knowMore.style.transitionDuration = "500ms";

    //container left
    containerLeft.style.marginLeft = "25%";
    numberProjectLeft.style.fontSize = "170px"

});

project.addEventListener('mouseleave', function(){

    // overlay
    overlay.style.width = "0%";
    overlay.style.padding = "0px"
    overlay.style.transitionDelay = "100ms";

    // title
    nameProject.style.opacity = "0";
    nameProject.style.transitionDelay = "0ms";
    nameProject.style.transitionDuration = "100ms";

    // descritpion
    descriptionProject.style.opacity = "0";
    descriptionProject.style.transitionDelay = "0ms";
    descriptionProject.style.transitionDuration = "100ms";

    // more information
    knowMore.style.opacity = "0";
    knowMore.style.transitionDelay = "0ms";
    knowMore.style.transitionDuration = "100ms";

    //container left
    containerLeft.style.marginLeft = "30%";
    numberProjectLeft.style.fontSize = "150px"
});
