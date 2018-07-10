<?php include 'includes/head.view.php' ?>
  
  <body>
  <main class="nd-container">
    <div class="main-container col-100">
      <section>
        <h2>Iniciar sesión</h2>
        <form class="main-form" action="account.php" method="get">
          <label>
            <input name="username" placeholder="Nombre de usuario o correo" required>
          </label>
          <label>
            <input name="password" type="password" placeholder="Contraseña" required>
          </label>
          <div class="two-items">
            <button class="button--ghost" type="submit">Ingresar</button><a class="button--ghost" href="index.php">Cancelar</a>
          </div>
          <p>¿No tienes una cuenta? Regístrate<a href="signup.php">
              <u> aquí</u></a></p>
        </form>
      </section>
    </div>
  </main>

<?php include 'includes/foot.view.php' ?>