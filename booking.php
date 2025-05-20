<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Ticket</title>
    <link rel="stylesheet" href="booking.css">
</head>
<body>
    <header>
        <h1>Book Your Ticket for the Sports Challenge Event</h1>
        <p>Fill out the form below to secure your spot for the event!</p>
    </header>
    <section class="booking-form">
        <form action="confirmation.php" method="POST">
            <label for="full-name">Full Name:</label>
            <input type="text" id="full-name" name="full-name" required placeholder="Enter your full name">
    
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email address">
    
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required placeholder="Enter your phone number">
    
            <label for="ticket_type">Ticket Type:</label>
            <select id="ticket_type" name="ticket_type" required>
    <option value="Standard Ticket">Standard Ticket</option>
    <option value="VIP Ticket">VIP Ticket</option>
</select>

            <label for="ticket_number">Ticket Number:</label>
            <select id="ticket_number" name="ticket_number" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
    
            <label for="payment">Payment Method:</label>
            <select id="payment" name="payment" required>
            <option value="Credit Card">Credit Card</option>
<option value="PayPal">PayPal</option>

            </select>
    
            <button type="submit">Book My Ticket</button>
        </form>
       
    </section>
    
</body>
</html>

