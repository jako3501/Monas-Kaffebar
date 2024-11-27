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
document.addEventListener('DOMContentLoaded', () => {
    const basketCounter = document.getElementById('basket-counter');
    const addToCartButtons = document.querySelectorAll('.add_to_cart_button');
    const basketContainer = document.querySelector('.shop_table'); // Parent of .remove buttons

    // Retrieve the counter value from localStorage (default to 0 if not set)
    let counter = parseInt(localStorage.getItem('cartCounter')) || 0;

    // Update the counter display with the saved value
    updateCounterDisplay();

    // Add click listeners to "Add to Cart" buttons
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            counter++;
            updateCounterDisplay();
        });
    });

    // Use event delegation for dynamically handling all .remove buttons
    if (basketContainer) {
        basketContainer.addEventListener('click', (event) => {
            if (event.target.classList.contains('remove')) {
                console.log('Remove button clicked:', event.target);

                if (counter > 0) {
                    counter--;
                    updateCounterDisplay();
                }
            }
        });
    }

    function updateCounterDisplay() {
        if (basketCounter) {
            if (counter === 0) {
                basketCounter.style.display = 'none';
            } else {
                basketCounter.style.display = 'block';
                basketCounter.textContent = counter;
            }
        }

        // Save the updated counter value to localStorage
        localStorage.setItem('cartCounter', counter);
    }
});