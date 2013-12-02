	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			

			<div class="entry">
        <!-- <p class="post_date"><?php// the_time('l, j. F, Y') ?></p> -->
				<?php the_content(); ?>

			</div>

		</div>
		
		<?php endwhile; endif; ?>
