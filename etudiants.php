<?php

    require_once "header.php";
    $students = [];

    $students = toutEtudiants();


?>
<div class="container">
    <div class="col-md-8">
        <h3>Liste des étudiants</h3>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>CNE</th>
                <th>Tél</th>
                <th>Email</th>
                <th>Date naissance</th>
                <th>Action</th>
                <?php 
                    if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin" ):
                    echo "<th>Modifier</th>"; 
                    endif
                    ?>
            </tr>
            <?php foreach($students as $s): ?>
            <tr>
                <td><?=$s["id"] ?></td>
                <td><a href="etudiant.php?id=<?=$s['id'] ?>"><?=$s["nom"] ?></a></td>
                <td><a href="etudiant.php?id=<?=$s['id'] ?>"><?=$s["prenom"] ?></a></td>
                <td><?=$s["cne"] ?></td>
                <td><?=$s["telephone"] ?></td>
                <td><?=$s["email"] ?></td>
                <td><?=$s["date_naissance"] ?></td>
                <td><a href="marquer_absence.php?id=<?=$s['id'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-flag-o"></i> Marquer absence</a></td>
                <?php 
                   if(isset($_SESSION["type"]) && $_SESSION["type"] == "admin" ):
                   echo "<td><a href='modifier_etudiant.php?id=".$s['id']."' class='btn btn-sm btn-primary'><i class='fa fa-cog'></i> Modifier infos</a></td>"; 
                   endif
                ?>

            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
<?php require_once "footer.php" ?>
