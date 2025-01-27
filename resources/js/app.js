import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import $ from 'jquery';
import '@popperjs/core';
window.$ = $;
window.jQuery = $;

document.getElementById('toggleSidebar').addEventListener('click', function() {
    const sidebar = document.getElementById('sidenav-main');
    const toggleIcon = document.getElementById('toggleIcon');
    const mainContent = document.querySelector('.main-content');

    sidebar.classList.toggle('sidebar-collapsed');
    mainContent.classList.toggle('content-expanded');

    if (sidebar.classList.contains('sidebar-collapsed')) {
        toggleIcon.textContent = 'arrow_menu_open';
    } else {
        toggleIcon.textContent = 'arrow_menu_close';
    }
});

function adjustSidebar() {
    const sidebar = document.getElementById('sidenav-main');
    const toggleIcon = document.getElementById('toggleIcon');
    const mainContent = document.querySelector('.main-content');

    if (window.innerWidth <= 1200) {
        sidebar.classList.add('sidebar-collapsed');
        mainContent.classList.add('content-expanded');
        toggleIcon.textContent = 'arrow_menu_open';
    } else {
        sidebar.classList.remove('sidebar-collapsed');
        mainContent.classList.remove('content-expanded');
        toggleIcon.textContent = 'arrow_menu_close';
    }
}

// Ajusta el sidebar y el contenido cuando la ventana cambia de tamaño
window.addEventListener('resize', adjustSidebar);

// Ajusta el sidebar y el contenido cuando la página se carga
document.addEventListener('DOMContentLoaded', adjustSidebar);
