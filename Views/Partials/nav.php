
<style>
    .submit-btn {
        background-color: #4CAF50;
        color: #fefefe;
        padding: 10px 20px;
        border: none;
        border-radius: 25px;
        font-size: 14px;
        cursor: pointer;
        transition: background-color 0.25s, color 0.25s;
    }
    .submit-btn:hover {
        color: #45a049;
            background-color: #fefefe
        }
    </style>
    
    <nav class="navbar navbar-dark bg-success navbar-expand-lg shadow fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile_menu" aria-controls="mobile_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="#" class="navbar-brand"><img src="../photos/logo.png" class="rounded-circle" width="50px" height="50px" alt=""> Health Plant</a>
            </div>
            <div class="collapse navbar-collapse" id="mobile_menu">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link text-white " href="./home.php">Accueil</a></li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" data-toggle="dropdown">plantes <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <a href="./plante_list.php" class="dropdown-item text-white bg-success">plantes</a>
                            <a href="#" class="dropdown-item text-white bg-success">Familles</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white " href="#">Traitement</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="#">Contact Us</a></li>
                </ul>
                <form action="" class="form-inline my-2 my-lg-0">
                    <input type="search" name="search" id="" placeholder="Chercher quelque chose ..." class="form-control mr-sm-2">
                    <button class="submit-btn" type="submit">Rechercher</button>
                </form>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="#"><span class="glyphicon glyphicon-user"></span><img src="../photos/profil.png" alt="" width="30px" height="30px"> Profile</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white " data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Logout <span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <a href="./login.php" class="dropdown-item text-white bg-success">Login</a>
                            <a href="./login.php" class="dropdown-item text-white bg-success">Sign Up</a>
                            <a href="#" class="dropdown-item text-white bg-success">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    