<?php
require "header.php";


$etudiant = getEtudiant($_GET["id"]);

$nombreAbsences = calculerAbsences($_GET["id"]);

$absences = listAbsenceParEtudiant($_GET["id"]);

?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3><i class="fa fa-user-circle-o"></i> <?=$etudiant["nom"] ?> <?=$etudiant["prenom"] ?></h3>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>CNE : <?= $etudiant["cne"]; ?></h4>
                        <h4>Email : <a target="_blank" href="mailto:<?=$etudiant["email"]; ?>"><?= $etudiant["email"]; ?></a></h4>
                        <h4>Téléphone : <?= $etudiant["telephone"]; ?></h4>
                        <h4>Lieu de naissance : <?= $etudiant["lieu_naissance"]; ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h4>Nombre d'absences : <span class="label label-info"><?=$nombreAbsences["count(id_etudiant)"] ?></span></h4>
                <div class="form-group">
                    <a href="absence_etudiant_pdf.php?id=<?=$etudiant["id"]; ?>" class="btn btn-primary btn-lg"><i class="fa fa-file-pdf-o"></i> Compte rendu des absences</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h3>Les absences</h3>
        <table class="table table-bordered" >
            <tr>
                <th>Module</th>
                <th>Date absence</th>
                <th>Justification</th>
                <th>Marquée par</th>
                <?php if($_SESSION["type"] == "admin"): ?>
                    <th><i class="fa fa-trash-o"></i> Suppr.</th>
                <?php endif; ?>
            </tr>
            <?php foreach($absences as $a): ?>
            <tr>
                <td><?=$a["module"] ?></td>
                <td><?=$a["date_absence"] ?></td>
                <td><?=$a["type_absence"] ?></td>
                <td><?=$a["nom_prof"] ?> <?=$a["prenom_prof"] ?></td>
                <?php if($_SESSION["type"] == "admin"): ?>
                    <td><a href="deleteAbsence.php?id=<?=$a['id'] ?>"><i class="fa fa-trash-o"></i></a></td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>


<?php require "footer.php"; ?>
