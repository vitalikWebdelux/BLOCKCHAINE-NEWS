<section class="bn-hero">
	

	<?php foreach (get_posts([
		'numberposts' => 3,
		'category_name' => 'home',
		'order' => 'DESC',
		'suppress_filters' => true
	]) as $post) :
		setup_postdata($post);
		$excerpt_num_post = 600;
		$title_num_post = 110;  ?>
			<div class="bn-hero__window">
				<div class="bn-hero__img-info">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
				</div>
				<div class="bn-hero__text-info-wrap">
					<div class="bn-hero__text-info">
						<div>36.6k</div>
						<h2 class="bn-hero__title">
							<a href="<?php the_permalink(); ?>">
							<?php if(mb_strlen(get_the_title()) < $title_num_post){
								the_title();
							} else {
								echo substr(get_the_title(), 0, $title_num_post).'...';  
							} ?></a>
						</h2>
						<p class="wpp-date"><?php the_time('F jS, Y'); ?></p>
					</div>
				</div>
			</div>
	<?php endforeach; ?>
</section>
