<?php
/**
 * Template Name: content-adoptionpage
 */

get_header(); ?>
	

	<div id="adoptionpage1">
	
		<div id="image-gallery">

			<?php 

			$images = get_field('image_gallery');

				if( $images ): ?>
				   
				    <ul id="selected-image">
				        <?php foreach( $images as $image ): ?>
				            <li>
				                <a data-img="<?php echo $image['alt']; ?>" href="<?php echo $image['url']; ?>" class="galleryHide">
				                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				            </li>
				        <?php endforeach; ?>
				    </ul>
				    
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
	
		<div id="content-area">
	<?php

// check if the repeater field has rows of data
if( have_rows('adoption_page') ):

 	// loop through the rows of data
    while ( have_rows('adoption_page') ) : the_row();
?>
		<ul id="petinformation">
			<li><?php the_sub_field( 'page_title' ); ?></li>
			<li><?php the_sub_field( 'pet_name' ); ?></li>
			<li><?php the_sub_field( 'animal_id' ); ?></li>
			<li><?php the_sub_field( 'pet_species' ); ?></li>
			<li><?php the_sub_field( 'pet_breed' ); ?></li>
			<li><?php the_sub_field( 'pet_size_and_sex' ); ?></li>
			<li><?php the_sub_field( 'pet_color' ); ?></li>
			<li><?php the_sub_field( 'pet_age' ); ?></li>
			<li><?php the_sub_field( 'pet_vaccinations' ); ?></li>
			<li><?php the_sub_field( 'pet_worming' ); ?></li>
			<li><?php the_sub_field( 'pet_spayed/neutered' ); ?></li>
			<li><?php the_sub_field( 'pet_housetrained' ); ?></li>
			<li><?php the_sub_field( 'pet_declawed' ); ?></li>
			<li><?php the_sub_field( 'pet_story' ); ?></li>
		</ul>
		
<?php
    endwhile;

else :

    // no rows found

endif;

?>	
</div>
<div>
<ul id="ctainformation-adoption">
			<li><?php the_field( 'cta_title' ); ?></li>
			<li><?php the_field( 'cta_content' ); ?></li>
			<li><a class="ctabutton" href="<?php the_field( 'cta_link_button' ); ?>">Donate</a></li>
		</ul>
</div>
	<div class="backgroundwidth" id="image-content6" style="background-image: url('<?php the_field('background_image'); ?>');"></div>
</div>

<?php
get_footer();