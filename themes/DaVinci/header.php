<html>
<head>
 <title>DaVinci Maps</title>
 <!-- javascipt links here :will consolidate into function.php -->
 <script type="text/javascript" src="//use.typekit.net/bce7uaq.js"></script>
 <script type="text/javascript">try{Typekit.load();}catch(e){}</script>



 <!-- All stysheet links go here : will be consolidated into style.css -->
 <link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/CSS/Common.css'; ?>">
 <link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/CSS/header.css'; ?>">
 <?php if (is_page_template('page.php') ) { ?>
	 <link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/CSS/page.css'; ?>">
     <link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/CSS/carto.css'; ?>">
 <?php }
   	elseif (is_page_template('portfolio.php')) { ?>
 			<link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/CSS/portfolio.css'; ?>">
 
 <?php } 
 	elseif (is_page_template('about.php')) { ?>
 			<link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/CSS/about.css'; ?>">
 <?php }
 	elseif (is_home() || is_page_template('blog-summary.php') ){ ?>
    		<link rel="stylesheet" href="<?php print get_stylesheet_directory_uri().'/style.css'; ?>">
 <?php }; ?>
 
</head>

<body>
<?php print "<!-- ".get_page_link()." -->\n" ?>
	<header id="header">
		<div id="logo"></div>
		<div id="headimage"></div>
		<div id="nav">
			<div id="textnav">
				<ul>
					<li><a href="<?php print site_url(); ?>">Home</a></li>
					<li><a href="?page_id=84">About</a></li>
                    <li><a href="?page_id=93">Blog</a></li>
					<li><a href="#">Login</a></li>
                    <li><a href="?page_id=82">Portfolio</a></li>
				</ul>
			</div><!-- textnav -->
			<div id="iconnav"><img src="<?php print get_stylesheet_directory_uri().'/images/socialMediaIcons.gif'; ?>"
								 width="209" height="26" alt=""/ usemap="#Map">
            	<map name="Map">
      				<area shape="rect" coords="0,0,33,26" href="<?php print get_stylesheet_directory_uri().'/link_to.html'; ?>">
      				<area shape="rect" coords="40,0,65,26" href="<?php print get_stylesheet_directory_uri().'/sample form.html'; ?>">
      				<area shape="rect" coords="75,0,99,26" href=#>
      				<area shape="rect" coords="112,0,137,26" href="#">
      				<area shape="rect" coords="145,0,173,26" href=#">
      				<area shape="rect" coords="184,0,207,26" href=#>
    </map>
            </div>
		</div><!-- nav-->
	</header>
<!-- body and html closing tags are in footer.php-->