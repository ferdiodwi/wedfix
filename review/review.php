<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Organizer</title>
    <link rel="stylesheet" href="style-review.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo">Sido Rabi</div>
            <div class="nav-links">
                <a href="index.php" >Home</a>
                <a href="vendor.php">Vendor</a>
                <a href="review.php" class="active">Review</a>
                <a href="galery.php" >Galery</a>
                <a href="planning.php">Planning</a>
            </div>
            <div class="auth-button">
                <a href="login/login.php" class="login-btn">
                    <i class="fas fa-user"></i>
                    Login
                </a>
            </div>
        </nav>   
    </header> 

    <main>
         <!-- Bagian Ulasan Wedding -->
         <section id="review" class="review-section">
            <h2>Customer Reviews</h2>

            <!-- Formulir Ulasan -->
            <div class="review-form">
                <h3>Leave a Review</h3>
                <form id="reviewForm">
                    <label for="name">Name:</label>
                    <input type="text" id="name" placeholder="Your Name" required>

                    <label for="rating">Rating:</label>
                    <select id="rating" required>
                        <option value="">Select Rating</option>
                        <option value="5">5 - Excellent</option>
                        <option value="4">4 - Good</option>
                        <option value="3">3 - Average</option>
                        <option value="2">2 - Poor</option>
                        <option value="1">1 - Terrible</option>
                    </select>

                    <label for="comment">Comment:</label>
                    <textarea id="comment" placeholder="Write your experience..." required></textarea>

                    <button type="submit">Submit Review</button>
                </form>
            </div>

            <!-- Daftar Ulasan -->
            <div class="review-list" id="reviewList">
                <h3>What Others Say</h3>
            </div>
        </section>
    </main>

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
    </main>

    <script>
        // Add active class to current nav item
        <script>
    let reviews = [];

    const reviewForm = document.getElementById('reviewForm');
    const reviewList = document.getElementById('reviewList');

    reviewForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const rating = document.getElementById('rating').value;
        const comment = document.getElementById('comment').value;

        const review = {
            name,
            rating,
            comment
        };

        reviews.push(review);
        reviewForm.reset();
        displayReviews();
    });

    function displayReviews() {
        reviewList.innerHTML = '<h3>What Others Say</h3>';

        reviews.forEach((review) => {
            const reviewCard = document.createElement('div');
            reviewCard.classList.add('review-card');

            reviewCard.innerHTML = `
                <h4>${review.name} <span class="rating">${'★'.repeat(review.rating)}</span></h4>
                <p>${review.comment}</p>
            `;

            reviewList.appendChild(reviewCard);
        });
    }
</script>

    </script>


</body>
</html> 