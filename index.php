
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
	

    <!-- Favicon -->
<link rel="icon" type="image/x-icon" href="img/favicon.ico">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            
  <img src="img/logo.png" width="75" height="65" alt="" />


        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Accueil</a>
                <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="espaceDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Espace
  </a>
  <div class="dropdown-menu" aria-labelledby="espaceDropdown">
    <a class="dropdown-item" href="espace_condidat.php">Espace Candidat</a>
    <a class="dropdown-item" href="espace_formatteur.php">Espace Formateur</a>
    <a class="dropdown-item" href="espace_entreprise.php">Espace Entreprise</a>
  </div>
</li>

               <li>
    <a class="nav-link scrollto" href="<?php echo isset($_SESSION['username']) ? 'logout.php' : 'login.php'; ?>">
        <?php echo isset($_SESSION['username']) ? 'Déconnexion' : ' Connexion'; ?>
    </a>
</li>

            <div class="nav-item">
  <a href="formation.php" class="nav-link">Formations</a>
</div>


                <style>
                    .dropdown-menu {
                        background-color: #f8f9fa; /* couleur de fond du menu déroulant */
                        padding: 10px; /* ajout d'un peu de padding pour l'esthétique */
                    }
                
                    .dropdown-item {
                        color: #000; /* couleur du texte des éléments */
                        text-decoration: none; /* enlever la sous-ligne des liens */
                        display: block; /* faire en sorte que chaque élément soit sur une nouvelle ligne */
                        padding: 8px 16px; /* ajouter du padding autour des éléments */
                    }
                
                    .dropdown-item:hover {
                        background-color: #00a4ff; /* couleur de fond au survol */
                        color: #fff; /* couleur du texte au survol */
                    }
                
                    .dropdown-submenu {
                        position: relative;
                    }
                
                    .dropdown-submenu .dropdown-menu {
                        top: 0;
                        left: 100%;
                        margin-top: -6px;
                        margin-left: 0;
                    }
                
                    .dropdown-submenu:hover .dropdown-menu {
                        display: block;
                    }
                
                    .dropdown-submenu .dropdown-toggle::after {
                        transform: rotate(-90deg);
                    }
                </style>
                
				
                <div class="nav-item dropdown">
                    <a href="domaine.php" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Domaines</a>

                    <style>
                        .dropdown-menu {
                            background-color: #f8f9fa; /* couleur de fond du menu déroulant */
                            padding: 10px; /* ajout d'un peu de padding pour l'esthétique */
                        }
                
                        .dropdown-item {
                            color: #000; /* couleur du texte des éléments */
                            text-decoration: none; /* enlever la sous-ligne des liens */
                            display: block; /* faire en sorte que chaque élément soit sur une nouvelle ligne */
                            padding: 8px 16px; /* ajouter du padding autour des éléments */
                        }
                
                        .dropdown-item:hover {
                            background-color: #00a4ff; /* couleur de fond au survol */
                            color: #fff; /* couleur du texte au survol */
                        }
                    </style>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="marketingdigital&socialmedia.php" class="dropdown-item">Marketing Digital & Social Média</a>
                        <a href="informatique&multimedia.php" class="dropdown-item">Informatique & Multimédia</a>
                        <a href="comptabilite&finance.php" class="dropdown-item">Comptabilité & Finance</a>
                        <a href="architecture&design.php" class="dropdown-item">Architecture & Design</a>
                        <a href="DESIGNGRAPHIC.php" class="dropdown-item">Design Graphique</a>
                        <a href="langues.php" class="dropdown-item">Langues</a>
                        <a href="metiers.php" class="dropdown-item">Métiers</a>
                    </div>
                </div>
				<a href="evenements.php" class="nav-item nav-link">Evénements</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
			

<?php if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin'): ?>
    <div style="text-align: right; margin: 10px 20px;">
        <a href="dashboard.php" style="
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            📊 Dashboard
        </a>
    </div>
<?php endif; ?>

            <a href="courenligne.php" class="btn py-4 px-lg-5 d-none d-lg-block" style="background-color: #00a4ff; color: #ffffff;">
    Cours en ligne <i class="fa fa-arrow-right ms-3"></i>
</a>

        </div>
</nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h4 class="display-5 text-uppercase mb-3 animated slideInDown" style="font-weight: bold; color: #00a4ff!important;">BIENVENUE CHEZ ProgressUP</h4>
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown" style="color: #ffffff!important;">Centre De Formation Professionnelle Agrée par l'état, Enregistré Sous Le N° 51-363-15 </h5>

                                <p class="fs-7 text-white mb-4 pb-2">"ProgressUp: la clé de votre réussite professionnelle"</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En Savoir Plus</a>
                                <a href="espace_condidat.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Rejoigner-Nous</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/10.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h4 class="display-5 text-uppercase mb-3 animated slideInDown" style="font-weight: bold; color: #00a4ff!important;">BIENVENUE CHEZ PROGRESSUP</h4>
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown" style="color: #ffffff!important;">Centre De Formation Professionnelle Agrée par l'état, Enregistré Sous Le N° 51-363-15 </h5>
                                <p class="fs-7 text-white mb-4 pb-2">"Développez vos compétences, atteignez vos objectifs avec ProgressUp"</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En Savoir Plus</a>
                                <a href="domaine.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Rejoigner-Nous</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h4 class="display-5 text-uppercase mb-3 animated slideInDown" style="font-weight: bold; color: #00a4ff!important;">BIENVENUE CHEZ ProgressUP</h4>
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown" style="color: #ffffff!important;">Centre De Formation Professionnelle Agrée par l'état, Enregistré Sous Le N° 51-363-15 </h5>
                                <p class="fs-7 text-white mb-4 pb-2">"Accélérez votre carrière avec ProgressUp"</p>
                                <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">En Savoir Plus</a>
                                <a href="domaine.php" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Rejoigner-Nous</a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
 <!-- Service Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h5 class="mb-3">Langues Programmes</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5 class="mb-3">It Programmes</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-home text-primary mb-4"></i>
                        <h5 class="mb-3">Formations à distance</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                        <h5 class="mb-3">Certifications Professionnelles</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">A PROPOS DE NOUS</h6>
                <h4 class="mb-6">Bienvenue ProgressUp</h4>
                <p class="mb-4">Depuis 2015, le Centre professionnel Progress est dédié à aider les individus et les organisations à atteindre leur plein potentiel.</p>

                <p class="mb-4">Notre mission est de fournir des programmes de formation et de développement de haute qualité qui favorisent la croissance, l'innovation et le succès.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Formation de haute qualité</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Expertise et expérience</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Amélioration de la productivité</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Développement professionnel</p>
                    </div>
                    
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="about.php">En Savoir Plus</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


  <!-- Categories Start -->
  <div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
            <h1 class="mb-5">Domaines</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="langues.php">
                            <img class="img-fluid" src="img/lang.jpg" alt="" width="800" height="250">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Langues</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="DESIGNGRAPHIC.php">
                            <img class="img-fluid" src="img/1.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0"> Design Graphique</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="architecture&design.php">
                            <img class="img-fluid" src="img/ar.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Architecture</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="informatique&multimedia.php">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/i.jpg" alt="" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                        <h5 class="m-0">Informatique</h5>
                    </div>
                </a>
            </div>
        </div>
        <br>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="comptabilite&finance.php">
                            <img class="img-fluid" src="img/co.jpg" alt="" width="800" height="250">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Comptabilité et Finance</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="metiers.php">
                            <img class="img-fluid" src="img/meti.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Métiers</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="metiers.php">
                            <img class="img-fluid" src="img/coach.jpg" alt="">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Coaching Sportif</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="comptabilite&finance.php">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/res.jpg" alt="" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                        <h5 class="m-0">Ressources Humaines</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Categories Start -->




<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Instructeurs</h6>
            <h1 class="mb-5">Instructeurs experts
            </h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                    </div>
                    
                    <div class="text-center p-4">
                        <h5 class="mb-0">ABD FATTEH SELMI</h5>
                        <small>"Ressources Humaines"</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-2.jpg" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                      <br>  
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">HELA BARHOUMI</h5>
                        <small>"Développement Web"</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-3.jpg" alt="">
                    </div>
                    
                    <div class="text-center p-4">
                        <h5 class="mb-0">FIDA BEN BELGACEM</h5>
                        <small>"Comptabilité"</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-4.jpg" alt="">
                    </div>
                    
                    <div class="text-center p-4">
                        <h5 class="mb-0">WASSIM JEYZ</h5>
                        <small>"Couture"</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">TÉMOIGNAGE</h6>
            <h1 class="mb-5">Nos étudiants disent !</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/ilhem.png" style="width: 80px; height: 80px;">
                <h5 class="mb-0">ILHEM SAIDI</h5>
                
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">"Grâce au ProgressUP, j'ai trouvé un emploi en gestion de projet. Les formateurs sont excellents et les cours très bien structurés. Je recommande vivement !"</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/farah.png" style="width: 80px; height: 80px;">
                <h5 class="mb-0">fARAH JELLITI</h5>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">"J'ai suivi une formation en développement web au ProgressUP et j'ai changé de carrière avec succès. Les formateurs sont très disponibles et les projets concrets."</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/asma.png" style="width: 80px; height: 80px;">
                <h5 class="mb-0">ASSMA HAMROUNI</h5>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">"Grâce au ProgressUP, j'ai pu me reconvertir en tant que développeur web. Les formations sont bien conçues et les projets très instructifs."</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="img/nourhen.png" style="width: 80px; height: 80px;">
                <h5 class="mb-0">Norhen bormaki</h5>
                <div class="testimonial-text bg-light text-center p-4">
                <p class="mb-0">"Le ProgressUP m'a aidée à devenir assistante administrative. Les cours étaient adaptés et les ateliers pratiques m'ont beaucoup appris. Merci pour le soutien !"</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonial End -->



        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Liens Rapides</h4>
                        <a class="btn btn-link" href="index.php">Accueil</a>
                        <a class="btn btn-link" href="about.php">À propos de nous</a>
                        <a class="btn btn-link" href="formation.php">Formations</a>
                        <a class="btn btn-link" href="contact.php">Contact</a>
                        
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Avenue Dr Moreau Immeuble &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Slim Médical 4éme étage B43-44</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+216 27 236 751</p>
                        
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>progress.ppcenter@gmail</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Gallery</h4>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid bg-light p-1" src="img/3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
    <form action="save_comment.php" method="POST">
        <input class="form-control border-0 w-100 py-3 ps-4 pe-5 mb-2" 
               type="text" name="nom" placeholder="Votre Nom" required>
        <input class="form-control border-0 w-100 py-3 ps-4 pe-5 mb-2" 
               type="text" name="message" placeholder="Votre Commentaire" required>
        <button type="submit" 
                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
            Envoyer
        </button>
    </form>
</div>
<?php
require_once 'config.php'; // PDO connection

// Prepare and execute the query
$stmt = $pdo->prepare("SELECT * FROM commentaires WHERE statut = 'approved' ORDER BY created_at DESC");
$stmt->execute();

// Fetch all approved comments
$comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display comments
foreach ($comments as $row) {
    echo "<p><strong>" . htmlspecialchars($row['nom']) . ":</strong> " . htmlspecialchars($row['message']) . "</p>";
}
?>

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p class="mb-0">&copy; 2025 ProgressUp</p>
                </div>
            </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
    
    </html>
