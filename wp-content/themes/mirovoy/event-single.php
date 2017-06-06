<?php
/*
 Template Name: Event Single
 Template Post Type: event-post
*/
 get_header();  ?>

<section class="premix-welcome-section premix-innner-page" style="background-image: url(<?php the_field('background')?>);">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="premix-welcome-element text-center">
					<div class="premix-table">
						<div class="premix-table-cell">
							<h1>event</h1>
							<p>HOME <span>/</span> event <span>/</span> <?php the_title(); ?> </p>
						</div>
					</div>
				</div><!-- .premix-welcome-element End -->
			</div>
		</div>
	</div>
</section>
<!-- Premix Countdown Timer -->
<div class="premix-countdown-timer">
	<div class="countdown-container" id="main-example" value="<?php the_field('event_date')?>"></div>
</div> <!-- .premix-countdown-timer END -->
<!-- Premix Single Event Post Start -->
<section class="premix-single-event-post section-padding">
	<div class="container">
		<div class="row">
			<div class="premix-single-event-wraper">
				<?php the_post_thumbnail(); ?>
				<div class="col-md-8 col-sm-8">
					<div class="premix-single-details">
						<h3><?php the_title(); ?></h3>
						<h4><?php the_field('event_location'); ?></h4>
						<p><?php the_field('event_description');?></p>
						<div class="premix-social-list">
							<h5>Share this</h5>
							<ul>
								<li>
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
								<li>
                  <a href="https://twitter.com/home?status=<?php the_permalink();?>"><i class="fa fa-twitter"></i></a>
                </li>
								
							</ul>
						</div> <!-- .premix-social-list END -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="premix--single-details-txt">
						<div class="premix-event-single-right-heading">
							<h3>DETAILS</h3>
						</div>
						<p><span>WHEN:</span>
							<?php
							$date = get_field('event_date', false, false);
							$date = new DateTime($date);

							 echo $date->format('j M Y');
							 ?>
						</p>
						<p><span>LOCATION:</span>
							<?php the_field('event_location');?>
						</p>
						<p><span>ORGANIZER:</span>
							<?php the_field('event_organizer');?>
						</p>
						<a href="#" class="premix-btn orange-btn">BUY TICKETS</a>
					</div>
				</div>
			</div>
		</div>
		<div class="premix-btn-group text-center">
			<a href="#" class="premix-btn next-and-prev-btn"> <i class="fa fa-angle-double-left"></i> PREVIOUS</a>
			<a href="#" class="premix-btn next-and-prev-btn">  Next <i class="fa fa-angle-double-right"></i></a>
		</div>
	</div>
</section>

	<?php get_footer(); ?>
