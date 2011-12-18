<?php if(!$teaser) { ?>
<?php
	$nmExtras[] = array("label" => "Tags","content" => str_replace('</div><div class="field-item','</div>, <div class="field-item',render($content['field_blog_tags'])));
	$nmExtras[] = array("label" => "Discussion","content" => l(format_plural($comment_count,"1 comment","@count comments"),"",array("fragment" => "disqusWrapper" , "html" => true, "external" => true)));
	$nmExtras[] = array("label" => "Share", "content" => "<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-count=\"none\" data-via=\"avadhutp\">Tweet</a><script type=\"text/javascript\" src=\"//platform.twitter.com/widgets.js\"></script><iframe src=\"//www.facebook.com/plugins/like.php?href=$url&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21\" scrolling=\"no\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:50px; height:21px;\" allowTransparency=\"true\"></iframe>");
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

<!--Actual node content-->
<div class="content clearfix"<?php print $content_attributes; ?>>
	<div class="nodeWrapper">
		<div class="nmDate tk-adelle"><?php print format_date($node->created,"custom","d") ?></div>
		<div class="nodeMeta">
			<div class="nmContent">
				<div class="nmDateExtras tk-adelle"><?php print format_date($node->created,"custom","M") ?><br /><?php print format_date($node->created,"custom","Y") ?></div>
				<!--Print all the node meta extras-->
				<?php
					foreach($nmExtras as $item) {
						print "<div class=\"nmExtras\" id=\"" . str_replace(" ","_",strtolower($item["label"])) . "\"><div class=\"nmeImg\"></div><div class=\"nmeContent\"><label>" . $item["label"] . "</label><div class=\"nmeData\">" . $item["content"] . "</div></div></div>";
						print "<div class=\"clearFix\"></div>";
					} 
				?>
			</div>
			<div class="nmDogear"></div>
		</div>
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

<!--Disqus block-->
<div id="disqusWrapper">
	<?php
		$block = module_invoke('disqus', 'block_view', 'disqus_comments');
		print render($block);
	?>
</div>
<?php } else { ?>
	<?php drupal_add_css(path_to_theme() . "/teaser.css"); ?>
	<div class="nodeTeaser">
		<?php //print_r($node); ?>
		<h2 class="ntTitle"><?php print l($title,drupal_get_path_alias("node/$nid"),array("attributes" => array("class" => "tk-adelle"))) ?></h2>
		<div class="ntMeta">
			<label>Posted on: </label><?php print format_date($node->created,"custom","D, jS M Y") ?> 
			<span class="sep">|</span> 
			<label>Comments: </label><?php print $comment_count ?>
		</div>
		<div class="clearFix"></div>
		<div class="ntContent">
			<?php  
				// We hide the comments and links now so that we can render them later.
				hide($content['comments']);
				hide($content['links']);
				hide($content['field_blog_tags']);
				print render($content); 
			?>
		</div>
	</div>
	<?php print l("<div class=\"ntReadMore\"></div>",drupal_get_path_alias("node/$nid"),array("html" => true)) ?>
<?php }
