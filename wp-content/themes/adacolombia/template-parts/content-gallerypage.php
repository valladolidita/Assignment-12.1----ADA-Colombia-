<?php
/**
 * Template Name: content-gallerypage
 */

get_header(); ?>
	

	<div id="adoptionpage1">
	
		<div id="image-gallery">

			<?php 

			$images = get_field('gallery_thumbnails');

				if( $images ): ?>
				    
				    <ul id="thumbnail-gallery">
				    <?php foreach( $images as $image ): ?>
				            <li>
				                <a data-img="<?php echo $image['alt']; ?>">
				                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				

				<?php endif; ?>
		</div>


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

				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

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
	<div class="backgroundwidth" id="image-content6" style="background-image: url('<?php the_field('background_image'); ?>');"></div>
</div>

<?php
get_footer();