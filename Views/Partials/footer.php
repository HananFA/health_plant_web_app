
<style>
    .footer{
    background-color: #c9cec9;

}
.footer-container{
    padding: 0 60px 0 60px;
    
}
.submit-btn{
    background-color: #4CAF50; /* Couleur de fond verte */
    color: #fefefe; /* Texte blanc */
    padding: 10px 20px; /* Espacement interne */
    border: none; /* Supprimer la bordure */
    border-radius: 25px; /* Coins arrondis */
    font-size: 16px; /* Taille de la police */
    cursor: pointer; /* Curseur de la souris de type pointer */
    transition: background-color 0.25s, color 0.25s; /* Transition pour le fond et la couleur du texte */
}

.submit-btn:hover {
    color: #45a049; /* Changement de couleur au survol */
    background-color : #fefefe
}

.form-control{
    border-radius: 10px;
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
}

.brand{
    font-style: normal;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
}
.data {
    font-style: normal;
    font-size:16px;
    font-family: Geneva, Verdana, sans-serif;
}
.fab a{
    color : #4CAF50;
    size: 80px;
}
.footer-container .rounded-circle{
    margin-bottom: 30px;
}

</style>
<footer class="footer bg-custom">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-6">
                <div class="footer-container">
                    <span>
                        <img src="../photos/logo.png" alt="Logo" class="rounded-circle" width="80px" height="80px"><i class="brand text-dark"> Health Plant</i>
                    </span>

                    <p class="data">Pays: Maroc</p>
                    <p class="data">E-mail: healthplant@mail.com</p>
                    <p class="data">Téléphone: +1234567890</p>
                    <p class="data">www.healthplant.com</p>
                    <br />
                    <div class="social-icons">
                        <a href="https://www.facebook.com" target="_blank" aria-label="Facebook">
                            <img src="../photos/fb.png" alt="fb" class="rounded-circle" width="40px" height="40px">
                        </a>
                        <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                            <img src="../photos/ig.png" alt="ig" class="rounded-circle" width="40px" height="40px">
                        </a>
                        <a href="https://www.x.com" target="_blank" aria-label="X">
                            <img src="../photos/x.png" alt="x" class="rounded-circle" width="40px" height="40px">
                        </a>
                        <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
                            <img src="../photos/linkedin.png" alt="linkedin" class="rounded-circle" width="40px" height="40px">
                        </a>
                        <a href="https://www.youtube.com" target="_blank" aria-label="Youtube">
                            <img src="../photos/ytb.png" alt="ytb" class="rounded-circle" width="40px" height="40px">
                        </a>
                    </div>
                </div>
            </div>
            <!-- Second container -->
            <div class="col-md-6">
                <div class="footer-container">
                    <h3>Envoyez-nous un message</h3>
                    <form action="../Controllers/message_controller.php" method="post">
                        <div class="form-group">
                            <label for="email">Votre Adresse E-mail</label><br />
                            <input type="email" class="form-control" id="email" name="email" placeholder="votre.mail@example.com" required>
                            <label for="sujet">Sujet</label><br />
                            <input type="text" class="form-control" id="sujet" name="sujet" placeholder="Sujet de votre message" required>
                            <label for="contenu">Message</label><br />
                            <textarea class="form-control" id="contenu" name="contenu" placeholder="Votre message" required></textarea>
                        </div>
                        <input type="submit" class="submit-btn" value="Envoyer" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
