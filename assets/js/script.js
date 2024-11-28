
// Function to initialize the like status based on localStorage
function initializeLike() {
    const likeIcon = document.getElementById('likeIcon');
    const isLiked = localStorage.getItem('isLiked') === 'true';
    if (isLiked) {
        likeIcon.classList.add('text-danger');
        likeIcon.style.transform = 'scale(1.2)'; // Scale up when liked
    } else {
        likeIcon.classList.remove('text-danger');
        likeIcon.style.transform = ''; // Reset scale
    }
}

// Function to toggle the like status
function toggleLike() {
    const likeIcon = document.getElementById('likeIcon');
    const isLiked = likeIcon.classList.toggle('text-danger');
    
    if (isLiked) {
        likeIcon.style.color = 'red'; // Set to red
        likeIcon.style.transform = 'scale(1.2)'; // Scale up when liked
        localStorage.setItem('isLiked', 'true'); // Save liked status
    } else {
        likeIcon.style.color = ''; // Reset to default
        likeIcon.style.transform = ''; // Reset scale
        localStorage.setItem('isLiked', 'false'); // Save unliked status
    }
}

// Initialize like status on page load
window.onload = initializeLike;
