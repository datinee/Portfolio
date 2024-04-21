  <meta charset="utf-8">

<?php

session_start() ;

    $nom = $_POST['nom']; // required
    $prenom = $_POST['prenom']; // required
    $email = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $commentaire = $_POST['commentaire']; // required
 
    $error_message = "";
    
   
    
      // Prend les caractères alphanumériques + le point et le tiret 6
      $string_exp = "/^[A-Za-z0-9 .'-]+$/";
   
    if(!preg_match($string_exp,$nom)) {
      $error_message .= 
'Le nom que vous avez entré ne semble pas être valide.<br />';
    }
   
    if(!preg_match($string_exp,$prenom)) {
      $error_message .= 
'Le prénom que vous avez entré ne semble pas être valide.<br />';
    }
   
   
    if(strlen($error_message) > 0) {
      died($error_message);
    }

 function died($error) {
      
           $_SESSION['erreur']=$error;
           header('Location:index.php#contact')  ;
           die() ;
  
        
        
    }
 
    
$email_to="asso.ecefram@gmail.com";
 //$email_to = "asso.ecefram@gmail.com";
 $email_subject = "ecefram";
 
   
    $email_message ="" ;
    $email_message .= "Nom: ".$nom."\n";
    $email_message .= "Prenom: ".$prenom."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Telephone: ".$telephone."\n";
    $email_message .= "Commentaire: ".$commentaire."\n";
    if (isset($_POST['check'])) //si la case est cochée
 $email_message .= " Je souhaite devenir adhérent\n";
 
    // create email headers
    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
   
    try {
mail($email_to, $email_subject, $email_message, $headers);
$_SESSION['succes']=" Merci pour votre envoi, on vous contactera bientôt";
header("Location:index.php#contact") ;
    }
    
    catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}



header('Location:index.php') ;
?>
