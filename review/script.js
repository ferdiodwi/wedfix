// script.js

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