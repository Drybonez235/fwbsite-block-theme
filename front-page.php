<?php get_header(); ?>

<main id="main-content">
  <!-- Hero Section -->
 <section class="hero-section">
  <div class="hero-image-container" style="background-image: url('<?php echo esc_url( get_theme_mod('church_image') ); ?>')";>
    <div class="hero-overlay"></div>
    <div class="hero-content">
     <h1 class="church-name"> <?php echo esc_html( get_theme_mod('church_name', 'Our Church')); ?><h1>
      <p class="church-tagline"><?php echo esc_html( get_theme_mod('church_description', 'Welcome') ); ?></p>
    </div>
  </div>

  <div class="info-bar">
    <div class="info-group address-contact">
      <p class="service-time">
        Sunday School: <span><?php echo esc_html( get_theme_mod('sunday_school_time', '9:30 am') ); ?></span>
      </p>
	<p class="service-time">
        Worship Service: <span><?php echo esc_html( get_theme_mod('sunday_service_time', '11:00 am') ); ?></span> 
      </p>
    </div>
    <div class="info-group address-contact">
      <p class="contact-number"><?php echo get_theme_mod('church_phone', '(123) 234-4567'); ?></p>
      <p class="address"> <?php echo get_theme_mod('church_address', '123 Main Street, Hometown'); ?></p>
    
    </div>
  </div>
</section>

<section class="service-times-section">

 <div class="main-service-hero">
        <div class="hero-overlay">
            <h2 class="hero-title">Worship at <span><?php echo esc_html( get_theme_mod('church_name', 'Northwest Church')); ?></span></h2>
            
            <div class="hero-content">
                <h3 class="hero-service-heading">Sunday Worship</h3>
                <span class="hero-time-large"><?php echo esc_html( get_theme_mod('sunday_service_time', '11:00 AM') ); ?></span>
                
                <p class="hero-description">
                    <?php echo get_theme_mod('sunday_service_description', 'A time of vibrant worship, engaging teaching, and communion. Children’s Church and Nursery are available.'); ?>
                </p>
            </div>
        </div>
        <?php if ( get_theme_mod('welcome_image') ) : ?>
            <div class="hero-background-image" style="background-image: url('<?php echo esc_url( get_theme_mod('welcome_image') ); ?>');"></div>
        <?php endif; ?>
    </div>

  <h2 class="section-title other-services-header">Service Information</h2>

  <div class="other-services-container">
   
  <div class="service-card">
      <div class="card-header">
        <h4 class="card-heading">Sunday school</h4>
      </div>
      <p class="card-description"><?php echo get_theme_mod('sunday_school_description', ''); ?></p>
      <div class="time-footer">
        <span class="time-large"><?php echo esc_html( get_theme_mod('sunday_school_time', '9:30 AM') ); ?></span>
      </div>
    </div>

    <div class="service-card">
      <div class="card-header">
        <h4 class="card-heading">Sunday Service</h4>
      </div>
      <p class="card-description"><?php echo get_theme_mod('sunday_service_description', 'Describe your sunday service'); ?></p>
      <div class="time-footer">
        <span class="time-large"><?php echo esc_html( get_theme_mod('sunday_service_time', '9:30 AM') ); ?></span>
      </div>
    </div>

    <?php if ( get_theme_mod('enable_sunday_night', false) ) : ?>
      <div class="service-card">
      <div class="card-header">
        <h4 class="card-heading">Sunday Night</h4>
      </div>
      <p class="card-description"><?php echo get_theme_mod('sunday_night_description', ''); ?></p>
      <div class="time-footer">
        <span class="time-large"><?php echo get_theme_mod('sunday_night_time', '6:00 PM'); ?></span>
      </div>
    </div> 
      <?php endif; ?>

      <?php if ( get_theme_mod('enable_wednesday_night', false) ) : ?>
      <div class="service-card">
      <div class="card-header">
        <h4 class="card-heading">Wednesday Night</h4>
      </div>
      <p class="card-description"><?php echo get_theme_mod('wednesday_night_description', 'Describe your wednesday night service.'); ?></p>
      <div class="time-footer">
        <span class="time-large"><?php echo get_theme_mod('wednesday_night_time', '6:00 PM'); ?></span>
      </div>
    </div> 
      <?php endif; ?>
    
  </div>
</section>
</main>

<?php get_footer(); ?>
