<?php
    if($_POST["submit"] == "Send"){
        echo '    
            <div id="containerMessage" class="containerMessage">
                <div class="message">
                    <p id="message">We received your message</p>
                </div>
            </div>';
    }
    else {
        echo '    
            <div id="containerMessage" class="containerMessage">
                <div class="messageError">
                    <p id="message">Mhh, something wrong</p>
                </div>
            </div>';
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Horae - Quentin Guerrier</title>
        <link rel="stylesheet" href="./INC/font.css">
        <link rel="stylesheet" href="./INC/css-inc/reset-inc.css">
        <link rel="stylesheet" href="./CSS/index.css">
        <link rel="stylesheet" href="./INC/css-inc/nav.css">
        <link rel="stylesheet" href="./INC/css-inc/footer-inc.css">
    </head>

    <body>
        <!-- Nav bar -->
        <nav>
            <a href="index.php"><h2 class="logo-top"><span class="quentin">Quentin</span> <br> Guerrier</h2></a>
            <div id="navZone" class="navZone"><div id="navButton" class="button-menu"></div></div>
        </nav>

        <div id="menu" class="menu">
            <a id="linkMenuOne" class="linkMenu" href="./Pages/aboutMe.php">About me</a>
            <a id="linkMenuTwo" class="linkMenu" href="./Pages/projects.php">Projects</a>
            <a id="linkMenuThree" class="linkMenu" href="./Pages/lab.php">Horae-lab</a>
            <a id="linkMenuFore" class="linkMenu" href="./Pages/contact.php">Conctact</a>
        </div>

        <!-- first section -->
        <section class="section-one">
            <img class="horae-logo" src="./Images/horae-logo.svg" alt="logo horae">
            <h1>CREATIVE FULL STACK DEVELOPER</h1>
        </section>
        <section class="section-two">
            <h2 class="maxTitle">PROJECTS</h2>
            <!-- line of projects -->
            <div class="line-project"></div>

            <!-- project -->
            <div id="containerOne" class="container-project left">
                <p id="numberProjectLeft" class="number-project-left bold">01</p>
                <a href="#">
                    <div id="project" class="project">
                        <!-- overlay -->
                        <div id="overlay-project" class="overlay-project">
                            <h3 id="nameProject" class="name-project">Project name</h3>
                            <p id="descriptionProject" class="description-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, eius ipsam iste perferendis quis repudiandae sit! Ab alias, amet, doloremque dolorum fugiat magni nam, nemo nobis nostrum optio porro quaerat.</p>
                            <a id="knowMore" class="know-more">More</a>
                        </div>
                        <!-- picture of the project -->
                    </div>
                </a>
            </div>

            <div id="containerTwo" class="container-project right">
                <p id="numberProjectTwo" class="number-project-right bold">02</p>
                <div id="projectTwo" class="project">
                    <!-- overlay -->
                    <div id="overlay-project-two" class="overlay-project">
                        <h3 id="nameProjectTwo" class="name-project">Project name</h3>
                        <p id="descriptionProjectTwo" class="description-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, eius ipsam iste perferendis quis repudiandae sit! Ab alias, amet, doloremque dolorum fugiat magni nam, nemo nobis nostrum optio porro quaerat.</p>
                        <a id="knowMoreTwo" class="know-more">More</a>
                    </div>
                    <!-- picture of the project -->
                    <img class="image-project" src="Images/exemple.jpg">
                </div>
            </div>

            <div id="containerThree" class="container-project left margin">
                <p id="numberProjectThree" class="number-project-left bold">03</p>
                <div id="projectThree" class="project">
                    <!-- overlay -->
                    <div id="overlay-project-three" class="overlay-project">
                        <h3 id="nameProjectThree" class="name-project">Project name</h3>
                        <p id="descriptionProjectThree" class="description-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, eius ipsam iste perferendis quis repudiandae sit! Ab alias, amet, doloremque dolorum fugiat magni nam, nemo nobis nostrum optio porro quaerat.</p>
                        <a id="knowMoreThree" class="know-more">More</a>
                    </div>
                    <!-- picture of the project -->
                    <img class="image-project" src="Images/exemple.jpg">
                </div>
            </div>

            <a class="seeMore" href="./Pages/projects.php">More</a>
        </section>

        <section class="section-four">
            <div class="editor">
                <!-- skills -->
                <h3 class="title">Skills :</h3>
                <div class="containerLogo">
                    <div class="designLogo ">
                        <img id="logoOne" class="logo" src="./Images/vue-logo.png">
                        <p id="logoNameOne" class="logoName">Vue.js</p>
                    </div>
                    <div class="designLogo">
                        <img id="logoTwo" class="logo" src="./Images/nuxt-logo.png">
                        <p id="logoNameTwo" class="logoName">Nuxt.js</p>
                    </div>
                    <div class="designLogo">
                        <img id="logoThree" class="logo" src="./Images/ionic-logo.png">
                        <p id="logoNameThree" class="logoName">Ionic</p>
                    </div>
                </div>
                <h3 class="title">Experience :</h3>
                <div class="containerLogo">
                    <div class="designLogo">
                        <svg id="logoFore" class="logoSocity" viewBox="0 0 468.81 274.18"><defs><style>.adn-realty-logo-1{fill:none;}.adn-realty-logo-2{fill:#fff;}</style></defs><title>adn-realty</title><g id="Calque_2" data-name="Calque 2"><g id="Calque_1-2" data-name="Calque 1"><path class="adn-realty-logo-1" d="M391.52,251.66c-.56.11-1.15.2-1.77.27s-1.24.16-1.85.27a14,14,0,0,0-1.71.44,5.07,5.07,0,0,0-1.47.74,3.49,3.49,0,0,0-1,1.17,3.75,3.75,0,0,0-.38,1.79,3.63,3.63,0,0,0,.38,1.74,2.92,2.92,0,0,0,1,1.11,4.35,4.35,0,0,0,1.52.57,9.7,9.7,0,0,0,1.8.16,6.81,6.81,0,0,0,3.53-.76,5.08,5.08,0,0,0,1.85-1.82,5.79,5.79,0,0,0,.73-2.15,14.43,14.43,0,0,0,.14-1.74v-2.88a3.45,3.45,0,0,1-1.22.68A12.5,12.5,0,0,1,391.52,251.66Z"></path><path class="adn-realty-logo-1" d="M358.37,241.27a6.73,6.73,0,0,0-3.07.63,5.82,5.82,0,0,0-2,1.55,5.69,5.69,0,0,0-1,2,8.94,8.94,0,0,0-.35,1.85h12.57a9,9,0,0,0-1.93-4.46A5.42,5.42,0,0,0,358.37,241.27Z"></path><path class="adn-realty-logo-2" d="M339,235.88a10.39,10.39,0,0,0-2.56,1.22,9.73,9.73,0,0,0-3.59,4.32h-.11v-5.22h-7.34v28.12h7.72V251.66a15.49,15.49,0,0,1,.38-3.54,7.78,7.78,0,0,1,1.28-2.86,6.23,6.23,0,0,1,2.36-1.93,8.26,8.26,0,0,1,3.59-.71,14.09,14.09,0,0,1,1.47.08q.76.08,1.31.19v-7.18a6,6,0,0,0-1.69-.27A9.22,9.22,0,0,0,339,235.88Z"></path><path class="adn-realty-logo-2" d="M369.22,240.56a12.47,12.47,0,0,0-4.38-3.73,13.38,13.38,0,0,0-6.26-1.39,14.59,14.59,0,0,0-5.85,1.14,13.59,13.59,0,0,0-7.48,7.83,16.39,16.39,0,0,0-1,5.87,17.11,17.11,0,0,0,1,6,13.55,13.55,0,0,0,2.86,4.68,12.45,12.45,0,0,0,4.51,3,16.05,16.05,0,0,0,6,1.06,14.73,14.73,0,0,0,8.16-2.17q3.38-2.17,5-7.24H365a4.85,4.85,0,0,1-2.07,2.48,7.92,7.92,0,0,1-9-.52q-1.74-1.68-1.91-5.44h20.29a19.85,19.85,0,0,0-.55-6.26A15.32,15.32,0,0,0,369.22,240.56Zm-17.27,6.69a8.94,8.94,0,0,1,.35-1.85,5.69,5.69,0,0,1,1-2,5.82,5.82,0,0,1,2-1.55,6.73,6.73,0,0,1,3.07-.63,5.42,5.42,0,0,1,4.22,1.52,9,9,0,0,1,1.93,4.46Z"></path><path class="adn-realty-logo-2" d="M402,258.08V243.44a6.77,6.77,0,0,0-1.14-4.11,7.83,7.83,0,0,0-2.94-2.42,13.21,13.21,0,0,0-4-1.17,31.88,31.88,0,0,0-4.3-.3,23.68,23.68,0,0,0-4.65.46,13.26,13.26,0,0,0-4.16,1.55,9.33,9.33,0,0,0-3,2.88,9,9,0,0,0-1.36,4.52h7.72a4.36,4.36,0,0,1,1.52-3.26,5.85,5.85,0,0,1,3.59-1,12.94,12.94,0,0,1,1.93.14,4.31,4.31,0,0,1,1.58.54,3,3,0,0,1,1.09,1.14,4.13,4.13,0,0,1,.41,2,2.09,2.09,0,0,1-.7,1.82,5.24,5.24,0,0,1-2.07,1,20.57,20.57,0,0,1-3,.49c-1.13.11-2.26.25-3.43.44a32.55,32.55,0,0,0-3.45.73,9.75,9.75,0,0,0-3,1.39,7.05,7.05,0,0,0-2.18,2.48,8.21,8.21,0,0,0-.84,3.94,8.81,8.81,0,0,0,.73,3.75,7.09,7.09,0,0,0,2,2.61,8.58,8.58,0,0,0,3,1.52,13.78,13.78,0,0,0,3.75.49,17.47,17.47,0,0,0,5.11-.76,10.07,10.07,0,0,0,4.35-2.67,11.36,11.36,0,0,0,.19,1.39,11.53,11.53,0,0,0,.35,1.33H403a6.51,6.51,0,0,1-.76-2.61A29.55,29.55,0,0,1,402,258.08Zm-7.72-4.62a14.43,14.43,0,0,1-.14,1.74,5.79,5.79,0,0,1-.73,2.15,5.08,5.08,0,0,1-1.85,1.82,6.81,6.81,0,0,1-3.53.76,9.7,9.7,0,0,1-1.8-.16,4.35,4.35,0,0,1-1.52-.57,2.92,2.92,0,0,1-1-1.11,3.63,3.63,0,0,1-.38-1.74,3.75,3.75,0,0,1,.38-1.79,3.49,3.49,0,0,1,1-1.17,5.07,5.07,0,0,1,1.47-.74,14,14,0,0,1,1.71-.44c.62-.11,1.23-.2,1.85-.27s1.2-.16,1.77-.27a12.5,12.5,0,0,0,1.58-.41,3.45,3.45,0,0,0,1.22-.68Z"></path><rect class="adn-realty-logo-2" x="408.25" y="225.5" width="7.72" height="38.84"></rect><path class="adn-realty-logo-2" d="M431.85,227.78h-7.72v8.43h-4.68v5.17h4.68V258a7.17,7.17,0,0,0,.7,3.43,5.06,5.06,0,0,0,1.93,2,8,8,0,0,0,2.83,1,22.61,22.61,0,0,0,3.4.24q1.15,0,2.34-.05a18.55,18.55,0,0,0,2.18-.22v-6a10.23,10.23,0,0,1-1.14.16q-.6.06-1.25.06a2.62,2.62,0,0,1-3.26-3.26V241.38h5.66v-5.17h-5.66Z"></path><path class="adn-realty-logo-2" d="M458.83,236.21l-6.15,19.26h-.11l-6.36-19.26H438l9.85,26.38a4.65,4.65,0,0,1,.33,1.74,3.88,3.88,0,0,1-.73,2.29,3,3,0,0,1-2.26,1.2,16,16,0,0,1-2.29-.05l-2.23-.22v6.36l2.36.19c.78.05,1.57.08,2.37.08a11.23,11.23,0,0,0,6.2-1.47,9.51,9.51,0,0,0,3.48-4.9l11.75-31.6Z"></path><path class="adn-realty-logo-2" d="M396.58,69.67a71.84,71.84,0,0,0-45.12,15.92V73.89H324.37v136h27.09v-68a45.13,45.13,0,1,1,90.25,0v68h27.09v-68A72.31,72.31,0,0,0,396.58,69.67Z"></path><path class="adn-realty-logo-2" d="M276.06,0V85.59a71.84,71.84,0,0,0-45.12-15.92c-25.7,0-47.07,16.23-66.88,36.88l18.36,20c15.93-16.8,32.15-29.81,48.51-29.81a45.13,45.13,0,0,1,0,90.25c-19.83,0-41.88-21.54-61-42.62l-30.66-34v0c-21.39-22.74-42.71-40.71-67-40.71a72.22,72.22,0,0,0,0,144.44c24.24,0,44.68-15.31,63.68-35l-18.35-20C102.46,174.95,87.22,187,72.22,187a45.13,45.13,0,0,1,0-90.25c17.62,0,39,22.55,60,46.1,0,0,27.68,30.39,27.68,30.39l-.08.07c21,21.87,44.41,40.79,71.14,40.79a71.82,71.82,0,0,0,45.12-15.92V209.9h27.09V0Z"></path></g></g></svg>
                        <p id="logoNameFore" class="logoName">Adn realty</p>
                    </div>
                    <div class="designLogoSocity">
                        <img id="logoFive" class="logoSocity decathlon" src="./Images/decathlon-logo.png">
                        <p id="logoNameFive" class="logoName">Decathlon</p>
                    </div>
                </div>
            </div>
            <div class="aboutMySelf">
                <h3 class="title">About me :</h3>
                <p class="presentationText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusantium alias aliquid atque beatae consequatur corporis dignissimos doloremque, eaque eum excepturi libero necessitatibus quos reprehenderit sint tempora vitae. Aut, rem?</p>
                <h3 class="title">Mail :</h3>
                <p class="presentationText">quentin@horae.paris</p>
                <a class="seeMoreMe" href="Pages/contact.php">More</a>
            </div>
        </section>
        <footer>
            <!-- contact me / mail / github / codepen / linkedin / pluralsight -->
            <div class="footerLeft">
                <div class="contact">
                    <div class="link">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M18 6v7c0 1.1-0.9 2-2 2h-4v3l-4-3h-4c-1.101 0-2-0.9-2-2v-7c0-1.1 0.899-2 2-2h12c1.1 0 2 0.9 2 2z"></path></svg>
                        <a href="#">quentin@horae.paris</a> <!-- mail -->
                    </div>
                    <div class="link">
                        <svg class="svgmargin" version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M5 3c0 1.062-0.71 1.976-2.001 1.976-1.215 0-1.999-0.862-1.999-1.924 0-1.090 0.76-2.052 2-2.052s1.976 0.91 2 2zM1 19v-13h4v13h-4z"></path> <path d="M7 10.444c0-1.545-0.051-2.836-0.102-3.951h3.594l0.178 1.723h0.076c0.506-0.811 1.746-2 3.822-2 2.532 0 4.432 1.695 4.432 5.342v7.442h-4v-6.861c0-1.594-0.607-2.81-2-2.81-1.062 0-1.594 0.86-1.873 1.569-0.102 0.254-0.127 0.608-0.127 0.963v7.139h-4v-8.556z"></path></svg>
                        <a href="#">in/Quentin.Guerrier</a> <!-- linkedin -->
                    </div>
                    <div class="link">
                        <svg class="svgmargin"  version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M16 0.395c-8.836 0-16 7.163-16 16 0 7.069 4.585 13.067 10.942 15.182 0.8 0.148 1.094-0.347 1.094-0.77 0-0.381-0.015-1.642-0.022-2.979-4.452 0.968-5.391-1.888-5.391-1.888-0.728-1.849-1.776-2.341-1.776-2.341-1.452-0.993 0.11-0.973 0.11-0.973 1.606 0.113 2.452 1.649 2.452 1.649 1.427 2.446 3.743 1.739 4.656 1.33 0.143-1.034 0.558-1.74 1.016-2.14-3.554-0.404-7.29-1.777-7.29-7.907 0-1.747 0.625-3.174 1.649-4.295-0.166-0.403-0.714-2.030 0.155-4.234 0 0 1.344-0.43 4.401 1.64 1.276-0.355 2.645-0.532 4.005-0.539 1.359 0.006 2.729 0.184 4.008 0.539 3.054-2.070 4.395-1.64 4.395-1.64 0.871 2.204 0.323 3.831 0.157 4.234 1.026 1.12 1.647 2.548 1.647 4.295 0 6.145-3.743 7.498-7.306 7.895 0.574 0.497 1.085 1.47 1.085 2.963 0 2.141-0.019 3.864-0.019 4.391 0 0.426 0.288 0.925 1.099 0.768 6.354-2.118 10.933-8.113 10.933-15.18 0-8.837-7.164-16-16-16z"></path></svg>
                        <a href="#">Quentin.Guerrier</a> <!-- github -->
                    </div>
                </div>
                <div class="contact">
                    <div class="link">
                        <svg class="svgmargin"  version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path d="M29.555 11.501l-14-9.333c-0.336-0.224-0.774-0.224-1.109 0l-14 9.333c-0.278 0.185-0.445 0.498-0.445 0.832v9.333c0 0.334 0.167 0.647 0.445 0.832l14 9.333c0.168 0.112 0.361 0.168 0.555 0.168s0.387-0.056 0.555-0.168l14-9.333c0.278-0.185 0.445-0.498 0.445-0.832v-9.333c0-0.334-0.167-0.647-0.445-0.832zM15 20.465l-5.197-3.465 5.197-3.465 5.197 3.465-5.197 3.465zM16 11.798v-6.93l11.197 7.465-5.197 3.465-6-4zM14 11.798l-6 4-5.197-3.465 11.197-7.465v6.93zM6.197 17l-4.197 2.798v-5.596l4.197 2.798zM8 18.202l6 4v6.93l-11.197-7.465 5.197-3.465zM16 22.202l6-4 5.197 3.465-11.197 7.465v-6.93zM23.803 17l4.197-2.798v5.596l-4.197-2.798z"></path></svg>
                        <a href="#">Quentin.Guerrier</a> <!-- codepen -->
                    </div>
                    <div class="link">
                        <svg width="20" height="20" viewBox="0 0 24 24" version="1.1"><g><path d="M15.0722,1.6849 C9.6602,-0.2851 3.6552,2.5159 1.6852,7.9279 C-0.2848,13.3399 2.5152,19.3449 7.9272,21.3149 C13.3392,23.2849 19.3452,20.4839 21.3152,15.0729 C23.2852,9.6609 20.4842,3.6549 15.0722,1.6849 M11.5002,22.9999 C5.1592,22.9999 0.0002,17.8409 0.0002,11.4999 C0.0002,5.1589 5.1592,-0.0001 11.5002,-0.0001 C17.8412,-0.0001 23.0002,5.1589 23.0002,11.4999 C23.0002,17.8409 17.8412,22.9999 11.5002,22.9999"></path><path d="M8,5 L8,18 L19,11.5 L8,5 Z M9,7 L17,11.5 L9,16 L9,7 Z"></path><path d="M6,6.5 L6,16.5 L14,11.5 L6,6.5 Z M7,9 L12,11.5 L7,14 L7,9 Z"></path></g></svg>
                        <a href="#">Quentin.Guerrier</a> <!-- pluralsight -->
                    </div>

                </div>
            </div>

            <div class="footerRight">
                <a href="./Pages/contact.php" id="contactMe" class="contactMe">Contact me</a>
            </div>
        </footer>
        <script src="./INC/js-inc/menu-inc.js"></script>
        <script src="JS/index.js"></script>
    </body>
</html>
