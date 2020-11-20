<?php 

session_start();
	
	if (isset($_GET['logout'])) {
	  	session_destroy();
	  	unset($_SESSION['username']);
	  	header("location: index.php");
	 }

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

	<title>Betlordz</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" type="image/png" href="../IMAGES/jug.png">
	<link rel="icon" href="../IMAGES/jug.png" type="image/png">

	<!-- font awesome cdn -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



	<!--  script-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script>
		$(document).ready(function(){
		  	 $(".fade").fadeOut(0);
		     $(".fade").fadeIn(500);
		});
	</script>

	<script>
		//for home page display #not yet clicking 
		$(document).ready(function(){  //for on input search.
				$.ajax({
					url: 'home.php',
					type: 'post',
					data: {search: $(this).val()}, //value of search
					success:function(result){
						$("#result").html(result);
					}
				});
		});

		$(document).ready(function(){
			$(".home").click(function(){  //for on input search.
				$.ajax({
					url: 'home.php',
					type: 'post',
					data: {search: $(this).val()}, //value of search
					success:function(result){
						$("#result").html(result);
					}
				});
			});
		});

		// $(document).ready(function(){
		// 	$(".prediction").click(function(){  //for on input search.
		// 		$.ajax({
		// 			url: 'predictions2.php?sortBet=LATEST',
		// 			type: 'post',
		// 			data: {search: $(this).val()}, //value of search
		// 			success:function(result){
		// 				$("#result").html(result);
		// 			}
		// 		});
		// 	});
		// });

		$(document).ready(function(){
			$(".registration").click(function(){  //for on input search.
				$.ajax({
					url: 'registration.php',
					type: 'post',
					data: {search: $(this).val()}, //value of search
					success:function(result){
						$("#result").html(result);
					}
				});
			});
		});

		$(document).ready(function(){
			$(".login").click(function(){  //for on input search.
				$.ajax({
					url: 'login.php',
					type: 'post',
					data: {search: $(this).val()}, //value of search
					success:function(result){
						$("#result").html(result);
					}
				});
			});
		});

		$(document).ready(function(){
			$(".addMatchClick").click(function(){  //for on input search.
				$.ajax({
					url: 'add_match.php',
					type: 'post',
					data: {search: $(this).val()}, //value of search
					success:function(result){
						$("#result").html(result);
					}
				});
			});
		});

		$(document).ready(function(){
			$(".profile").click(function(){  //for on input search.
				$.ajax({
					url: 'my_profile.php',
					type: 'post',
					data: {search: $(this).val()}, //value of search
					success:function(result){
						$("#result").html(result);
					}
				});
			});
		});


		
	</script>

	<!-- end of script -->

	<style type="text/css">

		
		.round-image{
			border-radius: 50%;
			width: 30px;
			height: 30px;
			padding:10px;
			
		}

		x{
			float: right;
		}

		y{
			float: left;
		}

		.profile:hover>.hide_caret_down{
				/*color:red;*/
		}
		.hide_caret_down{
			margin-right:20px;
		}
		
		ul li ul.dropdown{
		     /* Set width of the dropdown */
		    display: none;
		    position: absolute;
		    z-index: 999;
		    
		}

		ul li:hover ul.dropdown{
		    display: block; /* Display the dropdown */
		    background: #262626;
		}

		ul li ul.dropdownSort{
		     /* Set width of the dropdown */
		    display: none;
		    position: absolute;
		    z-index: 999;
		    
		}

		ul li:hover ul.dropdownSort{
		    display: block; /* Display the dropdown */
		    background: #262626;
		}

		.logout{
			display: none;
		}

		.myCredits{
			display: none;
		}

		.addMatch2{
			display: none;
		}


		@media(max-width: 991px){
			x{
				display: none;
			}
			.logout{
				display: block;
			}
			.myCredits{
				display:block;
			}
			.addMatch2{
				display:block;
			}

			.profile>.hide_caret_down{
				display: none;
			}
			.hide_caret_down{
				display: none;
			}
			

		}
		.color_coding{
			padding:0;
			margin: 0;
			top: 0;
			left: 0;
			display: flex;
		}
		.showBelow500px{
			display: none;
			margin-left: 5px;
			font-size: 12px;
		}
		@media(max-width: 500px) and (min-width: 400px){
			.showBelow500px{
				display: block;
				font-size: 12px;
			}
			
		}

		@media(max-width: 399px) and (min-width: 370px){
			.showBelow500px{
				display: block;
				font-size: 10px;
			}
		}

		@media(max-width: 369px){
			.showBelow500px{
				display: block;
				font-size: 8px;
			}
			
		}


			.sortBet{
				color:white;
				text-decoration: none;
				border-radius: 8px;
				padding: 5px;
				background-color: #555555;
				box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);

			}
			.sortBet:hover {
			  	box-shadow: 0px 24px 32px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
			}

	
	</style>

