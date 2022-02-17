<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../assets/img/myFace.png" />
    <link rel="stylesheet" href="../assets/style/style.css">
    <link rel="stylesheet" href="../assets/style/contact.css">
    <title>Contact | Dias Dany</title>
</head>
<body>
    <section class="container">
        <header id ="header-menu">
            <div class="logo"><a href="/index.html">
                <span>dany</span><span>Dias</span></a>
            </div>
            <div class="logo-mobile">
                <a href="/index.html"><span>d</span><span>D</span></a>
            </div>
            <nav class="menu">
                <ul>
                    <li>
                        <a href="/index.html">Accueil</a>
                    </li>
                    <li>
                        <a href="../pages/projets.html">Projets</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="containerChild">
            <div class="imgProfil">
                <span>📝</span>
            </div>
            <span>Contact</span>
            <h1>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint maiores, quis deserunt tempore commodi nulla.</h1>
        </div>
        <footer class="scrollDownFooter">Faites défiler vers le bas</footer>
    </section>
    <main>
        <div class="container-form">
            <span>* Tout les champs sont requis</span>
            <form action="../assets/php/mail.php" method="POST">
              <label for="fname">Nom</label>
              <input type="text" id="fname" name="firstname" placeholder="Votre Nom" required>
              <label for="sujet">Sujet</label>
              <input type="text" id="Subject" name="sujet" placeholder="Objet de votre message" required>
              <label for="emailAddress">Email</label>
              <input id="emailAddress" type="email" name="email" placeholder="Votre email" required>
              <label for="subject">Message</label>
              <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px" required></textarea>
              <textarea name="message" placeholder="Type your Message">
              <div>
                    <p class="success"> <?php echo $success;  ?></p>
                    <p class="failed"> <?php echo $failed;  ?></p>
                </div>
       
              <input type="submit" name="submit" value="Envoyer">
            </form>
        </div>
    </main>
    <footer class="footer">
        <div class="designedPart">
            <span>© Handcrafted in France, code & developement by<br>Dany Dias, 2022</span>
        </div>
        <nav class="linkPart">
            <ul>
                <li>
                    <a href="/index.html">Accueil</a>
                </li>
                <li>
                    <a href="../pages/projets.html">Projets</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    ●
                </li>
                <li>
                    <a href="https://dribbble.com/danydias" target="_blank">Dribbble</a>
                </li>
                <li>
                    <a href="https://codepen.io/danydias570" target="_blank">CodePen</a>
                </li>
                <li>
                    <a href="https://github.com/danydias570" target="_blank">GitHub</a>
                </li>
            </ul>
        </nav>
    </footer>
<script src="../assets/script.js"></script>
</body>
</html>