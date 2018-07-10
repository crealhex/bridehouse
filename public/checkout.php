<?php include 'includes/head.view.php' ?>
<?php include 'includes/header.view.php' ?>
<?php
  $total = 0;
?>
  
  <main class="nd-container">
    <div class="main-container col-100">
      <section>
        <h2>Mi carrito</h2>
        <div id="page">
          <table id="cart">
            <thead>
              <tr>
                <th class="first">Imagen</th>
                <th class="second">Cantidad</th>
                <th class="third">Producto</th>
                <th class="fourth">Line total</th>
                <th class="fifth"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
                <?php
                $importe = $value[2] * $value[3];
                $total += $importe;
                ?>
                <tr class="productitm">
                  <td><img class="thumb" src="img/products/<?= $value[0] ?>.jpg"></td>
                  <td>
                    <form action="edit_item.php" method="get">
                      <input type="hidden" name="code" value="<?= $value[0] ?>">
                      <label>
                        <input class="qtyinput" type="number" name="quantity" min="1" value="<?= $value[2] ?>">
                      </label>
                    </form>
                  </td>
                  <td><?= $value[1] ?></td>
                  <td>S/<?= $value[3] ?></td>
                  <td><a class="remove" href="remove_item.php?code=<?= $value[0] ?>">Remover</a></td>
                </tr>
              <?php endforeach; ?>
              <tr class="productitm">
                <td><img class="thumb" src="//picsum.photos/100/100/?image=11"></td>
                <td>
                  <input class="qtyinput" type="number" name="quantity" min="1">
                </td>
                <td>Product name</td>
                <td>S/79.00</td>
                <td><a class="remove" href="#">Remover</a></td>
              </tr>
              <tr class="extracosts">
                <td class="light">Envío &amp; Taxi</td>
                <td class="light" colspan="2"></td>
                <td>S/35</td>
                <td></td>
              </tr>
              <tr class="totalprice">
                <td class="light">Total</td>
                <td colspan="2"></td>
                <td><span class="thick">S/<?= $total ?></span></td>
                <td></td>
              </tr>
              <tr class="checkoutrow">
                <td class="checkout" colspan="5"><a class="button--ghost" href="signup.php">Realizar pedido</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </div>
  </main>

<?php include 'includes/footer.view.php' ?>
<?php include 'includes/foot.view.php' ?>