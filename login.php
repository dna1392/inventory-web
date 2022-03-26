<?php include_once 'includes/header.php'; ?>
<title>Inicio de sesión</title>
</head>
<body>
    <?php include_once 'includes/navbar.php'; ?>
    <div class="container">
        <br><br>
        <h2>Iniciar sesión</h2><br>
        <form>
            <div class="mb-3">
                <label for="username" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </form>
    </div>
</body>

</html>