patible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="../../favicon.ico">

	    <title>Traveler</title>

	    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
	    <link href="asset/css/m_bootstrap-theme.min.css" rel="stylesheet">
	    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
	    <script src="asset/jquery ui/jquery-1.10.2.js"></script>
	    <script src="asset/js/bootstrap.min.js"></script>

	    <!-- include jquery and ui utility and css-->
	    <link rel="stylesheet" href="asset/jquery ui/jquery-ui.css">
  		<script src="asset/jquery ui/jquery-ui.js"></script>

	    <!--
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

		
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

	    <!--jquery script -->
	    <script type="text/javascript">
	    	$(document).ready(function(){
	    		$(".datepicker").datepicker();
	    		$(".datepicker").datepicker("option","dateFormat","yy년 mm월  dd일");

	    		 $("form .btn-success").click(function(e) {
	    		 	e.preventDefault();
	    		 	var param = {"id": $("form [name='hotel_name']").val()};
	    		 	
	    		 	$('input[type="submit"]').prop('disabled', true);
	    		 	$.ajax({
		    		 	url:"pages/ajaxInvoke",
		    		 	type:"post",
		    		 	data: {dest:$(".dest").text()},
		    		 	dataType: "html",
		    		 	success:function(response){
                            console.log(response);
		    		 		$(".section-3").remove();
		    		 		$(".section-1").after(response);
		    		 	}
	    		 	});

	    		 	$('input[type="submit"]').prop('disabled', false);
	    		 
	    		 });

	    		 $("body").on("click",".hotel_name_text",function(e){
	    		 	console.log($(this).text());
	    		 });

	    		 $("#home_image").click(function(){
	    		 	$("body").animate({scrollTop:0},1000);
	    		 });
	    	});

	    </script>
 	</head>

	  <body>
	  	<header >
	  	<nav class="navbar navbar-fixed-top navbar-inverse">
	  		<div class="container-fluid">
	  			<div class="navbar-header row">
		  			<div class="col-md-4">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span> 
				      </button>
				     </div>
			    </div>
			    <div class="container">
				    <div class="row">
					    <div class="col-md-4"><a class="navbar-brand" href="#"><img src="asset/Img/Menu/logo.png"></a>
					    </div>
					    <div class="collapse navbar-collapse navbar-right col-md-8" id="myNavbar">
					      <ul class="nav navbar-nav">
					        <li class="active"><a href="#">HOME</a></li>
					        <li><a href="#">SLIDERS</a></li> 
					        <li><a href="#">HOTELS</a></li>
					        <li><a href="#">FLIGHTS</a></li> 
					        <li><a href="#">CARS</a></li> 
					        <li><a href="#">CRUISES</a></li> 
					        <li><a href="#">PAGES</a></li> 
					        <li><a href="#">SHORTCODES</a></li> 
					      </ul>
					    </div>
				    </div>
			    </div>
	  		
	  		</div>
	  	</nav>
	  		<div style="position:relative;"><img class="banner" src="asset/img/banner.png"/></div>
	  	</header>