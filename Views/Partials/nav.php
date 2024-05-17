<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap 4 Example</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_menu" aria-controls="mobile_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="#" class="navbar-brand"><img src="logo.jpg" width="50px" height="50px" alt=""> Health Plant</a>
            </div>

            <div class="collapse navbar-collapse" id="mobile_menu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link text-success " href="#">Accueil</a></li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-success" data-toggle="dropdown">plante <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item text-success">plante</a>
                            <a href="#" class="dropdown-item text-success">Famille</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link text-success" href="#">Traitement</a></li>
                    <li class="nav-item"><a class="nav-link text-success" href="#">Contact Us</a></li>
                </ul>

                <form action="" class="form-inline my-2 my-lg-0">
                    <input type="search" name="search" id="" placeholder="Search Anything Here..." class="form-control mr-sm-2">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><span class="glyphicon glyphicon-search">Rechercher</span></button>
                </form>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link text-success" href="#"><span class="glyphicon glyphicon-user"></span><img src="profile.png" alt="" width="30px" height="30px"> Profile</a></li>
                    <li class="nav-item dropdown">
                        <a href="login/login.html" class="nav-link dropdown-toggle text-success" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <a href="login/login.html#SignIn" class="dropdown-item text-success">Login</a>
                            <a href="login/login.html#SignUp" class="dropdown-item text-success">Sign Up</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>