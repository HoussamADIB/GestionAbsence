<h2><i class="fa fa-bell-o"></i> Alerts</h2>
<?php foreach ($alerts as $a): ?>
    <?php if($a["count(a.id)"] >= 4): ?>
<p>l'étudiant(e) <a href="etudiant.php?id=<?=$a['id_etudiant'] ?>" ><b><?=$a["prenom"] ?> <?=$a["nom"] ?></b></a> a atteigné <?=$a["count(a.id)"] ?> absences !</p>
    <?php endif; ?>
<?php endforeach; ?>