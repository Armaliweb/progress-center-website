<?php
$message = "";
if (isset($_GET['success'])) {
    $message = "Votre inscription a été enregistrée avec succès !";
}
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formation HydraFacial - Progress Professionnel Center</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
:root { --accent: #ff6f91; --accent-2: #845ec2; --bg-light: #fdfdfd; --text-dark: #2d2d2d;}
body { font-family: 'Poppins', sans-serif; background: var(--bg-light); color: var(--text-dark);}
.hero { background:url('img/hydrafacial.jpg') center/cover no-repeat; height: 420px; display:flex; align-items:center; justify-content:center; color:white; text-align:center;}
.hero h1 { font-size:3rem; font-weight:700;}
.hero p { font-size:1.2rem; margin-top:10px;}
section { padding:70px 15px; }
h2.section-title { font-size:2rem; font-weight:700; text-align:center; margin-bottom:50px; position:relative;}
h2.section-title::after { content:""; width:80px; height:4px; background: linear-gradient(90deg,var(--accent),var(--accent-2)); display:block; margin:15px auto 0; border-radius:4px;}
.card-option { border:none; border-radius:18px; overflow:hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; background:white;}
.card-option:hover { transform:translateY(-8px); box-shadow:0 15px 30px rgba(0,0,0,0.15);}
.card-option .card-header { background: linear-gradient(135deg,var(--accent),var(--accent-2)); color:white; text-align:center; font-size:1.3rem; font-weight:600; padding:20px;}
.card-option .card-body { text-align:center; padding:30px;}
.card-option p.price { font-size:1.6rem; font-weight:700; color:var(--accent-2);}
.btn-accent { background: linear-gradient(90deg,var(--accent),var(--accent-2)); color:#fff; border-radius:50px; padding:12px 30px; font-weight:600; border:none;}
.btn-accent:hover { opacity:0.9; color:#fff;}
form { background:#fff; padding:40px; border-radius:18px; box-shadow:0 8px 25px rgba(0,0,0,0.08);}
.alert-success { text-align:center;}
</style>
</head>
<body>
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
<header class="hero">
  <div>
    <h1>Formation HydraFacial</h1>
    <p>Apprenez les techniques avancées pour un soin du visage complet et hydratant</p>
  </div>
</header>

<main class="container">

  <section class="text-center">
    <h2 class="section-title">À propos de la formation</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <p class="lead">
          Formation professionnelle HydraFacial pour maîtriser l'hydratation, le nettoyage et la revitalisation
          de la peau avec des techniques modernes et sécurisées.
        </p>
      </div>
    </div>
    <img src="img/hydrafacial2.jpg" alt="HydraFacial" class="img-fluid rounded shadow mt-4" style="max-width:400px; width:100%; height:auto;">
  </section>

  <section>
    <h2 class="section-title">Nos formules de formation</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-5">
        <div class="card card-option">
          <div class="card-header">Formation Accélérée</div>
          <div class="card-body">
            <p>Durée : <strong>3 Semaines</strong></p>
            <p class="price">350TND au lieu de 700TND</p>
            <p>Programme condensé, ateliers pratiques intensifs, suivi personnalisé.</p>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <h2 class="section-title">Inscrivez-vous dès maintenant</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <?php if($message): ?>
            <div class="alert alert-success"><?= $message ?></div>
        <?php endif; ?>
        <form action="submit-hydrafacial.php" method="post">
          <div class="mb-3">
            <label for="nom" class="form-label">Nom complet</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Âge</label>
            <input type="number" class="form-control" id="age" name="age" required>
          </div>
          <div class="mb-3">
            <label for="parcours" class="form-label">Email</label>
            <input type="text" class="form-control" id="parcours" name="parcours" required>
          </div>
          <div class="mb-3">
            <label for="option" class="form-label">Choisir la formule</label>
            <select class="form-select" id="option" name="option" required>
              <option value="accelerée">Accélérée</option>
            </select>
          </div>
          <input type="hidden" name="formation" value="HydraFacial">
          <button type="submit" class="btn-accent w-100 mt-3">S'inscrire</button>
        </form>
      </div>
    </div>
  </section>

</main>

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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
