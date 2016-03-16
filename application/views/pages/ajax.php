<section class="section-3">
	  	 <div class="container">
	  	 	<h2><P>Popular Destinations</P></h2>
	  	 	<div class="row">
	  	 			<?php 
		  	 			foreach ($search_result as $key => $value) { 
		  	 				echo "<div class='col-md-3 col-sm-6 col-xm-12' >";
		  	 				echo "<a href='index.php?num=".$value['id']."'><img src='asset/Img/content_". $value['id'] .".png'"." alt='...' class='img-thumbnail' style='width:100%'></a>";
		  	 				echo "<h4><p class='hotel_name_text'>".$value['hotel_name']."</p></h4>";
		  	 				echo "<p>".$value['country']."</p>";
		  	 				echo "</div>";
		  	 			} 
	  	 			?>
	  	 	</div>
	  	 </div>
	  </section>