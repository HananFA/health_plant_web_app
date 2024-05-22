<?php
session_start();
function limitWords($string, $word_limit) {
    $words = explode(" ", $string);
    $words = implode(" ", array_splice($words, 0, $word_limit));
    $words = $words."...";
    return $words;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Plant</title>
    <meta name="description" content="Health Plant" />
    <link rel="stylesheet" href="Styles/home.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./photos/health_plant_photos/logo2.jpg">
</head>
<body>
    <?php include("Partials/nav.php") ?>
    <main>
        <?php include('Partials/alert.php');?>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="../photos/flowers.jpg" class="d-block w-100" height="400px" alt="...">
                </div>
                <div class="carousel-item active">
                    <img src="../photos/affich1.jpg" class="d-block w-100" height="400px" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./photos/redtree.jpg" class="d-block w-100" height="380px" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleAutoplaying" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleAutoplaying" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <section class="about-us">
            <div class="about">
                <img src="../photos/principal.jpg" class="pic rounded">
                <div class="text">
                    <h1>Health Plant</h1>
                    <p>Bienvenue sur notre page informative dédiée à diverses plantes et à leurs utilisations médicinales et bienfaits.
                        Ici, vous découvrirez un trésor de connaissances sur le vaste monde des plantes et sur la manière dont elles ont
                        été traditionnellement utilisées à des fins thérapeutiques.
                        <br><br>
                        Explorez notre collection complète de profils de plantes, chacun mettant en lumière les propriétés uniques d'une plante
                        spécifique, ainsi que des informations sur sa culture et ses bienfaits médicinaux. Plongez dans le riche patrimoine de
                        la médecine à base de plantes alors que nous explorons la signification historique et culturelle de ces plantes à
                        travers différentes traditions et régions, notamment à Béni Mellal au Maroc.
                    </p>
                </div>
            </div>

            <?php require('../Controllers/plantes_dans_home_controller.php');?>
            <div class="container mx-auto mt-4" style="background-color: #ddd;">
                <div class="row">
                <?php if (!empty($plantes) && !empty($familles) && !empty($images)) : ?>
                <?php for($i = 0 ; $i < 6 ; $i++) : ?>
                    <div class="col-md-4 ">
                        <div class="card" style="width: 18rem;  height: 32rem;">
                            <img src="../<?php echo $images[$i]; ?>" class="card-img-top w-100" alt="..." style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title" ><a href="#" style="color:black;"><?php echo $plantes[$i]->getNom_scientifique(); ?></a></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $plantes[$i]->getNom_local();?></h6>
                                <h6 class="card-subtitle mb-2 text-muted" ><a href="#" style="color:black;"><?php echo $familles[$i]->getNom();?></a></h6>
                                <p class="card-text text-success"><?php echo limitWords($plantes[$i]->getDescription(), 20);?></p>
                                <a href="#" class=" mr-2 "><button class="submit-btn" type="submit">Explore</button></a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                <?php else : ?>
                    <h3 >Aucune plante trouvée.</h3>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <?php include("Partials/footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>