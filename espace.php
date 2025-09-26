<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Utilisateur</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f4f8;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            margin-bottom: 30px;
        }

        a {
            display: block;
            margin: 15px 0;
            text-decoration: none;
            font-size: 18px;
            color: #2c3e50;
            padding: 10px 20px;
            border: 2px solid #2c3e50;
            border-radius: 10px;
            transition: 0.3s;
        }

        a:hover {
            background-color: #2c3e50;
            color: #fff;
        }
    </style>
</head>
<body>

    <h2>Choisissez un espace :</h2>

    <a href="espace_candidat.php">Espace Candidat</a>
    <a href="espace_formateur.php">Espace Formateur</a>
    <a href="espace_entreprise.php">Espace Entreprise</a>

</body>
</html>

