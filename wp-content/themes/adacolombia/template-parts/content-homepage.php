<?php
/**
 * Template Name: content-homepage
 */
get_header(); ?>

	<div id="adoptionpage1"> 

	<div id="primary1" class="content-area">
		<div id="content1">
				
			<h1><?php the_field('image_caption_1'); ?></h1>
			<h2><?php the_field('image_sub_caption_1'); ?></h2>
			<h2><a href="<?php the_field( 'image_caption_1_link' ); ?>">Frida’s Story</a></h2>
				
				<?php $image = get_field('image_1');
				$imgurl = $image[url];
				?>

		<div id="image-content1" style="background-image: url('http://<?php echo $imgurl; ?>');">
	</div>
	</div>	
	</div>

	<div id="primary2" class="content-area">
		<div id="content2">
				
			<h1><?php the_field('image_caption_2'); ?></h1>
			<h2><?php the_field('image_sub_caption_2'); ?></h2>
			<h2><a href="<?php the_field( 'image_caption_2_link' ); ?>">Read about the adoption process</a></h2>
				
				<?php $image = get_field('image_2');
				$imgurl = $image[url];
				var_dump($image)
				?>

		<div id="image-content2" style="background-image: url('http://<?php echo $imgurl; ?>');">
	</div>
	</div>	
	</div>

	<div id="primary3" class="content-area">
		<div id="content3">
				
			<h1><?php the_field('image_caption_3'); ?></h1>
			<h2><?php the_field('image_sub_caption_3'); ?></h2>
			<h2><a href="<?php the_field( 'image_caption_2_link' ); ?>">Volunteer with us</a></h2>
				
				<?php $image = get_field('image_3');
				$imgurl = $image[url];
				?>

		<div id="image-content3" style="background-image: url('http://<?php echo $imgurl; ?>');">
	</div>
	</div>	
	</div>

		<div id="content-area">
	<?php

// check if the repeater field has rows of data
if( have_rows('cta_repeater') ):

 	// loop through the rows of data
    while ( have_rows('cta_repeater') ) : the_row();
?>
		<ul>
			<li><?php the_sub_field( 'cta_icon' ); ?></li>
			<li><?php the_sub_field( 'cta_title' ); ?></li>
			<li><?php the_sub_field( 'cta_subtitle' ); ?></li>
			<li><a href="<?php the_field( 'cta_link_button' ); ?>">View Cats</a></li>
		</ul>
		
<?php
    endwhile;

else :

    // no rows found

endif;

?>	
</div>

<div>
	<div class="backgroundwidth" id="image-content6" style="background-image: url('<?php the_field('background_image'); ?>');"></div>
</div>

<?php
get_footer();