<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>A propos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
	

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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


<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <!-- Logo -->
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img src="img/logo.png" width="75" height="65" alt="Logo">
    </a>

    <!-- Bouton responsive -->
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active">Accueil</a>

            <!-- Dropdown Espace -->
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="espaceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Espace
                </a>
                <ul class="dropdown-menu" aria-labelledby="espaceDropdown">
                    <li><a class="dropdown-item" href="espace_condidat.php">Espace Candidat</a></li>
                    <li><a class="dropdown-item" href="espace_formatteur.php">Espace Formateur</a></li>
                    <li><a class="dropdown-item" href="espace_entreprise.php">Espace Entreprise</a></li>
                </ul>
            </div>

            <!-- Connexion / Déconnexion -->
            <a class="nav-link" href="<?php echo isset($_SESSION['username']) ? 'logout.php' : 'login.php'; ?>">
                <?php echo isset($_SESSION['username']) ? 'Déconnexion' : 'Connexion'; ?>
            </a>

            <!-- Formations -->
            <a href="formation.php" class="nav-link">Formations</a>

            <!-- Domaines Dropdown -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Domaines
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="marketingdigital&socialmedia.html">Marketing Digital & Social Média</a></li>
                    <li><a class="dropdown-item" href="informatique&multimedia.html">Informatique & Multimédia</a></li>
                    <li><a class="dropdown-item" href="comptabilite&finance.html">Comptabilité & Finance</a></li>
                    <li><a class="dropdown-item" href="architecture&design.html">Architecture & Design</a></li>
                    <li><a class="dropdown-item" href="DESIGNGRAPHIC.html">Design Graphique</a></li>
                    <li><a class="dropdown-item" href="langues.html">Langues</a></li>
                    <li><a class="dropdown-item" href="metiers.html">Métiers</a></li>
                </ul>
            </div>

            <a href="evenements.html" class="nav-link">Evénements</a>
            <a href="contact.html" class="nav-link">Contact</a>
        </div>

        <!-- Dashboard Admin -->
        <?php if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin'): ?>
            <div class="ms-3">
                <a href="dashboard.php" class="btn btn-primary">
                    📊 Dashboard
                </a>
            </div>
        <?php endif; ?>

        <!-- Cours en ligne bouton -->
        <a href="courenligne.php" class="btn py-2 px-4 ms-3" style="background-color: #00a4ff; color: #fff;">
            Cours en ligne <i class="fa fa-arrow-right ms-2"></i>
        </a>
    </div>
</nav>

<!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">A propos de nous</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.html">Progress</a></li>
                            
                            <li class="breadcrumb-item text-white active" aria-current="page">A propos de nous</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
	



    <!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
      <table class="table table-borderless">
        <tr>
          <td colspan="2">
            <div class="container-xxl py-5">
                <div class="container">
                  <table class="table table-borderless">
                    <tr>
                      <td colspan="2">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="section-title bg-white text-center text-primary px-3" style="color: #00a4ff; text-align: center;">Notre Histoire</h4>   
                        </div>
                        <br>
                      </td>
                    </tr>
                    <tr>
                  </table>
                </div>
              </div>
            <p>Progress Professional Center, fondé en 2015, se spécialise dans l'accompagnement individuel et corporatif pour le développement des compétences professionnelles. Nous offrons une variété de formations adaptées aux besoins spécifiques de nos clients, visant à renforcer leurs capacités dans divers domaines. Notre équipe de formateurs experts s'engage à fournir des programmes de haute qualité, personnalisés et alignés sur les dernières innovations pédagogiques. Avec un fort accent sur l'excellence, l'innovation, la proximité client et un taux de satisfaction élevé, nous sommes déterminés à garantir la réussite de nos participants dans leurs parcours professionnels.</p>
          </td>
        </tr>
        <tr>
          <td>
            <h4 style="color: #000000;">Notre Mission</h4>
            <ul>
              <li>
                <strong>Développer les compétences individuelles</strong>
                <p>Nous offrons des formations de qualité qui aident nos participants à atteindre leurs objectifs professionnels, en leur fournissant les compétences nécessaires pour exceller dans leur domaine.</p>
              </li>
              <li>
                <strong>Accompagner les entreprises</strong>
                <p>Nous travaillons en étroite collaboration avec les entreprises pour développer les compétences de leurs équipes, en offrant des solutions de formation personnalisées qui répondent à leurs besoins stratégiques.</p>
              </li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>
            <h4 style="color: #000000;">Nos Valeurs</h4>
            <ul>
              <li><strong>Excellence :</strong> Nous nous engageons à maintenir des standards élevés dans nos programmes de formation, assurés par des formateurs experts et passionnés.</li>
              <li><strong>Innovation :</strong> Toujours à la pointe des nouvelles tendances et des méthodes pédagogiques innovantes, nous adaptons nos formations pour rester pertinents et efficaces.</li>
              <li><strong>Sur-mesure :</strong> Chaque client est unique. Nous prenons le temps de comprendre leurs défis spécifiques pour concevoir des formations adaptées qui maximisent leur potentiel.</li>
              <li><strong>Proximité :</strong> Nous mettons un point d'honneur à être proches de nos clients, offrant un accompagnement personnalisé à chaque étape de leur développement professionnel.</li>
            </ul>
          </td>
        </tr>
        <tr>
          <td>
            <h4 style="color: #000000;">Notre Expérience</h4>
            <p>Depuis notre création, nous avons aidé plus de 1000 clients, incluant des entreprises de toutes tailles et des individus venant de divers horizons. Avec un taux de satisfaction client de 95%, nos formations sont reconnues pour leur qualité et leur efficacité.</p>
          </td>
        </tr>
        <tr>
          <td>
            <h4 style="color: #000000;">Notre Équipe</h4>
            <p>Notre équipe est composée de formateurs chevronnés, experts dans leur domaine et passionnés par l'enseignement. Ils sont constamment formés aux dernières méthodologies d'animation et d'évaluation, assurant une expérience d'apprentissage optimale pour nos partenaires.</p>
          </td>
        </tr>
      </table>
    </div>
  </div>
  
  <!-- About End -->

	
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h4 class="section-title bg-white text-center text-primary px-3">Nos partenaires</h4>
            
        </div>
        <br> <br><br> <br><br> <br>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/jci.jpeg" alt="JCI">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/bank.jpeg" alt="BANK">
                    </div>
                </div>
            </div>
            
            
            <br> <br>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/le.png" alt="LEONI">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/alum.jpeg" alt="LEONI">
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
	
	



    
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