<?php
/**
 * Template Name: content-homepage
 */
get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary1" class="content-area">
		<div id="content1">
				
			<h1><?php the_field('image_caption_1'); ?></h1>
			<h2><?php the_field('image_sub_caption_1'); ?></h2>
				
				<?php $image = get_field('image_1');?>

		<div class="backgroundwidth" id="image-content1" style="background-image: url('<?php the_field('image_1'); ?>');">
	</div>
	</div>	
	</div>

	<div id="primary2" class="content-area">
		<div id="content2">
				
			<h1><?php the_field('image_caption_2'); ?></h1>
			<h2><?php the_field('image_sub_caption_2'); ?></h2>
				
				<?php $image = get_field('image_2');?>

		<div class="backgroundwidth" id="image-content2" style="background-image: url('<?php the_field('image_2'); ?>');">
	</div>
	</div>	
	</div>

	<div id="primary3" class="content-area">
		<div id="content3">
				
			<h1><?php the_field('image_caption_3'); ?></h1>
			<h2><?php the_field('image_sub_caption_3'); ?></h2>
				
				<?php $image = get_field('image_3');?>

		<div class="backgroundwidth" id="image-content3" style="background-image: url('<?php the_field('image_3'); ?>');">
	</div>
	</div>	
	</div>

	<div id="primary4" class="content-area">
		<div id="content4">
				
			<h1><?php the_field('image_caption_4'); ?></h1>
			<h2><?php the_field('image_sub_caption_4'); ?></h2>
				
				<?php $image = get_field('image_4');?>

		<div class="backgroundwidth" id="image-content4" style="background-image: url('<?php the_field('image_4'); ?>');">
	</div>
	</div>	
	</div>

	<div id="primary5" class="content-area">
		<div id="content5">
				
			<h1><?php the_field('image_caption_5'); ?></h1>
			<h2><?php the_field('image_sub_caption_5'); ?></h2>
				
				<?php $image = get_field('image_5');?>

		<div class="backgroundwidth" id="image-content5" style="background-image: url('<?php the_field('image_5'); ?>');">
	</div>
	</div>	
	</div>

<?php
get_footer();