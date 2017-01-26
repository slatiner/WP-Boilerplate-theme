<?php

	$single = get_queried_object();
	get_template_part('templates/headers/header');
	get_template_part('templates/singles/single', $single->post_type );
	get_template_part('templates/footers/footer'); 
