<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Plant</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="Styles/plante_page.css">

    <style>
        .comment {
            display: none;
        }

        .comment.visible {
            display: block;
        }
    </style>
</head>

<body>
<?php include("Partials/nav.php") ?>
<?php require('../Controllers/plante_page_controller.php');?>
<section class="light" style="margin-top: 40px;">
        <div class="container py-2">
            <center>
                <div class="h1 text-center text-dark shadow" style=" width: 600px;" id="pageHeaderTitle"><?php echo $plante->getNom_scientifique();?></div>
                <div class="h2 text-center text-dark shadow" style=" width: 400px;"><?php echo $plante->getNom_local();?></div>
                <div class="h5 text-center text-dark shadow" style=" width: 380px;">Famille : <a href="#"><?php echo $nom_famille?></a></div>
            </center>
            <article class="plant light yellow">
                <a class="plant__img_link" href="#">
                    <img class="plant__img" src="../<?php echo $images[0]; ?>" alt="Image Title" />
                </a>
                <div class="plant__text t-dark">
                    <h1 class="plant__title yellow"><a href="#">Description Morphologie</a></h1>
                    <div class="plant__bar"></div>
                    <div class="plant__preview-txt">
                        <?php echo $plante->getDescription();?>
                    </div>
                </div>
            </article>
            <article class="plant light red">
                <a class="plant__img_link" href="#">
                    <img class="plant__img" src="../<?php echo $images[1]; ?>" alt="Image Title" />
                </a>
                <div class="plant__text t-dark">
                    <h1 class="plant__title red"><a href="#">Propriétés</a></h1>
                    <div class="plant__bar"></div>
                    <div class="plant__preview-txt">
                        <?php echo $plante->getPropriete();?>
                    </div>
                </div>
            </article>
            <article class="plant light green">
                <a class="plant__img_link" href="#">
                    <img class="plant__img" src="../<?php echo $images[2]; ?>" alt="Image Title" />
                </a>
                <div class="plant__text t-dark">
                    <h1 class="plant__title green"><a href="#">La localisation</a></h1>
                    <div class="plant__bar"></div>
                    <div class="plant__preview-txt">
                        <?php echo $plante->getLocation();?>
                    </div>
                </div>
            </article>
            <article class="plant light yellow" style="width:500px; display:inline-block">
                <a class="plant__img_link" href="#">
                </a>
                <div class="plant__text t-dark">
                    <h1 class="plant__title yellow"><a href="#">Les traitements</a></h1>
                    <div class="plant__bar"></div>
                    <div class="plant__preview-txt">
                        <?php foreach($traitements as $trmt):?>
                            <ul>
                                <li><a href="#"><?php echo $trmt?></li>
                            </ul>
                        <?php endforeach;?>
                    </div>
                </div>
            </article>
            </article>
            <article class="plant light yellow" style="width:500px; display:inline-block;margin-left:90px;">
                <a class="plant__img_link" href="#">
                </a>
                <div class="plant__text t-dark">
                    <h1 class="plant__title yellow"><a href="#">les sources</a></h1>
                    <div class="plant__bar"></div>
                    <div class="plant__preview-txt">
                        <ul class="list-group">
                            <?php foreach($sources as $source) : ?>
                            <li class="list-group-item source-item bg-success">
                                <a href="<?php echo $source->getLien();?>" target="_blank"><?php echo $source->getTitre().' - '.$source->getLien();?></a>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </article>



            <div class="shadow">
                <center>
                    <button style="width: 100%;background-color:lawngreen;margin-top:-30px;" type="button" class="btn btn-outline-success ">
                        <i class="fas fa-heart"></i> Ajouter aux favoris
                    </button>
                </center>
            </div>
        </div>
    </section>



    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6" style="margin-left: -80px;">
                <div class="card shadow mb-4">
                    <div class="row no-gutters">
                        <div class="col-2">
                            <img src="photos/logo.png" width="70" class="rounded-circle mt-2">
                        </div>
                        <div class="col-10">
                            <div class="comment-box ml-2">
                                <h4 style="color: black;">Ajouter un commentaire</h4>
                                <div class="rating">
                                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                                </div>
                                <div class="comment-area">
                                    <textarea class="form-control" placeholder="Quel est votre point de vue ?" rows="4"></textarea>
                                </div>
                                <div class="comment-btns mt-2">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="pull-left">
                                                <button class="btn btn-success btn-sm">Annuler</button>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="pull-right">
                                                <button class="btn btn-success send btn-sm">Envoyer <i class="fa fa-long-arrow-right ml-1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="existing-comments mt-4">
                                    <h5 style="color: black;">Commentaires</h5>
                                    <div class="media mb-3 comment visible">
                                        <img src="photos/profil.png" width="40" class="rounded-circle mr-2">
                                        <div class="media-body">
                                            <h6 class="mt-0" style="color: black;">Utilisateur 1</h6>
                                            <p style="color: black;">Ceci est un commentaire exemple.</p>
                                        </div>
                                    </div>
                                    <div class="media mb-3 comment">
                                        <img src="photos/profil.png" width="40" class="rounded-circle mr-2">
                                        <div class="media-body">
                                            <h6 class="mt-0" style="color: black;">Utilisateur 2</h6>
                                            <p style="color: black;">Ceci est un autre commentaire exemple.</p>
                                        </div>
                                    </div>
                                    <div class="media mb-3 comment">
                                        <img src="photos/profil.png" width="40" class="rounded-circle mr-2">
                                        <div class="media-body">
                                            <h6 class="mt-0" style="color: black;">Utilisateur 3</h6>
                                            <p style="color: black;">Encore un commentaire exemple.</p>
                                        </div>
                                    </div>
                                    <button id="showCommentsBtn" class="btn btn-success btn-sm">Afficher tous les commentaires</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deuxième card (Offre de vente) -->
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="row no-gutters">
                        <div class="col-2">
                            <img src="photos/logo.png" width="70" class="rounded-circle mt-2">
                        </div>
                        <div class="col-10">
                            <div class="comment-box ml-2">
                                <h4 style="color: black;">Offre de vente</h4>
                                <div class="container mt-5 shadow p-3 mb-5 rounded">
                                    <form>
                                        <div class="form-group">
                                            <label for="nom" class="text-dark">Nom</label>
                                            <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom">
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom" class="text-dark">Prénom</label>
                                            <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom">
                                        </div>
                                        <div class="form-group">
                                            <label for="telephone" class="text-dark">Téléphone</label>
                                            <input type="tel" class="form-control" id="telephone" placeholder="Entrez votre numéro de téléphone">
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block">Ajouter</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("Partials/footer.php") ?>
    <script>
        document.getElementById("showCommentsBtn").addEventListener("click", function() {
            var comments = document.querySelectorAll(".comment");
            comments.forEach(function(comment) {
                comment.classList.toggle("visible");
            });
            this.textContent = this.textContent.includes("Afficher") ? "Masquer les commentaires" : "Afficher tous les commentaires";
        });
    </script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</body>

</html>