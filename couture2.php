<?php
// couture_acceleree.php

$modules = [
    [
        "title" => "Techniques de Couture",
        "description" => "Maîtrisez la couture à la main et à la machine.",
        "image" => "img/couture.jpg",
        "price" => 250 // Valeur numérique en TND
    ],
    [
        "title" => "Création de Patrons",
        "description" => "Apprenez à créer et adapter des patrons sur mesure.",
        "image" => "img/couture3.jpg",
        "price" => 300
    ],
    [
        "title" => "Assemblage & Finitions",
        "description" => "Techniques d’assemblage professionnel et finitions.",
        "image" => "img/couture2.jpg",
        "price" => 280
    ],
    [
        "title" => "Techniques Avancées",
        "description" => "Perfectionnez vos compétences avec techniques modernes.",
        "image" => "img/couture4.jpg",
        "price" => 350
    ]
];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Formation Accélérée Couture – Progress Professionnel Center</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{font-family:'Poppins',sans-serif;background:#f9f9f9;}
.hero{height:450px;background:url('img/couture5.jpg') center/cover no-repeat;position:relative;display:flex;align-items:center;justify-content:center;color:white;text-align:center;}
.hero::before{content:"";position:absolute;inset:0;background-color:rgba(0,0,0,0.35);}
.hero .overlay{position:relative;padding:20px;}
.feature-pill{background:rgba(255,255,255,0.9);color:black;padding:8px 15px;border-radius:50px;display:inline-block;margin:5px;font-weight:500;}
.card img{height:230px;object-fit:cover;}
.btn-accent{background:linear-gradient(90deg,#e83e8c,#6f42c1);color:#fff;border-radius:50px;padding:12px 30px;font-weight:600;border:none;}
.btn-accent:hover{opacity:0.9;color:#fff;}
.section-title{text-align:center;font-size:2rem;margin-bottom:50px;position:relative;}
.section-title::after{content:"";width:80px;height:4px;background:linear-gradient(90deg,#e83e8c,#6f42c1);display:block;margin:15px auto 0;border-radius:4px;}
</style>
</head>
<body>

<header class="hero">
<div class="overlay">
<h1 class="fw-bold">Formation Accélérée en Couture</h1>
<p class="lead">Modules intensifs – Obtenez votre certification rapidement</p>
<div class="mt-3">
    <div class="feature-pill">Cours pratiques</div>
    <div class="feature-pill">Petits groupes</div>
    <div class="feature-pill">Certification</div>
</div>
</div>
</header>

<main class="container py-5">

<section>
<h2 class="section-title">Modules de la formation accélérée</h2>
<div class="row g-4 justify-content-center">
<?php foreach($modules as $index => $module): ?>
<div class="col-md-6 col-lg-3">
    <div class="card h-100 shadow-sm">
        <img src="<?= $module['image'] ?>" class="card-img-top" alt="<?= $module['title'] ?>">
        <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= $module['title'] ?></h5>
            <p class="card-text"><?= $module['description'] ?></p>
            <p class="fw-bold">Prix : <?= $module['price'] ?> TND</p>
        </div>
    </div>
</div>
<?php endforeach; ?>
</div>
</section>

<section class="mt-5">
<h2 class="section-title">Inscription à la formation accélérée</h2>
<div class="row justify-content-center">
<div class="col-md-8">
<form action="save_inscription_acceleree.php" method="POST">
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
    <label for="module" class="form-label">Sélectionnez la formation souhaitée</label>
    <select class="form-select" id="module" name="module" required>
        <option value="" selected disabled>-- Choisissez un module --</option>
        <?php foreach($modules as $module): ?>
            <option value="<?= $module['title'] ?>"><?= $module['title'] ?> - <?= $module['price'] ?> TND</option>
        <?php endforeach; ?>
    </select>
</div>
<button type="submit" class="btn-accent w-100 mt-3">S'inscrire</button>
</form>
</div>
</div>
</section>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
