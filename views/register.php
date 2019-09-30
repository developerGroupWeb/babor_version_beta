
<div class="d-none d-sm-block">
    <div class="d-none d-sm-block singin-nav" style="background: #9d1e65;">
        <div class="px-5">
            <nav class="row navbar navbar-expand-sm font-weight-bold">
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav col">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="#" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">Fr</a>
                        </li>
                        <li class="nav-item d-block d-lg-none">
                            <a class="navbar-brand" href="index.php" style="color: #fff;"><img src="images/Logo45.png"></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav col">
                        <li class="nav-item d-none d-lg-block">
                            <a class="navbar-brand" href="index.php" style="color: #fff;"><img src="images/Logo45.png"></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item d-sm-none d-md-block">
                            <a class="nav-link" style="color: #fff;">Déjà membre ?</a>
                        </li>
                        <li class="nav-item d-sm-none d-md-block">
                            <a class="nav-link" href="?view=login" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">connexion</a>
                        </li>
                        <li class="nav-item d-sm-block d-md-none">
                            <a class="nav-link" href="?view=login" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">Connexion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <?php include 'includes/message_flash.php'?>

    <div class="col-lg-6 offset-lg-3 col-sm-8 offset-sm-2 singup-content pb-5">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="row">
                    <h3>Crée un nouveau profil</h3>
                </div>
                <div class="row mr-5">
                    <p>Rejoins la <strong>communauté des nouveaux amis sur Babor ! Rencontre et chatte.</strong></p>
                </div>
                <div class="row mb-5">
                    <form class="col-sm-12" method="post" action="" id="form-register">
                        <div class="form-group row mb-4">
                            <div class="col-sm-12">
                                <input type="text" name="name" class="row form-control" id="name" value="<?= $validate->post('name')?>" placeholder="Prénom" pattern="^-?[a-zA-Z\ ]+$"/>
                                <span class="text-danger error-name font-italic"><?= $validate->error("name")?></span>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-sm-4">
                                <select name="day" id="day" class="row form-control" style="<?= ($validate->error('day')) ? "border-color : red" : ''?>">
                                    <option>Jour...</option>

                                    <?php for($i = 1; $i <= 31; $i++)
                                    {
                                    ?>
                                        <option value="<?=$i?>" <?=(isset($_POST['day']) && $_POST['day'] == $i)? 'selected = selected' : ''?>><?=$i?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>

                            <div class="col-sm-4">
                                <select class="row form-control" id="month" name="month" style="<?= ($validate->error('month')) ? "border-color : red" : ''?>">
                                    <option>Mois...</option>

                                    <?php foreach ($validate->months as $key => $month)
                                    {
                                    ?>
                                        <option value="<?=$key?>" <?=(isset($_POST['month']) && $_POST['month'] == $key)? 'selected = selected' : ''?>><?=$month?></option>
                                    <?php
                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="col-sm-4">
                                <input type="text" name="year" id="year" class="row form-control"  placeholder="Année..." value="<?= $validate->post('year')?>" pattern="^(19|20)[0-9]{2}" style="<?= ($validate->error('year')) ? "border-color : red" : ''?>"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-sm-12">
                                <input type="search" name="location" class="row form-control" id="location" placeholder="Saisir ton emplacement"  value="<?= $validate->post('location')?>">
                                <span class="text-danger error-location font-italic"><?= $validate->error("location")?></span>
                                <small id="emailHelp" class="form-text text-muted ml-3">p. ex. cotonou, Benin</small>
                            </div>
                        </div>

                        <div class="form-check form-check-inline mb-4 mr-5">
                            <input class="form-check-input" type="radio" name="sexy" id="inlineRadio1" value="male" <?=(isset($_POST['sexy']) && $_POST['sexy'] == 'male')? 'checked' : ''?>>
                            <label class="form-check-label" for="inlineRadio1">Homme</label>
                        </div>
                        <div class="form-check form-check-inline mb-4" id="radio">
                            <input class="form-check-input" type="radio" name="sexy" id="inlineRadio2" value="female" <?=(isset($_POST['sexy']) && $_POST['sexy'] == 'female')? 'checked' : ''?>>
                            <label class="form-check-label" for="inlineRadio2">Femme</label>
                        </div>
                        <span class="text-danger error-sex font-italic"><?= $validate->error("sexy")?></span>

                        <div class="form-group row mb-4">
                            <div class="col-sm-12">
                                <input type="text" name="email_or_phone" class="row form-control" id="email" placeholder="E-mail ou numéro de téléphone" value="<?= $validate->post('email_or_phone')?>" />
                                <span class="text-danger error-email font-italic"><?= $validate->error("email_or_phone")?></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" name="password" class="row form-control" id="password" placeholder="Crée ton mot de passe" value="<?= $validate->post('password')?>"/>
                                <span class="text-danger error-password font-italic"><?= $validate->error("password")?></span>
                                <small id="emailHelp" class="form-text text-muted ml-3">Le mot de passe doit comprendre au moins 5 caractères</small>
                            </div>
                        </div>
                        <div class="form-check my-4" style="margin-left: 100px;">
                            <input class="form-check-input" type="checkbox" name="remember" value="1" id="check">
                            <label class="form-check-label" for="check">
                                Se souvenir de moi
                            </label>
                        </div>
                        <div class="singin-btn-validate" style="margin-left: 100px;">
                            <button type="submit" name="register" class="btn col-6 row font-weight-bold" role="button">S'inscrire</button>
                        </div>
                    </form>
                </div>
                <small style="font-size: 11px;">En continuant, tu confirmes avoir lu et accepté nos <a href="">Conditions Générales d'Utilisation</a>, notre <a href="">Politique de Confidentialité</a> ainsi que notre <a href="">Politique en matière de Cookies</a></small>
            </div>
            <div class="col-md-3 col-sm-12" style="margin-top: 40px;">
                <p class="my-4 text-center">Se connecter avec :</p>
                <div class="row">
                    <div class="col-md-12 col">
                        <div class="row singin-btn1">
                            <a class="btn mb-3 mx-auto bg-dark" href="#" role="button"><i style="margin-right: 8px;" class="fa fa-facebook-official" aria-hidden="true"></i> <small class="font-weight-bold">Facebook</small></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col">
                        <div class="row singin-btn2">
                            <a class="btn mx-auto bg-warning" href="#" role="button"><i style="margin-left: -10px; margin-right: 10px;" class="fa fa-google" aria-hidden="true"></i> <small class="font-weight-bold">Google</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <hr>
        <footer class="row">
            <div class="col-12 bg-white">
                <div class="row">
                    <div class="footerContent">
                        <a href="">A propos</a>
                        <a href="">CGU</a>
                        <a href="">Confidentialité</a>
                        <a href="">Liens rapides</a>
                        <a href="">Aide</a>
                    </div>
                </div>

                <div class="row">
                    <small class="ml-auto pr-4 pb-4 font-weight-bold">2018 © Babor</small>
                </div>
            </div>
        </footer>
    </div>
</div>


<?php include 'includes/message_flash.php'?>
<!--singin page on mobile-->
<div class="container wow fadeInLeft pl-5 d-block d-sm-none">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="mx-auto mt-4 d-inline-flex">
                    <img src="images/Logo45.png" style="width: 150px; height: 30px; margin-bottom: 80px;">
                </div>
            </div>
        </div>
    </div>


    <form class="col-12" method="post" action="" id="form-login">
        <div class="form-group row mb-4">
            <div class="col-12">
                <input type="text" name="email_or_phone" class="row form-control" id="email" value="<?= $validate->post('email_or_phone')?>" placeholder="E-mail ou numéro de téléphone">
                <span class="text-danger error-email font-italic"><?= $validate->error("email_or_phone")?></span>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <input type="password" name="password" class="row form-control" id="password" placeholder="Mot de passe" value="<?= $validate->post('password')?>"/>
                <span class="text-danger error-password font-italic"><?= $validate->error("password")?></span>
            </div>
        </div>
        <div class="form-check my-4">
            <input class="form-check-input" type="checkbox" value="" id="check">
            <label class="form-check-label" for="check">
                Se souvenir de moi
            </label>
        </div>
        <div class="col-12">
            <div class="row">
                <button type="submit" class="btn btn-primary w-100 mr-4" name="login" role="button">Se connecter</button>
            </div>
        </div>
        <p class="mx-auto text-center p-2"><a href="?view=password_forget" style="color: #b6b6b6;">Mot de passe oublié ?</a></p>
    </form>

    <div class="row">
        <div class="mx-auto"><a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
    </div>

</div>
<script src="js/register.js"></script>