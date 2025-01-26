import './bootstrap';
import $ from 'jquery';
import '@popperjs/core';


window.$ = $;

document.getElementById('toggleSidebar').addEventListener('click', function() {
    const sidebar = document.getElementById('sidenav-main');
    const toggleIcon = document.getElementById('toggleIcon');

    sidebar.classList.toggle('sidebar-collapsed');

    if (sidebar.classList.contains('sidebar-collapsed')) {
        toggleIcon.textContent = 'arrow_menu_open';
    } else {
        toggleIcon.textContent = 'arrow_menu_close';
    }
});

function adjustSidebar() {
    const sidebar = document.getElementById('sidenav-main');
    const toggleIcon = document.getElementById('toggleIcon');

    if (window.innerWidth <= 1200) {
        sidebar.classList.add('sidebar-collapsed');
        toggleIcon.textContent = 'arrow_menu_open';
    } else {
        sidebar.classList.remove('sidebar-collapsed');
        toggleIcon.textContent = 'arrow_menu_close';
    }
}

// Ajusta el sidebar cuando la ventana cambia de tamaño
window.addEventListener('resize', adjustSidebar);

// Ajusta el sidebar cuando la página se carga
document.addEventListener('DOMContentLoaded', adjustSidebar);
