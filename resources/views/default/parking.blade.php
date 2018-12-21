@extends('layout')
@section('pageName')
    Parking
@endsection
@section('content')

    <section class="site-hero" style="background-image: url({{ asset('theme/images/parking.jpg') }});" id="section-home" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row intro-text align-items-center justify-content-center">
                <div class="col-md-10 text-center">
                    <h1 class="site-heading site-animate">Projet
                        <strong>Parking</strong>
                    </h1>
                    <p class="lead site-subheading mb-4 site-animate">Projet réalisé dans le cadre de l'école.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- section -->
    <section class="site-section border-top pb-0"  id="section-services">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2>
                            <strong>Présentation</strong>
                        </h2>
                    </div>
                </div>
            </div>
            <p class="text-center">Cette application permet d'éviter le stationnement anarchique dans les parking.
                Il permet d'attribuer une place à chaque membre. Une place numéroter lui sera alors attribuer.
                Sur la page d'accueil vous trouverez une brief description de l'application.
                Vous pourrez alors à partir d'ici vous connectez si vous possedez déja vos identifiants
                de connexion ou alors allez sur l'onglet inscription pour s'inscrire.
                Une fois en possesion de vos identifiants vous pourrez alors vous connecter.
                Vous aurai alors accès à l'onglet mon profil. sur votre page personnel vous aurez
                la possibilité de reservez une place ainsi que de voir l'historique de vos attribution
                de place. vous avez également la possiblité de modifer les informations concernant votre
                compte.
            </p>
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2>Les
                            <strong>technologies</strong>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <div class="site-service-item site-animate" data-animate-effect="fadeIn">
					<span class="icon">
						<span class="icon-phone3"></span>
					</span>
                        <h3 class="mb-4">MOCODO</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <div class="site-service-item site-animate" data-animate-effect="fadeIn">
					<span class="icon">
						<span class="icon-wallet2"></span>
					</span>
                        <h3 class="mb-4">Balsamiq</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <div class="site-service-item site-animate" data-animate-effect="fadeIn">
					<span class="icon">
						<span class="icon-lightbulb"></span>
					</span>
                        <h3 class="mb-4">MariaDB</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <div class="site-service-item site-animate" data-animate-effect="fadeIn">
					<span class="icon">
						<span class="icon-phone3"></span>
					</span>
                        <h3 class="mb-4">PHP</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <div class="site-service-item site-animate" data-animate-effect="fadeIn">
					<span class="icon">
						<span class="icon-wallet2"></span>
					</span>
                        <h3 class="mb-4">HTML5, CSS3, JavaScript, SCSS, Bootstrap</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 text-center mb-5">
                    <div class="site-service-item site-animate" data-animate-effect="fadeIn">
					<span class="icon">
						<span class="icon-lightbulb"></span>
					</span>
                        <h3 class="mb-4">Microsoft POWERPOINT, Gloomaps</h3>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2>
                            Liste<strong> pré-applicative</strong>
                        </h2>
                    </div>
                </div>
            </div>
            <p class="text-center">Création d'une documentation comprenant la liste des taches, les technologies à utiliser, les maquettes, le MCD et la base de données.
                Mise en place du projet sur Github et attributions des accès aux différents collaborateurs
                Mise en place d'un Trello pour un travail collaboratif.
            </p>
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2>
                            Fonctions <strong>primaire de l'application</strong>
                        </h2>
                    </div>
                </div>
            </div>
            <p class="text-center">Création du MCD et de la base de données (cf Partie Modèle Conceptuel des Données et Base de données)
                Création des pages constituant le site, suivant les maquettes (cf Maquettes) et en respectant l'architecture logicielle Modèle vue contrôleur (MVC) Le modèle contient les données à afficher, la vue contient la présentation de l'interface graphique, le contrôleur contient la logique concernant les actions effectu par l'utilisateur. Page d’accueil, page d’inscription, page utilisateur, page d’administration.
                Elaboration du système d’inscription, connexion, ... Donc des fonctionnalités basiques d’un site. Sur les pages respectives.
                Mise en place des fonctionnalités de la page admin. Affichage et approbation des demandes d’inscriptions ainsi que l'interface servant à l'edition de la liste des places.
                Elaboration du système de réservation aléatoire sur la page utilisateur. Ensuite l’affichage des places disponibles puis de l’historique des réservations.
                Mise en place du système de mise en attente. Et de l’affichage du rang dans la file sur la page utilisateur puis de la file en elle-même sur la page admin.
                Sur la page admin, affichage de la liste d’attente puis de la liste de l’historique des réservations.
                Securité sur le mot de passe en hashage en SHA-256.
                du point de vue du back-end sécurisation en php face aux injections SQL en protegant les requetes utilisations de requête préparée avec des variables liées, trouvable dans les librairies PDO et MySQLi.
            </p>
            <div class="row mb-4">
                <div class="col-md-12">
                    <div class="section-heading text-center">
                        <h2>
                            Model <strong>Conceptuel de Donnée</strong>
                        </h2>
                    </div>
                </div>
            </div>
            <p class="text-center">
                <img src="{{ asset('theme/images/mcd.svg') }}" alt="">
            </p>
        </div>
    </section>
@endsection