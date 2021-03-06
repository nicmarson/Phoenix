<?php include_once '../inc/functions.php'; ?>
<!DOCTYPE html>

<html id="ng-app" ng-app="PhoenixDocApp">
<head>
	<meta charset='utf-8'>
	<meta content="chrome=1" http-equiv="X-UA-Compatible">
	<meta content="Phoenix by ISITE Design" name="description">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet" type="text/css">
	<script src="<?php echo getAsset('../Assets/dist/js/head.js'); ?>"></script>
	<link rel="stylesheet" media="all" href="<?php echo getAsset('../Assets/dist/css/documentation.css'); ?>">
	<!--[if lte IE 8]>
	<script src="<?php echo getAsset('../Assets/dist/js/oldie.js'); ?>"></script>
	<![endif]-->
	<script src="js/angular.min.js"></script>
	<script src="js/angular-sanitize.min.js"></script>
	<script src="js/app.js"></script>
	<title>Phoenix by ISITE Design</title>

	<!-- Serve one icon for all Apple devices -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo getAsset('<?php echo getAsset(../Assets/dist/img/content/touch-icon.png'); ?>">
	<!-- icon and tile color in hex # for Windows phones -->
	<meta name="msapplication-TileImage" content="<?php echo getAsset('../Assets/dist/img/content/touch-icon.png'); ?>">
	<meta name="msapplication-TileColor" content="#ffffff">
	<!-- For everything else -->
	<link rel="shortcut icon" type="image/png" href="<?php echo getAsset('../Assets/dist/img/content/favicon.png'); ?>">
</head>

