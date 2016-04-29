<?php 
function loadTemplates($file) 
{
			
	foreach ($file as $filename)
	{
			
		if ( is_page_template( $filename ) ) {
			include_Once $filename;
		}
	}

}