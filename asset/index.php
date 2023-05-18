<?php
require_once("../controllers/controller.php");

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>

    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <header>
                <h2>Joe BOTSEKE</h2>
                <p>And there are no hoverboards or flying cars.<br />
                    Just apps. Lots of mother flipping apps.</p>
            </header>
            <span class="image"><img src="images/jc.jpg" alt="" /></span>
        </div>
        <a href="../views/consulterEntreprises.php" class="a-btn">Consulter</a>
        <a href="../views/gererEntreprises.php" class="a-btn">Gérer</a>
    </section>

    <div>
        <?php
            $lesentreprises = new Controller();
            $lesentreprises = $lesentreprises->getLesEntreprisesController();
            
            foreach($lesentreprises as $element)
            {
                echo "<h2>" . $element['nom'] . $element['presnom'] . $element['email'] . $element['phone'] . $element['description'] . $element['etape'] . $element['reponse'] . "</h2>";
            }

        ?>
    </div>


    <!-- Footer -->
    <footer id="footer">
        <ul class="icons">
            <li><a href="#" class="icon"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon"><span class="label">GitHub</span></a></li>
            <li><a href="#" class="icon"><span class="label">Email</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy; Tous droits réservés.</li>
            <li>Design: <a href="#">OGM</a></li>
        </ul>
    </footer>


    <script src="./script.js"></script>
</body>

</html>