const navToggle = document.querySelector(".nav-toggle")
const navMenu = document.querySelector(".nav-menu")

navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("nav-menu-visible");

    if (navMenu.classList.contains("nav-menu_visible")) {
        navToggle.setAttribute("aria-label", "Cerrar menu");
    } 
    else{
        navToggle.setAttribute("aria-label", "Abrir menu");
    }
        
});