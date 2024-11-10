<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a mi página PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
        }
        .content {
            background-color: #fff;
            padding: 20px;
            margin: 50px auto;
            width: 80%;
            max-width: 600px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

<div class="content">
    <h1><?php echo "¡Bienvenido a mi página PHP!"; ?></h1>
    <p>Hoy es: <?php echo date("d/m/Y"); ?></p>
</div>

</body>
</html>
