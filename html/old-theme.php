<!DOCTYPE html>

<!--[if IEMobile 7 ]><html class="no-js iem7"><![endif]-->
<!--[if lt IE 8 ]><html class="no-js ie ltie8 ltie9 ltie10" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8 ltie9 ltie10" lang="en"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie ie9 ltie10"> <![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>

  <meta charset="utf-8">
  
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' /><![endif]-->
  <meta http-equiv="imagetoolbar" content="false">
  <meta http-equiv="cleartype" content="on">

  <title>
  {{ page_title }}{% if current_tags %} &ndash; {{ 'general.meta.tagged' | t }} "{{ current_tags | join: ', ' }}"{% endif %}{% if current_page != 1 %} &ndash; {{ 'general.meta.page' | t }} {{ current_page }}{% endif %}{% unless page_title contains shop.name %} &ndash; {{ shop.name }}{% endunless %}
  </title>

  {% if page_description %}
  <meta name="description" content="{{ page_description }}" />
  {% endif %}
  <meta name="author" content="Page Author Goes Here">
  <meta name="copyright" content="Copyright Message Goes Here">

  <meta name="DC.title" content="Page Title Repeated Here">
  <meta name="DC.subject" content="Page Description Repeated Here">
  <meta name="DC.creator" content="Page Author Repeated Here, with Developer">

  {% include 'fb-open-graph-tags' %}
  {% include 'twitter-card' %}

  {{ 'style.scss.css' | asset_url | stylesheet_tag }}
  {{ 'social-buttons.scss.css' | asset_url | stylesheet_tag }}
  <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|EB+Garamond">

  {{ 'html5shiv.js' | asset_url | script_tag }}
  <script src="_assets/js/scripts.head.min.js"></script>
  
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ 'apple-touch-icon-152x152-precomposed.png' | asset_url }}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ 'apple-touch-icon-144x144-precomposed.png' | asset_url }}">
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ 'apple-touch-icon-120x120-precomposed.png' | asset_url }}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ 'apple-touch-icon-114x114-precomposed.png' | asset_url }}">
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ 'apple-touch-icon-76x76-precomposed.png' | asset_url }}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ 'apple-touch-icon-72x72-precomposed.png' | asset_url }}">
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="{{ 'apple-touch-icon-60x60-precomposed.png' | asset_url }}">
  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ 'apple-touch-icon-57x57-precomposed.png' | asset_url }}">
  <link rel="apple-touch-icon-precomposed" href="{{ 'apple-touch-icon-precomposed.png' | asset_url }}">
  <link rel="shortcut icon" href="{{ 'favicon.png' | asset_url }}" type="image/png" />

  <link rel="canonical" href="{{ canonical_url }}" />

  {{ content_for_header }}

  {{ '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' | script_tag }}
  {{ 'jquery-migrate-1.2.0.min.js' | asset_url | script_tag }}

  {{ 'option_selection.js' | shopify_asset_url | script_tag }}
  {{ 'api.jquery.js' | shopify_asset_url | script_tag }}

  {% if template contains 'customers' %}
    {{ 'shopify_common.js' | shopify_asset_url | script_tag }}
    {{ 'customer_area.js'  | shopify_asset_url | script_tag }}
  {% endif %}
  {{ 'scripts.js' | asset_url | script_tag }}
  {{ 'social-buttons.js' | asset_url | script_tag }}

