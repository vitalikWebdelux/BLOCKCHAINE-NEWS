<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sdf
 */

get_header();
?>
	
<div class="bn-info">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="content">
					<div class="content__title">
						<h1><?php echo single_post_title(); ?></h1>
						<nav><?php foreach (get_categories() as $category) {
							echo '<a class="content__title-category" href="'. get_category_link($category->term_id) .'">'.$category->name.'</a>';
						} ?>
						</nav>
					</div>
					
					<div class="row">
						<div class="col-lg-12">
						<?php
						while ( have_posts() ) :
							the_post();
							$excerpt_num_post = 600;
							$title_num_post = 210; ?>
									<article class="bn-article">
										<div class="bn-article__img-info">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_thumbnail'); ?></a>
										</div>
										<div class="bn-article__text-info">
											<h2 class="bn-article__title">
												<a href="<?php the_permalink(); ?>">
												<?php if(mb_strlen(get_the_title()) < $title_num_post){
													the_title();
												} else {
													echo substr(get_the_title(), 0, $title_num_post).'...';  
												} ?></a>
											</h2>
									
												<!-- <?php  if( get_field('hide_hide_date') ) { ?> -->


												<p class="wpp-date"><?php the_time('F jS, Y'); ?></p>
											<!-- <?php } ?> -->

											
										
											<p class="description">
												<?php echo the_excerpt(); ?>	
											</p>
										</div>
									</article>	
						<?php endwhile; // End of the loop. 
						the_posts_pagination([
							'mid_size' => 2,
							'prev_text' => 'Назад',
							'next_text' => 'Вперед'
						]); ?>

						</div>
					</div>
				</div>
			</div>
<?php
get_footer();
