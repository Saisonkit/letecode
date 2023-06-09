<?php
        include ("include/community-aff.php");
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communauté -letecode</title>
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
                <h1>La puissance Communautée</h1>
                <p>Une grande communauté des<br> développeurs du monde entier</p>
                <a href="#" class="btn">Rejoindre</a>
            </div>
        </section>
    
        <!-- welcome- end -->


            <!-- content- start -->
    <section class="content">
        <div class="container">
            <div class="text">
                <h2>Apprendre la <br> programmation</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit quo beatae ullam aspernatur quaerat consequatur. Temporibus illum, aut nihil sint molestiae quia nesciunt labore minima quo similique nam incidunt voluptates!</p>
            </div>

            <div class="img">
                <img src="image/python.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- content- end -->

    <!-- membre- start -->

    <section class="membre">
        <div class="container">
            <h2 class="membre">Les membres</h2>
            <div class="box-container">
                <?php foreach($membres as $membre) : ?>
                    <div class="box">
                        <div class="img">
                            <img src="<?php echo "{$membre["image"]}";?>" alt="photo_membre">
                        </div>
                        <div class="name">
                            <h2><?php echo "{$membre["nom"]}";?></h2>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </section>


    <!-- membre- end -->



      <!-- footer- start -->

    <?php
        include ("include/footer.php");
    ?>
    <!-- footer- end -->
    <script src="js/script.js"></script>
</body>
</html>