<body>
	<header class="doc-header">
		<a href="https://github.com/isitedesign/Phoenix" class="fork-me">
			<img src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub">
		</a>

		<div class="row">
			<a href="../index.php">
				<img src="<?php echo getAsset('../Assets/dist/img/content/logo-placeholder.png'); ?>" alt="Phoenix by ISITE Design">
			</a>

			<section class="doc-downloads">
				<a class="zip-download-link" href="https://github.com/isitedesign/Phoenix/zipball/master" target="_blank">Download this project as a .zip file</a>
				<a class="tar-download-link" href="https://github.com/isitedesign/Phoenix/tarball/master" target="_blank">Download this project as a tar.gz file</a>
			</section>
		</div>
	</header>

	<section class="wrapper" role="main">
		<div class="row">
			<div class="six columns">
				<h1>What is this?</h1>
				<p>When building websites, there is no need to reinvent the wheel.  Consistent design patterns are used to make sites easy to navigate and use, so why not have some consistent development patterns?  Phoenix is what we use at <a href="http://github.com/isitedesign" target="_blank">ISITE Design</a> for the basis of new projects.  With a library of patterns ready at our fingertips, a powerful and flexible grid system, and a clean, modular organization, you don't need to reinvent the wheel.  And you'll have more time to invent the next wheel.</p>
			</div>

			<div class="six columns">
				<h1>What benefits will it give me?</h1>
				<ul>
					<li>Write less code - powered by SCSS and its features like variables, mixins, and functions, you'll be able to write more with less.</li>
					<li>Use a grid system - speak the same language as designers and have access to a simple, easy-to-use grid system.</li>
					<li>Modular approach - with a huge library of patterns defined as modules, you can develop a site that is faster to build, faster to load, and less likely to have code conflicts.</li>
					<li>Be more efficient - spend less time rewriting old patterns and spend more time writing awesome new code.</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="twelve columns">
				<h2>So it's like Gumby, Bootstrap, Foundation, <em>&lt;insert other framework name here&gt;</em>?</h2>
				<p>This was built as an internal boilerplate and is not intended to replace excellent frameworks like Gumby, Bootstrap, and Foundation.  Those tools are great resources for building rich in-browser designs and prototypes, but when it comes to writing production-ready code, we wanted something our very own.</p>
			</div>
		</div>

		<div class="divider" ng-controller="SCSSCtrl">
			<div class="row" ng-show="!dataLoaded">
				<div class="twelve columns">
					<h1 class="doc-notification-error">Error Loading SCSS Documentation</h1>
					<div class="doc-wrapper">
						<p>To build the SCSS documentation, please follow these steps:</p>
						<ol>
							<li>
								<p><strong>Windows users:</strong> Download and install version 1.9.3 of <a href="http://rubyinstaller.org/downloads/" target="_blank">Ruby</a> (do not install Ruby 2; if you need multiple versions of Ruby, you can use <a href="http://rvm.io/rvm/basics" target="_blank">RVM</a>).  During installation, make sure to check "Add Ruby executables to your PATH"</p>
								<p><strong>Mac OS users:</strong> Ruby comes preinstalled with Mac OSX.</p>
							</li>
							<li>
								<p>Once Ruby is installed, execute the following command in your command line:</p>
								<strong>Windows users:</strong>
								<div class="doc-code">gem install sassdoc</div>
								<strong>Mac OS users:</strong>
								<div class="doc-code">sudo gem install sassdoc</div>
							</li>
							<li>
								<p><strong>Windows users:</strong> execute the file Assets/src/css/createScssDocumentation.cmd as an administrator</p>
								<p><strong>Mac OS users:</strong> execute the file Assets/src/css/createScssDocumentation.sh</p>
							</li>
							<li>Ensure your web server has a MIME-type definition for JSON files</li>
						</ol>
					</div>
				</div>
			</div>

			<div class="row" ng-show="dataLoaded">
				<div class="twelve columns">
					<h1>SCSS</h1>
					<p>Below is a breakdown of all of the SCSS files in the project.  Each tab represents a folder in the structure found in Assets/src/css.</p>

					<div class="responsive-tabs responsive-tabs-horizontal">
						<h2>Variables</h2>
						<div class="responsive-tabs-content">
							<div class="doc-callout">
								<p>The variables folder contains variables that you will use throughout the project; they are your global reusable values, such as colors or measurements.  Below you will find a breakdown of each file, the variables contained within, and what each variable does.</p>
								<p>Want to create your own variables?  If they'll be used across the project, the variables folder is the place to put them.  Some additional ideas for variables include:</p>
								<ul>
									<li>z-indexes</li>
									<li>transition speeds, easing, and delays</li>
								</ul>
							</div>
							<div class="doc-callout divider" ng-repeat="variableType in objects.variables">
								<h2>
									{{variableType.function[0]}}
								</h2>
								<span class="badge-primary">{{variableType.source}}</span>
								<h3 class="divider-secondary">Description</h3>
								<p>{{variableType.function[1]}}</p>
								<h3 class="divider-secondary">Variables</h3>
								<table ng-if="variableType.param.length > 0">
									<thead>
										<tr>
											<th>Variable Name</th>
											<th>Data Type</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr ng-repeat="variable in variableType.param">
											<td><span class="badge-primary">{{variable.name}}</span></td>
											<td><span class="badge-secondary">{{variable.type}}</span></td>
											<td><span>{{variable.description}}</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div><!-- /.responsive-tabs-content -->

						<h2>Functions</h2>
						<div class="responsive-tabs-content">
							<div class="doc-callout">
								<p>The functions folder contains utility functions that allow for consistent, reusable calculations across the project.</p>
								<p><strong>NOTE:</strong> if a parameter has a default value, it should be included in a map as the last parameter.  The key name should match that of the parameter name listed below.</p>
							</div>
							<div class="doc-callout divider" ng-repeat="function in objects.functions">
								<h2>
									{{function.function[0]}} (<span ng-repeat="param in function.param">{{param.name}}<span ng-if="$index < (function.param.length - 1)">, </span></span>)
								</h2>
								<span class="badge-primary">{{function.source}}</span>
								<h3 class="divider-secondary">Description</h3>
								<p>{{function.function[1]}}</p>
								<h3 class="divider-secondary">Parameters</h3>
								<table ng-if="function.param.length > 0">
									<thead>
										<tr>
											<th>Parameter Name</th>
											<th>Data Type</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr ng-repeat="param in function.param">
											<td><span class="badge-primary">{{param.name}}</span></td>
											<td><span class="badge-secondary">{{param.type}}</span></td>
											<td><span>{{param.description}}</span></td>
										</tr>
									</tbody>
								</table>
								<h3 class="divider-secondary">Returns</h3>
								<ul class="plain">
									<li ng-repeat="return in function.return">
										{{return.type}} - {{return.description}}
									</li>
								</ul>
								<h3 class="divider-secondary">Usage</h3>
								<ol>
									<li ng-repeat="usage in function.usage" ng-if="$index > 0">
										{{usage}}
									</li>
								</ol>
							</div>
						</div><!-- /.responsive-tabs-content -->

						<h2>Mixins</h2>
						<div class="responsive-tabs-content">
							<div class="doc-callout">
								<p>The mixins folder contains utility mixins that allow for consistent, reusable output across the project.  Mixins can be particularly useful for writing patterns that require vendor prefixes or fallbacks for older browsers.</p>
								<p><strong>NOTE:</strong> if a parameter has a default value, it should be included in a map as the last parameter.  The key name should match that of the parameter name listed below.</p>
							</div>
							<div class="doc-callout divider" ng-repeat="mixin in objects.mixins">
								<h2>
									{{mixin.mixin[0]}} (<span ng-repeat="param in mixin.param">{{param.name}}<span ng-if="$index < (mixin.param.length - 1)">, </span></span>)
								</h2>
								<span class="badge-primary">{{mixin.source}}</span>
								<h3 class="divider-secondary">Description</h3>
								<p>{{mixin.mixin[1]}}</p>
								<h3 class="divider-secondary" ng-if="mixin.param.length > 0">Parameters</h3>
								<table ng-if="mixin.param.length > 0">
									<thead>
										<tr>
											<th>Parameter Name</th>
											<th>Data Type</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr ng-repeat="param in mixin.param">
											<td><span class="badge-primary">{{param.name}}</span></td>
											<td><span class="badge-secondary">{{param.type}}</span></td>
											<td><span>{{param.description}}</span></td>
										</tr>
									</tbody>
								</table>
								<h3 class="divider-secondary">Usage</h3>
								<ol>
									<li ng-repeat="usage in mixin.usage" ng-if="$index > 0">
										{{usage}}
									</li>
								</ol>
							</div>
						</div><!-- /.responsive-tabs-content -->

						<h2>Base</h2>
						<div class="responsive-tabs-content">
							<div class="doc-callout">
								<p>The base folder contains base styles for the project for HTML elements with no classes.  In here you will find @font-face declarations, a browser reset, and fallback styles for elements.  There are some exceptions where class names are used (such as the plain classed lists), but these are due to their fundamental use in projects and are thus considered to be "base" styles.</p>
							</div>
							<div class="doc-callout divider" ng-repeat="base in objects.base">
								<h2>
									{{base.function[0]}}
								</h2>
								<span class="badge-primary">{{base.source}}</span>
								<h3 class="divider-secondary">Description</h3>
								<p>{{base.function[1]}}</p>
							</div>
						</div><!-- /.responsive-tabs-content -->

						<h2>Layout</h2>
						<div class="responsive-tabs-content">
							<div class="doc-callout">
								<p>The layout folder contains grid mixins and all styles related to your main layout templates (such as setting up columnar layouts, e.g. two- and three-column layouts).</p>
							</div>
							<div class="doc-callout divider" ng-repeat="layout in objects.layout">
								<h2>{{layout.function[0]}}</h2>
								<span class="badge-primary">{{layout.source}}</span>
								<h3 class="divider-secondary">Description</h3>
								<p>{{layout.function[1]}}</p>
								<h3 class="divider-secondary" ng-if="layout.param.length > 0">Parameters</h3>
								<table ng-if="layout.param.length > 0">
									<thead>
										<tr>
											<th>Parameter Name</th>
											<th>Data Type</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr ng-repeat="param in layout.param">
											<td><span class="badge-primary">{{param.name}}</span></td>
											<td><span class="badge-secondary">{{param.type}}</span></td>
											<td><span>{{param.description}}</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div><!-- /.responsive-tabs-content -->

						<h2>Modules</h2>
						<div class="responsive-tabs-content">
							<div class="doc-callout">
								<p>The modules folder is where most of your development will take place.  It contains <q>discrete components of the page</q> that are <q>your navigation bars and your carousels and your dialogs and your widgets and so on.</q><br>- <cite><a href="http://smacss.com/book/type-module" target="_blank">SMACSS</a></cite></p>
								<p>For examples of all modules, please see the <a href="../pattern-primer.php" target="_blank">pattern primer page</a>.</p>
							</div>
							<div class="doc-callout divider" ng-repeat="module in objects.modules">
								<h2>
									{{module.function[0]}}
								</h2>
								<span class="badge-primary">{{module.source}}</span>
								<h3 class="divider-secondary">Description</h3>
								<p>{{module.function[1]}}</p>
								<h3 class="divider-secondary" ng-if="module.usage.length > 0">Usage</h3>
								<div class="doc-usage" ng-repeat="usage in module.usage" ng-if="$index > 0" ng-bind-html="usage"></div>
							</div>
						</div><!-- /.responsive-tabs-content -->


					</div><!-- /.responsive-tabs -->
				</div>
			</div>
		</div>
	</section>

	<footer class="doc-footer">
		<div class="row">
			<p class="copyright">Phoenix maintained by <a href="https://github.com/isitedesign" target="_blank">isitedesign</a></p>
			<p>Special thanks to <a href="http://gumbyframework.com/" target="_blank">Gumby Framework</a> and <a href="http://smacss.com/" target="_blank">SMACSS</a></p>
			<p>Published with <a href="http://pages.github.com" target="_blank">GitHub Pages</a></p>
		</div>
	</footer>

	<script src="<?php echo getAsset('../Assets/dist/js/main.js'); ?>"></script>
</body>
</html>