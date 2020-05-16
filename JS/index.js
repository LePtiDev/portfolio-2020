

// variables
var image = document.getElementById('presentation-picture');

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
