//nav bar animation
document.addEventListener("DOMContentLoaded", () => {
    const hamMenu = document.querySelector(".ham-menu");
    const navMenu = document.querySelector(".menu ul");

    if (hamMenu) { // Ensure the element exists
        hamMenu.addEventListener('click', () => openPhoneNavMenu());
    }

    const openPhoneNavMenu = () => {
        hamMenu.classList.toggle('active');
        navMenu.classList.toggle('active');
    };
});

//Overwritte woocommerce content
document.addEventListener("DOMContentLoaded", () => {
    const addToBasketButtons = document.querySelectorAll('a.add_to_cart_button');

    addToBasketButtons.forEach(button => {
        // Change the text
        button.innerHTML = '+';
    });
});