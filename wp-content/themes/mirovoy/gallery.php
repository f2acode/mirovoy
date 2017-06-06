<?php /* Template Name: gallery */ ?>

<?php get_header(); ?>

<!-- Premix Welcome Section Start -->
<section class="premix-welcome-section premix-innner-page" style="background-image: url(<?php the_field('background_image')?>);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="premix-welcome-element text-center">
          <div class="premix-table">
            <div class="premix-table-cell">
              <h1>GALLERY</h1>
              <p>HOME <span>/</span> GALLERY</p>
            </div>
          </div>
        </div><!-- .premix-welcome-element End -->
      </div>
    </div>
  </div>
</section>
<!-- Premix Our Gallery Section Start -->
<section class="premix-our-gallery-section section-padding">
  <div class="premix-section-heading text-center">
    <h2 data-titles="GALLERY">GALLERY</h2>
  </div> <!-- .premix-section-heading End -->
  <div class="premix-gallery-wraper content-margin-top" id="premix-gallery">
    <?php
      $args =  array(
        'post_type' => 'gallery',
        'orderby' => 'menu_order',
        'order' => 'ASC'
      );
       $custom_query = new WP_Query( $args );
          while ($custom_query->have_posts()) : $custom_query->the_post();
          get_template_part( 'gallery-single', get_post_format() );
        endwhile;?>

  </div> <!-- .premix-gallery-wraper END -->
</section>

<?php get_footer();?>
