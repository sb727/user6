	  <section class="section-1">
	  	<div class="container" style="position:relative;" >
	  		<div class="row" style="position:absolute; top:-40px;">

	  			<div class="col-sm-12 col-md-12" >
	  					<ul class="nav nav-tabs">
	  						<li role="presentation" class="active"><a href="#">HOME</a> </li>
	  						<li role="presentation"><a href="#">SLIDERS</a> </li>
	  						<li role="presentation"><a href="#">HOTELS</a> </li>
	  						<li role="presentation"><a href="#">FLIGHTS</a> </li>
	  						<li role="presentation"><a href="#">CARS</a> </li>
	  						<li role="presentation"><a href="#">CRUISES</a> </li>
	  						<li role="presentation"><a href="#">PAGES</a> </li>
	  						<li role="presentation"><a href="#">SHORTCODES</a> </li>
	  					</ul>
	  			</div>
	  		</div>
	  		<form action="index.php" method="post">
			  	<div class="row" style="margin-top:20px;">
			  			<div class="col-md-3 col-sm-6">
				  			<div style="height:30px;"><h4><p>Where</p></h4></div>
				  			<div style="height:30px;"><p style="font-size:10px;">YOUR DESTINATION</p></div>
				  			<div style="height:30px;"><input type="text" id = "dest" placeholder="enter a destination or hotel name" style="font-size:10px;" name="hotel_name"/></div>
			  			</div>
			  			<div class="col-md-2 col-sm-6">
			  				<div style="height:30px;"><h4><p>When</p></h4></div>
				  			<div style="height:30px;"><p style="font-size:10px;">CHECK IN</p></div>
				  			<div style="height:30px;"><input type="text" placeholder="mm/dd/yy" class="col-xs-6 datepicker" style="font-size:10px;"/></div>
			  			</div>
			  			<div class="col-md-2 col-sm-6">
			  				<div style="height:30px;"><h4>&nbsp</h4></div>
				  			<div style="height:30px;"><p style="font-size:10px;">CHECK OUT</p></div>
				  			<div style="height:30px;"><input type="text" placeholder="mm/dd/yy" class="col-xs-6 datepicker" style="font-size:10px;"/></div>
			  			</div>
			  			<div class="col-md-3 col-sm-6">
			  				<div style="height:30px;"><h4><p>Who</p></h4></div>

			  				<div style="height:30px; font-size:10px;" class="col-xs-4">ROOMS</div>
			  				<div style="height:30px; font-size:10px;" class="col-xs-4">ADULT</div>
			  				<div style="height:30px; font-size:10px;" class="col-xs-4">KIDS</div>

			  				<div style="height:30px;" class="col-xs-4"><input type="text" placeholder="01" style="font-size:10px;" class="col-xs-12"/></div>
			  				<div style="height:30px;" class="col-xs-4"><input type="text" placeholder="02" style="font-size:10px;" class="col-xs-12"/></div>
			  				<div style="height:30px;" class="col-xs-4"><input type="text" placeholder="01" style="font-size:10px;" class="col-xs-12"/></div>
			  			</div>
			  			<div class="col-md-2 col-xs-6">
			  				<!-- Indicates a successful or positive action -->
			  				<div style="height:62px;">&nbsp</div>
							<div style="height:30px;" class="col-xs-12"><input type="submit" class="btn btn-success col-xs-12" style="font-size:10px;" value="SEARCH NOW" /></div>
			  			</div>
			  	</div>
			  </form>
	  	</div>
	  </section>
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