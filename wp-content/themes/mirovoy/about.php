
<?php /* Template Name: about */ ?>

<?php get_header(); ?>

<section class="premix-welcome-section premix-innner-page" style="background-image: url(<?php the_field('about_background')?>)">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="premix-welcome-element text-center">
          <div class="premix-table">
            <div class="premix-table-cell">
              <h1>ABOUT</h1>
              <!-- <p>HOME <span>/</span> ABOUT</p> -->
            </div>
          </div>
        </div><!-- .premix-welcome-element End -->
      </div>
    </div>
  </div>
</section>
<!-- Premix About US Section Start -->
<section class="premix-our-story-section section-padding">
  <div class="container">
    <div class="premix-section-heading text-center">
      <h2 data-titles="ABOUT US">ABOUT US</h2>
    </div> <!-- .premix-section-heading End -->
    <div class="row content-margin-top">
      <div class="col-md-6">
        <div class="premix-our-story-left">
          <p>
            <?php the_field('about_history');?>
          </p>
        </div> <!-- .premix-our-story-left END -->
      </div>
      <div class="col-md-6">
        <div class="premix-our-story-right">
          <img src="<?php the_field('about_image')?>" alt="">
        </div> <!-- .premix-our-story-right END -->
      </div>
    </div>
  </div>
</section>
<!-- Premix Our Team Section -->
<!-- <section class="premix-our-team-area section-padding" style="background-image: ">
  <div class="container">
    <div class="premix-section-heading text-center">
      <h2 data-titles="OUR TEAM">OUR TEAM</h2>
    </div>
    <div class="row content-margin-top">
      <div id="premix-slider">
        <div class="item">
          <div class="premix-our-team-main-wraper">
            <img src="img/team-img-1.png" alt="">

            <div class="premix-our-team-over-element">
              <a href="#"><h4>KATRINA KAT</h4></a>
              <h5>BRAND MANAGER</h5>
            </div>
            <div class="premix-our-team-hover-content">
              <div class="premix-table">
                <div class="premix-table-cell">
                  <a href="#"><h4>KATRINA KAT</h4></a>
                  <h5>BRAND MANAGER</h5>
                  <p>  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="premix-our-team-main-wraper">
            <img src="img/team-img-2.png" alt="">
            <div class="premix-our-team-over-element">
              <a href="#"><h4>MICHAL SMITH</h4></a>
              <h5>ceo</h5>
            </div>
            <div class="premix-our-team-hover-content">
              <div class="premix-table">
                <div class="premix-table-cell">
                  <a href="#"><h4>MICHAL SMITH</h4></a>
                  <h5>ceo</h5>
                  <p>  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>

                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="premix-our-team-main-wraper">
            <img src="img/team-img-1.png" alt="">
            <div class="premix-our-team-over-element">
              <a href="#"><h4>ROBERT HARDIN</h4></a>
              <h5>MANAGER</h5>
            </div>
            <div class="premix-our-team-hover-content">
              <div class="premix-table">
                <div class="premix-table-cell">
                  <a href="#"><h4>ROBERT HARDIN</h4></a>
                  <h5>MANAGER</h5>
                  <p>  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="premix-our-team-main-wraper">
            <img src="img/team-img-1.png" alt="">
            <div class="premix-our-team-over-element">
              <a href="#"><h4>KATRINA KAT</h4></a>
              <h5>BRAND MANAGER</h5>
            </div>
            <div class="premix-our-team-hover-content">
              <div class="premix-table">
                <div class="premix-table-cell">
                  <a href="#"><h4>KATRINA KAT</h4></a>
                  <h5>BRAND MANAGER</h5>
                  <p>  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="premix-our-team-main-wraper">
            <img src="img/team-img-2.png" alt="">
            <div class="premix-our-team-over-element">
              <a href="#"><h4>mICHAL SMITH</h4></a>
              <h5>ceo</h5>
            </div>
            <div class="premix-our-team-hover-content">
              <div class="premix-table">
                <div class="premix-table-cell">
                  <a href="#"><h4>mICHAL SMITH</h4></a>
                  <h5>ceo</h5>
                  <p>  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="premix-our-team-main-wraper">
            <img src="img/team-img-1.png" alt="">
            <div class="premix-our-team-over-element">
              <a href="#"><h4>rOBERT hARDIN</h4></a>
              <h5>MANAGER</h5>
            </div>
            <div class="premix-our-team-hover-content">
              <div class="premix-table">
                <div class="premix-table-cell">
                  <a href="#"><h4>rOBERT hARDIN</h4></a>
                  <h5>MANAGER</h5>
                  <p>  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                  <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  -->

<!-- Premix Our Sponsors Page -->
<!-- <section class="premix-our-sponsor section-padding">
  <div class="container">
    <div class="premix-section-heading text-center">
      <h2 data-titles="OUR sponsors">OUR sponsors</h2>
    </div>
    <div class="row content-margin-top">
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="premix-sponsor-img">
          <img src="img/sponsor-1.png" alt="">
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="premix-sponsor-img">
          <img src="img/sponsor-2.png" alt="">
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="premix-sponsor-img">
          <img src="img/sponsor-3.png" alt="">
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="premix-sponsor-img">
          <img src="img/sponsor-4.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section> -->

<?php get_footer();?>
