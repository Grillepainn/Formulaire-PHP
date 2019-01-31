//Exercice 1
<form method="POST" action="exercise_forms.php">
  <label>Votre nom</label> : <input type="text" name="Nom"><br>
  <label>Votre prénom</label> : <input type="text" name="Prenom"><br>
  <input type="submit" value="Envoyer">
</form>

<?php
  if(isset($_POST['Nom'])){
    $prenom = $_POST['Prenom'];
    $nom = $_POST['Nom'];
    print "Salut ".$prenom." ".$nom;
  }
 ?>

 //Exercice 2

 <?php
   $nom = "";
   if(isset($_POST['Nom'])) {
     $prenom = $_POST['Prenom'];
     $nom = $_POST['Nom'];
     if ($prenom == 'Luca') {
       echo "Salut mec !";
     } else {
       echo "On se connait ?";
     }
   }
  ?>

   <form method="POST" action="exercise_forms.php">
     <label>Votre nom</label> : <input type="text" name="Nom" value="<?php echo $nom; ?>"><br>
     <label>Votre prénom</label> : <input type="text" name="Prenom"><br>
     <input type="submit" value="Envoyer">
   </form>

   //Exercice 3
   <?php
     $array = array('Luca', 'Arthur', 'Rob', 'Big');
     $nom = "";
     if(isset($_POST['Nom'])) {
       $nom = $_POST['Nom'];}
     function testconnexion ($array, $saisie) {
       foreach ($array as $value) {
           if ($value == $saisie) {
             $accepted = 1;
             return $accepted;
           } else {
             $refused = 0;
             return $refused;
           }
         }
     }
    ?>
   <form method="POST" action="exercise_forms.php">
     <label>Site sécurisé, veuillez saisir votre blaze pour l'identification </label>:
     <input type="text" name="Nom" value="<?php echo $nom; ?>">
     <input type="submit" value="Envoyer">
   </form>

   <?php
       if (testconnexion($array, $nom) == 1) {
         echo "Bievenue !";
       } else {
         echo "Heu ... On se connait ?";
       }
   ?>
