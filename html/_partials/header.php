<header class="site-header">
  <div class="inner">
    <h1 class="site-header__logo"><a href="index.php">To Be Collected</a></h1>
    <div class="site-header__navigation">
      <div class="site-header__cart">
        <a href="cart.php">Cart <span class="spacer">|</span> <span class="cart-count">1</span></a>
      </div>
      <nav class="site-header__collections">
        <span class="nav-toggle">Collections</span>
        <ol>
          <li><a href="index.php">Full Collection</a></li>
          <li><a href="index.php">Small Goods</a></li>
          <li><a href="index.php">Furniture</a></li>
          <li><a href="index.php">Housewares</a></li>
          <li><a href="index.php">Lighting</a></li>
          <li><a href="index.php">Tables</a></li>
          <li><a href="index.php">Jewelry</a></li>
          <li><a href="index.php">Miscellaneous</a></li>
        </ol>
      </nav>
    </div>
    <?php if ( $bodyId == 'home' ) : ?>
    <aside class="site-header__content">
      <div class="group">
        <img src="_assets/img/photos/product-photo-02.jpg" alt="photo">
        <div class="text-wrapper">
          <h1>accessible luxury</h1>
          <p>Known for carrying modern furnishings and emerging designers, TO BE COLLECTED features a personally edited collection of accessories for men, women and the home. Independently owned, we have a true love for artisanal wares and specializes in hand crafted jewelry, and unique housewares.</p>
        </div>
      </div>
      <div class="group">
        <img src="_assets/img/photos/product-photo-01.jpg" alt="photo">
      </div>
    </aside>
    <?php endif ?>
  </div>
</header>