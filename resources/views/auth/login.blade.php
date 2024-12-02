<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">

</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Iniciar Sesión</button>
    </form>

    
</body>
</html>
