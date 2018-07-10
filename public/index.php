<?php include 'includes/head.view.php' ?>
<?php include 'includes/header.view.php' ?>
<?php
  $sql = 'SELECT * FROM producto';
  $query = mysqli_query($mysql, $sql);
  $max = 0;
?>
<?php include 'includes/banner.view.php' ?>
  
  <main class="nd-container">
    <div class="main-container col-100">
      <section>
        <h2>Productos más recientes</h2>
        <div class="products d-grid">
          <?php while ($row = mysqli_fetch_assoc($query)) : ?>
            <?php if ($max == 6) break; ?>
            <article class="card-container">
              <div class="card__img">
                <a href="product.php?producto=<?= $row['idproducto'] ?>">
                  <img src="img/products/<?= $row['idproducto'] ?>.jpg">
                </a>
              </div>
              <div class="card__data">
                <div class="row-one">
                  <a href="product.php?producto=<?= $row['idproducto'] ?>">
                    <h3><?= $row['nombre'] ?></h3>
                  </a>
                  <p class="price">S/<?= $row['precio'] ?></p>
                </div>
                <div class="row-two">
                  <p><?= $row['marca'] ?></p>
                </div>
              </div>
            </article>
            <?php $max++ ?>
          <?php endwhile; ?>
          <article class="card-container">
            <div class="card__img"><a href="product.php"><img src="//picsum.photos/500/500/?image=325"></a></div>
            <div class="card__data">
              <div class="row-one"><a href="product.php">
                  <h3>Product model</h3></a>
                <p class="price">S/321</p>
              </div>
              <div class="row-two">
                <p>Product brand</p>
              </div>
            </div>
          </article>
          <article class="card-container">
            <div class="card__img"><a href="product.php"><img src="//picsum.photos/500/500/?image=327"></a></div>
            <div class="card__data">
              <div class="row-one"><a href="product.php">
                  <h3>Product model</h3></a>
                <p class="price">S/321</p>
              </div>
              <div class="row-two">
                <p>Product brand</p>
              </div>
            </div>
          </article>
          <article class="card-container">
            <div class="card__img"><a href="product.php"><img src="//picsum.photos/500/500/?image=328"></a></div>
            <div class="card__data">
              <div class="row-one"><a href="product.php">
                  <h3>Product model</h3></a>
                <p class="price">S/321</p>
              </div>
              <div class="row-two">
                <p>Product brand</p>
              </div>
            </div>
          </article>
          <article class="card-container">
            <div class="card__img"><a href="product.php"><img src="//picsum.photos/500/500/?image=329"></a></div>
            <div class="card__data">
              <div class="row-one"><a href="product.php">
                  <h3>Product model</h3></a>
                <p class="price">S/321</p>
              </div>
              <div class="row-two">
                <p>Product brand</p>
              </div>
            </div>
          </article>
        </div>
      </section>
    </div>
  </main>
  <aside class="nd-container">
    <div class="aside-container">
      <section>
        <h2>Productos destacados</h2>
        <div class="products d-grid">
          <article class="card-container">
            <div class="card__img"><a href="product.php"><img src="//picsum.photos/500/650/?image=215"></a></div>
            <div class="card__data alter">
              <div class="row-one"><a href="product.php">
                  <h3>Product model</h3></a>
                <p class="price">S/512</p>
              </div>
              <div class="row-two"><a class="button--ghost" href="product.php">Más información</a></div>
            </div>
          </article>
          <article class="card-container">
            <div class="card__img"><a href="product.php"><img src="//picsum.photos/500/650/?image=216"></a></div>
            <div class="card__data alter">
              <div class="row-one"><a href="product.php">
                  <h3>Product model</h3></a>
                <p class="price">S/512</p>
              </div>
              <div class="row-two"><a class="button--ghost" href="product.php">Más información</a></div>
            </div>
          </article>
          <article class="card-container">
            <div class="card__img"><a href="product.php"><img src="//picsum.photos/500/650/?image=217"></a></div>
            <div class="card__data alter">
              <div class="row-one"><a href="product.php">
                  <h3>Product model</h3></a>
                <p class="price">S/512</p>
              </div>
              <div class="row-two"><a class="button--ghost" href="product.php">Más información</a></div>
            </div>
          </article>
        </div>
      </section>
    </div>
  </aside>

<?php include 'includes/foot.view.php' ?>
<?php include 'includes/footer.view.php' ?>