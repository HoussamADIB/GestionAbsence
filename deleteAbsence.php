<?php

require "header.php";


if(deleteAbsence($_GET["id"])):
    $_SESSION["message"] = "L'absence a était bien supprimer";
    if($_SESSION["type"] == "professeur"):
        header("Location: absences_par_prof.php");
        exit();
    else:
        header("Location: absences.php");
        exit();
    endif;

endif;

?>