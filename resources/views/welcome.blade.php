<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box; /* Asegura un diseño consistente */
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #navbarSupportedContent {
            display: flex;
            flex-direction: column; /* Asegura que los enlaces estén uno debajo del otro */
            align-items: center; /* Centra los enlaces horizontalmente */
            font-size: 30px;
        }

        #navbarSupportedContent a {
            margin: 5px 0; /* Agrega espacio vertical entre los enlaces */
            text-align: center;
        }
    </style>
</head>

<body>
    <div id="navbarSupportedContent">
        <a href="{{ route('register.form') }}">Register</a>
        <a href="{{ route('login.form') }}">Login</a>
    </div>
</body>

</html>
