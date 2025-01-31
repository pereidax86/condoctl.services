import 'bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import $ from 'jquery';
import '@popperjs/core';
import '@patternfly/patternfly/patternfly.css';
import 'https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js';

window.$ = $;
window.jQuery = $;

// Manejo del comportamiento del menu de alertas
document.getElementById('notification-dropdown-button').addEventListener('click', function() {
    var dropdownMenu = document.getElementById('notification-menu');
    var isHidden = dropdownMenu.style.display === 'none';
    dropdownMenu.style.display = isHidden ? 'block' : 'none';
});

document.getElementById('user-dropdown-button').addEventListener('click', function() {
    var userMenu = document.getElementById('user-menu');
    var isHidden = userMenu.style.display === 'none';
    userMenu.style.display = isHidden ? 'block' : 'none';
});


// Drag and drop de las cards
document.addEventListener('DOMContentLoaded', function() {
    var dashboard = document.getElementById('dashboard');
    var sortable = Sortable.create(dashboard, {
        animation: 150,
        ghostClass: 'dragging' // Clase añadida al elemento mientras se arrastra
    });
});

// Comportamiento del menu lateral
document.getElementById('toggleSidebarButton').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    sidebar.classList.toggle('collapsed');
});