</head>
<body>

  <header class="site-header">
    <div class="inner">
      <h1 class="site-header__logo"><a href="index.php">{{ shop.name }}</a></h1>
      <div class="site-header__navigation">
        <div class="site-header__cart">
          <a href="/cart">Cart <span class="spacer">|</span> <span class="cart-count">{{ cart.item_count }}</span></a>
          {{ 'layout.header.cart' | t }}
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
  
  <ul class="unstyled">
    {% include 'customer_links' %}
    <li id="menu-toggle" class="menu-icon fl"><i class="fa fa-bars"></i>{{ 'layout.header.menu' | t }}</li>
  </ul>
  
  <section id="content" class="clearfix">
    {{ content_for_layout }}
  </section>

  <div class="footer-wrapper wrapper">
    <footer>
      <div class="row">

        <div class="span12 full-border"></div>

        {% capture footer_columns %}{% if settings.footer_display_blog %}+{% endif %}{% if settings.footer_display_navigation %}+{% endif %}{% if settings.footer_display_newsletter %}+{% endif %}{% if settings.footer_display_social %}+{% endif %}{% endcapture %}
        {% if footer_columns.size == 1 %}{% assign footer_span_size = 'span12' %}{% endif %}
        {% if footer_columns.size == 2 %}{% assign footer_span_size = 'span6' %}{% endif %}
        {% if footer_columns.size == 3 %}{% assign footer_span_size = 'span4' %}{% endif %}
        {% if footer_columns.size == 4 %}{% assign footer_span_size = 'span3' %}{% endif %}

        <!-- Begin latest blog post -->
        {% if settings.footer_display_blog and blogs.news.articles.size > 0 %}
        <div class="{{ footer_span_size }}">
          {% assign article = blogs.news.articles.first %}
          <div class="p30">
            <h4>{{ 'layout.footer.latest_news' | t }}</h4>
            <p class="p10"><strong>{{ article.title | link_to: article.url }}</strong></p>
            <p>{{ article.content | strip_html | truncatewords: 30 }}</p>
          </div>
        </div>
        {% endif %}
        <!-- End latest blog post -->

        {% if settings.footer_display_navigation and linklists.footer.links.size > 0 %}
        <!-- Begin footer navigation -->
        <div class="{{ footer_span_size }} footer-menu">
          <h4>{{ 'layout.footer.quick_links' | t }}</h4>
          <ul class="unstyled">
            {% for link in linklists.footer.links %}
              <li><a href="{{ link.url }}" title="{{ link.title }}">{{ link.title }}</a></li>
            {% endfor %}
          </ul>

        </div>
        <!-- End footer navigation -->
        {% endif %}

        {% if settings.footer_display_newsletter %}
        <!-- Begin newsletter -->
          <div class="{{ footer_span_size }}">
            <div class="p30">
              <h4>{{ 'layout.footer.newsletter_title' | t }}</h4>
              <form action="{{ settings.mailing_list_form_action }}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
                <input type="email" value="" placeholder="{{ 'layout.footer.newsletter_email' | t }}" name="EMAIL" id="mail" /><input type="submit" class="btn newsletter" value="{{ 'layout.footer.newsletter_submit' | t }}" name="subscribe" id="subscribe" />
              </form>
            </div>
          </div>
        <!-- End newsletter -->
        {% endif %}

        {% if settings.footer_display_social %}
        <!-- Begin social -->
          <div class="{{ footer_span_size }}">
            <h4>{{ 'layout.footer.follow_us' | t }}</h4>
            {% if settings.twitter_link != blank %}<a href="{{ settings.twitter_link }}" title="{{ 'layout.footer.social' | t: shop: shop.name, social_media: 'Twitter' }}" class="icon-social twitter">Twitter</a>{% endif %}
            {% if settings.facebook_link != blank %}<a href="{{ settings.facebook_link }}" title="{{ 'layout.footer.social' | t: shop: shop.name, social_media: 'Facebook' }}" class="icon-social facebook">Facebook</a>{% endif %}
            {% if settings.youtube_link != blank %}<a href="{{ settings.youtube_link }}" title="{{ 'layout.footer.social' | t: shop: shop.name, social_media: 'Youtube' }}" class="icon-social youtube">YouTube</a>{% endif %}
            {% if settings.atom_link != blank %}<a href="{{ settings.atom_link }}" title="{{ 'layout.footer.news' | t: shop: shop.name }}" class="icon-social atom">Blog feed</a>{% endif %}
            {% if settings.instagram_link != blank %}<a href="{{ settings.instagram_link }}" title="{{ 'layout.footer.social' | t: shop: shop.name, social_media: 'Instagram' }}" class="icon-social instagram">Instagram</a>{% endif %}
            {% if settings.pinterest_link != blank %}<a href="{{ settings.pinterest_link }}" title="{{ 'layout.footer.social' | t: shop: shop.name, social_media: 'Pinterest' }}" class="icon-social pinterest">Pinterest</a>{% endif %}
            {% if settings.vimeo_link != blank %}<a href="{{ settings.vimeo_link }}" title="{{ 'layout.footer.social' | t: shop: shop.name, social_media: 'Vimeo' }}" class="icon-social vimeo">Vimeo</a>{% endif %}
            {% if settings.tumblr_link != blank %}<a href="{{ settings.tumblr_link }}" title="{{ 'layout.footer.social' | t: shop: shop.name, social_media: 'Tumblr' }}" class="icon-social tumblr">Tumblr</a>{% endif %}
            {% if settings.google_link != blank %}<a href="{{ settings.google_link }}" title="{{ 'layout.footer.social' | t: shop: shop.name, social_media: 'Google+' }}" class="icon-social google" rel="publisher">Google+</a>{% endif %}
          </div>
        <!-- End social -->
        {% endif %}

        <!-- Begin copyright -->
        <div class="span12 tc copyright">
          <ul class="credit-cards p10 clearfix">
            {% if settings.accept_visa %}<li><img src="{{ 'icon-cc-visa.png' | asset_url }}" alt="Visa" /></li>{% endif %}
            {% if settings.accept_mastercard %}<li><img src="{{ 'icon-cc-mastercard.png' | asset_url }}" alt="MasterCard" /></li>{% endif %}
            {% if settings.accept_amex %}<li><img src="{{ 'icon-cc-amex.png' | asset_url }}" alt="Amex" /></li>{% endif %}
            {% if settings.accept_discover %}<li><img src="{{ 'icon-cc-discover.png' | asset_url }}" alt="Discover" /></li>{% endif %}
            {% if settings.accept_paypal %}<li><img src="{{ 'icon-cc-paypal.png' | asset_url }}" alt="PayPal" /></li>{% endif %}
            {% if settings.accept_google %}<li><img src="{{ 'icon-cc-google.png' | asset_url }}" alt="Google Wallet" /></li>{% endif %}
            {% if settings.accept_bitcoin %}<li><img src="{{ 'icon-cc-bitcoin.png' | asset_url }}" alt="Bitcoin" /></li>{% endif %}

          </ul> <!-- /.credit-cards -->
          <p>{{ 'layout.footer.copyright' | t }} &copy; {{ 'now' | date: "%Y" }} {{ shop.name | link_to: '/' }} | {{ powered_by_link }}</p>
        </div>
        <!-- End copyright -->

      </div>
    </footer>
  </div>
  <!-- End footer -->

  {{ 'jquery.flexslider-min.js' | asset_url | script_tag }}

  {% if settings.enable_product_image_zoom %}
    {{ 'jquery.zoom.js' | asset_url | script_tag }}
  {% endif %}
  {{ 'jquery.tweet.js' | asset_url | script_tag }}
  {{ 'jquery.fancybox.js' | asset_url | script_tag }}

</body>
</html>
