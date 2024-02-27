const navToggle = document.querySelector(".nav-toggle")
const navMenu = document.querySelector(".nav-menu")

navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("nav-menu-visible");
    
    if (navToggle.firstElementChild.classList.contains("fa-x")) {
        navToggle.setAttribute("aria-label", "Cerrar menu");
        navMenu.style.opacity = 0;
        navToggle.firstElementChild.classList.remove("fa-x");
        navToggle.firstElementChild.classList.add("fa-bars");
    } 
    else{
        navToggle.setAttribute("aria-label", "Abrir menu");
        navMenu.style.opacity = 1;
        navToggle.firstElementChild.classList.remove("fa-bars");
        navToggle.firstElementChild.classList.add("fa-x");
    }
        
});

if(window.innerWidth <= 825){
    navMenu.style.opacity = 0;
}

window.addEventListener("resize",()=>{
    if(window.innerWidth > 825){
        navMenu.style.opacity = 1;
    }else{
        navMenu.style.opacity = 0;
    }
})