<?php
include 'modules/navbar.php';
include 'modules/banner.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Savio Minimalista</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="css/filters.css">
    <link rel="stylesheet" href="css/week.css">

    <script defer>
        function changeWeek() {
            const selector = document.getElementById("weekSelector");
            const selectedWeek = selector.value;

            const weekTitle = document.getElementById("week-title");
            const weekContent = document.getElementById("week-content");

            weekTitle.innerText = selectedWeek;

            const content = {
                "Semana 1": `
                    <div class="card">
                        <h3>Introducción al Frontend</h3>
                        <p>Conceptos básicos de HTML, CSS y estructura web.</p>
                    </div>
                `,
                "Semana 2": `
                    <div class="card">
                        <h3>CSS Moderno</h3>
                        <p>Flexbox, Grid y diseño responsive.</p>
                    </div>
                `,
                "Semana 3": `
                    <div class="card">
                        <h3>JavaScript Básico</h3>
                        <p>Variables, funciones y eventos.</p>
                    </div>
                `
            };

            weekContent.innerHTML = content[selectedWeek] || `
                <div class="card">
                    <h3>${selectedWeek}</h3>
                    <p>Contenido pendiente por agregar.</p>
                </div>
            `;
        }
    </script>
</head>
<body>

<div class="main-container">

    <?php include 'modules/filters.php'; ?>

    <?php include 'modules/week.php'; ?>

</div>

</body>
</html>