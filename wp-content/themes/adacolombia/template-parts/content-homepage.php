<?php
/**
 * Template Name: content-homepage
 */
get_header(); ?>

	<div id="adoptionpage1"> 
		<div id="image-content1"><img src="<?php echo get_bloginfo('template_url') ?>/img/frida.jpg" alt="Frida, the cat">
	<div id="primary1" class="content-area">
		<div id="featurecontent1">
				
			<h1><?php the_field('image_caption_1'); ?></h1>
			<h2><?php the_field('image_sub_caption_1'); ?></h2>
			<h3><a href="<?php the_field( 'image_caption_1_link' ); ?>">Frida’s Story</a></h3>			

	</div>
	
	</div>	
	</div>

	<div id="content-area">
	<?php

// check if the repeater field has rows of data
if( have_rows('cta_repeater1') ):

 	// loop through the rows of data
    while ( have_rows('cta_repeater1') ) : the_row();
?>
		<ul id="cta_repeater1">
			<li><img src="<?php echo get_bloginfo('template_url') ?>/img/white-cat-icon.png" alt="View Cats" height="155" width="155"></li>
			<li id="cta_title"><?php the_sub_field( 'cta_title1' ); ?></li>
			<li id="cta_subtitle"><?php the_sub_field( 'cta_subtitle1' ); ?></li>
			<li><a href="<?php the_field( 'cta_link_button1' ); ?>">View Cats</a></li>
		</ul>
		
<?php
    endwhile;

else :

    // no rows found

endif;

// check if the repeater field has rows of data
if( have_rows('cta_repeater2') ):

 	// loop through the rows of data
    while ( have_rows('cta_repeater2') ) : the_row();
?>
		<ul id="cta_repeater2">
			<li><img src="<?php echo get_bloginfo('template_url') ?>/img/white-dog-icon.png" alt="View Dogs" height="155" width="155"></li>
			<li id="cta_title"><?php the_sub_field( 'cta_title2' ); ?></li>
			<li id="cta_subtitle"><?php the_sub_field( 'cta_subtitle2' ); ?></li>
			<li><a href="<?php the_field( 'cta_link_button2' ); ?>">View Dogs</a></li>
		</ul>
		
<?php
    endwhile;

else :

    // no rows found

endif;

// check if the repeater field has rows of data
if( have_rows('cta_repeater3') ):

 	// loop through the rows of data
    while ( have_rows('cta_repeater3') ) : the_row();
?>
		<ul id="cta_repeater3">
			<li><img src="<?php echo get_bloginfo('template_url') ?>/img/white-paw-icon.png" alt="Find out more about Volunteering" height="155" width="155"></li>
			<li id="cta_title"><?php the_sub_field( 'cta_title3' ); ?></li>
			<li id="cta_subtitle"><?php the_sub_field( 'cta_subtitle3' ); ?></li>
			<li><a href="<?php the_field( 'cta_link_button3' ); ?>">Find out More</a></li>
		</ul>
		
<?php
    endwhile;

else :

    // no rows found

endif;

?>	
</div>


<?php
get_footer();