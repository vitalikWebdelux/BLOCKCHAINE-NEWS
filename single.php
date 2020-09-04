<?php
get_header();
setPostViews(get_the_ID());
	?>
<div class="bn-info">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="content">
						<?php
						while ( have_posts() ) :
							the_post(); ?>
							<article class="bn-article">
								<div class="bn-article__img-info">
									<!-- <img src="<?php echo SD_THEME_IMAGE_URI; ?>/foto1.jpg"> -->
									<?php the_post_thumbnail('post_thumbnail');  ?>
								</div>
								<div class="bn-article__text-info">
									<div><span class="watch"> <?php echo $currentPostViews = getPostViews(get_the_ID()); ?></span></div>
									<h2 class="bn-article__title">
										<!-- <a href="#">Congress Is About To Hand Over Your<br>Personal Browsing Data</a> -->
										<?php the_title(); ?>
									</h2>
									<p class="wpp-date"><?php the_time('F jS, Y'); ?></p>
									<p class="description"><?php the_content(); ?></p>
								</div>
							</article>
							<?php

							// get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation(
								array(
									'prev_text' => esc_html__( 'Предыдущая статья', 'bn' ),
									'next_text' => esc_html__( 'Следуещая статья', 'bn' ),
								)
							);

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
				</div>
			</div>

<?php 
get_footer();
