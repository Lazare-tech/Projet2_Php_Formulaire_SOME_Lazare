<?php
try{
  $bdd= new PDO('mysql:host=localhost;dbname=test;','root','',
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
}
catch(Exception $e){
  die("Error " . $e->getMessage());
}

$Nom = $_POST["Nom"];
$Prenom = $_POST["Prenom"];
$Email = $_POST["Email"];
$nom_utilisateur= $_POST['nom_utilisateur'];
$Mot_de_passe = $_POST["Mot_de_passe"];





// header('Location: login_form.php');

if(isset($_POST['submit'])) {

  if(empty($_POST['Nom'])
      OR empty($_POST['Prenom'])
      OR empty($_POST['nom_utilisateur'])
       OR empty($_POST['Email']) 
       OR empty($_POST['Mot_de_passe'])){
     
    echo "<script>alert('some inputs are empty');</script>";
  } else {

      $passe=password_hash($_POST['Mot_de_passe'],PASSWORD_DEFAULT);

    $insert = $bdd->prepare("INSERT INTO Register(Nom,Prenom,nom_utilisateur,
     Email, Mot_de_passe) VALUES(:Nom, :Prenom, :nom_utilisateur, :Email, :passe)");
    

    $insert->execute([
      // ":username" => $username,
      // ":email" => $email,
      // ":mypassword" => $password,
      
  ':Nom' => $Nom,
':Prenom' => $Prenom,
':nom_utilisateur' => $nom_utilisateur,
':Email'  => $Email,
':passe' => $passe,
    
    ]);
    
    header("location:login_form.php");

  }
}

?>


