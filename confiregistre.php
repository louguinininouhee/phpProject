<?php
// Connexion à la base de données
$host = 'localhost';
$db = 'gym_event';
$user = 'root';
$pass = ''; // Par défaut sous Laragon

$conn = new mysqli($host, $user, $pass, $db);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sécurisation des entrées
    $firstName = $_POST["firstName"] ?? '';
    $lastName = $_POST["lastName"] ?? '';
    $email = $_POST["email"] ?? '';
    $phone = $_POST["phone"] ?? '';
    $event = $_POST["event"] ?? '';
    $ticketType = $_POST["ticket_type"] ?? '';
    $ticketQuantity = (int) ($_POST["ticket_quantity"] ?? 0);
    $payment = $_POST["payment"] ?? '';
    $requirements = $_POST["special_requirements"] ?? '';

    // Requête préparée
    $stmt = $conn->prepare("INSERT INTO registrations (first_name, last_name, email, phone, event, ticket_type, ticket_quantity, payment_method, special_requirements) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("ssssssiss", $firstName, $lastName, $email, $phone, $event, $ticketType, $ticketQuantity, $payment, $requirements);

        if ($stmt->execute()) {
            $success = true;
        } else {
            $error = $stmt->error;
        }

        $stmt->close();
    } else {
        $error = $conn->error;
    }

    $conn->close();
}
?>

<!-- HTML de confirmation -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirmation</title>
    <link rel="stylesheet" href="confirmation.css">
</head>
<body>
    <div class="confirmation-box">
        <?php if (isset($success) && $success): ?>
            <h1>Registration Successful!</h1>
            <p>Thank you, <strong><?php echo htmlspecialchars($firstName . ' ' . $lastName); ?></strong>! Your spot is reserved for the <strong><?php echo htmlspecialchars($event); ?></strong>.</p>
        <?php else: ?>
            <h1>Registration Failed</h1>
            <p>There was an issue: <?php echo htmlspecialchars($error ?? 'Unknown error'); ?></p>
        <?php endif; ?>
        <button onclick="window.location.href='index.html'">Back to Homepage</button>
    </div>
</body>
</html>
