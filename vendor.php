<?php include 'header.php'; ?>

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
                <img src="images/photographer.jpg" alt="Photographer">
                <h3>Photographer</h3>
            </div>
            <div class="category-card">
                <img src="images/videographer.jpg" alt="Videographer">
                <h3>Videographer</h3>
            </div>
            <div class="category-card">
                <img src="images/makeup.jpg" alt="Makeup Artist">
                <h3>Makeup Artist</h3>
            </div>
            <div class="category-card">
                <img src="images/decoration.jpg" alt="Decoration">
                <h3>Decoration</h3>
            </div>
            <div class="category-card">
                <img src="images/catering.jpg" alt="Catering">
                <h3>Catering</h3>
            </div>
            <div class="category-card">
                <img src="images/entertainment.jpg" alt="Entertainment">
                <h3>Entertainment</h3>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>