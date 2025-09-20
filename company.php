<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		font:400 15px lato,sans-serif;
		line-height:1.8;
		color:#818181;
	}
	h2{
		font-size:24px;
		text-tranform:uppercase;
		color:#303030;
		font-weight:600;
		margin-bottom:30px;
	}
	h4{
		font-size:19px;
		line-height:1.234em;
		color:#303030;
		font-weight:400;
		margin-bottom:30px;
	}
	.jumbotron{
		background:#f4511e;
		color:#fff;
		padding:100px 25px;
		font-family:Montserrat,sans-serif;
	}
	.container-fluid{
		padding:60px 50px;
	}
	.bg-grey{
		background:#f6f6f6;
	}
	.logo{
		font-size:200px;
		color:#f4511e;
		
	}
	.logo-small{
		color:#f4511e;
		font-size:50px;
	}
	.thumbnail{
		padding:0; 0; 15px; 0;
		border:none;
		border-radius:0;
	}
	.thumbnail img{
		width:100%
		height:100%
		margin-bottom:10px;
	}
	.carousel-control.right, .carousel-control.left{
		background-img:none;
		color:#f4511e;
	}
	.carousel-indicators li{
		border:color:#f4511e;
	}
	.carousel-indicators li.active{
		background-color:#f4511e;
		
	}
	.item h4{
		font-size:19px;
		line-height:1.375em;
		margin:70px 0;
		font-weight:400;
		font-style:italic;
	}
	.item-span{
		font-style:none;
	}
	.panel{
		border:1px solid #f4511e;
		border-radius:0;
		transition:box-shadow 0.5s;
	}
	.panel:hover{
		box-shadow:5px 0px 40px rgba(0,0,0,.2);
	}
	.panel-footer .btn:hover{
		border:1px solid #f4511e;
		background-color:#fff !important;
		color:#f4511e;
	}
	.panel-heading{
		background-color:#f4511e !important;
		color:#fff !important;
		padding:25px;
		border-bottom:1px solid transparent;
		border-top-left-radius:0px;
		border-top-right-radius:0px;
		border-bottom-left-radius:0px;
		border-bottom-left-radius:0px;
	}
	.panel-footer{
		background-color:#fff !important;
	}
	.panel-footer h3{
		font-size:32px;
	}
	.panel-footer h4{
		font-size:14px;
		color:#aaa;
	}
	.navbar{
		margin-bottom:0;
		background-color:#f4511e;
		z-index:9999;
		border:0;
		font-size:;
		line-height:1.68799 !important;
		letter-spacing:4px;
		border-radius:0;
		font-family:Montserrat,sans-serif;
	}
	.navbar li a,.navbar .navbar-brand{
		color:#fff !important;
	}
	.navbar-nav li a:hover, navbar-nav li.active a{
		color:#fff !important;
		background:#f4511e !important;
	}
	.navar-toggle. navbar-default{
		border-color:transparent;
		color:#fff !important;
	}
	footer .glyphicon{
		font-size:20px;
		margin-bottom:20px;
		color:#f4511e;
	}
	.panel-footer button{
		color:#fff;
		background-color:#f4511e;
	}
	
	@media Screen and(max-width: 768px){
		.col-sm-4{
			text-align:center;
			margin:25px 0;
		}
		
	}
