útýf<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:434:"
			SELECT COUNT(smmwpstudio_posts.ID)
			FROM smmwpstudio_posts
			 INNER JOIN smmwpstudio_term_relationships AS pll_tr ON pll_tr.object_id = smmwpstudio_posts.ID
			
			
			WHERE smmwpstudio_posts.post_status IN ('publish')
				AND smmwpstudio_posts.post_type = 'page'
				AND smmwpstudio_posts.post_password = ''
				AND smmwpstudio_posts.post_date != '0000-00-00 00:00:00'
		
				 AND pll_tr.term_taxonomy_id IN ( 5,2,128,150 )
		";s:11:"last_result";a:1:{i:0;O:8:"stdClass":1:{s:27:"COUNT(smmwpstudio_posts.ID)";s:2:"32";}}s:8:"col_info";a:1:{i:0;O:8:"stdClass":13:{s:4:"name";s:27:"COUNT(smmwpstudio_posts.ID)";s:7:"orgname";s:0:"";s:5:"table";s:0:"";s:8:"orgtable";s:0:"";s:3:"def";s:0:"";s:2:"db";s:0:"";s:7:"catalog";s:3:"def";s:10:"max_length";i:2;s:6:"length";i:21;s:9:"charsetnr";i:63;s:5:"flags";i:32897;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:1;s:10:"return_val";i:1;}