<?php

session_start();
require "./files/database.php";
require "./files/functions.php";


if(remettreZeroAbsences()){
    $_SESSION["message"] = "Les absences sont initalisés a Zero";
}else{
    $_SESSION["message"] = "Erreur lors de votre action";
}

header("Location: index.php");
exit();

?>
