<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Espace Formateur</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }

        .form-container {
            background: white;
            max-width: 500px;
            width: 100%;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        }

        h2 {
            margin-bottom: 25px;
            color: #343a40;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #212529;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 20px;
            border: 1.8px solid #ced4da;
            border-radius: 8px;
            font-size: 16px;
            font-family: inherit;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus,
        input[type="file"]:focus {
            border-color: #007bff;
            outline: none;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
            font-family: inherit;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px 18px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Responsive */
        @media (max-width: 550px) {
            .form-container {
                padding: 20px 25px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Formulaire Formateur</h2>
        <form method="post" action="submit_formateur.php" enctype="multipart/form-data">
            <label for="nom">Nom Complet*:</label>
            <input type="text" id="nom" name="nom" required>

            <label for="age">Âge*:</label>
            <input type="number" id="age" name="age" required>

            <label for="parcours">Parcours scolaire*:</label>
            <textarea id="parcours" name="parcours" required></textarea>

            <label for="formation">Formation à enseigner*:</label>
            <input type="text" id="formation" name="formation" required>

            <label for="cv">CV (PDF)*:</label>
            <input type="file" id="cv" name="cv" accept=".pdf" required>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>
