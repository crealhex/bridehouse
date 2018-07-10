<?php include 'includes/head.view.php' ?>
<?php include 'includes/header.view.php' ?>
<?php
  $sql = 'SELECT * FROM producto';
  $query = mysqli_query($mysql, $sql);
?>

<main class="nd-container">
  <div class="main-container col-100">
    <?php if ($row = mysqli_fetch_assoc($query)) : ?>
      <section class="d-flex">
        <div class="self col-one col-50">
          <div class="self__img">
            <img id="img_01" src="img/products/<?= $row['idproducto'] ?>.jpg" data-zoom-image="//picsum.photos/2000/2000/?image=74">
          </div>
          <div id="self-gallery">
            <a href="#" data-image="//picsum.photos/672/604/?image=74" data-zoom-image="//picsum.photos/2000/2000/?image=74">
              <img src="//picsum.photos/100/100/?image=74">
            </a>
            <a href="#" data-image="//picsum.photos/672/604/?image=75" data-zoom-image="//picsum.photos/2000/2000/?image=75">
              <img src="//picsum.photos/100/100/?image=75">
            </a>
            <a href="#" data-image="//picsum.photos/672/604/?image=76" data-zoom-image="//picsum.photos/2000/2000/?image=76">
              <img src="//picsum.photos/100/100/?image=76">
            </a>
            <a href="#" data-image="//picsum.photos/672/604/?image=77" data-zoom-image="//picsum.photos/2000/2000/?image=77">
              <img src="//picsum.photos/100/100/?image=77">
            </a>
            <a href="#" data-image="//picsum.photos/672/604/?image=78" data-zoom-image="//picsum.photos/2000/2000/?image=78">
              <img src="//picsum.photos/100/100/?image=78">
            </a>
          </div>
        </div>
        <div class="self col-two col-50">
          <h1><?= $row['nombre'] ?></h1>
          <p class="price">S/<?= $row['precio'] ?></p>
          <form action="add_to_cart.php" method="get">
            <input type="hidden" name="idp" value="<?= $row['idproducto'] ?>">
            <input type="hidden" name="name" value="<?= $row['nombre'] ?>">
            <input type="hidden" name="price" value="<?= $row['precio'] ?>">
            <label class="quantity">Cantidad
              <input type="number" min="1" name="quantity" value="1">
            </label>
            <button class="button--ghost" type="submit">Agregar al carrito</button>
          </form>
          <div class="details">
            <p>Detalles del producto</p>
            <p><?= $row['descripcion'] ?></p>
          </div>
        </div>
      </section>
    <?php endif; ?>
  </div>
</main>

<?php
  $sql = 'SELECT * FROM producto';
  $query = mysqli_query($mysql, $sql);
  $max = 0;
?>

<aside class="nd-container">
  <div class="aside-container">
    <section>
      <h2>Productos recomendados</h2>
      <div class="products d-grid gallery">
        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
          <?php if ($max == 5) break ?>
          <article class="card-container no-margin">
            <div class="card__img"><a href="product.php?producto=<?= $row['idproducto'] ?>"><img src="img/products/<?= $row['idproducto'] ?>.jpg"></a></div>
          </article>
        <?php endwhile; ?>
        <article class="card-container no-margin">
          <div class="card__img"><a href="product.php"><img src="//picsum.photos/500/500/?image=322"></a></div>
        </article>
        <article class="card-container no-margin">
          <div class="card__img"><a href="product.php"><img src="//picsum.photos/500/500/?image=323"></a></div>
        </article>
        <article class="card-container no-margin">
          <div class="card__img"><a href="product.php"><img src="//picsum.photos/500/500/?image=324"></a></div>
        </article>
        <article class="card-container no-margin">
          <div class="card__img"><a href="product.php"><img src="//picsum.photos/500/500/?image=325"></a></div>
        </article>
      </div>
    </section>
  </div>
</aside>

<?php include 'includes/footer.view.php' ?>
<?php include 'includes/foot.view.php' ?>
