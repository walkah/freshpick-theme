<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyled Content in IE */ ?> </script>
</head>
<body class="<?php print $body_classes; ?>">

<!-- wrap starts here -->
<div id="wrap">

	<!--header -->
	<div id="header">			
				
		<h1 id="logo-text"><a href="<?php print $front_page ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a></h1>		
		<p id="slogan"><?php print $site_slogan; ?></p>	
		
		<div  id="nav">
    <?php print theme('links', $primary_links, array('class' => 'links primary-links')); ?>
		</div>	
		
		<div id="header-image"></div>
						
	<!--header ends-->					
	</div>
	
	<!-- featured starts -->
  <?php if ($feature): ?>
	<div id="featured" class="clear">				
    <?php print $feature; ?>
	
	<!-- featured ends -->	
	</div>
  <?php endif; ?>
	
	<!-- content -->
	<div id="content-outer" class="clear"><div id="content-wrap">
	
		<div id="content">
		
			<div id="left">
        <?php if (!empty($title)): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php if (!empty($tabs)): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
        <?php if (!empty($messages)): print $messages; endif; ?>
        <?php if (!empty($help)): print $help; endif; ?>
        
        <?php print $content; ?>
							
			</div>
		
			<div id="right">
        <?php print $right; ?>
      </div>
		</div>	
			
	<!-- content end -->	
	</div></div>
		
	<!-- footer starts here -->	
	<div id="footer-outer" class="clear"><div id="footer-wrap">
	
		<div class="col-a">
      <?php print $bottom_left; ?>
				
		</div>
		
		<div class="col-a">
      <?php print $bottom_center; ?>
				
		</div>		
	
		<div class="col-b">
      <?php print $bottom_right; ?>
		</div>		
	
	<!-- footer ends -->		
	</div></div>
	
	<!-- footer-bottom starts -->		
	<div id="footer-bottom">
		<div class="bottom-left">
			<p>
			&copy; 2009 <strong>Your Copyright Info Here</strong>&nbsp; &nbsp; &nbsp;
			Design by: <a href="http://www.styleshout.com/">styleshout</a> 			
			</p>
		</div>
	
		<div class="bottom-right">
			<p>		
				<a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | 
		   	<a href="http://validator.w3.org/check/referer">XHTML</a>	|			
				<a href="index.html">Home</a> |
				<a href="index.html">Sitemap</a> |
				<a href="index.html">RSS Feed</a>								
			</p>
		</div>
	<!-- footer-bottom ends -->		
	</div>
	
<!-- wrap ends here -->
</div>

</body>
</html>
