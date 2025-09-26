<?php
// esthetique1.php

// Connexion DB
$host = "localhost";
$user = "root";
$pass = "";
$db   = "progress_center";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Erreur connexion : " . $conn->connect_error);
}

// Message
$message = "";

// Traitement formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $email = $conn->real_escape_string($_POST['email']);
    $tel = $conn->real_escape_string($_POST['tel']);
    $formation = $conn->real_escape_string($_POST['formation']);

    $sql = "INSERT INTO inscriptions_esthetique (nom, prenom, email, tel, formation) 
            VALUES ('$nom', '$prenom', '$email', '$tel', '$formation')";

    if ($conn->query($sql) === TRUE) {
        $message = "✅ Votre inscription a été enregistrée avec succès !";
    } else {
        $message = "❌ Erreur : " . $conn->error;
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formations Esthétique - Progress Center</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
:root { 
  --accent: #ff6f91; 
  --accent-2: #845ec2; 
  --bg-light: #fdfdfd; 
  --text-dark: #2d2d2d; 
}
body { font-family: 'Poppins', sans-serif; background: var(--bg-light); color: var(--text-dark); }
.hero { background:url('img/eshero1.jpg') center/cover no-repeat; height: 420px; display: flex; align-items: center; justify-content: center; color: white; text-align: center;}
.hero h1 { font-size: 3rem; font-weight: 700; }
.hero p { font-size: 1.2rem; margin-top: 10px; }
section { padding: 70px 15px; }
h2.section-title { font-size: 2rem; font-weight: 700; text-align: center; margin-bottom: 50px; position: relative;}
h2.section-title::after { content: ""; width: 80px; height: 4px; background: linear-gradient(90deg,var(--accent),var(--accent-2)); display: block; margin: 15px auto 0; border-radius: 4px;}
.card-option { border: none; border-radius: 18px; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease; background: white;}
.card-option:hover { transform: translateY(-8px); box-shadow: 0 15px 30px rgba(0,0,0,0.15); }
.card-option .card-header { background: linear-gradient(135deg,var(--accent),var(--accent-2)); color: white; text-align: center; font-size: 1.3rem; font-weight: 600; padding: 20px;}
.card-option .card-body { text-align: center; padding: 30px; }
.card-option p.price { font-size: 1.6rem; font-weight: 700; color: var(--accent-2); }
.btn-accent { background: linear-gradient(90deg,var(--accent),var(--accent-2)); color: #fff; border-radius: 50px; padding: 12px 30px; font-weight: 600; border: none;}
.btn-accent:hover { opacity: 0.9; color: #fff; }
form { background: #fff; padding: 40px; border-radius: 18px; box-shadow: 0 8px 25px rgba(0,0,0,0.08); }
.alert-success { text-align: center; }
</style>
</head>
<body>

<!-- HERO -->
<header class="hero">
  <div>
    <h1>Formations Esthétique</h1>
    <p>Devenez expert en beauté et soins professionnels</p>
  </div>
</header>

<main class="container">

  <!-- Présentation -->
  <section class="text-center">
    <h2 class="section-title">À propos des formations</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <p class="lead">
          Découvrez nos parcours esthétiques adaptés à tous les niveaux.  
          Du programme court pour débuter, jusqu’au cursus long pour une carrière professionnelle.  
        </p>
      </div>
    </div>
    <img src="img/esthetique.jpg" alt="Formation Esthétique" class="img-fluid rounded shadow mt-4" style="max-width: 400px;">
  </section>

  <!-- Formations -->
  <section>
  <h2 class="section-title">Nos formules</h2>
  <div class="row g-4 justify-content-center">

    <div class="col-md-4">
      <div class="card card-option">
        <div class="card-header">Formation 3 mois</div>
        <div class="card-body">
          <p><strong>Durée :</strong> 3 mois</p>
          <p class="price"> 300TND</p>
          <p>Idéal pour découvrir les bases de l’esthétique.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-option">
        <div class="card-header">Formation 6 mois</div>
        <div class="card-body">
          <p><strong>Durée :</strong> 6 mois</p>
          <p class="price" >250TND</p>
          <p>Programme complet avec pratique approfondie.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-option">
        <div class="card-header">Formation 10 mois</div>
        <div class="card-body">
          <p><strong>Durée :</strong> 10 mois</p>
          <p class="price">230TND</p>
          <p>Parcours professionnel avec stage en entreprise.</p>
        </div>
      </div>
    </div>

  </div>
</section>

  <!-- Formulaire -->
  <section>
    <h2 class="section-title">Inscrivez-vous maintenant</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <?php if($message): ?>
            <div class="alert alert-success"><?= $message ?></div>
        <?php endif; ?>
        <form action="" method="post">
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="col-md-6">
              <label for="prenom" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="tel" class="form-label">Téléphone</label>
            <input type="text" class="form-control" id="tel" name="tel" required>
          </div>
          <div class="mb-3">
            <label for="formation" class="form-label">Choisir la formation</label>
            <select class="form-select" id="formation" name="formation" required>
              <option value="">-- Sélectionnez --</option>
              <option value="3 mois">Formation 3 mois</option>
              <option value="6 mois">Formation 6 mois</option>
              <option value="10 mois">Formation 10 mois</option>
            </select>
          </div>
          <button type="submit" class="btn-accent w-100 mt-3">S'inscrire</button>
        </form>
      </div>
    </div>
  </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
