<?php




$modulesFemme = [
  [
    'title' => 'Coupe & Brushing',
    'slug' => 'coupe-brushing',
    'short' => "Techniques de coupe femme et brushing professionnel.",
    'image' => 'img\charlesdeluvio-JinhS3pCM_c-unsplash.jpg',
    'details' => "Coupes tendance, dégradés, bobs, lissages et brushing volumineux."
  ],
  [
    'title' => 'Coloration & Mèches',
    'slug' => 'coloration-meches',
    'short' => "Maîtrisez les techniques de coloration, mèches et balayages.",
    'image' => 'img\Balayage.jpg',
    'details' => "Colorations permanentes, semi-permanentes, mèches, balayage, ombré hair."
  ],
  [
    'title' => 'Coiffures Événementielles',
    'slug' => 'coiffures-evenementielles',
    'short' => "Chignons, coiffures de mariée, soirées et cérémonies.",
    'image' => 'img\Posts du groupe Mode nuptiale.jpg',
    'details' => "Coiffures sophistiquées pour mariages et événements, fixation et accessoires."
  ]
];

function module_link($slug) {
  return $slug . '.php';
}
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Coiffure - Progress Professionnel Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root{
      --accent:#e83e8c; --accent-2:#6f42c1; --muted:#6c757d;
    }
    body{font-family:'Poppins','Segoe UI',Arial,sans-serif;background:linear-gradient(180deg,#fff 0%,#f6f7fb 100%);}
    .hero{background-image:linear-gradient(0deg,rgba(111,66,193,0.25),rgba(232,62,140,0.15)),url('img/coiffure-hero.jpg');
      background-size:cover;background-position:center;height:420px;display:flex;align-items:center;justify-content:center;color:#fff;}
    .hero .overlay{background:rgba(0,0,0,0.35);padding:24px 36px;border-radius:14px;backdrop-filter:blur(2px);}
    .card-creative{border-radius:14px;overflow:hidden;transition:transform .28s ease,box-shadow .28s ease;}
    .card-creative:hover{transform:translateY(-8px);box-shadow:0 18px 40px rgba(20,20,50,0.12);}
    .card-creative .card-img-top{height:220px;object-fit:cover;}
    .btn-accent{border-radius:12px;padding:10px 16px;background:linear-gradient(90deg,var(--accent),var(--accent-2));color:#fff;border:0;}
    .features{display:flex;gap:18px;justify-content:center;flex-wrap:wrap;}
    .feature-pill{background:#fff;padding:10px 14px;border-radius:999px;box-shadow:0 6px 18px rgba(50,50,93,0.06);font-weight:600;}
    footer{margin-top:40px}
    @media(max-width:767px){.hero{height:300px}.hero .overlay{padding:14px}}
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
  <div class="overlay text-center" style="color:black;">
    <h1 class="title">Formation en Coiffure</h1>
    <p class="lead">Spécialités Femme - formations certifiantes</p>
    <div class="mt-3 features">
      <div class="feature-pill">Pratique intensive</div>
      <div class="feature-pill">Petits groupes</div>
      <div class="feature-pill">Certification</div>
    </div>
  </div>
</header>

<main class="container my-5">
  <!-- Tabs -->
  <ul class="nav nav-tabs" id="coiffureTabs" role="tablist">

    <li class="nav-item" role="presentation">
      <button class="nav-link" id="femme-tab" data-bs-toggle="tab" data-bs-target="#femme" type="button" role="tab">Femme</button>
    </li>
  </ul>

  <div class="tab-content mt-4">
  
    <!-- Femme Tab -->
    <div class="tab-pane fade" id="femme" role="tabpanel">
      <div class="row g-4">
        <?php foreach($modulesFemme as $m): ?>
          <div class="col-md-4">
            <div class="card card-creative shadow-sm h-100">
              <img src="<?= htmlspecialchars($m['image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($m['title']) ?>">
              <div class="card-body d-flex flex-column">
                <h5><?= htmlspecialchars($m['title']) ?></h5>
                <p class="text-muted"><?= htmlspecialchars($m['short']) ?></p>
                <div class="mt-auto d-flex gap-2">
                  <a href="<?= module_link($m['slug']) ?>" class="btn btn-outline-primary flex-grow-1">Voir</a>
                  <button class="btn btn-accent" data-bs-toggle="modal" data-bs-target="#detailsModal"
                    data-title="<?= htmlspecialchars($m['title']) ?>"
                    data-image="<?= htmlspecialchars($m['image']) ?>"
                    data-desc="<?= htmlspecialchars($m['details']) ?>">
                    Plus
                  </button>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</main>

<!-- Modal -->
<div class="modal fade" id="detailsModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title" id="modalTitle"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" class="img-fluid rounded mb-3" style="width:100%;height:320px;object-fit:cover">
        <p id="modalDesc" class="text-muted"></p>
      </div>
      <div class="modal-footer">
        <a id="modalLink" class="btn btn-outline-primary">Voir la formation</a>
        <button class="btn btn-accent" data-bs-dismiss="modal">S'inscrire</button>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const detailsModal = document.getElementById('detailsModal');
  detailsModal.addEventListener('show.bs.modal', function (event) {
    const button = event.relatedTarget;
    document.getElementById('modalTitle').textContent = button.getAttribute('data-title');
    document.getElementById('modalImage').src = button.getAttribute('data-image');
    document.getElementById('modalDesc').textContent = button.getAttribute('data-desc');
    const slug = button.getAttribute('data-title').toLowerCase().replace(/[^a-z0-9]+/g,'-').replace(/(^-|-$)/g,'');
    document.getElementById('modalLink').href = slug + '.php';
  });
</script>
</body>
</html>
<style>
  :root{
    --accent:#e83e8c; --accent-2:#6f42c1; --muted:#6c757d;
  }
  body{font-family:'Poppins','Segoe UI',Arial,sans-serif;background:linear-gradient(180deg,#fff 0%,#f6f7fb 100%);}
  .hero{
    background-image: url('img/maksym-tymchyk-FEJKPMbjpSw-unsplash.jpg');
    background-size: cover;
    background-position: center;
    height: 420px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
  }
  .hero .overlay{
    background: transparent;
    padding: 24px 36px;
    border-radius: 14px;
    /* backdrop-filter: blur(2px); */
  }
  /* rest of your CSS unchanged */
</style>
