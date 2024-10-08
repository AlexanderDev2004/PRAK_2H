<?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["name"];
            $email = $_POST["email"];
            echo "name : $name <br>";
            echo "email : $email <br>";
            
        }
?>  