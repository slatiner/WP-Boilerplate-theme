
<article>

	<?php while (have_posts()) : the_post();
			if ( '' != get_the_post_thumbnail() ) {
				$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full-size');
				$img=$src[0];
			} else {
				$img="https://res.cloudinary.com/orthodox-union/image/upload/b_black,o_60/v1480397045/Camp Dror/default_header.jpg";
			}
		?>

		<header class="article-header" style="background-image:url('<?php echo $img?>')">
			<h1 class="text-center"><?php echo get_the_title();?></h1>
		</header>

		<main class="container">
			<div class="article-content">
				<?php the_content();?>
				<?php get_template_part('templates/modules/social'); ?>
			</div>
		</main>
	<?php endwhile;?>

</article>
