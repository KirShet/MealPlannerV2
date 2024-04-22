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


document.addEventListener("DOMContentLoaded", function() {
    const navBlock = document.querySelector(".u-enable-responsive");
    const uMenu1 = document.querySelector(".u-menu-1");
    const uNavContainerCollapse = document.querySelector(".u-nav-container-collapse");
    const uMenuOverlay = document.querySelector(".u-menu-overlay");

    navBlock.addEventListener("click", function() {
        // Add class "open" to "u-menu-1"
        uMenu1.classList.add("open");

        // Apply style "width: 100%;" to div with class "u-nav-container-collapse"
        uNavContainerCollapse.style.width = "100%";

        // Apply style "display: block;" to div with class "u-menu-overlay"
        uMenuOverlay.style.display = "block";
    });

    uMenuOverlay.addEventListener("click", function() { 
        console.log("ff");
        // Remove class "open" from "u-menu-1"
        // uMenu1.classList.remove("open");

        // Remove style "width: 100%;" from div with class "u-nav-container-collapse"
        uNavContainerCollapse.style.width = "";

        // Remove style "display: block;" from div with class "u-menu-overlay"
        uMenuOverlay.style.display = "";

        setTimeout(function() {
            uMenu1.classList.remove("open");
                    // Remove style "width: 100%;" from div with class "u-nav-container-collapse"
        uNavContainerCollapse.style.width = "";

        // Remove style "display: block;" from div with class "u-menu-overlay"
        uMenuOverlay.style.display = "";
        }, 100);
    })
});