<?php

	if( have_rows('flexible_content') ){
		$fciN = 0;
		while ( have_rows('flexible_content') ){ the_row();

			$fciN = $fciN + 1;
			$fcI = 'flex-section-'.$fciN;
				
			$layout = get_row_layout();

			include( locate_template( 'flexible/'.$layout.'.php', false, false ) ); 
//			get_template_part('flexible/'.$layout);

		}//endwhile;
	}//endif;

?>