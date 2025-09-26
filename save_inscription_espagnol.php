<?php
session_start();
require_once 'config.php'; // PDO connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $telephone = $_POST['telephone'] ?? '';
    $option_formation = $_POST['option_formation'] ?? '';

    // Basic validation
    if (!empty($nom) && !empty($email) && !empty($telephone) && !empty($option_formation)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO inscriptions_espagnol (nom, email, telephone, option_formation) VALUES (:nom, :email, :telephone, :option_formation)");
            $stmt->execute([
                ':nom' => $nom,
                ':email' => $email,
                ':telephone' => $telephone,
                ':option_formation' => $option_formation
            ]);

            $_SESSION['success'] = "Votre inscription a été enregistrée avec succès !";
            header("Location: espagnol.php");
            exit();

        } catch (PDOException $e) {
            $_SESSION['error'] = "Erreur lors de l'inscription : " . $e->getMessage();
            header("Location: espagnol.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Veuillez remplir tous les champs !";
        header("Location: espagnol.php");
        exit();
    }
} else {
    header("Location: espagnol.php");
    exit();
}
?>
