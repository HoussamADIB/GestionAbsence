<?php require_once "header.php"?>

<div class="container" >
    <div class="row">

        <div class="col-lg-4 col-lg-offset-4">
            <form action="login.php" method="POST" autocomplete="off" >
                <p class="text-center"><h3><i class="fa fa-user-circle-o"></i> Connexion</h3></p>
                <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" >
                </div>
                <div class="form-group">
                    <label for="">Mot de passe : </label>
                    <input type="password" class="form-control" name="password" placeholder="Mot de passe" >
                </div>
                <div class="form-group">
                    <button type="submit" name="connexion" class="btn btn-success btn-lg" > Se connecter </button>
                </div>

            </form>
        </div>

    </div>
</div>

<?php require_once "footer.php" ?>