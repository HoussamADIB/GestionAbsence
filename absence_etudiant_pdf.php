<?php

session_start();
require "./files/database.php";
require "./files/functions.php";

$etudiant = getEtudiant($_GET["id"]);

$absences = listAbsenceParEtudiant($_GET["id"]);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Gestion Absence</title>
</head>
<body>
<div class="container-fluid">
    <h3><?= $etudiant["nom"] ?> <?= $etudiant["prenom"] ?></h3>
    <table class="table" border="1" >
        <tr>
            <th>Module</th>
            <th>Date absence</th>
            <th>Créneau horaire</th>
            <th>Justification</th>
            <th>Marquée par</th>
        </tr>
        <?php foreach ($absences as $ab): ?>
            <tr>
                <td><?= $ab["module"] ?></td>
                <td><?= $ab["date_absence"] ?></td>
                <td><?= $ab["crn_horaire"] ?></td>
                <td><?= $ab["type_absence"] ?></td>
                <td><?=$ab["nom_prof"] ?> <?=$ab["prenom_prof"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<script src="./js/jquery-3.2.1.min.js" ></script>
<script src="./js/bootstrap.min.js" ></script>
<script src="./js/jspdf.min.js" ></script>
<script src="./js/jspdf.plugin.autotable.js" ></script>
<script src="./js/app.js" ></script>

<script>
    var columns = ["Module", "Date absence", "Créneau horaire", "Justification", "Marquée par"];
    var rows = [];

    <?php foreach ($absences as $a): ?>
      var row = ["<?=$a['module'] ?>","<?=$a['date_absence'] ?>", "<?=$a['crn_horaire'] ?>", "<?=$a['type_absence'] ?>", "<?=$a['nom_prof']?> <?=$a['prenom_prof'] ?>"];
      rows.push(row);
    <?php endforeach; ?>

    var doc = jsPDF();
    doc.autoTable(columns, rows, {
        addPageContent: function(data) {
            doc.text("<?=$etudiant['nom'].' '.$etudiant['prenom'] ?>", 10, 10);
        },
        margin: {horizontal: 7},
        bodyStyles: {valign: 'top'},
        styles: {overflow: 'linebreak', columnWidth: 'wrap'},
        columnStyles: {text: {columnWidth: 'auto'}}
    });

    doc.save("<?=$etudiant['nom'].'-'.$etudiant['prenom'] ?>");
</script>

</body>
</html>




