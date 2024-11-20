document.addEventListener("DOMContentLoaded", () => {
    const hamMenu = document.querySelector(".ham-menu");

    if (hamMenu) { // Ensure the element exists
        hamMenu.addEventListener('click', () => openPhoneNavMenu());
    }

    const openPhoneNavMenu = () => {
        hamMenu.classList.toggle('active');
        console.log("changing to active");
    };
});