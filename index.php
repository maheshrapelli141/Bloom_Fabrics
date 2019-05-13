
<!DOCTYPE html>

<html lang="en">

<head>
  <title>Bloom Fabrics Pvt Ltd</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
	.navbar-brand {
		font-weight : bold;
	}
  .carousel-item{
      height:550px;
      width : 100%;
  }
	.about-section {
		padding-top : 60px;
		padding-bottom : 60px;
	}
	.about-section {
		text-align:center;
	}
	.about-section p{
		text-align:center;
	}
	.products-section {
		background-color : #eeeeee;
		padding-top : 60px;
		padding-bottom : 60px;
	}
	.card {
		text-align :center;
		height:450px;
		padding : 16px;
		position : relative;
		text-align : center;
	}
	.card img {
		height : 100%;
		width : 90%;
		margin-bottom : 24px;
	}
	.layer {
		position : absolute;
		top : 0px;
		right : 0px;
		height: 100%;
		width : 0%;
		background-color: #343a40;
		color: #ffffff;
		overflow : hidden;
	}
	.layer h4 {
		position : absolute;
		top : 50%;
		left : 50%;
		transform : translate(-50%,-50%);
	}
	.card:hover > .layer {
		width : 100%;
		transition : .3s;
	}
	.buss-opt-section {
		padding-top : 60px;
		padding-bottom : 60px;
		text-align: center;
		background-color : #343a40;
		color : #ffffff;
	}
	.buss-opt-section ul {
		text-align : left;
	}
	.buss-opt-section ul li{
		padding : 12px;
	}
	.fa-check {
		padding-right : 15px;
	}
	.packs-section {
		padding : 60px 0px;
		text-align: center;
	}
	/* hr {
		border-bottom : 1px solid #343a40;
	} */
	.pack-card {
		border: 1px solid #343a40;
		text-align : center;
		margin : 25px;
		border-radius : 10px;
		box-shadow : 0px 0px 5px #343a40;
		overflow : hidden;
	}
	.pack-card h4{
		border-bottom : 1px solid #343a40;
		padding : 15px;
		background-color : #343a40;
		color : #ffffff;
	}
	.pack-body {
		/* border-top : 1px solid #343a40;
		border-bottom : 1px solid #343a40; */
		padding : 20px;
	}
	.col-sm-4 a {
		color : #000000;
		text-decoration : none;
	}
	.col-sm-4 a:hover > .pack-card{
		box-shadow : 0px 0px 10px #000000;
	}
	.dark-line {
		border-bottom : 1px solid black;
	}
	.contact-section {
		padding : 60px 0px;
	}
	.contact-section h3{
		text-align : center;
	}
	.form-section {
		padding : 15px;
	}
	.footer {
		background-color : #343a40;
		color : #ffffff;
		text-align : center;
		padding : 20px 0px;
	}
	@media screen and (max-width: 600px) {
		.carousel-item{
			width : 100%;
			height : auto;
		}
		.pack-card {
			margin : 10px;
		}
	}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><span style="color:#e67300;">Bloom<sup>RSF</sup></span> Fabrics</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#products">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#opportunities">Opportunities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#packs">Packs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav> 
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./assets/img/slide1.jpg" alt="Textiles" width="100%" height="100%">
    </div>
    <div class="carousel-item">
      <img src="./assets/img/slide2.jpg" alt="Textiles" width="100%" height="100%">
    </div>
    <div class="carousel-item">
      <img src="./assets/img/slide3.jpg" alt="Textiles" width="100%" height="100%">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container about-section" id="about">
	<h2>Who we are ?</h2><hr>
	<p>Bloom RSM Fabrics Pvt Ltd. is a medium
