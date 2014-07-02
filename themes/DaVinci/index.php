
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
<?php get_header(); ?>

<div id="wrapper">
  <div id="main">
    <div id="content">
    
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php
      $customfieldsArray = get_post_custom();
      $iFramePath = $customfieldsArray['iframe'];
	  ?>
      <div class="content-image">
         <?php 
		 		// content of div
				if($iFramePath) {
					 print $iFramePath[0];
					 //adjust height of slippy div iframe based on thumnail height
					 
					 $tn = get_the_post_thumbnail();
						 
					 preg_match('/height="[0-9]+"/', $tn, $match); //extract height string from html img tag
					 
					 $len = strlen($match[0]);
					 $height = (int)substr($match[0],8,$len-9); //extract height number
					 
					 print "<!-- $match[0] $height -->\n"; // debug code!
					 print '<style type="text/css">'.".slippy {height:${height}px;}</style>\n";		
				 }
				
		 		elseif ( has_post_thumbnail() ){	 
			 	 		the_post_thumbnail(); 
				 }
		 		else echo "&nbsp;";
		  ?>
      
      </div>
      
      <div class="content-text">
      <script>
	  		var x = geth();
			document.getElementById("content").lastChild.style.minHeight = x;
	  </script>
	  
	  
        <h1><?php the_title(); ?></h1>
        <!--<h4>Posted on <?php the_time('F jS, Y') ?></h4> -->
        <p><?php the_content(__('(more...)')); ?></p> 
   
      </div>
    
      <?php endwhile; else: ?>
       <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
     
    </div >
    
  </div>
  <?php get_sidebar(); ?>
  <!-- <?php get_footer(); ?> -->
</div>