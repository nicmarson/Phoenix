<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="robots" content="index, follow" />
	<link rel="stylesheet" type="text/css" media="all" href="_resources/css/style.css" />
	<title>Semantic Grid System Test</title>    
</head>
<body>
	<style type="text/css">
		article, nav, aside {
			border: 1px solid black;
		}
	</style>
	
	<?php
		$numbers = array('one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen');
		$gridSize = 12;
	?>
	<section class="content">
		<div class="row">
			<h2>Three column, semantic example</h2>
		</div>

		<section class="wrapper colgrid-visible">
			<article class="primary">
				<h3>Primary</h3>
				<p>This is an eight column container.  It will hold your primary content.  It has been pushed to be placed in the appropriate place in the layout.</p>

				<section class="nested wrapper">
					<div class="two-up">
						This is a six column sub-layout using a class of "two-up".
					</div>
					<div class="two-up">
						This is a six column sub-layout using a class of "two-up".
					</div>
				</section>
			</article>

			<nav class="secondary">
				<h5>Secondary</h5>
				<p>This is a two column container.  It will hold navigation content.  It has been pulled to be placed in the left rail on desktops and tablets, but will be below the main content on mobile.</p>
			</nav>

			<aside class="tertiary">
				<h5>Tertiary</h5>
				<p>This is another two column container.  It will hold tertiary content in the right rail on desktops and tablets, but will be at the bottom on mobile because it has not been pushed or pulled.</p>
			</aside>
		</section>
	</section>

	<script type="text/javascript" src="_resources/js/jquery.min.js"></script>
	<script type="text/javascript">
		$('.colgrid-visible').wrapInner('<div class="colgrid-image" />');
	</script>
</body>
</html>