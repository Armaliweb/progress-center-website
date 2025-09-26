<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Couture - Choix de Formation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f5f7fa;
        }

        .hero {
            background: url('img/couturehero.jpg') center/cover no-repeat;
            height: 350px;
            position: relative;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero h1 {
            font-size: 48px;
            font-weight: bold;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
        }

        .choice-card {
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .choice-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        .choice-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .choice-card .card-body {
            text-align: center;
        }

        .choice-card .btn {
            border-radius: 25px;
            padding: 10px 25px;
            font-weight: bold;
        }

        .navbar-nav a {
            margin-right: 15px;
        }
    </style>
</head>
<body>

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="img/logo.png" width="75" height="65" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a class="nav-item nav-link" href="index.php">Accueil</a>
                <a class="nav-item nav-link active" href="formation.php">Formations</a>
                <a class="nav-item nav-link" href="evenements.php">Evénements</a>
                <a class="nav-item nav-link" href="contact.php">Contact</a>
                <a class="btn btn-primary ms-3" href="courenligne.php">Cours en ligne</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<!-- Hero Section -->
<div class="hero">
    <h1>Formations Couture</h1>
</div>

<!-- Choices Section -->
<div class="container my-5">
    <div class="row g-4 justify-content-center">

        <!-- Formation Accélérée -->
        <div class="col-md-5">
            <div class="card choice-card">
                <img src="img/couture2.jpg" alt="Formation Accélérée Couture">
                <div class="card-body">
                    <h4 class="card-title">Formation Accélérée</h4>
                    <p>Programme intensif pour apprendre rapidement les bases de la couture.</p>
                    <a href="couture2.php" class="btn btn-primary">Choisir</a>
                </div>
            </div>
        </div>

        <!-- Formation Continue -->
        <div class="col-md-5">
            <div class="card choice-card">
                <img src="img/couture1.jpg" alt="Formation Continue Couture">
                <div class="card-body">
                    <h4 class="card-title">Formation Continue</h4>
                    <p>Formation progressive et complète pour devenir un(e) expert(e) en couture.</p>
                    <a href="couture1.php" class="btn btn-primary">Choisir</a>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light py-4 mt-5">
    <div class="container text-center">
        &copy; 2025 ProgressUp - Tous droits réservés
    </div>
</footer>

<!-- JS Libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
