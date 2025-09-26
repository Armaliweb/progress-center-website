<?php
require_once 'config.php'; // connexion PDO

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    $stmt = $pdo->prepare("INSERT INTO contact_messages (nom, email, sujet, message) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$nom, $email, $sujet, $message])) {
        header("Location: contact.php?success=1");
        exit;
    } else {
        echo "Erreur lors de l'enregistrement du message.";
    }
}
?>
