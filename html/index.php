<?php
  $pageTitle = 'To Be Collected';
  $bodyId = 'home';
  include '_partials/head.php';
  include '_partials/header.php';
?>

<section class="product-list">
  <header class="product-list__header">
    <div class="inner">
      <h3>full collection</h3>
      <div class="pagination-links">
        <a href="#" class="prev">&lt;</a>
        <ol>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
        </ol>
        <a href="#" class="next">&gt;</a>
      </div>
    </div>
  </header>
  <div class="inner">
    <article>
      <a href="product.php">
        <figure>
          <img src="_assets/img/photos/product-photo-04.jpg" alt="photo">
        </figure>
        <h6>Silver Ring <span class="spacer">|</span> $220</h6>
      </a>
    </article>
    <article>
      <a href="product.php">
        <figure>
          <img src="_assets/img/photos/product-photo-03.jpg" alt="photo">
        </figure>
        <h6>Settee <span class="spacer">|</span> $2100</h6>
      </a>
    </article>
    <article>
      <a href="product.php">
        <figure>
          <img src="_assets/img/photos/product-photo-05.jpg" alt="photo">
        </figure>
        <h6>Opus Chair <span class="spacer">|</span> $1800</h6>
      </a>
    </article>
    <article>
      <a href="product.php">
        <figure>
          <img src="_assets/img/photos/product-photo-08.jpg" alt="photo">
        </figure>
        <h6>Linen Table Runners <span class="spacer">|</span> $80e</h6>
      </a>
    </article>
    <article>
      <a href="product.php">
        <figure>
          <img src="_assets/img/photos/product-photo-07.jpg" alt="photo">
        </figure>
        <h6>Bacci Balls <span class="spacer">|</span> $140</h6>
      </a>
    </article>
    <article>
      <a href="product.php">
        <figure>
          <img src="_assets/img/photos/product-photo-06.jpg" alt="photo">
        </figure>
        <h6>Clover Necklace <span class="spacer">|</span> $210</h6>
      </a>
    </article>
  </div>
  <footer class="product-list__footer">
    <div class="pagination-links">
      <a href="#" class="prev">&lt;</a>
      <ol>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ol>
      <a href="#" class="next">&gt;</a>
    </div>
  </footer>
</section>

<?php
  include '_partials/footer.php';
  include '_partials/foot.php';
?>