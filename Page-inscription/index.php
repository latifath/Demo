<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE INSCRIPTION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<style>

.container {
  background-color: #ffffff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

  #thank_bloc{
      padding: 100px 0 100px 0;
  }
</style>
<body>
  <div class="">

      <!-- header -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="/index.php">
                <img src="images/hosting2.png" alt="" width="25%" height="25%">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>

                <ul class="navbar-nav float-right">
                  <li class="nav-item active">
                    <a class="nav-link" href="/index.php" style="color: #01674e;">Accueil<span class="sr-only"></span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  style="color: #01674e;" href="https://demo-moodle.tdshosting.bj/">Démo<span class="sr-only"></span></a>
                  </li>
                </ul>
              </div>
      </nav>
      
      <?php 
          if( !$_SESSION['send'] ) {
      ?>
      
      <div class="container mt-5 mb-3">
          <h1>Formulaire d'inscription</h1>
          <br>
          <form action="send-mail.php" method="POST"> 
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Prénom</label>
                <input type="text" class="form-control" name="prenom" id="inputPrenom" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Nom</label>
                <input type="text" class="form-control" name="nom" id="inputNom" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Email</label>
              <input type="email" class="form-control" name="mail" id="inputEmail" placeholder="prenom@xemple.com" required>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Téléphone</label>
                <input type="tel" class="form-control" name="phone" id="inputPhone" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">Pays</label>
                <select name="pays" id="inputPays" class="form-control" required>
                  <option value="">choisissez...</option>
                  <option value="Benin">Bénin</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress2">Fonction</label>
              <input type="text" class="form-control" name="fonction" id="inputFonction" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="inputAddress2">Ecole</label>
              <input type="text" class="form-control" name="ecole" id="inputEcole" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="inputAddress2">Type école</label>
              <select name="type_ecole" id="inputAddress2" class="form-control" required>
                <option value="">choisissez...</option>
                <option value="primaire">Primaire</option>
                <option value="Sécondaire">Sécondaire</option>
                <option value="Université">Université</option>
              </select>
            </div>
            <div class="form-group">
              <label for="inputAddress2">Message</label>
              <textarea type="text" class="form-control" name="message" id="inputMessage" placeholder="" rows="4" cols="50" required></textarea>
            </div>
            <div class="mt-3">
              <input type="submit" name="submit"  class="btn text-white" value="soumettre" style="background-color: #01674e;">
            </div>
          </form>
      </div>

      <div class="card-footer text-center text-white" style="background-color: #01674e;">
      <p>&copy; 2023 Copyright <strong>TDS HOSTING</strong>. Tous droits réservés</p>
      </div>   

      <?php
        } elseif($_SESSION['send'] == 'success' ){
          
      ?>
      <div id="thank_bloc" class="col-md-6 offset-md-3 mt-5">
        <div class="" style="box-shadow: 0 0 25px hsla(0, 0%, 0%, 0.30); padding: 18px 10px 50px 10px;">
          <h2 class="text-center">INSCRIPTION</h2>
          <p class="text-center" style="margin-top: 5px;">Votre inscription a été envoyée avec succès </p>
          <form action="send-mail.php" method="POST" >
            <button type="submit" name="btn_back" class="btn mb-3 text-white" style="float:right; background-color: #01674e;"> Retour
            </button>
          </form>
        </div>
      </div>

      <div class="fixed-bottom text-center text-white" style="background-color: #01674e;">
      <p>&copy; 2023 Copyright <strong>TDS HOSTING</strong>. Tous droits réservés</p>
      </div>  

      <?php }
        ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>