<?php get_header(); ?>

<main id="main-content">
  <!-- Hero Section -->
 <section
  class="hero"
  style="background-image: url('<?php echo esc_url( get_theme_mod('church_image') ); ?>');"
>
  <div class="overlay">
    <h1 class="church-name">
      <?php echo esc_html( get_theme_mod('church_name', 'Our Church') ); ?>
    </h1>
  </div>
</section> 

<section class="church-description">
  <div class="container three-column">
    <!-- Left: welcome text -->
    <div class="col left">
    

      <p class="welcome-intro">
        <?php
          echo esc_html(
            get_theme_mod(
              'welcome_text',
              get_theme_mod('welcome_message', 'Welcome to our church!')
            )
          );
        ?>
      </p>
    </div>

    <!-- Center: welcome image -->
    <div class="col center">
      <?php if ( get_theme_mod('welcome_image') ) : ?>
        <img
          class="welcome-img"
          src="<?php echo esc_url( get_theme_mod('welcome_image') ); ?>"
          alt="<?php echo esc_attr( get_theme_mod('church_name', get_bloginfo('name')) ); ?>"
        />
      <?php endif; ?>
    </div>

    <!-- Right: service / contact info -->
    <div class="col right">
      <ul class="church-info">
        <li class="info-item">
          <!-- location icon -->
          <svg class="icon icon-location" xmlns="http://www.w3.org/2000/svg"
               width="20" height="20" fill="black" viewBox="0 0 24 24"
               aria-hidden="true">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 
                     0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
          </svg>
          <span class="info-text">
            <?php echo esc_html( get_theme_mod('church_address', '123 Main Street, Hometown, USA') ); ?>
          </span>
        </li>

        <li class="info-item">
          <!-- clock icon -->
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" aria-hidden="true">
  <g fill="black">
    <path d="M13.654,0.659 C12.342,-0.292 10.604,-0.105 9.664,1.042 C10.615,1.358 11.535,1.827 12.393,2.449 C13.25,3.073 13.983,3.807 14.586,4.622 C15.35,3.347 14.965,1.614 13.654,0.659 Z"/>
    <path d="M2.644,2.427 C3.502,1.811 4.422,1.347 5.374,1.032 C4.433,-0.104 2.694,-0.288 1.383,0.654 C0.072,1.6 -0.314,3.316 0.451,4.579 C1.055,3.773 1.788,3.045 2.644,2.427 Z"/>
    <path d="M13.924,8.633 C13.924,8.435 13.912,8.24 13.896,8.047 C13.624,4.907 11.198,2.401 8.131,2.081 C7.995,2.065 7.858,2.064 7.719,2.059 C7.637,2.055 7.555,2.045 7.471,2.045 C3.899,2.045 1.008,4.994 1.008,8.633 C1.013,10.574 1.815,12.235 3.041,13.415 C2.633,13.627 2.348,14.056 2.348,14.558 C2.348,15.267 2.912,15.842 3.608,15.842 C4.274,15.842 4.812,15.315 4.858,14.648 C5.547,14.959 6.298,15.155 7.089,15.202 C7.215,15.21 7.34,15.222 7.467,15.222 C7.612,15.222 7.752,15.209 7.897,15.2 C8.698,15.146 9.458,14.939 10.153,14.614 C10.182,15.298 10.729,15.843 11.406,15.843 C12.102,15.843 12.665,15.268 12.665,14.559 C12.665,14.036 12.36,13.589 11.922,13.388 C13.152,12.19 13.924,10.506 13.924,8.633 Z M7.527,13.314 C4.964,13.314 2.88,11.198 2.88,8.598 C2.88,5.998 4.964,3.884 7.527,3.884 C10.089,3.884 12.174,5.998 12.174,8.598 C12.174,11.198 10.089,13.314 7.527,13.314 Z"/>
    <rect x="7" y="5" width="1" height="4"/>
    <rect x="7" y="8" width="3" height="1"/>
  </g>
