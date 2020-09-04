<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ditarlux
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div class="comments">
	<p class="comments__num pb-100"><?php echo get_comments_number(); ?></p>

		<div class="comment">
			<div class="d-flex">
				<div><div class="comment__img-wrap">
					<img src="/assets/img/c1.jpg">
				</div></div>
				<div>
					<h2 class="comment__name d-flex regular regular--18">
						William Jackson <span class=" ml-auto light light--14">April 12, 2019</span>
						<!-- Michael John -->
						<!-- Steve Andrew -->
					</h2>
					<p class="comment__description description light">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<div class="comment__input-wrap">
						<button type="submit" href="#">
							
						</button>
						<input type="text" placeholder="Type your comment" class="reply">
					</div>
				</div>
			</div>
		</div>
		<div class="comment">
			<div class="d-flex">
				<div><div class="comment__img-wrap">
					<img src="/assets/img/c1.jpg">
				</div></div>
				<div>
					<h2 class="comment__name d-flex regular regular--18">
						William Jackson <span class=" ml-auto light light--14">April 12, 2019</span>
						<!-- Michael John -->
						<!-- Steve Andrew -->
					</h2>
					<p class="comment__description description light">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<div class="comment__input-wrap">
						<button type="submit" href="#">
							
						</button>
						<input type="text" placeholder="Type your comment" class="reply">
					</div>
				</div>
			</div>
		</div>
		<div class="comment">
			<div class="d-flex">
				<div><div class="comment__img-wrap">
					<img src="/assets/img/c1.jpg">
				</div></div>
				<div>
					<h2 class="comment__name d-flex regular regular--18">
						William Jackson <span class=" ml-auto light light--14">April 12, 2019</span>
						<!-- Michael John -->
						<!-- Steve Andrew -->
					</h2>
					<p class="comment__description description light">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<div class="comment__input-wrap">
						<button type="submit" href="#">
							
						</button>
						<input type="text" placeholder="Type your comment" class="reply">
					</div>
				</div>
			</div>
		</div>
		<div class="comment">
			<div class="d-flex">
				<div><div class="comment__img-wrap">
					<img src="/assets/img/c1.jpg">
				</div></div>
				<div>
					<h2 class="comment__name d-flex regular regular--18">
						William Jackson <span class=" ml-auto light light--14">April 12, 2019</span>
						<!-- Michael John -->
						<!-- Steve Andrew -->
					</h2>
					<p class="comment__description description light">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<div class="comment__input-wrap">
						<button type="submit" href="#">
							
						</button>
						<input type="text" placeholder="Type your comment" class="reply">
					</div>
				</div>
			</div>
		</div>
		<div class="comment">
			<div class="d-flex">
				<div><div class="comment__img-wrap">
					<img src="/assets/img/c1.jpg">
				</div></div>
				<div>
					<h2 class="comment__name d-flex regular regular--18">
						William Jackson <span class=" ml-auto light light--14">April 12, 2019</span>
						<!-- Michael John -->
						<!-- Steve Andrew -->
					</h2>
					<p class="comment__description description light">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<div class="comment__input-wrap">
						<button type="submit" href="#">
							
						</button>
						<input type="text" placeholder="Type your comment" class="reply">
					</div>
				</div>
			</div>
		</div>
</div>
<div id="comments" class="comments-area">


</div><!-- #comments -->
