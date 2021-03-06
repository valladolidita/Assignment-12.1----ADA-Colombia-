<?php
/**
 * Template Name: content-gallerypage
 */



get_header(); ?>

<div id="gallerypage1">

<?php if( have_rows('gallerypage_thumbnail') ): ?>

	<ul>

	<?php while( have_rows('gallerypage_thumbnail') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$content = get_sub_field('content');
		$link = get_sub_field('link');

		?>

		<li class="slide">

			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>

				<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt'] ?>" />

			<?php if( $link ): ?>
				</a>
			<?php endif; ?>

		    <?php echo $content; ?>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>

</div>
<div>
	<div class="backgroundwidth" id="image-content6" style="background-image: url('<?php the_field('background'); ?>');"></div>
</div>

</div>

<?php
get_footer();