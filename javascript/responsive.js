document.addEventListener("DOMContentLoaded", function() {
    const navBlock = document.querySelector('[data-responsive-from="MD"]');
    const uMenu1 = document.querySelector(".u-menu-1");
    const uNavContainerCollapse = document.querySelector(".u-nav-container-collapse");
    const uMenuOverlay = document.querySelector(".u-menu-overlay");

    function toggleResponsiveClass() {
        navBlock.classList.toggle('u-enable-responsive', window.innerWidth < 768);
    }

    toggleResponsiveClass();
    window.addEventListener('resize', toggleResponsiveClass);

    navBlock.addEventListener("click", function() {
        uMenu1.classList.add("open");
        uNavContainerCollapse.style.width = "100%";
        uMenuOverlay.style.display = "block";
    });

    uMenuOverlay.addEventListener("click", function() { 
        setTimeout(() => {
            uMenu1.classList.remove("open");
            uNavContainerCollapse.style.width = "";
            uMenuOverlay.style.display = "";
        }, 100);
    });
});