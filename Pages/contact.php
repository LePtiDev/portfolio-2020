<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horae - Projects</title>
    <?php include_once("../INC/php-inc/link-inc.php") ?>
    <link rel="stylesheet" href="../CSS/contact.css">
</head>
<body>
    <?php include_once("../INC/php-inc/menu-inc.php") ?>

    <div id="containerMessage" class="containerMessage">
        <div class="message">
            <p id="message"></p>
        </div>
    </div>

    <h2 id="question" class="question">You contact me for</h2>
    <form action="../index.php" method="post">
        <div id="stepOne" class="stepOne" name="choice">
            <input id="checkOne" type="checkbox" name="devis">
            <input id="checkTwo" type="checkbox" name="contact">
            <input id="checkThree" type="checkbox" name="speak">
        </div>

        <textarea placeholder="Your message..." id="stepTwo" class="stepTwo" type="text" name="explication"></textarea>

        <input class="stepThree" id="stepThree" placeholder="Your email..." type="email" name="email">


        <div class="containerSubmit">
            <div id="Submit" class="Submit">Next</div>
            <input id="PHPSubmit" type="submit" class="PHPSubmit" value="Send" name="submit">
        </div>
    </form>

    <script src="../INC/js-inc/menu-inc.js"></script>
    <script src="../JS/contact.js"></script>
</body>
</html>
