<?php
require_once 'config.php'; // PDO connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = 'Visiteur'; // or get from a form if you want
    $message = $_POST['message'];

    try {
        $stmt = $pdo->prepare("INSERT INTO commentaires (nom, message, statut) VALUES (:nom, :message, 'pending')");
        $stmt->execute([
            ':nom' => $nom,
            ':message' => $message
        ]);

        header("Location: index.php?success=1");
        exit();
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
}
?>
