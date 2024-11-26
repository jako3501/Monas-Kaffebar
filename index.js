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

// Scrolling when clicking svg
document.addEventListener("DOMContentLoaded", () => {
    const scrollSvg = document.getElementById("scroll-arrow");
    const section = document.getElementById("products-section");

    const scrollClicking = () => {
        section.scrollIntoView({ behavior: 'smooth' });
    };

    scrollSvg.addEventListener('click', scrollClicking);
});

// Counter for basket
const basketCounter = document.getElementById('basket-counter');
const addToCartButtons = document.querySelectorAll('.add_to_cart_button');

let counter = 0;

// Add click event listener to each "Add to Cart" button
addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Increment the counter
        counter++;

        // Update the counter display
        basketCounter.textContent = counter;
    });
});

