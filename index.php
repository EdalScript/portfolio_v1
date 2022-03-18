<?php print_r($_POST); ?>
<?php include('sentMail.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Portfolio</title>

</head>

<body>
    <nav class="site-nav grid">
        <h1>EdalScript's Portfolio</h1>
        <ul>
            <li><a href="#portfolio">Projects</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="welcome" class="grid">
        <div class="welcome-text">
            <h2>Edgar Torres <br /> Front-End Developer</h2>
            <p class="leading">"A bit of an existentialist myself. When I'm not working on my projects, I exist in contemplation" </p>
            <a href="#portfolio" class="button">View my work</a>
        </div>
        <div class="welcome-img">
            <img src="assets/profile.jpg" alt="planet image">
        </div>
    </section>
    <section id="portfolio">
        <h3>Some of my Projects</h3>
        <div class="projects grid">
            <a href="https://edalscript.github.io/expenses-tracker/">
                <img src="assets/p1.png" alt="project 1">
                <h4>Expenses Tracker</h4>
            </a>
            <a href="https://edalscript.github.io/exchange-calculator/">
                <img src="assets/p2.png" alt="project 2">
                <h4>Exchange Calculator</h4>
            </a>
            <a href="https://edalscript.github.io/modelPerspective/">
                <img src="assets/p3.png" alt="project 3">
                <h4>CSS Model Perspective</h4>
            </a>
        </div>
    </section>
    <section id="skills">
        <h3>Tools & Technologies</h3>
        <ul class="grid">
            <li>
                <img src="assets/html.svg" alt="html5 logo">
                <h4>HTML5</h4>
            </li>
            <li>
                <img src="assets/css3.svg" alt="css3 logo">
                <h4>CSS3</h4>
            </li>
            <li>
                <img src="assets/javascript.svg" alt="JavaScript logo">
                <h4>JavaScript</h4>
            </li>
            <li>
                <img src="assets/react.svg" alt="react.js logo">
                <h4>React.js</h4>
            </li>
            <li>
                <img src="assets/redux.svg" alt="redux logo">
                <h4>Redux</h4>
            </li>
            <li>
                <img src="assets/firebase.svg" alt="firebase logo">
                <h4>Firebase</h4>
            </li>
            <li>
                <img src="assets/git.svg" alt="git logo">
                <h4>Git</h4>
            </li>
            <li>
                <img src="assets/mysql.svg" alt="mysql database logo">
                <h4>MySQL</h4>
            </li>
        </ul>
    </section>
    <section id="contact">
        <h3>Get in Touch!</h3>
        <p class="leading"></p>
        <form action="index.php" method="POST">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="subject" placeholder="Subject">
            <input type="text" name="mail" placeholder="Email">
            <textarea name="message" placeholder="Your message"></textarea>
            <button type="submit" name="submit" data-submit="...Sending" class="button">SEND</button>
        </form>
    </section>
    <footer>
        <div class="grid">
            <p class="copyright">Copyright 2022 EdalScript</p>
            <ul class="social">
                <li><a href="https://github.com/edalscript"><img src="assets/github.png" alt="github logo"></a></li>
            </ul>
        </div>
    </footer>
</body>

</html>