<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Organizer</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="logo">Wedding Organizer</div>
        <div class="nav-links">
            <a href="#home" class="active">Home</a>
            <a href="#vendor">Vendor</a>
            <a href="#tamu">Tamu</a>
            <a href="#review">Review</a>
        </div>
        <div class="auth-button">
            <a href="#login" class="login-btn">
                <i class="fas fa-user"></i>
                Login
            </a>
        </div>
    </nav>

    <main>
        <section class="hero" id="home">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Wedding, 💝<br>what the world needs</h1>
                    <p>Solusi untuk setiap pernikahan yang sempurna. Temukan paket pernikahan untuk membawa impian pada pernikahan impian Anda.</p>
                    <a href="#packages" class="browse-btn">Browse</a>
                </div>
                <div class="hero-image">
                    <img src="home.jpg" alt="Elegant wedding couple on stone stairs with floral decorations">
                </div>
            </div>
        </section>

        <section id="vendor" class="vendor-section">
            <h2>Our Wedding Packages</h2>
            <div class="package-grid">
                <div class="package-card">
                    <h3>Basic Wedding</h3>
                    <div class="price">Rp. 75.000.000</div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="package-card">
                    <h3>Silver Wedding</h3>
                    <div class="price">Rp. 125.000.000</div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="package-card">
                    <h3>Gold Wedding</h3>
                    <div class="price">Rp. 175.000.000</div>
                    <button class="select-btn">Select</button>
                </div>
                <div class="package-card">
                    <h3>Platinum Wedding</h3>
                    <div class="price">Rp. 250.000.000</div>
                    <button class="select-btn">Select</button>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Add active class to current nav item
        const navLinks = document.querySelectorAll('.nav-links a');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(l => l.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>