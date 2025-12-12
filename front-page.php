<?php get_header(); ?>

<main id="main-content">
  <!-- Hero Section -->
 <section class="hero-section">
  <div class="hero-image-container" style="background-image: url('<?php echo esc_url( get_theme_mod('church_image') ); ?>')";>
    <div class="hero-overlay"></div>
    <div class="hero-content">
     <h1 class="church-name"> <?php echo esc_html( get_theme_mod('church_name', 'Our Church') ); ?><h1>
      <p class="church-tagline"><?php echo esc_html( get_theme_mod('church_description', 'Welcome') ); ?></p>
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
</section>
<section class="service-times-section">

  <h2 class="section-title">Worship at Northwest</h2>
  
  <div class="main-service-layout">
    
    <div class="main-service-info">
      <h3 class="service-heading">Sunday Worship</h3>
      <p>Our woman love engaging with the community and serve each day. They enjoy getting together for coffee, cleaning the church, and have an annual tea. Our woman love engaging with the community and serve each day. They enjoy getting together for coffee, cleaning the church, and have an annual tea.</p>
      </div>
    
    <div class="main-service-image">
      <img src="<?php echo esc_html( get_theme_mod('welcome_image', 'Welcome') ); ?>" alt="Welcome photo">
    </div>
  </div>

  <h2 class="section-title other-services-header">Other services</h2>

  <div class="other-services-container">
    
    <div class="service-card">
      <div class="card-header">
        <h4 class="card-heading">Sunday Night</h4>
      </div>
      <p class="card-description">Our woman love engaging with the community and serve each day. They enjoy getting together for coffee, cleaning the church, and have an annual tea.</p>
      <div class="time-footer">
        <span class="time-large">7:00</span>
        <span class="time-small">Pm</span>
      </div>
    </div>
    
    
    
    <div class="service-card">
      <div class="card-header">
        <h4 class="card-heading">Sunday school</h4>
      </div>
      <p class="card-description">Our woman love engaging with the community and serve each day. They enjoy getting together for coffee, cleaning the church, and have an annual tea.</p>
      <div class="time-footer">
        <span class="time-large">10:00</span>
        <span class="time-small">Am</span>
      </div>
    </div>
    
    <div class="service-card">
      <div class="card-header">
        <h4 class="card-heading">Sunday Worship</h4>
      </div>
      <p class="card-description">Our woman love engaging with the community and serve each day. They enjoy getting together for coffee, cleaning the church, and have an annual tea.</p>
      <div class="time-footer">
        <span class="time-large">11:00</span>
        <span class="time-small">Am</span>
      </div>
    </div>
    
  </div>
</section>
</main>

<?php get_footer(); ?>
