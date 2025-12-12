<?php get_header(); ?>

<main id="main-content">
  <!-- Hero Section -->
 <header class="hero-section">
  <div class="hero-image-container" style="background-image: url('<?php echo esc_url( get_theme_mod('church_image') ); ?>')";>
    <div class="hero-overlay"></div>
    <div class="hero-content">
     <?php echo esc_html( get_theme_mod('church_name', 'Our Church') ); ?>
      <p class="church-tagline">Serving Our Community Since 1950</p>
    </div>
  </div>

  <div class="info-bar">
    <div class="info-group address-contact">
      <p class="service-time">
        Sunday School: 9:00 AM
      </p>
	<p class="service-time">
        Worship Service: 10:30 AM
      </p>
    </div>
    <div class="info-group address-contact">
      <p class="contact-number">(555) 123-4567</p>
      <p class="address">123 Faith Ave, Anytown, CA 90210</p>
    
    </div>
  </div>
</header>
</main>

<?php get_footer(); ?>
