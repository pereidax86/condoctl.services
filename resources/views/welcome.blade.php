<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Aplicación</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'node_modules/material-dashboard/assets/js/material-dashboard.js',
            'node_modules/material-dashboard/assets/css/material-dashboard.css',
    ])


</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
