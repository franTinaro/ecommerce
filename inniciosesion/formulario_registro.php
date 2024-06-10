<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group input[type="radio"] {
            width: auto;
        }
        .form-group .radio-label {
            display: inline-block;
            margin-right: 10px;
        }
        .form-group .radio-group {
            display: flex;
            align-items: center;
        }
        .submit-btn {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
        }
        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registro</h2>
        <form action="registro.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="passw" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad:</label>
                <input type="text" id="ciudad" name="ciudad" required>
            </div>
            <div class="form-group">
                <label>Sexo:</label>
                <div class="radio-group">
                    <label class="radio-label"><input type="radio" name="sexo" value="masculino" required> Masculino</label>
                    <label class="radio-label"><input type="radio" name="sexo" value="femenino" required> Femenino</label>
                    <label class="radio-label"><input type="radio" name="sexo" value="otro" required> Otro</label>
                </div>
            </div>
            <div class="form-group">
                <label for="provincia">Provincia:</label>
                <input type="text" id="provincia" name="provincia" required>
            </div>
            <div class="form-group">
                <label for="pais">País:</label>
                <input type="text" id="pais" name="pais" required>
            </div>
            <div class="form-group">
                <label for="codigoPostal">Código Postal:</label>
                <input type="text" id="codigoPostal" name="codigoPostal" required>
            </div>
            <div class="form-group">
                <label for="otrosDatos">Otros Datos:</label>
                <textarea id="otrosDatos" name="otrosDatos" rows="4" cols="50"></textarea>
            </div>
            <button type="submit" class="submit-btn">Registrarse</button>
        </form>
    </div>
</body>
</html>
