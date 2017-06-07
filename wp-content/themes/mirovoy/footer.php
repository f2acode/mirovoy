</div><!-- /.container -->

<!-- Premix Footer Bottom Section Start -->
<section class="premix-footer-bottom-section premix-footer-bottom-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="premix-single-footer-bottom">
          <h4>Follow us!</h4>
          <!-- <p>
            <?php the_field('about_history'); ?>
          </p>
          <div class="premix-border"></div> -->
          <div class="premix-social-list">
            <ul>
              <li><a href="<?php echo get_option('facebook'); ?>"><i class="fa fa-facebook"></i></a></li>
              <li><a href="<?php echo get_option('twitter'); ?>"><i class="fa fa-twitter"></i></a></li>
              <li><a href="<?php echo get_option('instagram'); ?>"><i class="fa fa-instagram "></i></a></li>
              <li><a href="<?php echo get_option('youtube'); ?>"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div> <!-- .premix-social-list END -->
        </div> <!-- .premix-single-footer-bottom END -->
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="premix-single-footer-bottom">
          <h4>Photo Gallery</h4>
          <div class="premix-image-gallery">
            <ul>
              <?php
                $args =  array(
                  'post_type' => 'gallery',
                  'orderby' => 'menu_order',
                  'order' => 'ASC'
                );
                 $custom_query = new WP_Query( $args );
                    while ($custom_query->have_posts()) : $custom_query->the_post();?>
                    <li><a><img src="<?php the_field('image_gallery')?>" alt=""></a></li>
                  <?php endwhile;?>
            </ul>
          </div>
        </div> <!-- .premix-single-footer-bottom END -->
      </div>
    </div>
  </div>
</section>
<!-- Premix Footer -->
<footer class="premix-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <p>Copyright &copy; 2017. All right reserved.</p>
      </div>
    </div>
  </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<?php wp_footer(); ?>

</body>
</html>
