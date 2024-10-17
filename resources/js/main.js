document.addEventListener('DOMContentLoaded', function () {
    // JavaScript to toggle the slide-in menu
    const sidebar = document.getElementById('sidebar');
    
    function toggleMenu() {
        if (sidebar) {
            sidebar.classList.toggle('open');
        } else {
            console.error("Sidebar element with ID 'sidebar' not found");
        }
    }

    // Add event listener to toggle buttons
    const menuToggleButtons = document.querySelectorAll('[onclick="toggleMenu()"]');

    if (menuToggleButtons.length > 0) {
        menuToggleButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();  // Prevent default behavior
                toggleMenu();
            });
        });
    } else {
        console.error("No buttons found with onclick='toggleMenu()'");
    }
});

//handle sub menu
document.addEventListener('DOMContentLoaded', function () {
    const classesToggle = document.getElementById('classes-toggle');
    const classesSubmenu = document.getElementById('classes-submenu');
    const toggleIcon = document.getElementById('toggle-icon');

    classesToggle.addEventListener('click', function () {
        // Toggle the height of the submenu for sliding animation
        if (classesSubmenu.style.maxHeight && classesSubmenu.style.maxHeight !== '0px') {
            classesSubmenu.style.maxHeight = '0px'; // Collapse the submenu
            toggleIcon.classList.remove('rotate-180'); // Reset icon rotation
        } else {
            classesSubmenu.style.maxHeight = `${classesSubmenu.scrollHeight}px`; // Expand to full height
            toggleIcon.classList.add('rotate-180'); // Rotate icon to indicate open state
        }
    });
});