</style>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#portfolio">PORTFOLIO</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
	<div class="jumbotron text-center">
		<h1>Company</h1>
		<p>We Specialize in Blalala</p>
		<form class="form-inline">
			<div class="input-group">
				<input type="email" class="form-control" size="50" placeholder="Email Address" required>
				<div class="input-group-btn">
				<button type="button" class="btn btn-danger">Subscribe</button>
				</div>
			</div>
		</form>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<h2>About Company Page</h2>
				<h4>Loreum ipsum</h4>
				<p>Loreum ipsum Loreum ipsum Loreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumvLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsum</p>
				<button class="btn-default btn-lg">Get in touch</button>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-signal logo"></span>
			</div>
		</div>
	</div>
	
	
	<div class="container-fluid bg-grey">
		<div class="row">
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-globe logo"></span>
			</div>
			<div class="col-sm-8">
				<h4><strong>Mission</strong> Our Mission Loreum ipsum Loreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsum Loreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsum</h4>
				<h4><strong>Vission</strong> Our vission Loreum ipsum ipsum Loreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsum Loreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsumLoreum ipsum ipsum Loreum ipsumLoreum ipsumLoreum </h4>
			</div>
		</div>
	</div>
	<div class="container-fluid text-center">
		<h2>Services</h2>
		<h4>What we offer</h4>
		<br>
		<div class="row">
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-off logo-small"></span>
				<h4>POWER</h4>
				<p>Loreum ipsum Loreum ipsumLoreum</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-heart logo-small"></span>
				<h4>Love</h4>
				<p>Loreum ipsum Loreum ipsumLoreum</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-lock logo-small"></span>
				<h4>Job Done</h4>
				<p>Loreum ipsum Loreum ipsumLoreum</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-leaf logo-small"></span>
				<h4>Leaf</h4>
				<p>Loreum ipsum Loreum ipsumLoreum</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-certifacte logo-small"></span>
				<h4>Certifacte</h4>
				<p>Loreum ipsum Loreum ipsumLoreum</p>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-wrench logo-small"></span>
				<h4>Hard Work</h4>
				<p>Loreum ipsum Loreum ipsumLoreum</p>
			</div>
		</div>
	</div>
	<div class="container-fluid text-center bg-grey">
		<h2>Portfolio</h2>
		<h4>What We have Created</h4>
		<div class="row text-center">
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="images/paris.jpg" alt="paris">
					<p><strong>Paris</strong></p>
					<p>Yes, We built Paris</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="images/new.jpg" alt="paris">
					<p><strong>Newyork</strong></p>
					<p>Yes, We built Newyork</p>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="thumbnail">
					<img src="images/san.jpg" alt="paris">
					<p><strong> San Fransico</strong></p>
					<p>Yes, We built San Fransico</p>
				</div>
			</div>
		</div>
		<h2>What Our Customer Say</h2>
		<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner" role="listbox">
				<div class="item active">
				<h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
				</div>
				<div class="item">
				<h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
				</div>
				<div class="item">
				<h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="container-fluid">
		<div class="text-center">
			<h2>Pricing</h2>
			<h4>Choose a Payment Plan that work for you</h4>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class=" panel panel-default text-center">
					<div class="panel-heading">
						<h1>Basic</h1>
					</div>
					<div class="panel-body">
						<p><strong>20</strong> Loreum</p>
						<p><strong>15</strong> ipsum</p>
						<p><strong>5</strong> Dollar</p>
						<p><strong>2</strong> Sit</p>
						<p><strong>Endless</strong> Amit</p>
					</div>
					<div class="panel-footer">
						<h3>$19</h3>
						<h4>Per Month</h4>
						<button class="btn btn-default btn-lg">Signup</button>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class=" panel panel-default text-center">
					<div class="panel-heading">
						<h1>Pro</h1>
					</div>
					<div class="panel-body">
						<p><strong>20</strong> Loreum</p>
						<p><strong>15</strong> ipsum</p>
						<p><strong>5</strong> Dollar</p>
						<p><strong>2</strong> Sit</p>
						<p><strong>Endless</strong> Amit</p>
					</div>
					<div class="panel-footer">
						<h3>$29</h3>
						<h4>Per Month</h4>
						<button class="btn btn-default btn-lg">Signup</button>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class=" panel panel-default text-center">
					<div class="panel-heading">
						<h1>Premium</h1>
					</div>
					<div class="panel-body">
						<p><strong>20</strong> Loreum</p>
						<p><strong>15</strong> ipsum</p>
						<p><strong>5</strong> Dollar</p>
						<p><strong>2</strong> Sit</p>
						<p><strong>Endless</strong> Amit</p>
					</div>
					<div class="panel-footer">
						<h3>$49</h3>
						<h4>Per Month</h4>
						<button class="btn btn-default btn-lg">Signup</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-grey">
		<h2 class="text-center">CONTACT</h2>
		<div class="row">
			<div class="col-sm-5">
				<p>Contact us and we'll get back to you within 24 hours</p>
				<p><span class="glyphicon glyphicon-map-marker"></span> Chigao,US</p>
				<p><span class="glyphicon glyphicon-phone"></span> +90 6744897687</p>
				<p><span class="glyphicon glyphicon-envelope"></span> gfgeiufe@gmail.com</p>
			</div>
			<div class="col-sm-7">
				<div class="row">
					<div class="col-sm-6 form-group">
						<input class="form-control" id="name" name="name" placeholder="name" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
						<input class="form-control" id="email" name="email" placeholder="Email" type="text" required>
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comments" placeholder="comment" rows="5"></textarea><br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<button class="btn btn-default pull-right" type="submit">Send</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<img src="images/map.jpg" style="width:100%">
	<footer class="container-fluid text-center">
		<a href="#mypage" title="to-top">
			<span class="glyphicon glyphicon-chevron-up"></span>
			<p>Bootstrap theme made by<a href="htttps/www.w3schools" title="visit w3school"></a>w3 school.com</p>
		</a>
	</footer>
</body>
</html>