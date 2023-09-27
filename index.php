
<!doctype html>
<html lang="en">
<head>
	
<style>
	@import url(https://fonts.googleapis.com/css?family=Oswald:400);

	body{
		background-image:url('images/2.png');
		background-repeat:no-repeat;
		background-size:cover;
		height:100vh;
		weight:100%;
	}
	.carousel-control-prev-icon, .carousel-control-next-icon {
		height: 100px;
    width: 100px;
    outline: black;
    background-color: rgba(0, 0, 0, 0.3);
    background-size: 100%, 100%;
    border-radius: 50%;
    border: 1px solid black;
	}

	.AboutContainer{
		background-image:url('images/indexbg.png');
		background-repeat:no-repeat;
		background-size:cover;
		height:100vh;
		weight:100%;
	}

	.about{
		float: right;
		text-decoration: none;
		font-family: 'Oswald', sans-serif;
		font-size: 20px;
		overflow: hidden;
		letter-spacing: 3px;
		text-align:right; 
		margin-right:-700px;
	}

	.about:hover{
	color:yellow;
	}

/* Custom CSS for changing the border-bottom colors */
.navbar-nav .nav-item:nth-child(1) .nav-link {
  border-bottom: 2px solid red;
}

.navbar-nav .nav-item:nth-child(2) .nav-link {
  border-bottom: 2px solid purple;
}

.navbar-nav .nav-item:nth-child(3) .nav-link {
  border-bottom: 2px solid yellow;
}

.navbar-nav .nav-item:nth-child(4) .nav-link {
  border-bottom: 2px solid blue;
}

.navbar-nav .nav-item:nth-child(5) .nav-link {
  border-bottom: 2px solid orange;
}
.navbar-brand {
    background-color: transparent !important; /* Remove background color */
    border: none !important; /* Remove border */
    padding: 0; /* Remove padding */
	box-shadow: none !important;
  }


  /* Optional: Add custom styles for the logo image */
  .navbar-brand img {
    max-height: 60px; /* Adjust the height as needed */
	border: none !important;
	width: 100%;
  }
  .responsive-image {
        max-width: 100%;
        height: auto;
    }
.navbar-toggler{
	background-color: transparent !important; /* Remove background color */
    border: none !important; /* Remove border */
}
	
</style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>BlogSite</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

	<header>
	  <div class="collapse" id="navbarHeader" style="background-color:#398B8D;">
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
	            <li><a href="https://travelwithme.net/" class="text-white">Visit Official Website</a></li>
                <li><a href="https://www.facebook.com/travelwithme" class="text-white">Follow on Facebook - TravelWithMe</a></li>
	            <li><a href="https://www.facebook.com/groups/travelwithmeofficial/" class="text-white">Join the FB Group - TravelWithMe Group</a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="images/ColoredLogo.png" alt="Logo" >
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav  ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
	  
	  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    
    </div>
  </div>
</nav>




	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    
	  <div>
	</header>


	<main>

	
	<div class="thumbnail-header">
        <div class="thumbnail-image">
            <img src="images/film.png" alt="Thumbnail Image"  class="responsive-image" >
        </div>
        <div class="gradient-overlay"></div>
        <div class="content">
            <div class="left-column">
                <h1>Title</h1>
                <p>Description goes here...</p>
            </div>
            <div class="right-column">
                <a href="#" class="watch-button">Watch Video</a>
            </div>
        </div>
    </div>



	  <section class="py-2 AboutContainer" style="height:110vh; margin-top:10px; padding:10px;">
	  	<div class="container">
	  		<div class="row">

	  			<div class="col-md-8">
	  				<div class="card shadow-sm">
		          	<img src="images/carousel1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h1 class="display-5">TravelWithMe Blog Site</h1>
                        <figure>
                            <blockquote class="blockquote">
                                <p style="text-align: justify; text-justify: inter-word;">
								Welcome to TravelWithMe Blog! We are here to help you explore the world and discover new places. 
								Our blog is dedicated to providing you with the best travel tips, advice, and experiences. 
								We will share our personal stories, tips, and tricks to make your travels easier and more enjoyable. 
								We will also feature inspiring stories from other travelers and share our favorite destinations. 
								Whether you're looking for a weekend getaway or a long-term adventure, we have something for everyone.
								 So, join us on our journey, and let's explore the world together!
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in Travel Blog <cite title="Source Title">heyciara</cite>
                                <small class="text-muted"><a href="https://www.heyciara.com/">Source</a></small>
                            </figcaption>
                        </figure>
		                </div>
		          </div>
	  			</div>

	  			<div class="col-md-4">
				  
	  				<div class="row" style="background:white; padding:10px;radius:10px;">
						
							<div class="d-grid gap-2">
								<a type='button' class="btn btn-lg btn-primary" href='ui_login.php'>Sign in</a>
								<a type='button' class='btn btn-lg btn-info' href='ui_register.php'>Register Here</a>
							</div>

						
					</div>

					<div class="row" style="margin-top: 5px;">
						<form action="" class="form-control" id="frmComments" name="frmComments" enctype="multipart/form-data" autocomplete="off">
						
					    <h1 class="h3 mb-3 fw-normal">Post Comments</h1>

					    <div class="mb-3">
						    <textarea id="comment" name="comment" style="width:100%; height: 228px;"></textarea>
						</div>

					   <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Submit Post</button>
					   
			    
					  </form>
					</div>

	  			</div>

	  		</div>
	  	</div>
	  </section>

	  <!-- Alert -->
	  <!-- The Modal -->
		<div class="modal" id="myModal">
 			<div class="modal-dialog">
    			<div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Please Sign In First!</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Do you already have an account?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
	  <a type='button' class="btn btn-lg btn-primary" href='ui_login.php'>Sign in Here</a>
	<a type='button' class='btn btn-lg btn-info' href='ui_register.php'>Register Here</a>
      </div>

    </div>
  </div>
</div>





	  <section class="py-5" >
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-12">
	  				<h1 class="h3 mb-3 fw-normal">Comments</h1>
	  				<table class="table table-striped table-responsive">
                      <thead>
                        <tr>
                        <th scope="col">Message</th>
                        <th scope="col">Post Date</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!--PHP routine to Display Data-->
						<?php
            		    include_once("config1.php");
             		   	$result = mysqli_query($mysqli, "SELECT * FROM tblcomments ORDER BY id DESC");
             		   	while($res = mysqli_fetch_array($result)) {
              		    	echo "<tr>";
              		   		echo "<td>".$res['Comment']."</td>";
              		    	echo "<td>".$res['PostedDate']."</td>";
                		  	echo "<tr>";
              		  	}

            		  ?>
                    </tbody>

                    </table>
	  			</div>
	  		</div>	
	  	</div>
	  </section>

	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>