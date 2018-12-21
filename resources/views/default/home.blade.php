@extends('layout')

@section('pageName')
    Accueil
@endsection

@section('content')
    <section class="site-hero" style="background-image: url({{ asset('theme/images/image_1.jpg') }});" id="section-home" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row intro-text align-items-center justify-content-center">
                <div class="col-md-10 text-center">
                    <h1 class="site-heading site-animate">Salut, I'm <strong>Tao BERQUER</strong></h1>
                    <p class="lead site-subheading mb-4 site-animate">Développeur web et administrateur réseau sur le internet mondial.</p>
                    <p><a href="#section-about" class="smoothscroll btn btn-primary px-4 py-3">Voir plus</a></p>
                </div>
            </div>
        </div>
    </section> <!-- section -->


    <section class="site-section" id="section-about">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
                    <img src="{{ asset('theme/images/image_1_long.jpg') }}" alt="Image placeholder" class="img-fluid">
                </div>
                <div class="col-lg-5 pl-lg-5">
                    <div class="section-heading">
                        <h2>Qui suis-je <strong>?</strong></h2>
                    </div>
                    <p class="lead">1,2,3 soleil</p>
                    <p class="mb-5">Kebab</p>

                    <p>
                        <a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Contactez moi</a>
                        <a href="#" class="btn btn-secondary px-4 py-2 btn-sm">Télécharger mon CV</a>
                    </p>
                </div>
            </div>

            <div class="row pt-5">
                <div class="col-md-3 mb-3">
                    <div class="section-heading">
                        <h2>Mes<strong> Skills</strong></h2>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="skill">
                        <h3>HTML 5</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <h3>CSS 3</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <h3>Bootstrap 4</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <h3>Slim 3</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <h3>Laravel 5</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <h3>WordPress</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>

                    <div class="skill">
                        <h3>Symfony 4</h3>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                <span>65%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section" id="section-portfolio">
        <div class="container">
            <div class="row">
                <div class="section-heading text-center col-md-12">
                    <h2>Mon <strong>Portfolio</strong></h2>
                </div>
            </div>
            <div class="filters">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".php">PHP</li>
                    <li data-filter=".laravel">Laravel</li>
                    <li data-filter=".slim">Slim</li>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row grid">
                    <div class="single-portfolio col-sm-4 all php slim">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{ asset('theme/images/Orion_wifi.svg') }}" alt="">
                            </div>
                            <a href="{{ route('wifi_project') }}" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex preview"></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>Pyros (Itic WIFI)</h4>
                            <div class="cat">PHP SLIM</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all laravel php">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{ asset('theme/images/Orion_car.svg') }}" alt="">
                            </div>
                            <a href="{{ route('parking_project') }}" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex preview"></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>Parking</h4>
                            <div class="cat">PHP LARAVEL</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all slim php">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{ asset('theme/images/Orion_rss.svg') }}" alt="">
                            </div>
                            <a href="{{ route('rss_project') }}" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex preview"></div>
                                </div>
                            </a>

                        </div>
                        <div class="p-inner">
                            <h4>Thimes (Flux RSS)</h4>
                            <div class="cat">SLIM PHP</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- .section -->

    <section class="site-section bg-light" id="section-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="section-heading text-center">
                        <h2>Travaillons <strong>ensemble</strong> !</h2>
                    </div>
                </div>

                <div class="col-md-7 mb-5 mb-md-0">
                    <form action="" class="site-form">
                        <h3 class="mb-5">Contactez moi</h3>
                        <div class="form-group">
                            <input type="text" class="form-control px-3 py-4" placeholder="Votre nom">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control px-3 py-4" placeholder="Votre adresse mail">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control px-3 py-4" placeholder="Votre numéro">
                        </div>
                        <div class="form-group mb-5">
                            <textarea class="form-control px-3 py-4"cols="30" rows="10" placeholder="Ecrivez votre message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary  px-4 py-3" value="Envoyer">
                        </div>
                    </form>
                </div>
                <div class="col-md-5 pl-md-5">
                    <h3 class="mb-5">Mes informations</h3>
                    <ul class="site-contact-details">
                        <li>
                            <span class="text-uppercase">Email</span>
                            tao.berquer@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection