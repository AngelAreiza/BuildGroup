document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar-nav");
    const container = document.querySelector(".navbar-container");

    container.addEventListener("mouseenter", function () {
        navbar.classList.add("show");
    });

    container.addEventListener("mouseleave", function () {
        navbar.classList.remove("show");
    });
});