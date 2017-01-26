<?php

	$thePage = get_queried_object();

	get_template_part('templates/headers/header');
	get_template_part('templates/pages/page', $thePage->post_name );
	get_template_part('templates/footers/footer'); 
