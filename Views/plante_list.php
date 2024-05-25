<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        
        .row.no-gutters {
            margin-right: 0;
            margin-left: 0;
        }
        .row.no-gutters > [class*='col-'] {
            padding-right: 0;
            padding-left: 0;
        }
        .card {
            margin: 0;
            margin-bottom: 20px;
        }
        .card-img-top{
            height: 70px;
            width: 70px;
        }
        body{
            background: #ddd;
            margin-top: 100px;
        }
        .small-btn {
            width: 80px;
            height: 40px;
        }
    </style>
</head>
<body>
<?php include("Partials/nav.php") ?>
<?php require("../Controllers/plants_list_controller.php")?>
    <div class="container mx-auto mt-4 ">
        <div class="row no-gutters align-items-stretch">
            <?php foreach($plantes as $plante) : ?>
            <div class="col-md-4 col-lg-2">
                <div class="card  d-flex flex-column "  style="width: 10rem;  height: 22rem;">
                    <img src="../<?php $image = $plante->getImages(); echo $image[0];?>" class="card-img-top w-100" alt="..." style="height: 140px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="plante_page.php?nom=<?php echo $plante->getNom_scientifique();?>" style="color:black;"><?php echo $plante->getNom_scientifique();?></a></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $plante->getNom_local();?></h6>
                        <a href="plante_page.php?nom=<?php echo $plante->getNom_scientifique();?>" class=" mr-2 "><button class="submit-btn  small-btn" type="submit" style="font-size: 11px;">Explore</button></a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>  
        </div>
    </div>
    <?php include("Partials/footer.php") ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>
</html>
