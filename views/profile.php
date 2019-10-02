
 
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
                        <li class="nav-item">
                            <a class="nav-link" href="?view=logout" style="color: #111; background: #eee; padding: 5px 20px 5px 20px; border-radius: 10px;">Log out</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="bg-light">
        <div class="d-none d-md-block" style="position: fixed; right: 10px; top: 300px; z-index: 10;">
            <div class="ml-2 mb-2"><a href=""><i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a></div>
            <div class="mb-3">
                <a href=""><img src="images/images2.jpg" class="rounded-circle" style="height: 40px; width: 40px;"></a>
            </div>
            <div class="mb-3">
                <img src="images/images1.jpg" class="rounded-circle" style="height: 40px; width: 40px;">
            </div>
            <div class="mb-3">
                <img src="images/images.jpg" class="rounded-circle" style="height: 40px; width: 40px;">
            </div>
            <div class="ml-2 mb-2"><a href="{{route('sing_up')}}"><i class="fa fa-angle-down fa-2x" aria-hidden="true"></i></a></div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3">
                    <div class="row">

                        <div class="col-12 bg-light">
                            <div class="row mt-3">
                                    <a href="" class='col-3'><img src="images/avatar.png" class='img-fluid' ></a>

                                    <a href="" class="nav-link text-dark col-9">
                                        <span class='font-weight-bold'><?=$user->name?></span>
                                    </a>
                            </div>

                            <hr class='row bg-secondary my-5'>

                            <div class='row'>
                                <a href="" class='nav-link active text-dark'>Rencontre</a>

                                <button type="button" class="btn btn-light ml-auto border" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Forms pour filtrer une recherche">
                                    <i class="fa fa-sliders" aria-hidden="true"></i>
                                </button>
                            </div>

                            <script>
                                $(function () {
                                    $('[data-toggle="popover"]').popover()
                                })
                            </script>

                            <div class='row my-2'>
                                <a href="" class='nav-link text-dark'>Trouver à coté</a>

                                <button type="button" class="btn btn-light ml-auto border d-none" data-container="body"               data-toggle="popover" data-placement="bottom" data-content="Vivamus
                                    sagittis lacus vel augue laoreet rutrum faucibus.">
                                    <i class="fa fa-sliders" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class='row'>
                                <a href="" class='nav-link text-dark'>En ligne</a>
                            </div>
                            <div class='row my-2'>
                                <a href="" class='nav-link text-dark'>Messages</a>
                            </div>
                            <div class='row'>
                                <a href="" class='nav-link text-dark'>Réciproque</a>
                            </div>
                            <div class='row my-2'>
                                <a href="" class='nav-link text-dark'>Elle vous like</a>
                            </div>
                            <div class='row'>
                                <a href="?view=logout" class='nav-link text-dark d-sm-none'>Deconexion</a>
                            </div>
                        </div> 

                    </div>
                </div>

                <div class="col-md-8 col-lg-9 bg-white">
                    <div class='row' style=''>
                        <div class='col-12 col-lg-7'>
                            <div class="row" id='bg-profil'>
                                <div class='bg-profil-imgs'>
                                    <img src="images/drtt.jpg" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class='col-12 col-lg-5'>
                            
                            <h4 class='row'>
                                <a href="" class="nav-link text-dark">
                                    <span><?=$user->name?></span>,
                                    <span><?=$age?></span></a>
                            </h4>
                            
                        </div>
                    </div>
                    <!--<div class="row">
                        <header class="col-12">
                            <div class="row d-none d-sm-block d-lg-none">
                                <nav class="col-12 navbar navbar-expand-sm navbar-light">
                                    <a href=""><img src="images/Logo45.png" style="width: 150px; height: 30px;"></a>

                                    <div class="collapse navbar-collapse">
                                        <div class="nav-item">
                                            <p class="text-navbar d-none d-md-inline-block">Inscris-toi pour voir qui est autour de toi en ce moment !</p>
                                        </div>

                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item">
                                                <a class="btn mb-3 bg-dark font-weight-bold text-white" href="{{route('sing_up')}}" role="button"><i class="fa fa-envelope-square" aria-hidden="true"></i> Creer un profil</a>
                                            </li>
                                            <li class="nav-item">
                                                <div class="">
                                                    <a class="btn bg-dark mx-2" href="#" role="button"><i style="margin-right: 8px;" class="fa fa-facebook-official" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </li>

                                            <li class="nav-item">
                                                <div class="">
                                                    <a class="btn bg-warning" href="#" role="button"><i style="margin-left: 10px; margin-right: 10px;" class="fa fa-google" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <div class="row">
                                <nav class="col-12 navbar navbar-expand-sm navbar-light bg-white encounter">

                                    <div class="row collapse navbar-collapse" id="navHead-encounters">

                                        <ul class="navbar-nav firstNav">
                                            <li class="nav-item">
                                                <a class="nav-link" href=""><i class="fa fa-heart fa-2x like" aria-hidden="true"></i></a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('page', ['encounters' => 'encounters'])}}"><i class="fa fa-times fa-2x skip" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>

                                        <sup class="nav-item">
                                            <div style="background-color: #cccccc; border-radius: 100px; padding: 4px; margin-top: -20px;"></div>
                                        </sup>

                                        <div class="nav-item textcontentNav">
                                            <h4>
                                                <a href="" class="nav-link text-dark">
                                                    <span><?=$user->name?></span>,
                                                    <span><?=$age?></span></a>
                                            </h4>
                                            <span>
						    		<a href="" class="nav-link">
							    		<span class="text-dark" style="font-size: 20px; font-weight: 500;">0</span>
							    		<span>
						    			<small style="color: #737373;">ses centres d'intérêt</small></span>
						    		</a>
						    	</span>
                                        </div>

                                        <ul class="navbar-nav ml-auto scdNav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" title="Voir le profil"><i class="fa fa-user-o fa-x" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" title="Chatter"><i class="fa fa-comment-o fa-x" aria-hidden="true"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" title="Ajouter aux favoris"><i class="fa fa-star-o fa-x" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </header>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row" style=" background-color: #333;">

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-4 col-md-2">
                                            <div class="row">
                                                <a href=""><img src="images/images1.jpg" class="w-100" style="height: 150px;"></a>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="row">
                                                <img src="images/images2.jpg" class="w-100" style="height: 150px;">
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="row">
                                                <img src="images/imfine.jpg" class="w-100" style="height: 150px;">
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="row">
                                                <img src="images/images.jpg" class="w-100" style="height: 150px;">
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="row">
                                                <img src="images/imag.jpg" class="w-100" style="height: 150px;">
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="row">
                                                <img src="images/tyyy.jpg" class="w-100" style="height: 150px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="badge py-1 px-2 text-light" style="position: absolute; top: 10px; left: 10px;  background: rgba(0,0,0,0.6);"><i class="fa fa-camera" aria-hidden="true"></i> <span>6</span>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-8 pl-5">
                                    <div class="">
                                        <h5 class="row" style="color: #737373;">Emplacement</h5>

                                        <h6 style="color: #a6a6a6;" class="row"><?=$city,', '.$country?></h6>
                                    </div>

                                    <hr class="row">

                                    <div class="">
                                        <h5 class="row" style="color: #737373;">Je suis ici pour</h5>

                                        <h6 class="row" style="color: #a6a6a6;">Sortir avec une fille qui a entre 22 et 32 ans</h6>
                                    </div>

                                    <hr class="row">

                                    <div class="">
                                        <h5 class="row" style="color: #737373;">Informations personnelles</h5>

                                        <div class="row">
                                            <div class="col-8 col-md-6 col-xl-5">
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <div class="row">
                                                            Situation amoureuse :
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <a href="{{route('sing_up')}}" class="ml-auto">Voir</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <div class="row">
                                                            Résidence :
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <a href="{{route('sing_up')}}" class="ml-auto">Voir</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-2">
                                                    <div class="col-6">
                                                        <div class="row">
                                                            Enfants :
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <a href="{{route('sing_up')}}" class="ml-auto">Voir</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="row">

                                    <div class="">
                                        <h5 class="row" style="color: #737373;">Centres d'intérêt</h5>

                                        <h6 class="row" style="color: #a6a6a6;"></h6>
                                    </div>

                                    <hr class="row">

                                    <div class="">
                                        <h5 class="row" style="color: #737373;">Langues</h5>

                                        <h6 class="row" style="color: #a6a6a6;">Russe</h6>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>-->

                    <hr class="row">

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
        </div>
    </div>
