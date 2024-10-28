<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Organizer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            <a href="home-admin.php">Home</a>
          </li>
          <li>
            <a href="vendor-admin.php" class="active">Vendor</a>
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
              <a href="home-admin.php">Home</a>
            </li>
            <li>
              <a href="vendor-admin.php" class="active">Vendor</a>
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
        <section class="vendor-search">
            <h1 style="color: black;">Find Your Vendor</h1>
            <form action="" method="GET" class="search-form">
                <input type="text" name="search" placeholder="Search vendors...">
                <button type="submit">Search</button>
            </form>
            <button class="btn-add" onclick="addVendor()">Tambah Vendor</button>
        </section>

        <section class="vendor-categories">
            <div class="category-grid">
                <div class="category-card">
                    <img src="/wedfix/image/pexels-marcelochagas-1854897.jpg" alt="Photographer">
                    <h3>Photographer</h3>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Photographer')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Photographer')">Hapus</button>
                    </div>
                </div>
                <!-- Tambahkan action buttons pada setiap kategori lainnya -->
                <div class="category-card">
                    <img src="/wedfix/image/pexels-brunomassao-2170450.jpg" alt="Videographer">
                    <h3>Videographer</h3>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Videographer')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Videographer')">Hapus</button>
                    </div>
                </div>

                <div class="category-card">
                    <img src="/wedfix/image/pexels-laura-garcia-1667452-4006699.jpg" alt="Makeup Artist">
                    <h3>Makeup Artist</h3>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Makeup Artist')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Makeup Artist')">Hapus</button>
                    </div>
                </div>

                <div class="category-card">
                    <img src="/wedfix/image/pexels-angel-ayala-321556-28976226.jpg" alt="Decoration">
                    <h3>Decoration</h3>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Decoration')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Decoration')">Hapus</button>
                    </div>
                </div>

                <div class="category-card">
                    <img src="/wedfix/image/pexels-fu-zhichao-176355-587741.jpg" alt="Catering">
                    <h3>Catering</h3>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Catering')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Catering')">Hapus</button>
                    </div>
                </div>

                <div class="category-card">
                    <img src="/wedfix/image/pexels-diana-titenko-1716093-10408275.jpg" alt="Entertainment">
                    <h3>Entertainment</h3>
                    <div class="action-buttons">
                        <button class="btn-edit" onclick="editVendor('Entertainment')">Edit</button>
                        <button class="btn-delete" onclick="deleteVendor('Entertainment')">Hapus</button>
                    </div>
                </div>
                <!-- Tambahkan kategori lain dengan format yang sama -->
            </div>
        </section>
    </main>

    <script>
        function addVendor() {
            alert('Tambah vendor baru');
            // Implementasi kode untuk menambahkan vendor baru
        }

        function editVendor(category) {
            alert('Edit ' + category);
            // Implementasi kode untuk mengedit vendor berdasarkan kategori
        }

        function deleteVendor(category) {
            if (confirm('Apakah Anda yakin ingin menghapus ' + category + '?')) {
                // Implementasi kode untuk menghapus vendor berdasarkan kategori
                alert(category + ' telah dihapus');
            }
        }
    </script>
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
