
// variables
var image = document.getElementById('presentation-picture');
var project = document.getElementById("project");
var overlay = document.getElementById('overlay-project');

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
    overlay.style.width = "100%";
    overlay.style.padding = "25px";
});

project.addEventListener('mouseleave', function(){
    console.log("hover");
    overlay.style.width = "0%";
    overlay.style.padding = "0px"
});
