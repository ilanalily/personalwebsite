
<?php get_header();  ?>

<?php 
$heroImage = get_field('hero_image');
?>

<section class="hero" style="background-image:url(<?php echo $heroImage['url']; ?>)" id="home">
	<div class="overlay">
			<div class="top_bar">
				<h2>IL.</h2>
				<!-- <div id="menu-icon" class="fa fa-bars fa-2x"></div> -->
				<button class="hamburger hamburger--collapse" type="button">
				  <span class="hamburger-box">
				    <span class="hamburger-inner"></span>
				  </span>
				</button>
				<div class="nav-header">
					<?php wp_nav_menu( array(
					  'container' => false,
					  'theme_location' => 'primary'
					)); ?>
				</div>
			</div>
		<div class="container">
			<div class="hero_content">
				<h1><?php the_field('headline') ?></h1>
				<p><?php the_field('subheadline') ?></p>
				<a href="#portfolio"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</section> <!--close hero section -->


<section class="portfolio" id="portfolio">
	<div class="container">
		<h3>portfolio</h3>
		<div class="portfolio_container">
			<div class="portfolio_items">
			<?php 
				$portfolioArgs = array (
					'post_type' => 'portfolio',
					'posts_per_page' => '5'
				);
				$portfolioLoop = new WP_Query($portfolioArgs);

				if($portfolioLoop->have_posts()) while($portfolioLoop->have_posts()) :$portfolioLoop->the_post();
			 ?>

				
				<div class="portfolio_piece">
					<div class="portfolio_image">
						<?php $image1 = get_field('image_1') ?>
						<img src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>">
					</div>
					<div class="portfolio_text">
						<h4><?php the_title(); ?></h4>
						<div class="skill_row">
							<?php
							if( have_rows('skills_used') ):
						    while ( have_rows('skills_used') ) : the_row();
							?>
							<div class="skill">
						        <?php  the_sub_field('skill');?>
							</div>
						 	<?php
						    endwhile;
							else :
							endif;

							?>
						</div>

						<?php the_content(); ?>
						<a href="<?php the_field('link_button') ?>"><?php the_field('link_text') ?></a>
					</div>
				</div>
			<?php endwhile; ?>
				</div> <!-- end portfolio_items -->
			<?php wp_reset_postdata(); ?>
		</div> <!-- end portfolio_container -->
	</div> <!-- end container -->
</section> <!-- end portfolio -->


<section class="skills" id="skills">
	<div class="container">
		<div class="content">
			<h3>Skills</h3>

			<?php if( have_rows('skills') ): ?>
			  <ul class="skills">
			  <?php while( have_rows('skills') ): the_row(); 
			    // vars
			    $skillIcon = get_sub_field('skill_icon');
			    $skillTitle = get_sub_field('skill_title');
			    ?>
			    <li>
			      <i class="devicons <?php echo $skillIcon ?>"></i>
			      <h6><?php echo $skillTitle ?></h6>
			    </li>
			  <?php endwhile; ?>
			  </ul>
			<?php endif; ?>
		</div>
	</div>
</section>

	
<?php 
$aboutImage = get_field('about_background')
 ?>	
<section class="about" id="about" style="background-image:url(<?php echo $aboutImage['url']; ?>)">
	<div class="about_overlay">
		<div class="container">
			<div class="about_content">
				<div class="about_me_text">
					<h4>Hey there</h4>
					<p><?php the_field('about_me') ?></p>
				</div>
				<div class="about_me_image">
					<?php $headshot = get_field('headshot') ?>
					<img src="<?php echo $headshot['url']?>" alt="<?php echo $headshot['alt']?>">
				</div>
			</div>
		</div> 
	</div>
</section> <!-- close about section -->



<section class="contact" id="contact">
	<div class="container">
		<h3>Let's get creating</h3>
		<div class="contact_form">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>          
			        <?php the_content();  ?> 
			<?php endwhile;?>
		</div>
	</div>
</section> <!--close contact -->



<?php get_footer(); ?>