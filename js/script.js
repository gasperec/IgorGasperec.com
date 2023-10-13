// Get the menu toggle button
var menuToggle = document.querySelector('.menu-toggle');

// Get the menu items
var menuItems = document.querySelector('#menu');

// Add a click event listener to the menu toggle button
menuToggle.addEventListener('click', function() {
    // Toggle the visibility of the menu items
    if (menuItems.style.maxHeight) {
        menuItems.style.maxHeight = null;
    } else {
        menuItems.style.maxHeight = menuItems.scrollHeight + 'px';
    }
});