</svg>
          </span>
          <span class="info-text">
            Sunday School: <?php echo esc_html( get_theme_mod('sunday_school_time', '9:30 AM') ); ?>
          </span>
        </li>

        <li class="info-item">
          <span class="icon">
            <!-- clock svg reused -->
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24" height="24" aria-hidden="true">
  <g fill="black">
    <path d="M13.654,0.659 C12.342,-0.292 10.604,-0.105 9.664,1.042 C10.615,1.358 11.535,1.827 12.393,2.449 C13.25,3.073 13.983,3.807 14.586,4.622 C15.35,3.347 14.965,1.614 13.654,0.659 Z"/>
    <path d="M2.644,2.427 C3.502,1.811 4.422,1.347 5.374,1.032 C4.433,-0.104 2.694,-0.288 1.383,0.654 C0.072,1.6 -0.314,3.316 0.451,4.579 C1.055,3.773 1.788,3.045 2.644,2.427 Z"/>
    <path d="M13.924,8.633 C13.924,8.435 13.912,8.24 13.896,8.047 C13.624,4.907 11.198,2.401 8.131,2.081 C7.995,2.065 7.858,2.064 7.719,2.059 C7.637,2.055 7.555,2.045 7.471,2.045 C3.899,2.045 1.008,4.994 1.008,8.633 C1.013,10.574 1.815,12.235 3.041,13.415 C2.633,13.627 2.348,14.056 2.348,14.558 C2.348,15.267 2.912,15.842 3.608,15.842 C4.274,15.842 4.812,15.315 4.858,14.648 C5.547,14.959 6.298,15.155 7.089,15.202 C7.215,15.21 7.34,15.222 7.467,15.222 C7.612,15.222 7.752,15.209 7.897,15.2 C8.698,15.146 9.458,14.939 10.153,14.614 C10.182,15.298 10.729,15.843 11.406,15.843 C12.102,15.843 12.665,15.268 12.665,14.559 C12.665,14.036 12.36,13.589 11.922,13.388 C13.152,12.19 13.924,10.506 13.924,8.633 Z M7.527,13.314 C4.964,13.314 2.88,11.198 2.88,8.598 C2.88,5.998 4.964,3.884 7.527,3.884 C10.089,3.884 12.174,5.998 12.174,8.598 C12.174,11.198 10.089,13.314 7.527,13.314 Z"/>
    <rect x="7" y="5" width="1" height="4"/>
    <rect x="7" y="8" width="3" height="1"/>
  </g>
</svg>
          </span>
          <span class="info-text">
            Sunday Service: <?php echo esc_html( get_theme_mod('sunday_service_time', '11:00 AM') ); ?>
          </span>
        </li>

        <li class="info-item">
           <svg class="icon icon-phone" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" viewBox="0 0 24 24">
            <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 
                     1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 
                     1 1V20c0 .55-.45 1-1 1C10.07 21 3 13.93 3 
                     5c0-.55.45-1 1-1h3.5c.55 0 1 .45 
                     1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.24 
                     1.02l-2.21 2.2z"/>
          </svg>
          <span class="info-text">
            <?php echo esc_html( get_theme_mod('church_phone', '(555) 123-4567') ); ?>
          </span>
        </li>

        <li class="info-item">
          <svg class="icon icon-email" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" viewBox="0 0 24 24">
            <path d="M20 4H4c-1.1 0-2 .9-2 
                     2v12c0 1.1.9 2 2 
                     2h16c1.1 0 2-.9 
                     2-2V6c0-1.1-.9-2-2-2zm0 
                     4l-8 5-8-5V6l8 
                     5 8-5v2z"/>
          </svg>
          <span class="info-text">
            <a href="mailto:<?php echo antispambot( get_theme_mod('church_email', 'info@yourchurch.org') ); ?>">
              <?php echo esc_html( get_theme_mod('church_email', 'info@yourchurch.org') ); ?>
            </a>
          </span>
        </li>
      </ul>
    </div>
  </div>
