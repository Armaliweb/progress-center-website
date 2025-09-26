<?php

$modules = [
  [
    'title' => 'Soin du visage',
    'slug' => 'soin-du-visage',
    'short' => "Techniques modernes et protocoles professionnels pour tous types de peau.",
    'image' => 'img/sunny-ng-KVIlNRoGwxk-unsplash.jpg',
    'details' => "Apprenez l'analyse de peau, nettoyage profond, soins anti-âge, peelings doux, masques pro et protocoles personnalisés. Formation pratique et théorique (certificat inclus)."
  ],
  [
    'title' => 'Maquillage Professionnel',
    'slug' => 'maquillage-professionnel',
    'short' => "Bases solides et techniques avancées pour maquilleurs professionnels.",
    'image' => 'img/1.jpg',
    'details' => "Cours couvrant colorimétrie, mise en valeur visage, maquillage de nuit, mariée, retouches photo, hygiène et portfolio professionnel."
  ],
  [
    'title' => 'Manucure & Pédicure',
    'slug' => 'manucure-pedicure',
    'short' => "Soin, mise en forme et techniques ongulaires modernes.",
    'image' => 'https://images.unsplash.com/photo-1522337660859-02fbefca4702?w=800&h=600&fit=crop',
    'details' => "Formation sur entretien des ongles, pose gel/vernish semi-permanent, soins des pieds, hygiène, SPA pieds et techniques de vente en institut."
  ],
 
  [
    'title' => 'Soin des Pieds et des Mains',
    'slug' => 'soin-pieds-mains',
    'short' => "Techniques professionnelles pour le soin complet des pieds et des mains.",
    'image' => 'img\download.jpg',  
    'details' => "Formation approfondie sur l'hygiène, les massages, les soins spécifiques et la beauté des mains et pieds."
  ],
  [
    'title' => 'Formation Microneedling',
    'slug' => 'formation-microneedling',
    'short' => "Apprenez les techniques de microneedling pour rajeunissement cutané.",
    'image' => 'img\Microneedling – alles, was Du darüber wisst solltest.jpg', 
    'details' => "Cours complet sur les procédures, les protocoles de soin, les contre-indications et l’équipement."
  ],
  [
    'title' => 'BB Lips',
    'slug' => 'bb-lips',
    'short' => "Techniques modernes pour embellir et revitaliser les lèvres.",
    'image' => 'img\RECUPERADOR LABIAL.jpg', 
    'details' => "Formation aux protocoles de soin et coloration des lèvres avec méthode BB Lips."
  ],
  [
    'title' => 'Hydraphacial',
    'slug' => 'hydraphacial',
    'short' => "Soin du visage innovant alliant nettoyage, exfoliation et hydratation.",
    'image' => 'img\Paciente submetido a procedimento de microagulhamento _ Foto Grátis.jpg', 
    'details' => "Apprenez l’utilisation de l’appareil Hydraphacial et ses bénéfices pour la peau."
  ],
  [
    'title' => 'Visagiste',
    'slug' => 'visagiste',
    'short' => "Analyse du visage et conseils personnalisés pour valoriser chaque morphologie.",
    'image' => 'img\GELAVIS – Science for health, health for beauty.jpg', 
    'details' => "Formation pour devenir expert en style, coiffure et maquillage adaptés au visage."
  ],
  [
    'title' => 'Hanna',
    'slug' => 'hanna',
    'short' => "Techniques traditionnelles de tatouage au henné naturel.",
    'image' => 'img\hanna.jpg', 
    'details' => "Apprenez l’art ancestral du henné pour des motifs artistiques sur peau et cheveux."
  ],
  [
    'title' => 'Microblading',
    'slug' => 'microblading',
    'short' => "Techniques de maquillage semi-permanent pour des sourcils parfaits.",
    'image' => 'img\Mıcrobladıng.jpg', 
    'details' => "Formation sur la technique, sécurité, dessin des sourcils et entretien."
  ],
  [
    'title' => 'Brow Lift',
    'slug' => 'brow-lift',
    'short' => "Rehaussement et restructuration professionnelle des sourcils.",
    'image' => 'img\LiftBrow.jpg', 
    'details' => "Techniques de brow lift pour un regard naturel et élégant."
  ],
  [
    'title' => 'Lash Lift',
    'slug' => 'lash-lift',
    'short' => "Sublimez les cils avec la technique de rehaussement durable.",
    'image' => 'img/lash-lift.jpg',
    'details' => "Formation complète pour la pose de lash lift, soin et entretien."
  ]
];

