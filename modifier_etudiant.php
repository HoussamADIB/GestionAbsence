<?php 
    require_once "header.php";

    $etudiant = getEtudiantToModify($_GET["id"]);
?>

    <div class="container" >
        <div class="row">

            <div class="col-lg-8 col-lg-offset-2">
                <p class="text-center"><h3><i class="fa fa-user-circle-o"></i> Inscription</h3></p>
                <form action="modifier_etudiant.php" method="POST" autocomplete="off" >
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input type="text" value="<?=$etudiant["nom"] ?>" name="nom" class="form-control" placeholder="Nom">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Prénom</label>
                                <input type="text" value="<?=$etudiant["prenom"] ?>" name="prenom" class="form-control" placeholder="Prénom">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Téléphone</label>
                                <input type="text" value="<?=$etudiant["telephone"] ?>" name="telephone" class="form-control" placeholder="Téléphone">
                            </div>
                        </div>
                    </div>
                    <div class="row student">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">CIN</label>
                                <input type="text" value="<?=$etudiant["cin"] ?>" name="cin" class="form-control" placeholder="CIN">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">CNE</label>
                                <input type="text" value="<?=$etudiant["cne"] ?>" name="cne" class="form-control" placeholder="CNE">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Date naissance</label>
                                <input type="date" value="<?=$etudiant["date_naissance"] ?>" name="date_naissance" class="form-control" placeholder="Date naissance">
                            </div>
                        </div>
                    </div>
                    <div class="row student">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Lieu de naissance</label>
                                <input type="text" class="form-control" value="<?=$etudiant["lieu_naissance"] ?>"  
                                placeholder="Lieu de naissance" name="lieu_naissance" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Adresse</label>
                                <textarea name="adresse" class="form-control" placeholder="Adresse" id="" cols="30" rows="5"><?=$etudiant["adresse"] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" value="<?=$etudiant["email"] ?>" class="form-control" name="email" placeholder="Email" >
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" value="<?=$etudiant["login"] ?>" name="username" class="form-control" placeholder="Username" >
                    </div>
                    <div class="form-group">
                        <label for="">Mot de passe : </label>
                        <input type="password" value="<?=$etudiant["password"] ?>" class="form-control" name="password" placeholder="Mot de passe" >
                    </div>
                    <input type="hidden" name="id" value="<?=$etudiant["id"] ?>">
                    <div class="form-group">
                        <button type="submit" name="modifier_etudiant" class="btn btn-success btn-lg" > Modifier </button>
                    </div>

                </form>
            </div>

        </div>
    </div>

<?php require_once "footer.php" ?>