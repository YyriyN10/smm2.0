���f<?php exit; ?>a:6:{s:10:"last_error";s:0:"";s:10:"last_query";s:449:"SELECT  smmwpstudio_comments.comment_ID
			 FROM smmwpstudio_comments JOIN smmwpstudio_posts ON smmwpstudio_posts.ID = smmwpstudio_comments.comment_post_ID INNER JOIN smmwpstudio_term_relationships AS pll_tr ON pll_tr.object_id = smmwpstudio_posts.ID
			 WHERE ( comment_approved = '1' ) AND  smmwpstudio_posts.post_status IN ('publish') AND pll_tr.term_taxonomy_id IN ( 2 )
			 
			 ORDER BY smmwpstudio_comments.comment_date_gmt DESC
			 LIMIT 0,5";s:11:"last_result";a:0:{}s:8:"col_info";a:1:{i:0;O:8:"stdClass":13:{s:4:"name";s:10:"comment_ID";s:7:"orgname";s:10:"comment_ID";s:5:"table";s:20:"smmwpstudio_comments";s:8:"orgtable";s:20:"smmwpstudio_comments";s:3:"def";s:0:"";s:2:"db";s:17:"newsmmst_mainsite";s:7:"catalog";s:3:"def";s:10:"max_length";i:0;s:6:"length";i:20;s:9:"charsetnr";i:63;s:5:"flags";i:49699;s:4:"type";i:8;s:8:"decimals";i:0;}}s:8:"num_rows";i:0;s:10:"return_val";i:0;}