</section>

<div class="hero-welcome">
  <p class="church-subheading">
    <?php echo esc_html( get_theme_mod('church_description', 'Welcome to our church!') ); ?>
  </p>
</div> 

  <!-- Service Information -->
  <section class="services">
    <details class="service-info">
      <summary><strong id="service_info">Service Information</strong></summary>

      <p>
        <strong>Location:</strong>
        <?php echo get_theme_mod('church_location', '123 Main Street, Hometown'); ?>
      </p>

      <p>
        <strong>Sunday School:</strong>
        <?php echo get_theme_mod('sunday_school_time', '9:30 AM'); ?><br />
        <?php echo get_theme_mod('sunday_school_description', ''); ?>
      </p>

      <p>
        <strong>Main Service:</strong>
        <?php echo get_theme_mod('sunday_service_time', '11:00 AM'); ?><br />
        <?php echo get_theme_mod('sunday_service_description', ''); ?>
      </p>

      <?php if ( get_theme_mod('enable_sunday_night', false) ) : ?>
      <p>
        <strong>Sunday Night Service:</strong>
        <?php echo get_theme_mod('sunday_night_time', '6:00 PM'); ?><br />
        <?php echo get_theme_mod('sunday_night_description', ''); ?>
      </p>
      <?php endif; ?>

      <?php if ( get_theme_mod('enable_wednesday_night', false) ) : ?>
      <p>
        <strong>Wednesday Night Service:</strong>
        <?php echo get_theme_mod('wednesday_night_time', '7:00 PM'); ?><br />
        <?php echo get_theme_mod('wednesday_night_description', ''); ?>
      </p>
      <?php endif; ?>
    </details>

    <!-- Ministry Information Dropdown -->
    <details class="ministry-info">
      <summary><strong id="ministry_info">Ministry Information</strong></summary>

      <!-- Ministry 1 -->

      <p>
        <strong
          ><?php echo ( get_theme_mod('ministry1_name', 'Ministry 1') ); ?></strong
        ><br />
        <?php echo ( get_theme_mod('ministry1_description', 'Description for Ministry 1 goes here.') ); ?>
      </p>

      <!-- Ministry 2 (only if enabled) -->
      <?php if ( get_theme_mod('enable_ministry2', false) ) : ?>
      <p>
        <strong
          ><?php echo ( get_theme_mod('ministry2_name', 'Ministry 2') ); ?></strong
        ><br />
        <?php echo ( get_theme_mod('ministry2_description', 'Description for Ministry 2 goes here.') ); ?>
      </p>
      <?php endif; ?>

      <!-- Ministry 3 (only if enabled) -->
      <?php if ( get_theme_mod('enable_ministry3', false) ) : ?>
      <p>
        <strong
          ><?php echo ( get_theme_mod('ministry3_name', 'Ministry 3') ); ?></strong
        ><br />
        <?php echo ( get_theme_mod('ministry3_description', 'Description for Ministry 3 goes here.') ); ?>
      </p>
      <?php endif; ?>
    </details>
  </section>

  <!-- Pastor Section -->
  <section class="pastor">
    <h2>Meet Our Pastor</h2>
    <div class="pastor-info">
      <?php if ( get_theme_mod('pastor_image') ) : ?>
      <img
        src="<?php echo esc_url( get_theme_mod('pastor_image') ); ?>"
        alt="<?php echo esc_attr( get_theme_mod('pastor_name', 'Our Pastor') ); ?>"
      />
      <?php endif; ?>

      <h3 class="pastor-name">
        <?php echo esc_html( get_theme_mod('pastor_name', 'Pastor John Doe') ); ?>
      </h3>

      <p class="pastor-bio">
        <?php echo esc_html( get_theme_mod('pastor_bio', 'Our pastor is dedicated to serving the congregation.') ); ?>
      </p>
    </div>
  </section>
</main>

<?php get_footer(); ?>
