<!DOCTYPE html>
<html lang="en" dir="ltr">
    <?php include "header.php"; ?>

  <body>
    <div class="container">
      <div class="col-md-12">
        <form method="POST" action="ajouterAdherent2.php" enctype="multipart/form-data">
                  <div class="row g-3">
                      <div class="col">
                          <label for="floatingInput">Prenom</label>
                          <input type="text" class="form-control" placeholder="Jean" aria-label="First name" name="prenom">
                      </div>
                  <div class="col">
                          <label for="floatingInput">Nom</label>
                          <input type="text" class="form-control" placeholder="De La Fontaine" aria-label="Last name" name="nom">
                  </div>
                  </div>
                  <div class="form-floating mb-3">
                    <label for="floatingInput">Telephone</label>
                    <input type="text" class="form-control" name="telephone" placeholder="0695783515">
                  </div>
                  <div class="form-floating mb-3">
                    <label for="floatingInput">Adresse mail</label>
                    <input type="email" class="form-control" name="mail" placeholder="name@example.com">
                  </div>
                  <div class="form-floating">
                    <label for="floatingPassword">Mot de passe</label>
                    <input type="password" class="form-control" name="" placeholder="Mot de Passe">
                  </div><br><br>
                  <button type="submit" class="btn btn-primary">Valider</button>
                  <br>
              </form>

      </div>

    </div>

  </body>
  <br><br>
  <?php include "footer.php"; ?>
</html>