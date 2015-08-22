<?php
  $pageTitle = 'To Be Collected';
  $bodyId = 'page';
  include '_partials/head.php';
  include '_partials/header.php';
?>

<section class="main cart">
  <header class="cart__header">
    <div class="inner">
      <h1>my cart</h1>
      <ul class="cart__header__links">
        <li><a class="back">Continue Shopping &gt;</a></li>
        <li><a class="checkout">Proceed to Checkout &gt;</a></li>
      </ul>
    </div>
  </header>
  <div class="cart__item">
    <div class="inner">
      <figure>
        <img src="_assets/img/photos/product-photo-03.jpg" alt="photo">
      </figure>
      <aside>
        <div class="group description">
          <h3>Settee <a href="#" class="remove">Remove &gt;</a></h3>
          <span class="product-dimensions">Dimensions: 69"l x 33"d x 31"h</span>
        </div>
        <div class="group price">
          <span class="item-price">$2100</span>
          <span class="item-qty"><input type="number"></span>
          <span class="item-total">$2100</span>
        </div>
      </aside>
    </div>
  </div>
</section>

<?php
  include '_partials/footer.php';
  include '_partials/foot.php';
?>