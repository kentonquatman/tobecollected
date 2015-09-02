<?php
  $pageTitle = 'To Be Collected';
  $bodyId = 'checkout';
  include '_partials/head.php';
  include '_partials/header.php';
?>

<section class="main checkout">
  <header class="checkout__header">
    <div class="inner">
      <h1>checkout</h1>
      <ul class="checkout__header__steps">
        <li class="current">
          <span class="number">1</span>
          <span class="label">Shipping and Billing Address</span>
        </li>
        <li>
          <span class="number">2</span>
          <span class="label">Payment</span>
        </li>
      </ul>
    </div>
  </header>
  <div class="checkout__content">
    <div class="inner">
      <form class="checkout__form">
        <fieldset class="checkout__form__billing">
          <h4>New Customer Billing Information</h4>
          <p class="field-group">
            <label for="billing-first-name">First Name</label>
            <input type="text" name="billing-first-name" id="billing-first-name">
          </p>
          <p class="field-group">
            <label for="billing-last-name">Last Name</label>
            <input type="text" name="billing-last-name" id="billing-last-name">
          </p>
          <p class="field-group">
            <label for="billing-company">Company</label>
            <input type="text" name="billing-company" id="billing-company">
          </p>
          <p class="field-group">
            <label for="billing-address-one">Address 1</label>
            <input type="text" name="billing-address-one" id="billing-address-one">
          </p>
          <p class="field-group">
            <label for="billing-address-two">Address 2</label>
            <input type="text" name="billing-address-two" id="billing-address-two">
          </p>
          <p class="field-group">
            <label for="billing-city">City</label>
            <input type="text" name="billing-city" id="billing-city">
          </p>
          <p class="field-group">
            <label for="billing-zip-code">ZIP Code</label>
            <input type="text" name="billing-zip-code" id="billing-zip-code">
          </p>
          <p class="field-group">
            <label for="billing-country">Country</label>
            <select type="text" name="billing-country" id="billing-country">
              <option>Canada</option>
              <option>Mexico</option>
              <option selected>United States</option>
            </select>
          </p>
          <p class="field-group">
            <label for="billing-state">State</label>
            <select type="text" name="billing-state" id="billing-state">
              <option>- Select State -</option>
              <option>Alabama</option>
              <option>Alaska</option>
              <option>Arizona</option>
            </select>
          </p>
          <p class="field-group">
            <label for="billing-phone">Phone Number</label>
            <input type="text" name="billing-phone" id="billing-phone">
          </p>
          <p class="ship-to-billing">
            <label for="ship-to-billing">
              <input type="checkbox" name="ship-to-billing" id="ship-to-billing">
              Ship to billing address
            </label>
          </p>
        </fieldset>
        <fieldset class="checkout__form__shipping">
          <h4>Shipping Address</h4>
          <p class="field-group">
            <label for="shipping-first-name">First Name</label>
            <input type="text" name="shipping-first-name" id="shipping-first-name">
          </p>
          <p class="field-group">
            <label for="shipping-last-name">Last Name</label>
            <input type="text" name="shipping-last-name" id="shipping-last-name">
          </p>
          <p class="field-group">
            <label for="shipping-company">Company</label>
            <input type="text" name="shipping-company" id="shipping-company">
          </p>
          <p class="field-group">
            <label for="shipping-address-one">Address 1</label>
            <input type="text" name="shipping-address-one" id="shipping-address-one">
          </p>
          <p class="field-group">
            <label for="shipping-address-two">Address 2</label>
            <input type="text" name="shipping-address-two" id="shipping-address-two">
          </p>
          <p class="field-group">
            <label for="billing-city">City</label>
            <input type="text" name="billing-city" id="billing-city">
          </p>
          <p class="field-group">
            <label for="shipping-zip-code">ZIP Code</label>
            <input type="text" name="shipping-zip-code" id="shipping-zip-code">
          </p>
          <p class="field-group">
            <label for="shipping-country">Country</label>
            <select type="text" name="shipping-country" id="shipping-country">
              <option>Canada</option>
              <option>Mexico</option>
              <option selected>United States</option>
            </select>
          </p>
          <p class="field-group">
            <label for="shipping-state">State</label>
            <select type="text" name="shipping-state" id="shipping-state">
              <option>- Select State -</option>
              <option>Alabama</option>
              <option>Alaska</option>
              <option>Arizona</option>
            </select>
          </p>
          <p class="field-group">
            <label for="shipping-phone">Phone Number</label>
            <input type="text" name="shipping-phone" id="shipping-phone">
          </p>
        </fieldset>
      </form>
      <aside class="checkout__summary">
        <div class="inner">
          <h4>Order Summary</h4>
          <p>Order ID: 804982</p>
          <ul class="checkout__summary__totals">
            <li>
              <span class="label">Merchandise Total:</span>
              <span class="ammount">$4200.00</span>
            </li>
            <li>
              <span class="label">Standard Delivery:</span>
              <span class="ammount">$620.00</span>
            </li>
            <li>
              <span class="label">Sales Tax:</span>
              <span class="ammount">$80.00</span>
            </li>
            <li class="totals">
              <span class="label">Current Order Total:</span>
              <span class="ammount">$4900.00</span>
            </li>
          </ul>
          <p class="view-cart"><a href="cart.php">View My Items &gt;</a></p>
          <a href="#" class="button">Continue</a>
        </div>
      </aside>
    </div>
  </div>
  <div class="checkout__registration">
    <div class="inner">
      <form class="checkout__registration__form">
        <p class="register-checkbox">
          <label for="register-checkbox">
            <input type="checkbox" name="register-checkbox" id="register-checkbox">
            I would like to register with To Be Collected
When you register you will be able to track your order and accelerate your next checkout.
          </label>
        </p>
        <fieldset>
          <p class="field-group">
            <label for="register-username">Username</label>
            <input type="text" name="register-username" id="register-username">
          </p>
          <p class="field-group">
            <label for="register-password">Password</label>
            <input type="password" name="register-password" id="register-password">
          </p>
          <p class="field-group">
            <label for="register-confirm">Confirm Password</label>
            <input type="password" name="register-confirm" id="register-confirm">
          </p>
        </fieldset>
      </form>
    </div>
  </div>
</section>

<?php
  include '_partials/footer.php';
  include '_partials/foot.php';
?>