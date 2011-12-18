<?php
	drupal_add_css(path_to_theme() . "/pageStyling.css");
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

	<!--Actual node content-->
	<div class="content clearfix"<?php print $content_attributes; ?>>
		<div class="nodeWrapper">
			<div class="nodeContent"><div class="ncContainer">
				<?php
					print "<h1 class=\"title tk-adelle\">$title</h1>";
					// We hide the comments and links now so that we can render them later.
					hide($content['comments']);
					hide($content['links']);
					hide($content['field_blog_tags']);
					print render($content);
	    		?>
			</div></div>
		</div>	
	</div>
	<div class="clearFix"></div>
	
</div>
