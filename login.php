<?php include_once 'includes/header.php'; ?>
<title>Inicio de sesión</title>
</head>
<body>
    <?php include_once 'includes/navbar.php'; ?>
    <div class="login">
        <br>
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
            <br>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
    </div>
    <div class="banner"></div>
    <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer>
</body>

</html>