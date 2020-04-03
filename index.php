<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">PrafullaDeori</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li><li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>	

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/prr.jpg" alt="This is me" width="500" height="700">
      <div class="carousel-caption">
        <h3>I am Prafulla Deori, An web Developer </h3>
        <p>We had such a great time in here RGU!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/prr1.jpg" alt="Chicago" width="500" height="700">
      <div class="carousel-caption">
        <h3>Ow This is me</h3>
        <p>I am Mr Prafulla with my two friends Rajesh and Raju, at Silapathar!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/prr4.jpg" alt="New York" width="500" height="700">
      <div class="carousel-caption">
        <h3>Hi, I am Prafulla</h3>
        <p>I love the Coding!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
<div class ="py-5">
	<h2 class="text-center">About Us</h2>
</div>

<div class="container-fluids">	
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/prr5.jpg" class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h3 class="display-4"> Hi I am Mr. Prafulla!</h3>
			<h2>
			<p class="py-5"> 		I did BSc in Mathematics from Moridhal College  and then now, I am doing MCA at Rajiv Gandhi University 	Rono Hills, Doimukh.
			</p>
			<a href="about.php"> If you wanna know me </a> 
			</h2>
		</div>
	</div>

</div>
</section>

<section class="my-5">
	<div class ="py-5">
		<h2 class="text-center">Our Services</h2>
			</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
 			 					<img class="card-img-top" src="images/prr3.jpg" alt=" Myimage">
  									<div class="card-body">
    									<h4 class="card-title">Beutiful Nature</h4>
    									<p class="card-text">Some example text.</p>
    									<a href="#" class="btn btn-primary">See Profile</a>
  									</div>
										
							</div> 
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
 			 					<img class="card-img-top" src="images/prr3.jpg" alt=" Myimage">
  									<div class="card-body">
    									<h4 class="card-title">Beutiful Nature</h4>
    									<p class="card-text">Some example text.</p>
    									<a href="#" class="btn btn-primary">See Profile</a>
  									</div>
										
							</div> 
						</div>
						<div class="col-lg-4 col-md-4 col-12">
							<div class="card">
 			 					<img class="card-img-top" src="images/prr2.jpg" alt=" Myimage">
  									<div class="card-body">
    									<h4 class="card-title">Beutiful Nature</h4>
    									<p class="card-text">Some example text.</p>
    									<a href="#" class="btn btn-primary">See Profile</a>
  									</div>
										
							</div> 
						</div>
					</div>
				</div>		
</section>

<section class="my-5">
	<div class ="py-5">
		<h2 class="text-center">FILL THE FORM</h2>
		
		<form action="userinfo.php"	method="post">
	

				<div class="w-50 m-auto">	
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="Name" autocomplete="off" class="form-control">

					</div>
				
		


				
					<div class="form-group">
						<label>Father name</label>
						<input type="text" name="Father_Name" autocomplete="off" class="form-control">

					</div>
				
				


				
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="Email" autocomplete="off" class="form-control">
					</div>
				

				
					<div class="form-group">
						<label>Mobile No.</label>
						<input type="text" name="Mobile" autocomplete="off" class="form-control">

					</div>
				


				<div class="form-group">
					<label>Address</label>
					<textarea class="form-control" name="Address">
					</textarea>
				</div>



				
					<div class="form-group">
						<label>Age</label>
						<input type="text" name="Age" autocomplete="off" class="form-control">
					</div>
				
		

		<h2> Education Detail:</h2>
				

				<div class="form-group">
					<label>Class 10 detailwith Percentage </label>
					<textarea class="form-control" name="Class_10">
					</textarea>

				</div>
				
		

				<div class="form-group">
					<label>Class 12 detail With percentage</label>
					<textarea class="form-control" name="Class_12">
					</textarea>
				</div>
		


				<div class="form-group">
					<label>About additional detail or qualification</label>
					<textarea class="form-control" name="Comment">
					</textarea>
				</div>
		  <button type="submit" class="btn btn-success">Submit</button>
		</div>
		</form>

	</div>

</section>		

<footer>
	<p class="p-3 bg-dark text-white">@dhemajinewcompany</p>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
</body>
</html>