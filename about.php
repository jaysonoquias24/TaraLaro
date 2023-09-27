<!doctype html>
<html lang="en">
<head>
    <style>
    @import url(https://fonts.googleapis.com/css?family=Oswald:400);
    @import url(https://fonts.googleapis.com/css2?family=Merriweather%3Awght%40900&family=Sumana%3Awght%40700&display=swap);

    .about{
		float: right;
		text-decoration: none;
		color: white;
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

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    main{
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .about-section{
        background: url(images/aboutbg.png) no-repeat left;
        background-size: 70%;
        margin-left: 30px;
        overflow: hidden;
        padding: 100px 0;
    }

    section{
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background: #e1e1e1;
        font-family: "Merriweather";
    }


    </style>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>BlogSite</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/about.css">
	
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
	  <div class="navbar navbar-dark shadow-sm" style="background-color:#398B8D;">
	    <div class="container">
	      <a href="index.php" class="navbar-nav d-flex align-items-center">
		  <img src="images/whiteLogo.png" alt="Logo" width="200"/>
	      </a>

		  <a type='button' class="about" href='about.php'>About Us</a>

	      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    </div>
	  </div>
	  <div>
</header>

<main>
    <div class="about-section">
        <div class="inner-container">
            <h2>About Us</h2>
            <p class="text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut 
            enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor 
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
            sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <div class="team">
            <a type='button' class="button" href="#team">Meet Our Team</a>
            </div>
        </div>
    </div>
</main>

<section>
<h1 id="team">Our Team</h1>
   <div class="person" style="--color: #DB7093">
   <div class="card">
        <div class="box">
            <div class="container-inner">
                <div class="circle"></div>
                <img src="images/jay.png">
            </div>
        </div>
        <div class="divider"></div>
        <h3>Jayson Oquias</h3>
        <p>Programmerist</p>
        <div class="icon">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
        </div>
    </div>
    </div>

    <div class="person" style="--color: #202A44">
    <div class="card">
        <div class="box">
            <div class="container-inner">
                <div class="circle"></div>
                <img src="images/leop.png">
            </div>
        </div>
        <div class="divider"></div>
        <h3>Leo Paragatos</h3>
        <p>Programmerist</p>
        <div class="icon">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
        </div>
    </div>
    </div>

    <div class="person" style="--color: #987554">
    <div class="card">
        <div class="box">
            <div class="container-inner">
                <div class="circle"></div>
                <img src="images/eloisa.png">
            </div>
        </div>
        <div class="divider"></div>
        <h3>Eloisa Senga</h3>
        <p>Programmerist</p>
        <div class="icon">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
        </div>
    </div>
    </div>

    <div class="person" style="--color: #2C2C2B">
    <div class="card">
        <div class="box">
            <div class="container-inner">
                <div class="circle"></div>
                <img src="images/kar.png">
            </div>
        </div>
        <div class="divider"></div>
        <h3>Karina Dela Cruz</h3>
        <p>Programmerist</p>
        <div class="icon">
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>
            <ion-icon name="logo-instagram"></ion-icon>
        </div>
    </div>
    </div>

</section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
	
</html>