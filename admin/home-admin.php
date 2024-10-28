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
    <nav>
        <div class="logo">
          <img src="/wedfix/image/Sidorabi.png" alt="logo" />
          <h1>Sido Rabi</h1>
        </div>
        <ul>
          <li>
            <a href="home-admin.php" class="active">Home</a>
          </li>
          <li>
            <a href="vendor-admin.php">Vendor</a>
          </li>
          <li>
            <a href="#">Review</a>
          </li>
          <li>
            <a href="galery/galery.php">Galery</a>
          </li>
          <li>
            <a href="#">Planning</a>
          </li>
        </ul>
        <div class="hamburger">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
        <div class="auth-button">
              <a href="/wedfix/index.php" class="login-btn">
                  <i class="fas fa-user"></i>
                  LogOut
              </a>
        </div>
    </nav>
    <div class="menubar">
        <ul>
            <li>
             <a href="home-admin.php" class="active">Home</a>
            </li>
            <li>
              <a href="vendor-admin.php">Vendor</a>
            </li>
            <li>
              <a href="#">Review</a>
            </li>
            <li>
              <a href="#">Galery</a>
            </li>
            <li>
              <a href="#">Planning</a>
            </li>
        </ul>
    </div>

    <script src="script.js"></script>

    <main>
<section class="hero" id="home">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Wedding, 💝<br>what the world needs</h1>
            <p>Solusi untuk setiap pernikahan yang sempurna. Temukan paket pernikahan untuk membawa impian pada pernikahan impian Anda.</p>
            <a href="#packages" class="browse-btn">Browse</a>
        </div>
        <div class="hero-image">
        <img src="/wedfix/image/home.jpg" alt="Elegant wedding couple on stone stairs with floral decorations">
        </div>
    </div>
</section>

        <section id="vendor" class="vendor-section">
            <h2>Our Wedding Packages</h2>
            <h2>
                <button class="btn-add" onclick="addVendor()">Tambah Vendor</button>
            </h2>
            <div class="package-grid">
            <div class="package-card">
                    <h3>Khusus Koe</h3>
                    <div class="price">Rp.0</div>
                    <button class="select-btn">Select</button>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Photographer')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Photographer')">Hapus</button>
                    </div>
                </div>
                <div class="package-card">
                    <h3>Murah Meriah</h3>
                    <div class="price">Rp. 100.000</div>
                    <button class="select-btn">Select</button>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Photographer')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Photographer')">Hapus</button>
                    </div>
                </div>
                <div class="package-card">
                    <h3>Basic Wedding</h3>
                    <div class="price">Rp. 75.000.000</div>
                    <button class="select-btn">Select</button>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Photographer')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Photographer')">Hapus</button>
                    </div>
                </div>
                <div class="package-card">
                    <h3>Silver Wedding</h3>
                    <div class="price">Rp. 125.000.000</div>
                    <button class="select-btn">Select</button>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Photographer')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Photographer')">Hapus</button>
                    </div>
                </div>
                <div class="package-card">
                    <h3>Gold Wedding</h3>
                    <div class="price">Rp. 175.000.000</div>
                    <button class="select-btn">Select</button>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Photographer')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Photographer')">Hapus</button>
                    </div>
                </div>
                <div class="package-card">
                    <h3>Platinum Wedding</h3>
                    <div class="price">Rp. 250.000.000</div>
                    <button class="select-btn">Select</button>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Photographer')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Photographer')">Hapus</button>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="review" class="review-section">
    <h2>Customer Reviews</h2>
    <div class="review-grid">
        <div class="review-card">
            <div class="review-content">
                <p>"Pelayanan luar biasa! Sangat membantu dalam perencanaan pernikahan kami."</p>
            </div>
            <div class="reviewer">
                <img src="/wedfix/image/WhatsApp Image 2024-10-22 at 21.30.21.jpeg" alt="ferdio" class="reviewer-img">
                <p class="reviewer-name">Ferdio Dwi</p>
            </div>
        </div>
        <div class="review-card">
            <div class="review-content">
                <p>"Tim yang profesional dan kreatif. Hasil pernikahan kami benar-benar seperti mimpi!"</p>
            </div>
            <div class="reviewer">
                <img src="/wedfix/image/WhatsApp Image 2024-10-22 at 21.44.09.jpeg" alt="Mas Rio" class="reviewer-img">
                <p class="reviewer-name">Mas Rio</p>
            </div>
        </div>
        <div class="review-card">
            <div class="review-content">
                <p>"Sangat merekomendasikan! Mereka membuat hari spesial kami menjadi tak terlupakan."</p>
            </div>
            <div class="reviewer">
                <img src="/wedfix/image/WhatsApp Image 2024-10-22 at 21.49.19.jpeg" alt="Redrigo" class="reviewer-img">
                <p class="reviewer-name">Redrigo</p>
            </div>
        </div>
        <div class="review-card">
            <div class="review-content">
                <p>"Pelayanan yang luar biasa dengan harga yang sangat terjangkau. Terima kasih banyak!"</p>
            </div>
            <div class="reviewer">
                <img src="/wedfix/image/WhatsApp Image 2024-10-22 at 21.58.47.jpeg" alt="rio" class="reviewer-img">
                <p class="reviewer-name">Sam Rio Sul</p>
            </div>
        </div>
        <div class="review-card">
            <div class="review-content">
                <p>"Pelayanan yang luar biasa dengan harga yang sangat terjangkau. Terima kasih banyak!"</p>
            </div>
            <div class="reviewer">
                <img src="/wedfix/avatar4.jpg" alt="alvyn" class="reviewer-img">
                <p class="reviewer-name">Alvyn Dlogok</p>
            </div>
        </div>
        <div class="review-card">
            <div class="review-content">
                <p>"Pelayanan yang luar biasa dengan harga yang sangat terjangkau. Terima kasih banyak!"</p>
            </div>
            <div class="reviewer">
                <img src="/wedfix/image/WhatsApp Image 2024-10-22 at 22.19.32.jpeg" alt="arindi" class="reviewer-img">
                <p class="reviewer-name">Arindi Gempol</p>
            </div>
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
    <script src="script.js"></script>
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