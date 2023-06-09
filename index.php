<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Letecode est une grandes communauté">
    <title>Letcode - tp</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <!-- Open graph -->
    <meta property="og:title" content="letecode">
    <meta property="og:description" content="bienvenu chez letecode-academy">
    <meta property="og:type" content="website">
    <meta property="og:image" content="image/logo-trans copy.png">
    <meta property="og:url" content="https://seasonkit-tp.000webhostapp.com/letecode/">
    <meta property="og:title" content="letecode-academy">
</head>
<body>
    <!-- header- start -->
    <?php
        include ("include/header.php");
    ?>
    <!-- header- end -->

    <!-- welcome- start -->

    <section class="welcome">
        <div class="container text-center">
            <h1>Bienvenu sur notre site</h1>
            <p>Nous vous apprenons à changer le <br> monde avec votre créativité</p>
            <a href="contact.php" class="btn">Nous contacter</a>
        </div>
    </section>

    <!-- welcome- end -->


    <!-- content- start -->
    <section class="content">
        <div class="container">
            <div class="img">
                <img src="image/logo-trans copy.png" alt="">
            </div>
           
            <div class="text">
                <h2>Vous avez droit <br> d'apprendre</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit quo beatae ullam aspernatur quaerat consequatur. Temporibus illum, aut nihil sint molestiae quia nesciunt labore minima quo similique nam incidunt voluptates!</p>
            </div>
        </div>
    </section>
    <!-- content- end -->

    <!-- a propos- start -->
    <section class="apropos">
        <div class="container">
            <h2>A propos de nous</h2>
            <div class="para">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod earum tempora, facilis aspernatur dicta tenetur inventore debitis fugiat. Nam perferendis esse quia optio voluptatum repellendus architecto obcaecati aliquam quae libero.</p>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod earum tempora, facilis aspernatur dicta tenetur inventore debitis fugiat. Nam perferendis esse quia optio voluptatum repellendus architecto obcaecati aliquam quae libero.</p>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque nemo porro esse. Omnis explicabo dolorum id, ut quo sit aliquam. Id recusandae at ipsum dolor tempora tenetur deleniti, ullam necessitatibus? Natus optio animi iusto, blanditiis dolore, consequuntur voluptatibus impedit expedita aspernatur ipsa rerum, excepturi beatae minima eos repellat modi nobis.</p>
            </div>
            <div class="option">
                <h3>Les options :</h3>
                <ul class="optionlist">
                    <li>- Git et GitHub</li>
                    <li>- Html</li>
                    <li>- Css</li>
                    <li>- JavaScript</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- a propos- end -->

    <!-- footer- start -->

    <?php
        include ("include/footer.php");
    ?>
    <!-- footer- end -->

    <script src="js/script.js"></script>
</body>
</html>