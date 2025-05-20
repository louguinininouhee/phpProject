<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sports Challenge</title>
    <link rel="stylesheet" href="Register.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-brand">Sports Challenge</div>
        <div class="nav-links">
            <a href="index.html">Home</a>
            <a href="aboutUS.html">About Us</a>
            <a href="events.html">Events</a>
            <a href="conta.html" class="active">Contact</a>
            <a href="#" class="nav-btn">Offer</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="hero-content">
            <h1>Register for Event</h1>
            <p>Join our upcoming sports events and challenge yourself with our diverse range of competitions - register now to secure your spot and be part of the action!</p>
        </div>
    </header>

    <section class="contact-form-section">
        <div class="form-container">
            <h2>Register Now</h2>
            <form action="confiregistre.php" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name *</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name *</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="event">Select Event *</label>
                        <select id="event" name="event" required>
                            <option value="">Choose an event</option>
                            <option value="marathon">Marathon</option>
                            <option value="triathlon">Triathlon</option>
                            <option value="cycling">Cycling Race</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ticket-type">Ticket Type *</label>
                        <select id="ticket-type" name="ticket_type" required>
                            <option value="">Select ticket type</option>
                            <option value="standard">Standard Ticket ($50)</option>
                            <option value="vip">VIP Ticket ($100)</option>
                            <option value="premium">Premium VIP ($150)</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="ticket-quantity">Number of Tickets *</label>
                        <select id="ticket-quantity" name="ticket_quantity" required>
                            <option value="">Select quantity</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="payment">Payment Method *</label>
                        <select id="payment" name="payment" required>
                            <option value="">Choose payment method</option>
                            <option value="credit-card">Credit Card</option>
                            <option value="debit-card">Debit Card</option>
                            <option value="paypal">PayPal</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="special-requirements">Special Requirements</label>
                    <textarea id="special-requirements" name="special_requirements" rows="3" placeholder="Any dietary restrictions or special assistance needed?"></textarea>
                </div>

                <div class="form-group checkbox-group">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I agree to the terms and conditions *</label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="submit-btn">Complete Registration</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>Sports Challenge</h4>
                <p>Join us in the pursuit of fitness excellence</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <a href="#">Programs</a>
                <a href="#">Schedule</a>
                <a href="#">Membership</a>
            </div>
            <div class="footer-section">
                <h4>Connect</h4>
                <div class="social-links">
                    <a href="#">Facebook</a>
                    <a href="#">Instagram</a>
                    <a href="#">Twitter</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Sports Challenge. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
