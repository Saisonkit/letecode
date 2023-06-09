<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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


        <!--contact- start-->
        <section class="contact">
            <div class="container">
                <h2>Nous contacter</h2>
                <p>Remplissez ce formulaire pour nous laisser un message</p>
                <form id="form" action="include/submit.php" method="POST">
                    <div class="text">
                        <label for="name">Nom</label>
                        <input type="text" name="nom" id="name" required="">
                    </div>
                    <div class="text">
                        <label for="pays">Pays</label>
                        <select id="pays" name="pays">
                            <option>Choisir</option>
                            <option value="rdc">south africa</option>
                            <option value="tunisie">Tanzanie</option>
                            <option value="congo">Rwanda</option>
                            <option value="angola">burundi</option>
                            <option value="rdc">Rdc</option>
                            <option value="tunisie">Tunisie</option>
                            <option value="congo">Congo</option>
                            <option value="angola">Angola</option>
                            <option value="rdc">France</option>
                            <option value="tunisie">zambie</option>
                            <option value="congo">morocco</option>
                            <option value="angola">egypt</option>
                            <option value="rdc">algerie</option>
                            <option value="rca">RCA</option>
                            <option value="congo">brezil</option>
                            <option value="angola">tchad</option>
                        </select>
                    </div>
                    <div class="text">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required="">
                    </div>
                    <div class="text">
                        <label for="obj">Objectif</label>
                        <input type="text" name="obj" id="obj" required="">
                    </div>
                    <div class="text">
                        <label for="texta">Message</label>
                        <textarea cols="30" name="message" rows="10" id="texta" required=""></textarea>
                    </div>
                    <div class="vide"></div>
                    <input type="submit" value="Envoyer le message">
                </form>
            </div>
        </section>
        <!-- contact- end -->

    
    <!-- content- start -->

    <?php include ("include/abon.php"); ?>    
    
     <!-- content- end -->
    

    <!-- footer- start -->
    <?php
        include ("include/footer.php");
    ?>
    <!-- footer- end -->

    <script src="js/script.js"></script>
</body>