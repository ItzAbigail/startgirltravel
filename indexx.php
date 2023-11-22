<!DOCTYPE html>
<html>
<head>
    <title>Mesa de Ayuda</title>
</head>
<body>
    <h1>Mesa de Ayuda</h1>
    <form action="submit.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="name" required><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" required><br>

        <label for="subject">Asunto:</label>
        <input type="text" name="subject" required><br>

        <label for="message">Mensaje:</label>
        <textarea name="message" rows="4" required></textarea><br>

        <input type="submit" value="Enviar Solicitud">
    </form>
</body>
</html>
