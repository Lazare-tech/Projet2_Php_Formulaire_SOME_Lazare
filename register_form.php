<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programe-D-CLIC</title>


  <script defer src="/script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <link href="bootstrap/product.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">


</head>

<body>
  <?php include("navbar.php");?>

  <section class="container">

    <div class="justify-content-center">
      <div class="row gx-lg-5 align-items-center pt-4">
        <h3 class="text-center text-primary ">Creation De Compte Utilisateur</h3>
        <div class="col-lg-3"></div>
        <div class="col-lg-6 ">

          <div class="card bg-glass border-0 ">
            <div class="card-body px-md-0  border-0">
              <form action="register.php" method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-outline">
                      <input type="text" id="form3Example1" class="form-control" name="Nom" />
                      <label class="form-label" for="form3Example1">Nom</label>
                    </div>
                  </div>
                </div>
                <div class="row">

                  <div class="col-md-12">

                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" name="Prenom" />
                      <label class="form-label" for="form3Example2">Prenom</label>
                    </div>
                  </div>
                </div>
            
            <div class="row">
              <div class="col-md-12">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" name="nom_utilisateur" />
                  <label class="form-label" for="form3Example2">Nom utilisateur</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <!-- Email input -->
                <div class="form-outline mb-2">
                  <input type="email" id="form3Example3" class="form-control" name="Email" />
                  <label class="form-label" for="form3Example3">Email</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <!-- Email input -->
                <div class="form-outline mb-2">
                  <input type="password" id="form3Example3" class="form-control" name="Mot_de_passe" />
                  <label class="form-label" for="form3Example3">Mot de passe</label>
                </div>
              </div>
            </div>
          </div>
         
          <!-- competence -->
          <!-- Submit button -->
          <div class="row">
            <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-block mb-2" name="submit">
            Register
          </button>
          </div>
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
  <?php include("footer.php");?>

</body>

</html>