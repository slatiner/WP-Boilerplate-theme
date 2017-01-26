<?php
	$cpt='';
	if (isset($post->post_type)) $cpt = $post->post_type;

	get_template_part('templates/headers/header');
	get_template_part('templates/archives/archive', $cpt );
	get_template_part('templates/footers/footer');
