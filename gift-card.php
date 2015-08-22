<?php
  $pageTitle = 'To Be Collected';
  $bodyId = 'product';
  include '_partials/head.php';
  include '_partials/header.php';
?>

<section class="main">
  <div class="inner">
    <article class="product">
      <header class="product__header">
        <h1>gift card</h1>
        <p>
          <span class="price">$25, $50, $75, $100, $200, $500, &amp; $1,000</span>
          <span class="spacer">|</span>
          <a class="add" href="cart.php">ADD</a>
        </p>
        <a class="back" href="index.php">&lt; Back to Collection</a>
      </header>
      <figure class="product__photo">
        <img src="_assets/img/photos/product-photo-10.jpg" alt="photo">
      </figure>
    </article>
    <aside class="product__details">
      <div class="group">
        <h4 class="group__heading">Product Description</h4>
        <p>Letterpress printed gift cards make a thoughtful gift for any and every occasion. They never expire and come in the following amounts: $25, $50, $75, $100, $200, $500 and $1,000.</p>
        <p>Surprise your friend, family member, signifcant other or colleague with a gift card. That way, he or she can choose just the right present. Our gift cards never expire.</p>
        <p>If the gift card amount is higher than the total purchase, the difference will be reimbursed to your credit card. Follow the steps below:</p>
        <ol>
          <li>Choose your products and proceed to checkout.</li>
          <li>Enter your shipping and billing address (for the credit card that will receive the purchase difference), and click "continue to next step."</li>
          <li>Choose "Gift Certificate - $0.01" from the shipping options.</li>
          <li>Enter your credit card information for the reimbursement.</li>
          <li>Enter the code provided on you gift card into "Discount Code" and hit "Apply." (Note: It is important that you complete steps 3 & 4 before entering the code.)</li>
          <li>6. Complete purchase.</li>
        </ol>
      </div>
      <div class="group">
        <h4 class="group__heading">Shipping Details</h4>
      </div>
      <ul class="share-links">
        <li class="print"><a href="#">Print</a></li>
        <li class="email"><a href="#">Email</a></li>
        <li class="pinterest"><a href="#">Pinterest</a></li>
        <li class="twitter"><a href="#">Twitter</a></li>
        <li class="facebook"><a href="#">Facebook</a></li>
      </ul>
    </aside>
  </div>
</section>

<?php
  include '_partials/footer.php';
  include '_partials/foot.php';
?>