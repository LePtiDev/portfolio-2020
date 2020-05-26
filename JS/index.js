
// variables paralaxe image
var bar = document.getElementById('bar')

// variables of the project one
var project = document.getElementById("project");
var overlay = document.getElementById("overlay-project");
var nameProject = document.getElementById("nameProject");
var descriptionProject = document.getElementById("descriptionProject");
var knowMore = document.getElementById("knowMore");
var containerOne = document.getElementById("containerOne");
var numberProjectLeft = document.getElementById("numberProjectLeft");

// variables of the project two
var projectTwo = document.getElementById("projectTwo");
var overlayTwo = document.getElementById("overlay-project-two");
var nameProjectTwo = document.getElementById("nameProjectTwo");
var descriptionProjectTwo = document.getElementById("descriptionProjectTwo");
var knowMoreTwo = document.getElementById("knowMoreTwo");
var containerTwo = document.getElementById("containerTwo");
var numberProjectLeftTwo = document.getElementById("numberProjectTwo");

// variables of the project three
var projectThree = document.getElementById("projectThree");
var overlayThree = document.getElementById("overlay-project-three");
var nameProjectThree = document.getElementById("nameProjectThree");
var descriptionProjectThree = document.getElementById("descriptionProjectThree");
var knowMoreThree = document.getElementById("knowMoreThree");
var containerThree = document.getElementById("containerThree");
var numberProjectLeftThree = document.getElementById("numberProjectThree");

// animation for the skills name
var logoOne = document.getElementById("logoOne");
var logoTwo = document.getElementById("logoTwo");
var logoThree = document.getElementById("logoThree");
var logoFore = document.getElementById("logoFore");
var logoFive = document.getElementById("logoFive");

var logoNameOne = document.getElementById("logoNameOne");
var logoNameTwo = document.getElementById("logoNameTwo");
var logoNameThree = document.getElementById("logoNameThree");
var logoNameFore = document.getElementById("logoNameFore");
var logoNameFive = document.getElementById("logoNameFive");



// hover project one
project.addEventListener('mouseenter', function(){

    // overlay
    overlay.style.width = "100%";
    overlay.style.transitionDelay = "0ms";
    overlay.style.padding = "120px 70px 70px 70px";

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
    containerOne.style.marginLeft = "25%";
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
    containerOne.style.marginLeft = "30%";
    numberProjectLeft.style.fontSize = "150px"
});

// hover project two
projectTwo.addEventListener('mouseenter', function(){

    // overlay
    overlayTwo.style.width = "100%";
    overlayTwo.style.transitionDelay = "0ms";
    overlayTwo.style.padding = "120px 70px 70px 70px";

    // title
    nameProjectTwo.style.opacity = "1";
    nameProjectTwo.style.transitionDelay = "300ms";
    nameProjectTwo.style.transitionDuration = "500ms";

    // descritpion
    descriptionProjectTwo.style.opacity = "1";
    descriptionProjectTwo.style.transitionDelay = "600ms";
    descriptionProjectTwo.style.transitionDuration = "500ms";

    // more information
    knowMoreTwo.style.opacity = "1";
    knowMoreTwo.style.transitionDelay = "800ms";
    knowMoreTwo.style.transitionDuration = "500ms";

    //container left
    containerTwo.style.marginRight = "25%";
    numberProjectLeftTwo.style.fontSize = "170px"

});

projectTwo.addEventListener('mouseleave', function(){

    // overlay
    overlayTwo.style.width = "0%";
    overlayTwo.style.padding = "0px";
    overlayTwo.style.transitionDelay = "100ms";

    // title
    nameProjectTwo.style.opacity = "0";
    nameProjectTwo.style.transitionDelay = "0ms";
    nameProjectTwo.style.transitionDuration = "100ms";

    // descritpion
    descriptionProjectTwo.style.opacity = "0";
    descriptionProjectTwo.style.transitionDelay = "0ms";
    descriptionProjectTwo.style.transitionDuration = "100ms";

    // more information
    knowMoreTwo.style.opacity = "0";
    knowMoreTwo.style.transitionDelay = "0ms";
    knowMoreTwo.style.transitionDuration = "100ms";

    //container left
    containerTwo.style.marginRight = "30%";
    numberProjectLeftTwo.style.fontSize = "150px"
});

// hover project three
projectThree.addEventListener('mouseenter', function(){

    // overlay
    overlayThree.style.width = "100%";
    overlayThree.style.transitionDelay = "0ms";
    overlayThree.style.padding = "120px 70px 70px 70px";

    // title
    nameProjectThree.style.opacity = "1";
    nameProjectThree.style.transitionDelay = "300ms";
    nameProjectThree.style.transitionDuration = "500ms";

    // descritpion
    descriptionProjectThree.style.opacity = "1";
    descriptionProjectThree.style.transitionDelay = "600ms";
    descriptionProjectThree.style.transitionDuration = "500ms";

    // more information
    knowMoreThree.style.opacity = "1";
    knowMoreThree.style.transitionDelay = "800ms";
    knowMoreThree.style.transitionDuration = "500ms";

    //container left
    containerThree.style.marginLeft = "25%";
    numberProjectLeftThree.style.fontSize = "170px"

});

projectThree.addEventListener('mouseleave', function(){

    // overlay
    overlayThree.style.width = "0%";
    overlayThree.style.padding = "0px";
    overlayThree.style.transitionDelay = "100ms";

    // title
    nameProjectThree.style.opacity = "0";
    nameProjectThree.style.transitionDelay = "0ms";
    nameProjectThree.style.transitionDuration = "100ms";

    // descritpion
    descriptionProjectThree.style.opacity = "0";
    descriptionProjectThree.style.transitionDelay = "0ms";
    descriptionProjectThree.style.transitionDuration = "100ms";

    // more information
    knowMoreThree.style.opacity = "0";
    knowMoreThree.style.transitionDelay = "0ms";
    knowMoreThree.style.transitionDuration = "100ms";

    //container left
    containerThree.style.marginLeft = "30%";
    numberProjectLeftThree.style.fontSize = "150px"
});

//hover on skillks
logoOne.addEventListener("mouseenter", function(){
    logoNameOne.style.opacity = "1";
    logoNameOne.style.marginTop = "2vh";
});

logoOne.addEventListener("mouseleave", function(){
    logoNameOne.style.opacity = "0";
    logoNameOne.style.marginTop = "0vh";
});

logoTwo.addEventListener("mouseenter", function(){
    logoNameTwo.style.opacity = "1";
    logoNameTwo.style.marginTop = "2vh";
});

logoTwo.addEventListener("mouseleave", function(){
    logoNameTwo.style.opacity = "0";
    logoNameTwo.style.marginTop = "0vh";
});

logoThree.addEventListener("mouseenter", function(){
    logoNameThree.style.opacity = "1";
    logoNameThree.style.marginTop = "2vh";
});

logoThree.addEventListener("mouseleave", function(){
    logoNameThree.style.opacity = "0"
    logoNameThree.style.marginTop = "0vh";
});

logoFore.addEventListener("mouseenter", function(){
    logoNameFore.style.opacity = "1";
    logoNameFore.style.marginTop = "2vh";
});

logoFore.addEventListener("mouseleave", function(){
    logoNameFore.style.opacity = "0"
    logoNameFore.style.marginTop = "0vh";
});

logoFive.addEventListener("mouseenter", function(){
    logoNameFive.style.opacity = "1";
    logoNameFive.style.marginTop = "2vh";
});

logoFive.addEventListener("mouseleave", function(){
    logoNameFive.style.opacity = "0"
    logoNameFive.style.marginTop = "0vh";
});
