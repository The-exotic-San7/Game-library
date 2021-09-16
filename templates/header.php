<head>
	<title>GAME LIBRARY</title>
	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <meta name="viewport" content=
        "width=device-width, initial-scale=1.0" />
    <style type="text/css">
      .brand{
      	background: black ;
      	padding-left: 20px;

      }
    	.brand-text{
    		color: darkblue;
    	}
    	.
    
    	form{
    		max-width: 400px;
    		margin: 20px auto;
    		padding: 60px;
    		background: transparent;

    	}
    	nav{
    		padding: 45px;
    		background: url('https://st2.depositphotos.com/1003372/i/600/depositphotos_424319880-stock-photo-sand-beach-background.jpg');
    		

    	}


    	
    	body{
    		background: url('img/stadium.jpg');
         background-attachment: fixed;
         background-position: center center;
         background-size: cover;
         background-repeat: no-repeat;
         max-width: 100%;
         height: auto;
      
    	}
    	 .card{
    	 	
        
    	 	background: grey;
    	 }

    	.card-image{
    		
    		max-width: 100%;
    		height: auto;

    	}
    	


    </style>
</head>
<body class="grey">
	<nav class="nav-extended">
		<div class="nav-wrapper">
		  <div class="container">
			  <a href="index.php" class = "brand-logo brand-text bold-text center" style="color: black;font-weight: bold;"> GAMES HUB</a>
			  <a href="#" class="sidenav-trigger" data-target="mobile-links">
				<i class="material-icons left">menu</i>
			  </a>
			   <ul id="nav-mobile" class="right hide-on-med-and-down">
				  <li><a href="add.php" class=" btn brand btn-large z-depth-0 right-align">ADD A GAME</a></li>
				  <li><a href="index.html" class="btn brand btn-large z-depth-0 ">Search</a></li>
			   </ul>
			</div>
		</div>
	</nav>


	<ul class="sidenav" id="mobile-links">
		<li><a href="add.php" class=" btn brand btn-large z-depth-0">ADD A GAME</a></li>
		<li><a href="index.html" class="btn brand btn-large z-depth-0">search</a></li>
	</ul>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
   <script>
    $(document).ready(function(){
      $('.sidenav').sidenav();
    });
   </script>

