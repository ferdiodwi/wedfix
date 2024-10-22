<!DOCTYPE html>
<html lang="id">
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
        <div class="logo">Sido Rabi</div>
        <div class="nav-links">
            <a href="index.php" class="active">Home</a>
            <a href="vendor.php">Vendor</a>
            <a href="#review">Review</a>
        </div>
        <div class="auth-button">
            <a href="login/login.php" class="login-btn">
                <i class="fas fa-user"></i>
                Login
            </a>
        </div>
    </nav>


    <main>
        <section class="vendor-search">
            <h1>Find Your Vendor</h1>
            <form action="" method="GET" class="search-form">
                <input type="text" name="search" placeholder="Search vendors...">
                <button type="submit">Search</button>
            </form>
        </section>

        <section class="vendor-categories">
            <div class="category-grid">
                <div class="category-card">
                    <img src="image/pexels-marcelochagas-1854897.jpg" alt="Photographer">
                    <h3>Photographer</h3>
                </div>
                <div class="category-card">
                    <img src="image/pexels-brunomassao-2170450.jpg" alt="Videographer">
                    <h3>Videographer</h3>
                </div>
                <div class="category-card">
                    <img src="image/pexels-laura-garcia-1667452-4006699.jpg" alt="Makeup Artist">
                    <h3>Makeup Artist</h3>
                </div>
                <div class="category-card">
                    <img src="image/pexels-angel-ayala-321556-28976226.jpg" alt="Decoration">
                    <h3>Decoration</h3>
                </div>
                <div class="category-card">
                    <img src="image/pexels-fu-zhichao-176355-587741.jpg" alt="Catering">
                    <h3>Catering</h3>
                </div>
                <div class="category-card">
                    <img src="image/pexels-diana-titenko-1716093-10408275.jpg" alt="Entertainment">
                    <h3>Entertainment</h3>
                </div>
            </div>
        </section>
    </main>
</body>

<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>Our Location</h3>
            <p>Jl. Raya Sempidi No.69 Lukluk, Mengwi, Badung, Bali</p>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Phone: +62 853-3777-1403</p>
            <p>Email: info@baliglitzwedding.com</p>
        </div>
        <div class="footer-section">
            <h3>Follow Us</h3>
            <div class="social-icons">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 Bali Glitz Wedding. All rights reserved.</p>
    </div>
</footer>
</html>