promoting indian textile industry & its
products along with great earning
platform for its promoters.
<br> By applying the direct sellign concept we
are providing amazing business opportunity to the common man who believes in smart hardwork.</p>
</div>
<div class="products-section" id="products">
	<div class="container">
	<h3 align="center">Our Products</h3><br><hr><br>
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<img src="./assets/img/suit.jpg" height="100%" width="100%">
					<div class="layer">
						<h4>MENS SUIT LENGTH</h4>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<img src="./assets/img/saree.jpg" height="100%" width="100%">
					<div class="layer">
						<h4>PAITHANI SAREE</h4>
						</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<img src="./assets/img/shirt_piece.jpg" height="100%" width="100%">
					<div class="layer">
						<h4>MENS SUIT COMBO(SHIRT+PANTS)</h4>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="buss-opt-section" id="opportunities">
	<div class="container">
		<h3>Business Opportunity</h3>
		<strong>** Earn unlimited income by one and only Indian Fabrics **</strong>
		<br><br>
		<hr style="border:1px solid #ffffff;">
		<br>
		<ul type="none">
			<li><i class="fa fa-check"></i>GENERATION PLAN WITH UNLIMITED LEGS.</li>
			<li><i class="fa fa-check"></i>AMAZING DIRECT REFERAL INCOME.</li>
			<li><i class="fa fa-check"></i>AUTO-UPGRADE SYSTEM FOR REWARDS.</li>
			<li><i class="fa fa-check"></i>AUTO-UPGRADE SYSTEM FOR MULTIPLE CYCLES.</li>
			<li><i class="fa fa-check"></i>TEAM BUILDING LEADERSHIP INCENTIVE.</li>
			<li><i class="fa fa-check"></i>DOMESTIC & INTERNATIONAL BUSINESS TOURS ON
	ACHIEVEMENT.</li>
			<li><i class="fa fa-check"></i>100% WORKING PLAN SO AS TO ASSURE LONG TERM
	BUSINESS.</li>
		</ul>
	</div>
</div>
<div class="packs-section" id="packs">
	<div class="container">
	<h3>Our Packs</h3><hr>
		<div class="row">
			<div class="col-sm-4">
			<a href="javascript:void(0)"  data-toggle="collapse" data-target="#starter">
				<div class="pack-card">
					<h4>Starter</h4>
					<p>Purchase Product of <br>
					<b><i class="fa fa-rupee"></i>1000 /- </b><br>(Including GST)</p><hr class="dark-line">
					<p>Materials you will get : <br>
					1 Pcs Good Quality Shirt</p>
				</div>
				</a>
			</div>
			<div class="col-sm-4">
			<a href="javascript:void(0)"  data-toggle="collapse" data-target="#silver">
				<div class="pack-card">
					<h4>Silver</h4>
					<p>Purchase Product of <br>
					<b><i class="fa fa-rupee"></i> 3500 /- </b><br>(Including GST)</p><hr class="dark-line">
					<p>Materials you will get : <br>
					Suit Length, Designer Saree, Pant-Shirt Combo</p>
				</div>
				</a>
			</div>
			<div class="col-sm-4">
			<a href="javascript:void(0)"  data-toggle="collapse" data-target="#gold">
				<div class="pack-card">
					<h4>Gold</h4>
					<p>Purchase Product of <br>
					<b><i class="fa fa-rupee"></i>6500 /- </b><br>(Including GST)</p><hr class="dark-line">
					<p>Materials you will get : <br>
					Branded Suit Length, Designer Saree, Pant-Shirt Combo</p>
				</div>
				</a>
			</div>
			<?php require_once('starter.php'); ?>
			<?php require_once('silver.php'); ?>
			<?php require_once('gold.php'); ?>
		</div>
	</div>
</div>
<div class="contact-section" id="contact">
	<div class="container">
	<h3>Contact</h3><hr>
		<div class="row">
			<div class="col-sm-6">
				<div class="form-section">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
						<label>Name : </label><br>
						<input type="text" name="name" class="form-control"><br>
						<label>Mobile no. : </label><br>
						<input type="text" name="mobile" class="form-control"><br>
						<label>Email : </label><br>
						<input type="email" name="email" class="form-control"><br>
						<label>Message : </label><br>
						<textarea name="message" class="form-control"></textarea><br>
						<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane-o"></i> Send</button>
					</form>
				</div>
			</div>
			<div class="col-sm-6"><br>
			<h4>Contact Details</h4><hr><br>
				<i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp; 95187 24440 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 86989 06555 <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 9890071959 <br><br>
				<i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp; bloomrsmfebrics@bloomfebrics.com
			</div>
		</div>
	</div>
</div>
<div class="footer">
	&copy; 2019 Bloom Fabrics 
</div>
</body>
</html>

​

