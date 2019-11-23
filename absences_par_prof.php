<?php

require_once "header.php";


$absences = listerAbsencesParProf();

?>


<div class="container">
    <h3>Absences que j'ai marqué</h3>
    <hr>
    <table class="table">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>CNE</th>
            <th>Module</th>
            <th>Date absence</th>
            <th><i class="fa fa-trash-o"></i> Suppr.</th>
        </tr>
        <?php foreach($absences as $a): ?>
        <tr>
            <td><?=$a["nom"] ?></td>
            <td><?=$a["prenom"] ?></td>
            <td><?=$a["email"] ?></td>
            <td><?=$a["cne"] ?></td>
            <td><?=$a["module"] ?></td>
            <td><?=$a["date_absence"] ?></td>
            <td><a href="deleteAbsence.php?id=<?=$a['id'] ?>"><i class="fa fa-trash-o"></i></a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php require_once "footer.php"?>
