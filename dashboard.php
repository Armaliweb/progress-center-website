<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['username'] !== 'admin') {
    header("Location: index.php");
    exit();
}

$pdo = new PDO('mysql:host=localhost;dbname=progress_center;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$formateurs = $pdo->query("SELECT * FROM formateurs ORDER BY id DESC")->fetchAll();
$candidats = $pdo->query("SELECT * FROM candidats ORDER BY id DESC")->fetchAll();
$entreprises = $pdo->query("SELECT * FROM entreprises ORDER BY id DESC")->fetchAll();
$inscriptions_soin_visage = $pdo->query("SELECT * FROM inscriptions_soin_visage ORDER BY id DESC")->fetchAll();
$inscriptions_maquillage = $pdo->query("SELECT * FROM inscriptions_maquillage ORDER BY date_inscription DESC")->fetchAll();
$inscriptions_manicure = $pdo->query("SELECT * FROM inscriptions_manicure ORDER BY date_inscription DESC")->fetchAll();
$inscriptions_soinpieds = $pdo->query("SELECT * FROM inscriptions_soinpieds ORDER BY id DESC")->fetchAll();
$inscriptions_microneedling = $pdo->query("SELECT * FROM inscriptions_microneedling ORDER BY id DESC")->fetchAll();
$inscriptions_bb_lips = $pdo->query("SELECT * FROM inscriptions_bb_lips ORDER BY id DESC")->fetchAll();
$inscriptions_hydrafacial = $pdo->query("SELECT * FROM inscriptions_hydrafacial ORDER BY id DESC")->fetchAll();
$inscriptions_visagiste = $pdo->query("SELECT * FROM inscriptions_visagiste ORDER BY id DESC")->fetchAll();
$inscriptions_hanna = $pdo->query("SELECT * FROM inscriptions_hanna ORDER BY id DESC")->fetchAll();
$inscriptions_microblading = $pdo->query("SELECT * FROM inscriptions_microblading ORDER BY id DESC")->fetchAll();
$inscriptions_browlift = $pdo->query("SELECT * FROM inscriptions_browlift ORDER BY id DESC")->fetchAll();
$inscriptions_lashlift = $pdo->query("SELECT * FROM inscriptions_lashlift ORDER BY id DESC")->fetchAll();
$inscriptions_coupe = $pdo->query("SELECT * FROM inscriptions_coupe ORDER BY id DESC")->fetchAll();
$inscriptions_taille_entretien_barbe = $pdo->query("SELECT * FROM inscriptions_taille_entretien_barbe ORDER BY date_inscription DESC")->fetchAll();
$inscriptions_coloration_homme = $pdo->query(" SELECT * FROM inscriptions_coloration_homme ORDER BY date_inscription DESC")->fetchAll();
$inscriptions_coupe_brushing = $pdo->query("SELECT * FROM inscriptions_coupe_brushing ORDER BY date_inscription DESC")->fetchAll();
$inscriptions_coloration_meches = $pdo->query("SELECT * FROM inscriptions_coloration_meches ORDER BY date_inscription DESC")->fetchAll();
$inscriptions_coiffures_evenementielles = $pdo->query("SELECT * FROM inscriptions_coiffures_evenementielles ORDER BY date_inscription DESC")->fetchAll();
$inscriptions_trading1 = $pdo->query("SELECT * FROM inscriptions_trading1 ORDER BY date_inscription DESC")->fetchAll(PDO::FETCH_ASSOC);
$inscriptions_trading2 = $pdo->query("SELECT * FROM inscriptions_trading2 ORDER BY date_inscription DESC")->fetchAll(PDO::FETCH_ASSOC);
$inscriptions_trading3 = $pdo->query("SELECT * FROM inscriptions_trading3 ORDER BY date_inscription DESC")->fetchAll(PDO::FETCH_ASSOC);
$inscriptions_trading4 = $pdo->query("SELECT * FROM inscriptions_trading4 ORDER BY date_inscription DESC")->fetchAll(PDO::FETCH_ASSOC);
$inscriptions_trading5 = $pdo->query("SELECT * FROM inscriptions_trading5 ORDER BY date_inscription DESC")->fetchAll(PDO::FETCH_ASSOC);
$inscriptions_trading6 = $pdo->query("SELECT * FROM inscriptions_trading6 ORDER BY date_inscription DESC")->fetchAll(PDO::FETCH_ASSOC);
$inscriptions_trading7 = $pdo->query("SELECT * FROM inscriptions_trading7 ORDER BY date_inscription DESC")->fetchAll(PDO::FETCH_ASSOC);
$inscriptions_trading8 = $pdo->query("SELECT * FROM inscriptions_trading8 ORDER BY date_inscription DESC")->fetchAll(PDO::FETCH_ASSOC);
$inscriptions_trading9 = $pdo->query("SELECT * FROM inscriptions_trading9 ORDER BY date_inscription DESC")->fetchAll(PDO::FETCH_ASSOC);
$esthetique = $pdo->query("SELECT * FROM inscriptions_esthetique ORDER BY date_inscription DESC")->fetchAll();
$coiffure   = $pdo->query("SELECT * FROM inscriptions_coiffure ORDER BY date_inscription DESC")->fetchAll();
$candidats_couture_continue = $pdo->query("SELECT * FROM inscriptions_couture_continue ORDER BY id DESC")->fetchAll();
$candidats_couture_accelere = $pdo->query("SELECT * FROM inscriptions_couture_accelere ORDER BY id DESC")->fetchAll();
$stmt = $pdo->prepare("SELECT * FROM inscriptions_francais ORDER BY date_inscription DESC");
$stmt->execute();
$inscriptions_francais = $stmt->fetchAll(PDO::FETCH_ASSOC);$stmt = $pdo->query("SELECT * FROM inscriptions_espagnol ORDER BY created_at DESC");
$esp_submissions = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $pdo->query("SELECT * FROM inscriptions_italien ORDER BY created_at DESC");
$inscriptions = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $pdo->prepare("SELECT * FROM inscriptions_allemand ORDER BY created_at DESC");
$stmt->execute();
$inscriptions = $stmt->fetchAll(PDO::FETCH_ASSOC);
$contact_messages = $pdo->query("SELECT * FROM contact_messages ORDER BY created_at DESC")->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<style>
body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #f5f7fa;
    color: #333;
}
.sidebar {
    height: 100vh;
    background: linear-gradient(180deg, #343a40, #495057);
    color: white;
}
.sidebar a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 12px 20px;
    margin-bottom: 5px;
    border-radius: 5px;
    transition: 0.3s;
}
.sidebar a:hover {
    background-color: #6c757d;
}
.card {
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}
.card-header {
    background: linear-gradient(90deg,#6f42c1,#ff6f91);
    color: white;
    font-weight: 600;
}
.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #f2f2f2;
}
.table-hover tbody tr:hover {
    background-color: #e9ecef;
}
.stats-card {
    border-radius: 12px;
    padding: 20px;
    color: white;
    font-weight: 600;
}
.stats-card h3 {
    font-size: 1.5rem;
}
.stats-candidats { background: #007bff; }
.stats-formateurs { background: #28a745; }
.stats-entreprises { background: #ffc107; color: #212529; }
</style>
</head>
<body>

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
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar p-3">
            <h2 class="text-center mb-4">Admin</h2>
            <a href="#"><i class="bi bi-people-fill"></i> Gérer les utilisateurs</a>
            <a href="#"><i class="bi bi-book"></i> Formations</a>
            <a href="#"><i class="bi bi-bar-chart-line"></i> Rapports</a>
            <a href="#"><i class="bi bi-gear-fill"></i> Paramètres</a>
            <a href="espace.php"><i class="bi bi-window-sidebar"></i> Espaces utilisateurs</a>
            <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Déconnexion</a>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">
            <div class="mb-4">
                <h1>Bienvenue, <?= htmlspecialchars($_SESSION['username']); ?> !</h1>
                <p>Tableau de bord du système Progress Professionnel Center.</p>
            </div>

            <!-- Stats -->
            <div class="row mb-4 g-3">
                <div class="col-md-4">
                    <div class="stats-card stats-candidats text-center">
                        <h3>Candidats</h3>
                        <p><?= count($candidats) ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-card stats-formateurs text-center">
                        <h3>Formateurs</h3>
                        <p><?= count($formateurs) ?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stats-card stats-entreprises text-center">
                        <h3>Entreprises</h3>
                        <p><?= count($entreprises) ?></p>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
    <div class="card-header">Inscriptions - Manucure & Pédicure</div>
    <div class="card-body">
        <?php if (empty($inscriptions_manicure)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_manicure as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['contact']) ?></td>
                        <td><?= htmlspecialchars($i['formule']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">Inscriptions - Soin Pieds & Mains</div>
    <div class="card-body">
        <?php if (empty($inscriptions_soinpieds)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_soinpieds as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">Inscriptions - Microneedling</div>
    <div class="card-body">
        <?php if (empty($inscriptions_microneedling)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_microneedling as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">Inscriptions - BB Lips</div>
    <div class="card-body">
        <?php if (empty($inscriptions_bb_lips)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_bb_lips as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">Inscriptions - Visagiste</div>
    <div class="card-body">
        <?php if (empty($inscriptions_visagiste)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_visagiste as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">Inscriptions - Hanna</div>
    <div class="card-body">
        <?php if (empty($inscriptions_hanna)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_hanna as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="card mb-4">
  <div class="card-header">Inscriptions - Microblading</div>
  <div class="card-body">
    <?php if (empty($inscriptions_microblading)): ?>
      <p>Aucune inscription trouvée.</p>
    <?php else: ?>
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Âge</th>
              <th>Email</th>
              <th>Option</th>
              <th>Formation</th>
              <th>Date d'inscription</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($inscriptions_microblading as $inscription): ?>
              <tr>
                <td><?= htmlspecialchars($inscription['id']) ?></td>
                <td><?= htmlspecialchars($inscription['nom']) ?></td>
                <td><?= htmlspecialchars($inscription['age']) ?></td>
                <td><?= htmlspecialchars($inscription['email']) ?></td>
                <td><?= htmlspecialchars($inscription['option_formation']) ?></td>
                <td><?= htmlspecialchars($inscription['formation']) ?></td>
                <td><?= htmlspecialchars($inscription['date_inscription']) ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>
</div>
<div class="card mb-4">
  <div class="card-header">Inscriptions - Brow Lift</div>
  <div class="card-body">
    <?php if (empty($inscriptions_browlift)): ?>
      <p>Aucune inscription trouvée.</p>
    <?php else: ?>
      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Âge</th>
              <th>Email</th>
              <th>Option</th>
              <th>Formation</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($inscriptions_browlift as $inscription): ?>
              <tr>
                <td><?= htmlspecialchars($inscription['id']) ?></td>
                <td><?= htmlspecialchars($inscription['nom']) ?></td>
                <td><?= htmlspecialchars($inscription['age']) ?></td>
                <td><?= htmlspecialchars($inscription['email']) ?></td>
                <td><?= htmlspecialchars($inscription['option_formation']) ?></td>
                <td><?= htmlspecialchars($inscription['formation']) ?></td>
                <td><?= htmlspecialchars($inscription['date_inscription']) ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php endif; ?>
  </div>
</div>
<!-- Trading 4 - Analyse Technique -->
<div class="card mb-4">
    <div class="card-header">Liste des Candidats - Trading 4</div>
    <div class="card-body">
        <?php if (empty($inscriptions_trading4)): ?>
            <p>Aucun candidat trouvé.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Email / Contact</th>
                        <th>Formule</th>
                        <th>Date inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_trading4 as $c): ?>
                    <tr>
                        <td><?= htmlspecialchars($c['nom']) ?></td>
                        <td><?= htmlspecialchars($c['age']) ?></td>
                        <td><?= htmlspecialchars($c['contact']) ?></td>
                        <td><?= htmlspecialchars($c['formule']) ?></td>
                        <td><?= htmlspecialchars($c['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- Trading 5 - Analyse Avancée -->
<div class="card mb-4">
    <div class="card-header">Liste des Candidats - Trading 5</div>
    <div class="card-body">
        <?php if (empty($inscriptions_trading5)): ?>
            <p>Aucun candidat trouvé.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Email / Contact</th>
                        <th>Formule</th>
                        <th>Date inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_trading5 as $c): ?>
                    <tr>
                        <td><?= htmlspecialchars($c['nom']) ?></td>
                        <td><?= htmlspecialchars($c['age']) ?></td>
                        <td><?= htmlspecialchars($c['contact']) ?></td>
                        <td><?= htmlspecialchars($c['formule']) ?></td>
                        <td><?= htmlspecialchars($c['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- Esthétique -->
  <div class="tab-pane fade show active" id="esthetique" role="tabpanel">
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th><th>Formation</th><th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($esthetique as $e): ?>
        <tr>
          <td><?= $e['id'] ?></td>
          <td><?= htmlspecialchars($e['nom']) ?></td>
          <td><?= htmlspecialchars($e['prenom']) ?></td>
          <td><?= htmlspecialchars($e['email']) ?></td>
          <td><?= htmlspecialchars($e['tel']) ?></td>
          <td><?= htmlspecialchars($e['formation']) ?></td>
          <td><?= $e['date_inscription'] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<div class="card mb-4">
    <div class="card-header bg-primary text-white">Inscriptions - Français</div>
    <div class="card-body">
        <?php if (empty($inscriptions_francais)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Type de cours</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_francais as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['telephone']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="container-fluid py-4">
    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Inscriptions Cours Italien</h5>
            <input type="text" id="searchTable" class="form-control w-25" placeholder="Rechercher...">
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover" id="inscriptionsTable">
                <thead class="table-primary">
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Option Formation</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($inscriptions as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['nom']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['telephone']) ?></td>
                        <td><?= htmlspecialchars($row['option_formation']) ?></td>
                        <td><?= htmlspecialchars($row['created_at']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
// Simple search/filter functionality
document.getElementById('searchTable').addEventListener('keyup', function() {
    let filter = this.value.toLowerCase();
    let rows = document.querySelectorAll('#inscriptionsTable tbody tr');
    rows.forEach(row => {
        row.style.display = Array.from(row.cells).some(cell => 
            cell.textContent.toLowerCase().includes(filter)
        ) ? '' : 'none';
    });
});
</script>

  <!-- Coiffure -->
  <div class="tab-pane fade" id="coiffure" role="tabpanel">
    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>ID</th><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th><th>Formation</th><th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($coiffure as $c): ?>
        <tr>
          <td><?= $c['id'] ?></td>
          <td><?= htmlspecialchars($c['nom']) ?></td>
          <td><?= htmlspecialchars($c['prenom']) ?></td>
          <td><?= htmlspecialchars($c['email']) ?></td>
          <td><?= htmlspecialchars($c['tel']) ?></td>
          <td><?= htmlspecialchars($c['formation']) ?></td>
          <td><?= $c['date_inscription'] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<!-- Trading 8 - Advanced Masterclass -->
<div class="card mb-4">
    <div class="card-header">Liste des Candidats - Trading 8</div>
    <div class="card-body">
        <?php if (empty($inscriptions_trading8)): ?>
            <p>Aucun candidat trouvé.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Email / Contact</th>
                        <th>Formule</th>
                        <th>Date inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_trading8 as $c): ?>
                    <tr>
                        <td><?= htmlspecialchars($c['nom']) ?></td>
                        <td><?= htmlspecialchars($c['age']) ?></td>
                        <td><?= htmlspecialchars($c['contact']) ?></td>
                        <td><?= htmlspecialchars($c['formule']) ?></td>
                        <td><?= htmlspecialchars($c['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- Inscriptions Coupe -->
<div class="card mb-4">
    <div class="card-header">Inscriptions - Coupe</div>
    <div class="card-body">
        <?php if (empty($inscriptions_coupe)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_coupe as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['formule']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">Inscriptions - Trading 1</div>
    <div class="card-body">
        <?php if (empty($inscriptions_trading1)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_trading1 as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['contact']) ?></td>
                        <td><?= htmlspecialchars($i['formule']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<h3>Couture Continue</h3>
<table class="table">
<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th><th>Formation</th><th>Date</th></tr>
<?php foreach($candidats_couture_continue as $c): ?>
<tr>
  <td><?= $c['nom'] ?></td>
  <td><?= $c['prenom'] ?></td>
  <td><?= $c['email'] ?></td>
  <td><?= $c['tel'] ?></td>
  <td><?= $c['formation'] ?></td>
  <td><?= $c['date_inscription'] ?></td>
</tr>
<?php endforeach; ?>
</table>

<h3>Couture Accélérée</h3>
<table class="table">
<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Téléphone</th><th>Formation</th><th>Date</th></tr>
<?php foreach($candidats_couture_accelere as $c): ?>
<tr>
  <td><?= $c['nom'] ?></td>
  <td><?= $c['prenom'] ?></td>
  <td><?= $c['email'] ?></td>
  <td><?= $c['tel'] ?></td>
  <td><?= $c['formation'] ?></td>
  <td><?= $c['date_inscription'] ?></td>
</tr>
<?php endforeach; ?>
</table>

<!-- Inscriptions Coupe & Brushing -->
<div class="card mb-4">
    <div class="card-header">Inscriptions - Coupe & Brushing</div>
    <div class="card-body">
        <?php if (empty($inscriptions_coupe_brushing)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
            <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_coupe_brushing as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<h2 class="mt-4 mb-4">Inscriptions Cours Allemand</h2>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover align-middle">
        <thead class="table-primary text-center">
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Option Formation</th>
                <th>Date d'inscription</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($inscriptions as $index => $row): ?>
            <tr>
                <td class="text-center"><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($row['nom']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['telephone']) ?></td>
                <td><?= htmlspecialchars($row['option_formation']) ?></td>
                <td><?= date('d/m/Y H:i', strtotime($row['created_at'])) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<!-- Inscriptions Taille & Entretien de la Barbe -->
<div class="card mb-4">
    <div class="card-header">Inscriptions - Taille & Entretien de la Barbe</div>
    <div class="card-body">
        <?php if (empty($inscriptions_taille_entretien_barbe)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Email</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_taille_entretien_barbe as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="container mt-5">
    <h2 class="mb-4">Inscriptions - Cours Espagnot</h2>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Option de formation</th>
                <th>Date d'inscription</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($espagnot_submissions)): ?>
                <?php foreach($espagnot_submissions as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['nom']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['telephone']); ?></td>
                        <td><?php echo htmlspecialchars($row['option_formation']); ?></td>
                        <td><?php echo htmlspecialchars($row['created_at']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6" class="text-center">Aucune inscription trouvée.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<!-- Section Contact Messages -->
 <div class="card-header">contact</div>
<div class="card mt-4">
   
        <h5 class="mb-0">Messages Contact</h5>
    </div>
    <div class="card-body">
        <?php if (count($contact_messages) > 0): ?>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Sujet</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contact_messages as $msg): ?>
                <tr>
                    <td><?= htmlspecialchars($msg['id']) ?></td>
                    <td><?= htmlspecialchars($msg['nom']) ?></td>
                    <td><?= htmlspecialchars($msg['email']) ?></td>
                    <td><?= htmlspecialchars($msg['sujet']) ?></td>
                    <td><?= htmlspecialchars($msg['message']) ?></td>
                    <td><?= htmlspecialchars($msg['created_at']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php else: ?>
            <p>Aucun message reçu pour l’instant.</p>
        <?php endif; ?>
    </div>
</div>

<!-- Inscriptions Coloration Homme -->
<div class="card mb-4">
    <div class="card-header">Inscriptions - Coloration Homme</div>
    <div class="card-body">
        <?php if (empty($inscriptions_coloration_homme)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Email</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_coloration_homme as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- Inscriptions Coloration & Mèches -->
<div class="card mb-4">
    <div class="card-header">Inscriptions - Coloration & Mèches</div>
    <div class="card-body">
        <?php if (empty($inscriptions_coloration_meches)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
            <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_coloration_meches as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- Inscriptions Coiffures Événementielles -->
<div class="card mb-4">
    <div class="card-header">Inscriptions - Coiffures Événementielles</div>
    <div class="card-body">
        <?php if (empty($inscriptions_coiffures_evenementielles)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nom complet</th>
                            <th>Âge</th>
                            <th>Contact</th>
                            <th>Formule</th>
                            <th>Date d'inscription</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($inscriptions_coiffures_evenementielles as $i): ?>
                        <tr>
                            <td><?= htmlspecialchars($i['nom']) ?></td>
                            <td><?= htmlspecialchars($i['age']) ?></td>
                            <td><?= htmlspecialchars($i['email']) ?></td>
                            <td><?= htmlspecialchars($i['option_formation']) ?></td>
                            <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- Inscriptions Anglais -->
<div class="card mb-4">
    <div class="card-header">Inscriptions - Anglais</div>
    <div class="card-body">
        <?php if (empty($inscriptions_anglais)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Type de cours</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_anglais as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['telephone']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>

            <!-- Inscriptions Soin du Visage -->
            <div class="card mb-4">
                <div class="card-header">Inscriptions - Soin du Visage</div>
                <div class="card-body">
                    <?php if (empty($inscriptions_soin_visage)): ?>
                        <p>Aucune inscription trouvée.</p>
                    <?php else: ?>
                        <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nom complet</th>
                                    <th>Âge</th>
                                    <th>Contact</th>
                                    <th>Formule</th>
                                    <th>Date d'inscription</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($inscriptions_soin_visage as $i): ?>
                                <tr>
                                    <td><?= htmlspecialchars($i['nom']) ?></td>
                                    <td><?= htmlspecialchars($i['age']) ?></td>
                                    <td><?= htmlspecialchars($i['email']) ?></td>
                                    <td><?= htmlspecialchars($i['option_formation']) ?></td>
                                    <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
             <div class="card mb-4">
    <div class="card-header">Inscriptions - Maquillage</div>
    <div class="card-body">
        <?php if (empty($inscriptions_maquillage)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_maquillage as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['contact']) ?></td>
                        <td><?= htmlspecialchars($i['formule']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="card mb-4">
    <div class="card-header">Inscriptions - HydraFacial</div>
    <div class="card-body">
        <?php if (empty($inscriptions_hydrafacial)): ?>
            <p>Aucune inscription trouvée.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Contact</th>
                        <th>Formule</th>
                        <th>Date d'inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_hydrafacial as $i): ?>
                    <tr>
                        <td><?= htmlspecialchars($i['nom']) ?></td>
                        <td><?= htmlspecialchars($i['age']) ?></td>
                        <td><?= htmlspecialchars($i['email']) ?></td>
                        <td><?= htmlspecialchars($i['option_formation']) ?></td>
                        <td><?= htmlspecialchars($i['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- Trading 2 - Utilisation des plateformes -->
<div class="card mb-4">
    <div class="card-header">Liste des Candidats - Trading 2</div>
    <div class="card-body">
        <?php if (empty($trading2)): ?>
            <p>Aucun candidat trouvé.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Email / Contact</th>
                        <th>Formule</th>
                        <th>Date inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($trading2 as $c): ?>
                    <tr>
                        <td><?= htmlspecialchars($c['nom']) ?></td>
                        <td><?= htmlspecialchars($c['age']) ?></td>
                        <td><?= htmlspecialchars($c['contact']) ?></td>
                        <td><?= htmlspecialchars($c['formule']) ?></td>
                        <td><?= htmlspecialchars($c['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>

<!-- Trading 3 - Gestion des risques -->
<div class="card mb-4">
    <div class="card-header">Liste des Candidats - Trading 3</div>
    <div class="card-body">
        <?php if (empty($trading3)): ?>
            <p>Aucun candidat trouvé.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Email / Contact</th>
                        <th>Formule</th>
                        <th>Date inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($trading3 as $c): ?>
                    <tr>
                        <td><?= htmlspecialchars($c['nom']) ?></td>
                        <td><?= htmlspecialchars($c['age']) ?></td>
                        <td><?= htmlspecialchars($c['contact']) ?></td>
                        <td><?= htmlspecialchars($c['formule']) ?></td>
                        <td><?= htmlspecialchars($c['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- Trading 6 - Analyse Avancée -->
<div class="card mb-4">
    <div class="card-header">Liste des Candidats - Trading 6</div>
    <div class="card-body">
        <?php if (empty($inscriptions_trading6)): ?>
            <p>Aucun candidat trouvé.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Email / Contact</th>
                        <th>Formule</th>
                        <th>Date inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_trading6 as $c): ?>
                    <tr>
                        <td><?= htmlspecialchars($c['nom']) ?></td>
                        <td><?= htmlspecialchars($c['age']) ?></td>
                        <td><?= htmlspecialchars($c['contact']) ?></td>
                        <td><?= htmlspecialchars($c['formule']) ?></td>
                        <td><?= htmlspecialchars($c['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<!-- Trading 7 - Masterclass -->
<div class="card mb-4">
    <div class="card-header">Liste des Candidats - Trading 7</div>
    <div class="card-body">
        <?php if (empty($inscriptions_trading7)): ?>
            <p>Aucun candidat trouvé.</p>
        <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nom complet</th>
                        <th>Âge</th>
                        <th>Email / Contact</th>
                        <th>Formule</th>
                        <th>Date inscription</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inscriptions_trading7 as $c): ?>
                    <tr>
                        <td><?= htmlspecialchars($c['nom']) ?></td>
                        <td><?= htmlspecialchars($c['age']) ?></td>
                        <td><?= htmlspecialchars($c['contact']) ?></td>
                        <td><?= htmlspecialchars($c['formule']) ?></td>
                        <td><?= htmlspecialchars($c['date_inscription']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>

            <!-- Candidats -->
            <div class="card mb-4">
                <div class="card-header">Liste des Candidats</div>
                <div class="card-body">
                    <?php if (empty($candidats)): ?>
                        <p>Aucun candidat trouvé.</p>
                    <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nom complet</th>
                                    <th>Âge</th>
                                    <th>Email</th>
                                    <th>Formation</th>
                                    <th>Commentaires</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($candidats as $c): ?>
                                <tr>
                                    <td><?= htmlspecialchars($c['fullname']) ?></td>
                                    <td><?= htmlspecialchars($c['age']) ?></td>
                                    <td><?= htmlspecialchars($c['email']) ?></td>
                                    <td><?= htmlspecialchars($c['formation']) ?></td>
                                    <td><?= nl2br(htmlspecialchars($c['comments'])) ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
<?php
require_once 'config.php'; // your PDO connection

try {
    // Fetch all comments ordered by creation date
    $stmt = $pdo->prepare("SELECT * FROM commentaires ORDER BY created_at DESC");
    $stmt->execute();
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Erreur lors de la récupération des commentaires : " . $e->getMessage());
}
?>

<div class="card mt-4">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Commentaires des utilisateurs</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Message</th>
                    <th>Statut</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($comments)): ?>
                    <?php foreach ($comments as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['id']) ?></td>
                            <td><?= htmlspecialchars($row['nom']) ?></td>
                            <td><?= htmlspecialchars($row['message']) ?></td>
                            <td>
                                <?php if ($row['statut'] === 'approved'): ?>
                                    <span class="badge bg-success">Approuvé</span>
                                <?php else: ?>
                                    <span class="badge bg-warning text-dark">En attente</span>
                                <?php endif; ?>
                            </td>
                            <td><?= htmlspecialchars($row['created_at']) ?></td>
                            <td>
                                <?php if ($row['statut'] === 'pending'): ?>
                                    <a href="update_comment.php?id=<?= $row['id'] ?>&action=approve" class="btn btn-sm btn-success">Approuver</a>
                                <?php endif; ?>
                                <a href="update_comment.php?id=<?= $row['id'] ?>&action=delete" class="btn btn-sm btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Aucun commentaire trouvé.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

        
            <!-- Formateurs -->
            <div class="card mb-4">
                <div class="card-header">Liste des Formateurs</div>
                <div class="card-body">
                    <?php if (empty($formateurs)): ?>
                        <p>Aucun formateur trouvé.</p>
                    <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Âge</th>
                                    <th>Parcours</th>
                                    <th>Formation</th>
                                    <th>CV</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($formateurs as $f): ?>
                                <tr>
                                    <td><?= htmlspecialchars($f['nom_complet']) ?></td>
                                    <td><?= htmlspecialchars($f['age']) ?></td>
                                    <td><?= nl2br(htmlspecialchars($f['parcours_scolaire'])) ?></td>
                                    <td><?= htmlspecialchars($f['formation_enseigner']) ?></td>
                                    <td><a href="uploads/cv_formateurs/<?= urlencode($f['cv']) ?>" target="_blank">Voir CV</a></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Entreprises -->
            <div class="card mb-4">
                <div class="card-header">Liste des Entreprises</div>
                <div class="card-body">
                    <?php if (empty($entreprises)): ?>
                        <p>Aucune entreprise enregistrée.</p>
                    <?php else: ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nom de l'entreprise</th>
                                    <th>Localisation</th>
                                    <th>Formation souhaitée</th>
                                    <th>Type de formation</th>
                                    <th>Contact</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($entreprises as $e): ?>
                                <tr>
                                    <td><?= htmlspecialchars($e['nom_entreprise'] ?? '—') ?></td>
                                    <td><?= htmlspecialchars($e['localisation'] ?? '—') ?></td>
                                    <td><?= htmlspecialchars($e['formation_souhaitee'] ?? '—') ?></td>
                                    <td><?= htmlspecialchars($e['type_formation'] ?? '—') ?></td>
                                    <td><?= htmlspecialchars($e['contact'] ?? '—') ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO commentaires (nom, message, statut) 
            VALUES ('$nom', '$message', 'pending')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?success=1");
        exit();
    } else {
        echo "Erreur: " . mysqli_error($conn);
    }
}


?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
