<?php
// Connexion à la base de données
$host = 'localhost';
$db = 'gym_event';
$user = 'root';
$pass = ''; // mot de passe vide par défaut sous Laragon

$conn = new mysqli($host, $user, $pass, $db);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["full-name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $ticketType = $_POST["ticket_type"];
    $ticketNumber = (int)$_POST["ticket_number"];
    $payment = $_POST["payment"];

    // Préparer la requête SQL pour éviter les injections SQL
    $stmt = $conn->prepare("INSERT INTO bookings (full_name, email, phone, ticket_type, ticket_number, payment_method) VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("ssssis", $name, $email, $phone, $ticketType, $ticketNumber, $payment);

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
            <h1>Booking Successful!</h1>
            <p>Thank you, <strong><?php echo htmlspecialchars($name); ?></strong>! Your ticket has been booked.</p>
        <?php else: ?>
            <h1>Error</h1>
            <p>There was a problem with your booking: <?php echo isset($error) ? $error : 'Unknown error'; ?></p>
        <?php endif; ?>
        <button onclick="window.location.href='index.html'">Return to Homepage</button>
    </div>
</body>
</html>
