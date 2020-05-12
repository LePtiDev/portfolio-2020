

// variables
var image = document.getElementById('presentation-picture');

// scroll
window.onscroll = function(){
    var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
    if (scrollTop > 250 && scrollTop < 1299){
        image.style.top = (15 / scrollTop) * 800 + "%";
    }

    if(scrollTop > 1300){
        image.style.top = - (15 / scrollTop) * 800 + "%";
    }
};
