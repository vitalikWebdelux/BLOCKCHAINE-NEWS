	<?php /*Template Name: Front-huenj*/
get_header();
$title_num_link = 60;
	get_template_part( 'template-parts/sections/section', 'hero' ); ?>
<div class="bn-info">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="content">
					<h2 class="content__title">Технологии</h2>
					<div class="row">
						<?php
						$i = 0;
						foreach (get_posts([
							'numberposts' => 3,
							'category_name' => 'tekhnolohyy',
							'order' => 'DESC',
							'suppress_filters' => true
						]) as $post) :
							setup_postdata($post);
							++$i;
							$title_num_post = 210;
							if($i === 1) {
								echo '<div class="col-lg-12">';
								$excerpt_num_post = 600;
								
							} else {
								echo '<div class="col-lg-6">';
								$excerpt_num_post = 280;
								// $excerpt_num_post = 150;
								
							}
						?>
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
										<p class="wpp-date"><?php the_time('F jS, Y'); ?></p>
										<p class="description">
											<?php  echo substr(get_the_excerpt(), 0, $excerpt_num_post).'...';  ?>	
										</p>
									</div>
								</article>
							</div>
							<?php
						endforeach; // End of the loop.
						?>
					</div>
					<h2 class="content__title">Криптовалюты</h2>
					<div class="row">
						<?php
						$i = 0;
						foreach (get_posts([
							'numberposts' => 7,
							'category_name' => 'krypta',
							'order' => 'DESC',
							'suppress_filters' => true
						]) as $post) :
							setup_postdata($post);
							++$i;
							if($i === 1) : 
								$excerpt_num_post = 600;
								 ?>
								<div class="col-lg-12">
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
											<p class="wpp-date"><?php the_time('F jS, Y'); ?></p>
											<p class="description">
												<?php  echo substr(get_the_excerpt(), 0, $excerpt_num_post).'...';  ?>	
											</p>
										</div>
									</article>
								
							<?php else :  
								  $excerpt_num_post = 280; ?>
								<div class="col-lg-6">
								
									<div class="bn-link">
										<div class="bn-link__avatar">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
										</div>
										<div class="bn-link__text-info">
											<h3 class="bn-link__title"><a href="<?php the_permalink(); ?>">
												<a href="<?php the_permalink(); ?>">
												<?php if(mb_strlen(get_the_title()) < $title_num_link){
													the_title();
												} else {
													echo substr(get_the_title(), 0, $title_num_link).'...';  
												} ?></a>
											</h3>
											<p class="wpp-date"><?php the_time('F jS, Y'); ?></p>
										</div>
									</div>
							<?php endif; ?>		
						</div>
						<?php endforeach; // End of the loop. ?>
					</div>
					<h2 class="content__title">События</h2>
					<div class="row">
						<?php
						$i = 0;
						foreach (get_posts([
							'numberposts' => 8,
							'category_name' => 'sobytyia',
							'order' => 'DESC',
							'suppress_filters' => true
						]) as $post) :
							setup_postdata($post);
							++$i;
							if($i <= 3) : 
								$title_num_post = 210; ?>
								<div class="col-lg-6">
									<article class="bn-article">
										<div class="bn-article__img-info">
											<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post_thumbnail');  ?></a>
										</div>
										<div class="bn-article__text-info">
											<h3 class="bn-article__title"><a href="<?php the_permalink(); ?>">
												<a href="<?php the_permalink(); ?>">
												<?php if(mb_strlen(get_the_title()) < $title_num_post){
													the_title();
												} else {
													echo substr(get_the_title(), 0, $title_num_post).'...';  
												} ?></a>
											</h3>
											<p class="wpp-date"><?php the_time('F jS, Y'); ?></p>
											<p class="description">
												<?php  echo substr(get_the_excerpt(), 0, $excerpt_num_post).'...';  ?>	
											</p>
										</div>
									</article>
								</div>
							<?php else : 
								$excerpt_num_post = 280;
								if($i === 4) echo '<div class="col-lg-6">'; ?>
								<div class="bn-link">
									<div class="bn-link__avatar">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small'); ?></a>
									</div>
									<div class="bn-link__text-info">
										<h3 class="bn-link__title">
											<a href="<?php the_permalink(); ?>">
												<?php if(mb_strlen(get_the_title()) < $title_num_link){
													the_title();
												} else {
													echo substr(get_the_title(), 0, $title_num_link).'...';  
												} ?>	
											</a>
										</h3>
										<p class="wpp-date"><?php the_time('F jS, Y'); ?></p>
									</div>
								</div>
							<?php endif; ?>		
						<?php endforeach; // End of the loop. ?></div>
					</div>
				</div>
			</div>
<?php get_footer();