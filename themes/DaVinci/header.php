<html>
<head>
 <title>DaVinci Maps</title>
 <!-- javascipt links here :will consolidate into function.php -->
 <script type="text/javascript" src="//use.typekit.net/bce7uaq.js"></script>
 <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

 <script>
	  		function geth() {
			// get proper node
			var e = document.getElementById("content");
			var l = e.children.length;
			var x = e.children[l-2];
			var h = window.getComputedStyle(x);
			return h.height;
			}
			
			
					
</script>

<?php print "<!-- ".site_url()."-->\n" ?>

 <!-- All stysheet links go here : will be consolidated into style.css -->
 <link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/CSS/Common.css'; ?>">
 <link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/CSS/header.css'; ?>">
 <?php if (is_home() ) { ?>
	 <link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/CSS/home.css'; ?>">
     <link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/CSS/cartodb.css'; ?>">
 <?php }
   	elseif (is_page_template('portfolio.php')) { ?>
 			<link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/CSS/portfolio.css'; ?>">
 <?php }; ?>
 		
 
</head>

<body>
	<header id="header">
		<div id="logo"></div>
		<div id="headimage"></div>
		<div id="nav">
			<div id="textnav">
				<ul>
					<li><a href="<?php print site_url(); ?>">Home</a></li>
					<li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
					<li><a href="#">Login</a></li>
                    <li><a href="?page_id=82">Portfolio</a></li>
				</ul>
			</div><!-- textnav -->
			<div id="iconnav"><img src="<?php print get_stylesheet_directory_uri().'/images/socialMediaIcons.gif'; ?>"
								 width="209" height="26" alt=""/></div>
		</div><!-- nav-->
	</header>
<!-- body and html closing tags are in footer.php-->