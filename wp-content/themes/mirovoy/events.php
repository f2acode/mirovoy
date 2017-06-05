
<?php /* Template Name: events */ ?>
<?php get_header(); ?>

<!-- Premix Welcome Section Start -->
<section class="premix-welcome-section premix-innner-page" style="background-image: url(<?php echo get_bloginfo('template_url')?>/img/eventos.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="premix-welcome-element text-center">
          <div class="premix-table">
            <div class="premix-table-cell">
              <h1>EVENTS</h1>
              <p>HOME <span>/</span> EVENTS</p>
            </div>
          </div>
        </div><!-- .premix-welcome-element End -->
      </div>
    </div>
  </div>
</section>
<!-- Premix Next Event Section Start -->
<section class="premix-next-event-section premix-event-page section-padding">
  <div class="container">
    <div class="premix-section-heading text-center">
      <h2 data-titles="NEXT EVENT">NEXT EVENT</h2>
    </div> <!-- .premix-section-heading End -->
    <div class="content-margin-top">
      <?php
				$args =  array(
					'post_type' => 'event-post',
					'orderby' => 'menu_order',
					'order' => 'ASC'
				);
				 $custom_query = new WP_Query( $args );
            while ($custom_query->have_posts()) : $custom_query->the_post();

            $month = substr(get_field('event_date'), 4 ,-2);
            //echo $month;
            $year = substr(get_field('event_date'),0 ,-4);?>

            <div class="premix-next-event">
              <div class="premix-event-date text-center">
                <h4><?php
                switch ($month) {
                  case 1:
                  echo "Janeiro " . $year;
                  break;
                  case 2:
                  echo "Fevereiro ". $year;
                  break;
                  case 3:
                  echo "Março ". $year;
                  break;
                  case 4:
                  echo "Abril ". $year;
                  break;
                  case 5:
                  echo "Maio " .$year;
                  break;
                  case 6:
                  echo "Junho ". $year;
                  break;
                  case 7:
                  echo "Julho ". $year;
                  break;
                  case 8:
                  echo "Agosto ". $year;
                  break;
                  case 9:
                  echo "Setembro ". $year;
                  break;
                  case 10:
                  echo "Outubro ".$year;
                  break;
                  case 11:
                  echo "Novembro ". $year;
                  break;
                  case 12:
                  echo "Dezembro ". $year;
                  break;
                }

                ?></h4>
              </div> <!-- .premix-event-date END -->
              <ul id="premix-event-1">
                <li class="clear-both">
                  <div class="premix-event-column">
                    <div class="premix-event-time">
                      <h3>
                        <?php echo substr(get_field('event_date'), 6);?>
                        <span>
                          <?php
                          $month = substr(get_field('event_date'), 4 ,-2);
                          //echo $month;
                          $year = substr(get_field('event_date'),0 ,-4);
                          switch ($month) {
                            case 1:
                            echo "Janeiro, " . $year;
                            break;
                            case 2:
                            echo "Fevereiro, ". $year;
                            break;
                            case 3:
                            echo "Março, ". $year;
                            break;
                            case 4:
                            echo "Abril, ". $year;
                            break;
                            case 5:
                            echo "Maio, " .$year;
                            break;
                            case 6:
                            echo "Junho, ". $year;
                            break;
                            case 7:
                            echo "Julho, ". $year;
                            break;
                            case 8:
                            echo "Agosto, ". $year;
                            break;
                            case 9:
                            echo "Setembro, ". $year;
                            break;
                            case 10:
                            echo "Outubro, ".$year;
                            break;
                            case 11:
                            echo "Novembro, ". $year;
                            break;
                            case 12:
                            echo "Dezembro, ". $year;
                            break;
                          }

                          ?>
                        </span>
                      </h3>
                    </div> <!-- .premix-event-time END -->
                  </div>
                  <div class="premix-event-column">
                    <?php the_post_thumbnail(); ?>
                  </div> <!-- Event Image END -->
                  <div class="premix-event-column">
                    <div class="premix-event-title">
                      <h4><?php the_title(); ?></h4>
                      <p><?php the_field('event_location'); ?></p>
                    </div>
                  </div> <!-- .premix-event-title END -->
                  <div class="premix-event-column">
                    <a href="<?php the_permalink(); ?>" class="premix-btn details-btn">detalhes</a>
                  </div> <!-- .details-btn END -->
                </li> <!-- Premix Single Event li END -->
              </ul>
            </div>
          <?php endwhile;?>
    </div>
  </div>
</section>

<?php get_footer();?>
