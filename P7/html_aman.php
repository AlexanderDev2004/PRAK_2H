<?php
 $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');   
 $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
 if ($email) {
     echo "email : $email <br>";
     echo "input : $input <br>";
 } else {
     echo "email tidak valid : ".$_POST['email']." <br>";
     echo "input : $input <br>";
 }
?>
