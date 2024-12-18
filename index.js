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

// // Counter for basket
// document.addEventListener('DOMContentLoaded', () => {
//     const basketCounter = document.getElementById('basket-counter');
//     const addToCartButtons = document.querySelectorAll('.add_to_cart_button');
//     const basketContainer = document.querySelector('.shop_table'); // Parent container for remove buttons

//     // Retrieve the counter value from localStorage (default to 0 if not set)
//     let counter = parseInt(localStorage.getItem('cartCounter')) || 0;

//     // Update the counter display with the saved value
//     updateCounterDisplay();

//     // Add click listeners to "Add to Cart" buttons
//     addToCartButtons.forEach(button => {
//         button.addEventListener('click', () => {
//             counter++;
//             updateCounterDisplay();
//         });
//     });

//     // Use event delegation for dynamically handling all .remove buttons
//     if (basketContainer) {
//         basketContainer.addEventListener('click', (event) => {
//             // Check if the clicked element is a remove button
//             if (event.target.classList.contains('remove')) {
//                 console.log('Remove button clicked:', event.target);

//                 if (counter > 0) {
//                     counter--;
//                     updateCounterDisplay();
//                 }
//             }
//         });
//     }

//     function updateCounterDisplay() {
//         if (basketCounter) {
//             if (counter === 0) {
//                 basketCounter.style.display = 'none'; // Hide the counter when it reaches 0
//             } else {
//                 basketCounter.style.display = 'block'; // Show the counter when it's greater than 0
//                 basketCounter.textContent = counter; // Update the displayed counter value
//             }
//         }

//         // Save the updated counter value to localStorage
//         localStorage.setItem('cartCounter', counter);
//     }
// });

jQuery(document).ready(function($) {
    // Function to update the cart counter
    function updateCartCounter() {
        // Get the current cart item count using WooCommerce's AJAX response
        $.get(cart_counter_obj.ajax_url, { action: 'get_cart_item_count' }, function(response) {
            // Update the basket counter with the new count
            $('#basket-counter').text(response);
            if (response == 0) {
                $('#basket-counter').hide(); // Hide counter if it's 0
            } else {
                $('#basket-counter').show(); // Show counter if it's greater than 0
            }
        });
    }

    // Update the counter when items are added to the cart
    $('body').on('added_to_cart', function() {
        updateCartCounter();
    });

    // Update the counter when items are removed from the cart
    $('body').on('removed_from_cart', function() {
        updateCartCounter();
    });

    // Initial counter update
    updateCartCounter();
});