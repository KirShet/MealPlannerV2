// Function to add or remove the class based on screen width
function toggleResponsiveClass() {
    var nav = document.querySelector('[data-responsive-from="MD"]');
    if (window.innerWidth >= 768) { // Adjust the breakpoint as needed
        nav.classList.remove('u-enable-responsive');
    } else {
        nav.classList.add('u-enable-responsive');
    }
}

// Call the function initially
toggleResponsiveClass();

// Add event listener for window resize
window.addEventListener('resize', toggleResponsiveClass);
