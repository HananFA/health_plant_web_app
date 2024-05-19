<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/nav.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
        <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_menu" aria-controls="mobile_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="./home.php" class="navbar-brand"><img src="././photos/logo.png" class="rounded-circle" width="50px" height="50px" alt="">Health Plant</a>
            </div>

            <div class="collapse navbar-collapse" id="mobile_menu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="./home.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Plantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Familles</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Traitements</a></li>
                    <li class="nav-item"><a class="nav-link" href="./about.php">À propos de Nous</a></li>
                </ul>
                <form action="" class="form-inline my-2 my-lg-0">
                    <input type="search" name="search" id="" placeholder="Chercher quelque chose ..." class="form-control mr-sm-2">
                    <input type="submit" value="Rechercher" class="submit-btn"/>
                </form>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#"><span class="glyphicon glyphicon-user"></span><img src="././photos/profil.png" alt="" width="30px" height="30px"> Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"> Login / Sign Up </a></li>
                </ul>
            </div>
        </div>
    </nav>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>