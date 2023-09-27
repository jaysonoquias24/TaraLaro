
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
	header("location: access_denied.php");
	exit();
}

?>



<!doctype html>
<html lang="en">
<head>
    <style>
		.navbarHeader{
			background-color:#398B8D;
			background-color:#398B8D;
		}
		.btnDrop{
			border:none;
		}
        .btnUpdate{
		display: block; margin-left: auto; margin-right: auto; margin-top:20px;
		width:100%;
		}
		.dropdown{
			font-size:38px; color:white; text-align:right; margin-right:-750px;
		}
		.btnLogout{
			display: block; margin-left: auto; margin-right: auto; margin-top:10px;
			width:100%;
		}
		.imgProfile{
			width:40px; height:40px; border:1px solid white; border-radius:50%;
		}
		.profile{
			width:200px; padding:5px; margin:5px;
		}
		.profilepic{
			width:100px; display: block; margin-left: auto; margin-right: auto; padding:3px;
		}
		.profilename{
			text-align:center; font-size:15px; margin-top:10px;
		}
        </style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>BlogSite</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="Stylesheet" href="css/home.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	
</head>

<body>


<header>
	  <div class="collapse navbarHeader" id="navbarHeader" >
	    <div class="container">
	      <div class="row">
	        <div class="col-sm-8 col-md-7 py-4">
	          <h4 class="text-white">About the Blog</h4>
	          <p class="text-dark">The TravelWithMe blog site is an online travel blog dedicated to 
				helping people explore the world. It was founded by a group of travel enthusiasts who
				 wanted to share their experiences and tips with fellow travelers. The blog is updated 
				 regularly with stories, photos, and videos from around the world. It also provides 
				 helpful advice on how to plan a trip, where to stay, and what to do when you get there. 
				 The blog also features interviews with experienced travelers, so readers can learn from 
				 their experiences. The blog is designed to be a one-stop shop for all things travel related, 
				 from planning to packing to exploring. With its helpful advice and inspiring stories, 
				 TravelWithMe is the perfect place for anyone looking to explore the world.</p>
	        </div>
	        <div class="col-sm-4 offset-md-1 py-4">
	          <h4 class="text-white">Sites</h4>
	          <ul class="list-unstyled">
	            <li><a href="https://national-u.edu.ph/" class="text-white">Visit Official Website</a></li>
                <li><a href="https://www.facebook.com/NationalUniversityPhilippines" class="text-white">Follow on Facebook - National U</a></li>
	            <li><a href="https://www.facebook.com/groups/ccitofficial/" class="text-white">Follow on Facebook - NUCCIT</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="navbar navbar-dark shadow-sm navbarHeader" >
	    <div class="container">
	      <a href="#" class="navbar-nav d-flex align-items-center">
		  <img src="images/whiteLogo.png" alt="Logo" width="200"/>
	      </a>


          <div class="dropdown">
  <button class="btn dropdown-toggle btnDrop" type="button"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  
		   <img src="images/userImg.png" alt="" class="imgProfile">
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
	
    <li>
	<div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `tblaccounts` WHERE ID = ?");
            $select_profile->execute([$_SESSION['user_id']]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_img/<?= $fetch_profile['Image']; ?>" alt="" class="profilepic">
         <p class="profilename"><?= $fetch_profile['Name']; ?></p>

		
		<a href="logout.php" class="btn btn-danger btnLogout"><i class='fas fa-sign-out-alt' ></i> Log out</a>
	</li>
    
  </ul>
</div>


	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    </div>
	  </div>
	</header>



</body>





<script src="js/bootstrap.min.js"></script>
	
</html>