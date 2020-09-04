<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ditarlux
 */

get_header();
$term = get_queried_object();
?>
<div class="bn-info">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="content">
					<h1 class="content__title"><?php echo single_cat_title(); ?></h1>
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

											<?php if( get_field('hide_hide_date', $term) ) { ?>


												<p class="wpp-date"><?php the_time('F jS, Y'); ?></p>
											<?php } ?>	
											<?php the_field('tekst', $term); ?>	
											<p class="description">
												<?php echo the_excerpt(); ?>	
											</p>
										</div>
									</article>	

						<?php  endforeach; // End of the loop.  ?>
						</div>
					</div>
				</div>
			</div>
<?php
get_footer();
