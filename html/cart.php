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
        <li><a class="back" href="index.php">Continue Shopping &gt;</a></li>
        <li><a class="checkout" href="checkout-one.php">Proceed to Checkout &gt;</a></li>
      </ul>
      <ul class="cart__price-headings">
        <li>Price</li>
        <li>Quantity</li>
        <li>Item Total</li>
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
          <h5>Settee <a href="#" class="remove">Remove &gt;</a></h5>
          <p class="product-dimensions">Dimensions: 69"l x 33"d x 31"h</p>
        </div>
        <div class="group price">
          <span class="item-price">$2100</span>
          <select class="item-qty">
            <option>0</option>
            <option selected>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <span class="item-total">$2100</span>
        </div>
      </aside>
    </div>
  </div>
  <div class="cart__item">
    <div class="inner">
      <figure>
        <img src="_assets/img/photos/product-photo-03.jpg" alt="photo">
      </figure>
      <aside>
        <div class="group description">
          <h5>Settee <a href="#" class="remove">Remove &gt;</a></h5>
          <p class="product-dimensions">Dimensions: 69"l x 33"d x 31"h</p>
        </div>
        <div class="group price">
          <span class="item-price">$2100.00</span>
          <select class="item-qty">
            <option>0</option>
            <option selected>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          <span class="item-total">$2100.00</span>
        </div>
      </aside>
    </div>
  </div>
  <footer class="cart__footer">
    <div class="inner">
      <form class="cart__footer__shipping">
        <h6>Calculate Shipping&nbsp;*</h6>
        <select>
          <option>Canada</option>
          <option>Mexico</option>
          <option selected>United States</option>
        </select>
        <select>
          <option>- Select State -</option>
          <option>Alabama</option>
          <option>Alaska</option>
          <option>Arizona</option>
        </select>
        <input type="text" placeholder="Enter ZIP Code">
        <input type="submit" value="Show Rates">
        <p class="standard-shipping">Standard Shipping: $620.00</p>
        <p class="disclaimer">*For shipping outside the U.S., please
contact us directly at internationalorders@tbc.com</p>
      </form>
      <div class="cart__footer__totals">
        <ul>
          <li>
            <span class="label">Cart Subtotal:</span>
            <span class="amount">$4200.00</span>
          </li>
          <li>
            <span class="label">Approx Shipping:</span>
            <span class="amount">$620.00</span>
          </li>
          <li>
            <span class="label">Sales Tax:</span>
            <span class="amount">$80.00</span>
          </li>
          <li class="grand-total">
            <span class="label">Approx Total:</span>
            <span class="amount">$4900.00</span>
          </li>
        </ul>
        <p>Orders are final and can't be changed so please ensure you have selected the correct products.</p>
        <a class="button checkout" href="checkout-one.php">Proceed to Checkout</a>
      </div>
    </div>
  </footer>
</section>

<?php
  include '_partials/footer.php';
  include '_partials/foot.php';
?>