function module_link($slug){
  return $slug . '.php';
}
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Esthétique - Progress Professionnel Center</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    :root {
      --accent: #e83e8c; /* energetic pink */
      --accent-2: #6f42c1; /* purple */
      --muted: #6c757d;
    }
    body {
      font-family: 'Poppins', 'Segoe UI', Arial, sans-serif;
      background: linear-gradient(180deg, #ffffff 0%, #f6f7fb 100%);
    }
    .hero {
      background-image: linear-gradient(0deg, rgba(111,66,193,0.25), rgba(232,62,140,0.15)), url('img/drew-dizzy-graham-cTKGZJTMJQU-unsplash.jpg');
      background-size: cover;
      background-position: center;
      height: 420px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: black;
      position: relative;
    }
    .hero .overlay {
      background: rgba(255, 255, 255, 0.8);
      padding: 24px 36px;
      border-radius: 14px;
      backdrop-filter: blur(2px);
      color: black !important;
      text-align: center;
    }
    h1.title {
      font-size: 2.4rem;
      margin: 0;
      font-weight: 700;
      letter-spacing: 0.4px;
    }
    .section-title {
      margin-top: 36px;
      margin-bottom: 16px;
      text-align: center;
    }
    .card-creative {
      border-radius: 14px;
      overflow: hidden;
      transition: transform 0.28s ease, box-shadow 0.28s ease;
    }
    .card-creative:hover {
      transform: translateY(-8px);
      box-shadow: 0 18px 40px rgba(20, 20, 50, 0.12);
    }
    .card-creative .card-img-top {
      height: 220px;
      object-fit: cover;
    }
    .btn-accent {
      border-radius: 12px;
      padding: 10px 16px;
      background: linear-gradient(90deg, var(--accent), var(--accent-2));
      color: #fff;
      border: 0;
    }
    footer {
      margin-top: 40px;
    }
    @media (max-width: 767px) {
      .hero {
        height: 300px;
      }
      .hero .overlay {
        padding: 14px;
      }
      h1.title {
        font-size: 1.6rem;
      }
    }
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
    <div class="overlay">
      <h1 class="title">Formation en Esthétique</h1>
      <p class="lead" style="opacity: 0.95;">Devenez un professionnel: formations certifiantes & ateliers pratiques</p>
      <div class="features">
        <div class="feature-pill">Pratique intensive</div>
        <div class="feature-pill">Petits groupes</div>
        <div class="feature-pill">Certification</div>
      </div>
    </div>
  </header>

  <main class="container my-5">

    <section class="section-title">
      <h2 class="fw-bold">Nos Modules</h2>
      <p class="text-muted">Découvrez les formations proposées par Progress Professionnel Center</p>
    </section>

    <div class="row g-4">
  <?php foreach ($modules as $m): ?>
    <div class="col-md-4">
      <div class="card card-creative shadow-sm h-100">
        <img src="<?= htmlspecialchars($m['image']) ?>" class="card-img-top" loading="lazy" alt="<?= htmlspecialchars($m['title']) ?>" />
        <div class="card-body d-flex flex-column">
          <h5 class="card-title"><?= htmlspecialchars($m['title']) ?></h5>
          <p class="card-text text-muted"><?= htmlspecialchars($m['short']) ?></p>
          <div class="mt-auto d-flex gap-2">
            <!-- Bouton Voir la formation -->
            <a href="<?= htmlspecialchars(module_link($m['slug'])) ?>" class="btn btn-outline-primary flex-grow-1">
              Voir la formation
            </a>
            <!-- Bouton Plus qui redirige directement vers la page dédiée -->
            <a href="<?= htmlspecialchars(module_link($m['slug'])) ?>" class="btn btn-accent flex-grow-1">
              Plus
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

    </div>

    <section class="mt-5 text-center">
      <div class="card p-4 shadow-sm mx-auto" style="max-width:900px; border-radius:14px;">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h3 class="mb-1">Vous voulez en savoir plus ?</h3>
            <p class="text-muted mb-0">Contactez-nous pour un programme personnalisé, calendrier et tarifs.</p>
          </div>
          <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <a href="mailto:contact@progressprocenter.tn" class="btn btn-outline-dark">Nous contacter</a>
            <a href="#" class="btn btn-accent ms-2">S'inscrire</a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Details Modal -->
  <div class="modal fade" id="detailsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="modalTitle"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img id="modalImage" src="" alt="" class="img-fluid rounded mb-3" style="width:100%; height:320px; object-fit:cover" />
          <p id="modalDesc" class="text-muted"></p>
       <div>
    <!-- Contacter nous et S'inscrire redirigent vers espace-candidat.php -->
    <a href="index.php" class="btn btn-accent">S'inscrire</a>
    <a href="index.php" class="btn btn-outline-dark ms-2">Contacter nous</a>
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

      const slug = button.getAttribute('data-title').toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');
      document.getElementById('modalLink').href = slug + '.php';
    });
  </script>

</body>
</html>
