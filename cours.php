<?php
        include ("include/cours-aff.php");
    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours-letecode</title>
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
        <?php
            include ("include/header.php");
        ?>
            <section class="cours">
                <div class="container">
                    <h1>Les cours</h1> <br>
                    <div class="cours-box">
                        <?php foreach($cours as $cour) : ?>
                            <div class="box">
                                <div class="img">
                                    <img src="<?php echo "{$cour["image"]}";?>">
                                </div>
                                <div class="text">
                                    <h3><?php echo "{$cour["nom"]}";?></h3>
                                    <p><?php echo "{$cour["time"]}";?></p>
                                </div>
                            </div> 
                        <?php endforeach?>
                      
                    </div>
                </div>
            </section>

        <!-- cours- end -->


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
</html>