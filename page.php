<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BN
 */

get_header();
?>

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
 * @package BN
 */

get_header();
?>

<div class="bn-info">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="content">
					<h2 class="content__title"><?php echo single_post_title(); ?></h2>
					<div class="row">
						<div class="col-lg-12">
						<?php
						foreach (get_posts([
							'numberposts' => 7,
							'category_name' =>  rtrim(ltrim($_SERVER['REQUEST_URI'], '//'), '//[0-9]//'),
							'order' => 'DESC',
							'suppress_filters' => true
						]) as $post) :
							setup_postdata($post);
							$excerpt_num_post = 600;
							$title_num_post = 210; ?>
									<article class="bn-article">
										<div class="bn-article__img-info">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_thumbnail');  ?></a>
										</div>
										<div class="bn-article__text-info">
											<h3 class="bn-article__title">
												<a href="<?php the_permalink(); ?>">
												<?php if(mb_strlen(get_the_title()) < $title_num_post){
													the_title();
												} else {
													echo substr(get_the_title(), 0, $title_num_post).'...';  
												} ?></a>
											</h3>
											<?php if( get_field('hide_section') ) { ?>


												<p class="wpp-date"><?php the_time('F jS, Y'); ?></p>
											<?php } ?>
											<p class="description">
												<?php echo the_excerpt(); ?>	
											</p>
										</div>
									</article>	
						<?php endforeach; // End of the loop. ?>
						</div>
					</div>
				</div>
			</div>
<?php
get_footer();
