<header class="site-header">
  <div class="inner">
    <h1 class="site-header__logo"><a href="index.php">To Be Collected</a></h1>
    <div class="site-header__navigation">
      <div class="site-header__cart">
        <p>Cart <span class="spacer">|</span> <a href="#">1</a></p>
      </div>
      <nav class="site-header__collections">
        <span class="nav-toggle">Collections</span>
        <ol>
          <li><a href="#">Full Collection</a></li>
          <li><a href="#">Small Goods</a></li>
          <li><a href="#">Furniture</a></li>
          <li><a href="#">Housewares</a></li>
          <li><a href="#">Lighting</a></li>
          <li><a href="#">Tables</a></li>
          <li><a href="#">Jewelry</a></li>
          <li><a href="#">Miscellaneous</a></li>
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