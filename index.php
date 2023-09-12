<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- net link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- local link -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>Page d'acceuill</title>
</head>

<body>
  <?php include("navbar.php")?>
  <section class="container">
    <?php 
      $Nom = $_POST["Nom"];
      $Prenom = $_POST["Prenom"];
      $Age = $_POST["Age"];

      // $Email = $_POST["Email"];
      // $nom_utilisateur= $_POST['nom_utilisateur'];
      // $Mot_de_passe = $_POST["Mot_de_passe"];
            // OR empty($_POST['Prenom'])
            // OR empty($_POST['nom_utilisateur'])
            //  OR empty($_POST['Email']) 
            //  OR empty($_POST['Mot_de_passe'])){
            //   echo 'Remplissez tous les champs svp!!!';
              
              if (isset($_POST['submit'])) {
                  
             echo 'Nom:'.''.$Nom.'<br>Prenom:'.''.$Prenom.'<br>Age:'.''.$Age;  
             }
          
          
      ?>
    <div class="justify-content-center">
      <div class="row gx-lg-5 align-items-center pt-4">
        <h3 class="text-center text-primary ">Creation De Compte Utilisateur</h3>
        <div class="col-lg-3"></div>
        <div class="col-lg-6 ">

          <div class="card bg-glass border-0 ">
            <div class="card-body px-md-0  border-0">
              <form action="index.php" method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" name="Nom"
                         />
                      <label class="form-label" for="form3Example1">Nom</label>
                    </div>
                  </div>
                </div>
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" name="Prenom"
                         />
                      <label class="form-label" for="form3Example2">Prenom</label>
                    </div>
                  </div>
                </div>


                <div class="row">
                  <div class="col-md-12">
                    <div class="form-outline">
                      <input type="number" id="form3Example2" class="form-control" name="Age"
                        />
                      <label class="form-label" for="form3Example2">Age</label>
                    </div>
                  </div>
                </div>
                <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" name="nom_utilisateur" value="<?php echo $nom_utilisateur?>" />
                      <label class="form-label" for="form3Example2">Nom utilisateur</label>
                    </div>
                  </div>
                </div> -->

                <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-outline mb-2">
                      <input type="email" id="form3Example3" class="form-control" name="Email" value="<?php echo $Email?>" />
                      <label class="form-label" for="form3Example3">Email</label>
                    </div>
                  </div>
                </div> -->
                <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-outline mb-2">
                      <input type="password" id="form3Example3" class="form-control" name="Mot_de_passe" />
                      <label class="form-label" for="form3Example3">Mot de passe</label>
                    </div>
                  </div>
                </div> -->
            </div>

            <!-- competence -->
            <!-- Submit button -->
            <div class="row">
              <div class="col-md-6">
                <button type="submit" class="btn btn-primary btn-block mb-2" name="submit">
                  Register
                </button>
              </div>
              <?php if(empty($_POST['Nom']) OR empty($_POST['Prenom']) OR empty($_POST['Age'])){?>
                  <div class="col-md-6 bg-danger">
                    <?php
                            if(empty($_POST['Nom']))
                              { 
                                      echo "Veuillez saisir votre nom<br>";
                              };
                  
                              if(empty($_POST['Prenom'])) echo "Veuillez saisir votre prenom<br>";
                              if(empty($_POST['Age']) OR ($_POST['Age'] <= 0 )) echo "Age invalide";
                    }?>
                  </div>
              <?php  
                      if(isset($_POST['submit'])){
                        echo "";
                      }
                      ?>
              <div class="row">
                <div class="col-md-12">
                  <a href="index.php" class="btn btn-outline-info">Retour</a>
                </div>
              </div>
              <!-- Register buttons -->
              <div class="text-center mb-1">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>
