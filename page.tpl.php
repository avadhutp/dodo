<?php 
$snLinks[] = array( "data" => l("","http://www.facebook.com/avadhut.phatarpekar",array("attributes"=>array("target"=>"_BLANK"))),"id" => "fb"); 
$snLinks[] = array( "data" => l("","https://twitter.com/#!/avadhutp",array("attributes"=>array("target"=>"_BLANK"))),"id" => "twitter" );
$snLinks[] = array( "data" => l("","http://avad.hu/t/rss.xml",array("attributes"=>array("target"=>"_BLANK"))),"id" => "rss" );
?>
<div class="wrapper">
	<!--Social networking links-->
	<?php print theme_item_list(array("items"=>$snLinks,"title"=>null,"type"=>"ul","attributes"=>array("id"=>"socialLinks"))); ?>
	<div class="clearFix"></div>
	<!--Header section-->
	<div class="header">
		<div class="logo"><img src="<?php print path_to_theme(); ?>/images/logo.png" /></div>
		<div class="pmContainer">
			<div class="pmLeft"></div>
			<div class="primaryMenu"><?php print $primary_nav ?></div>
			<div class="pmRight"></div>
		</div>
	</div>
	<div class="clearFix"></div>
	<!--Breadcrumb section-->
	<div class="breadcrumbContainer"><?php print $breadcrumb; ?></div>
	<div class="clearFix"></div>
	<!--Content section-->
	<div class="contentContainer">
		<!--Main content-->
		<div class="contentLeft"><div class="clCont">
			<?php print render($page['content']); ?>
		</div></div>
		<!--Right sidebar-->
		<div class="contentRight">
			<div class="crTop"></div>
			<?php print render($page['rightSidebar']); ?>
			<div class="crBottom"></div>
			<!--Twitter feed-->
			<div class="twitterFeed block">
				<h2 class="tfHeader tk-adelle">Twitter feed</h2>
				<div class="tfContent" id="tfcContainer"></div>
				<div class="tfFooter"><?php print l("More tweets","https://twitter.com/#!/avadhutp",array("attributes"=>array("target"=>"_BLANK"))) ?></div>
				<div class="tfBirdie"></div>
			</div>
		</div>
	</div>
	<div class="clearFix"></div>
	<!--Footer section-->
	<div class="footer">
		<div class="footerLeft"><?php print render($page['footerLeft']) ?></div>
		<div class="footerCenter"><?php print render($page['footerCenter']) ?></div>
		<div class="footerRight"><?php print render($page['footerRight']) ?></div>
		<div class="clearFix"></div>
	</div>
	<!--Credits section-->
	<div class="credits">
		<div class="creditsLeft"><?php print render($page['creditsLeft']) ?></div>
		<div class="creditsRight"><?php print render($page['creditsRight']) ?></div>
		<div class="clearFix"></div>
	</div>
</div>