</head>
<body>
    
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="105116741223161"
  theme_color="#0A7CFF"
  logged_in_greeting="Balita Master? :)"
  logged_out_greeting="Balita Master? :)">
      </div>

	<header>
		<div class="logo" style="display: flex;">
				<ul class="color_coding">
					<li style="list-style:none;">Betlordz&nbsp;</li>
					<li style="color:red;" class="showBelow500px">Not Enough Credit</li>
					<li style="color:blue;" class="showBelow500px">Your Bet</li>
					<li style="color:orange;" class="showBelow500px">Taken bet</li>
				</ul>
		</div>
		<nav>
			<ul>
				<li><a href="index.php" class="home" id="home" >Home </a></li>
				<li><a href="predictions2.php?sortBet=LATEST" class="prediction" id="portfolio">Prediction</a></li>				        
				<?php
					


					if(!isset($_SESSION['username'])){
						echo '<li><a href="#Login" class="login" id="login">Login</a></li>';
					}else{

						$username = $_SESSION['username'];

						$db = mysqli_connect('localhost','id15441368_gamblingusername','Awklzqwe1^zxc','id15441368_gamblingdb');
						$query = "SELECT * FROM tbl_users WHERE username='$username'";
					    $result = mysqli_query($db, $query);
					    if(mysqli_num_rows($result)>0){
					    	$row = mysqli_fetch_array($result);

					    	//with two decimals
					    	$TwoDecimalCredits = number_format($row['credits'], 2, '.', '');
					    	// with comma
					    	$TwoDecimalCredits = number_format($TwoDecimalCredits,2);
					    	// $TwoDecimalCredits = $row['credits'] +5500;

					    	// need balik sa 2decimals para ma compute.
					    	// $TwoDecimalCredits = number_format($row['credits'], 2, '.', '');
					    	// $TwoDecimalCredits +=1;

					    	//if admin or not
					    	// if($row['user_type']=='admin'){
					    	if($row['user_type']=='player'){

					    		// echo "<script>
					    		// 	alert('admin ako par');
					    		// </script>";

					    		echo '

					    		<li ><a href="add_credits.php" class="addMatch2">Add Credits</a></li>
					    		<li><a href="#AddMatch" class="addMatch2 addMatchClick" >Add Match</a></li>
							 	<li ><a href="my_profile2.php" class="myAddedMatch logout" >My Added Matches</a></li>
							 	<li ><a href="my_bets.php" class="myBets logout" >My Bets</a></li>
					    		<li>
						    		<a href="#MyProfile" class="profile" id="login"><y class="hide_caret_down"><i class="fa fa-caret-down" aria-hidden="true"></i></y>
							 			<img  class="round-image" alt="image"  src="../IMAGES/'.$row['image'].'"/>
							 			<x>'.$username.'&nbsp;&nbsp;₱'.$TwoDecimalCredits.'</x>
							 		</a>
							 		<ul class="dropdown">
							 			<li ><a href="add_credits.php" class="addMatch profile">Add Credits&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							 			<li ><a href="#AddMatch" class="addMatch addMatchClick" >Add Match</a></li>
							 			<li ><a href="#MyProfile" class="profile" >My Added Matches</a></li>
							 			<li ><a href="my_bets.php" class="profile" >My Bets</a></li>
							           <li ><a href="index.php?logout=1" class="logoutX">Log out</a></li>
							        </ul>
						 		</li>
                                
						 		<li><a href="#MyProfile" class="myCredits">Credits: ₱'.$TwoDecimalCredits.'</a></li>
						 		<li ><a href="index.php?logout=1" class="logout">Log out</a></li>';	

					    	}else{

					    		// echo "<script>
					    		// 	alert('d ako admin par');
					    		// </script>";

					    		echo '
					    		
							      <li><a href="payments.php"  class="addMatch2">Payments</a></li>
							     <li><a href="users.php" class="addMatch2">Users Profile</a></li>
					    		<li>
						    		<a href="#" >
						    			<y class="hide_caret_down"><i class="fa fa-caret-down" aria-hidden="true"></i></y>
							 			<img  class="round-image" alt="image"  src="../IMAGES/'.$row['image'].'"/>
							 			<x>'.$username.'</x>
							 		</a>
							 		<ul class="dropdown">
							           <li><a href="payments.php" >Payments</a></li>
							           <li><a href="users.php" >Users Profile</a></li>
							           <li><a href="index.php?logout=1" class="logoutX">Log out</a></li>
							        </ul>
						 		</li>
						 		<li ><a href="index.php?logout=1" class="logout">Log out</a></li>';	
					    	}
					    	
					    }
					}
				?>
			</ul>
		</nav>
		<div class="menu-toggle">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</div>

	</header>
	
		<span id="result"></span>
		
		
 <br> <br> <br> <br> <br> <br> <br> <br>
 <div align="center"><span>&#169; 2020 JECKATZ. ALL RIGHTS RESERVED</span></div>
 <br> <br>
	

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.menu-toggle').click(function(){
				$('nav').toggleClass('active');
			});
			$('nav').click(function(){
				$('nav').toggleClass('active');
			});
		});
	</script>

	
	<script type="text/javascript">
		$("a").click(function(){
			$("a").css("background-color","");
			$(this).css("background-color","black");
		});
		$(document).ready(function(){
			$("#home").css("background-color","black");
		});
	</script>



	<!-- <script type="text/javascript">
		// disable right click
		document.addEventListener('contextmenu', event => event.preventDefault());
	</script> -->
</body>
</html>