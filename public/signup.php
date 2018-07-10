<?php include 'includes/head.view.php' ?>
  
  <main class="nd-container">
    <div class="main-container col-100">
      <section>
        <h2>Registrarse</h2>
        <form class="main-form" action="make_sale.php" method="get">
          <label>
            <input name="name" placeholder="Nombre" required>
          </label>
          <label>
            <input name="address" placeholder="Dirección" required>
          </label>
          <label>
            <input name="phone" type="number" placeholder="Teléfono" required>
          </label>
          <label>
            <input name="email" type="email" placeholder="Correo electrónico" required>
          </label>
          <label>
            <input name="password" type="password" placeholder="Contraseña" required>
          </label>
          <div class="two-items">
            <button class="button--ghost" type="submit">Ingresar</button><a class="button--ghost" href="index.php">Cancelar</a>
          </div>
          <p>¿Ya tienes una cuenta? Inicia sesión<a href="login.php">
              <u> aquí</u></a></p>
        </form>
      </section>
    </div>
  </main>

<?php include 'includes/foot.view.php' ?>