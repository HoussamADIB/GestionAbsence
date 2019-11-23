<?php

require_once "header.php";


$absences = listAbsencesOld();

?>


<div class="container">
    <h3>Liste des anciennes absences des étudiants</h3>
    <h4><a href="absences_etudiants_old_pdf.php" class="btn btn-primary btn-lg"><i class="fa fa-file-pdf-o"></i> Compte rendu des absences</a></h4>
    <hr>
    <table class="table">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>CNE</th>
            <th>Module</th>
            <th>Date absence</th>
            <th>Justification</th>
            <th>Marquée par</th>
        </tr>
        <?php foreach($absences as $a): ?>
            <tr>
                <td><?=$a["nom"] ?></td>
                <td><?=$a["prenom"] ?></td>
                <td><?=$a["email"] ?></td>
                <td><?=$a["cne"] ?></td>
                <td><?=$a["module"] ?></td>
                <td><?=$a["date_absence"] ?></td>
                <td><?=$a["type_absence"] ?></td>
                <td><?=$a["nom_prof"] ?> <?=$a["prenom_prof"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php require_once "footer.php"?>
