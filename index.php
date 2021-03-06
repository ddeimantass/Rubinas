<!DOCTYPE html>
<html>

<head>
	<title>Rubinas</title>
	<meta charset="UTF-8">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"  href="styles.css">
	<link rel="stylesheet"  href="animate.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

	<header>
		<div class="page-top">
			<div class="container">
				<div>
					<h6><i class="fa fa-phone"></i> +370 610 28749 <i class="fa fa-envelope-o"></i> info@erubinas.lt</h6>
				</div>
			</div>
		</div>
        
        
		<nav class=" nav navbar-inverse topNav " >
			<div class="container">	
                <button class="navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse container ">
					<ul class="nav navbar-nav">
                        <li class="IamHere"><a id ='tab' href="index.html"><i class="fa fa-home"></i>Pradinis</a></li>
						<li><a id ='tab' href="ApieMus.html"><i class="fa fa-users"></i>Apie mus</a></li>
						<li><a id ='tab' href="Taisykles.html"><i class="fa fa-book"></i>Taisyklės</a></li>
						<li><a id ='tab' href="Pristatymas.html"><i class="fa fa-truck"></i>Pristatymas</a></li>
						<li><a id ='tab' href="DUK.html"><i class="fa fa-question"></i>DUK</a></li>
						<li><a id ='tab' href="Kontaktai.html"><i class="fa fa-info-circle"></i>Kontaktai</a></li>
						<li><a id ='tab' href="#"><i class="fa fa-user"></i>Prisijungti</a></li>
					</ul>
				</div>
            </div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-7 ">
					<a href='#'><img src="icon/logo.png"></a>
				</div>
				<div class="col-xs-12 col-md-3 ">
					<form class="form-inline search">
						<div class="form-group">
							<label class="sr-only" for="Search">Paieška</label>
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Paieška" id= "searchField">
							</div>
						</div>
						<button type="submit" id= "ieskoti" class="btn btn-default"><i class="fa fa-search"></i></button>
					</form>
				</div>
				<div class=" nav navbar-inverse col-xs-12 col-md-2 krepselis">
					<ul class="nav navbar-nav navbar-right">
						<li><a id ='tab' href="#"><i class="fa fa-shopping-cart"></i> Krepšelis <small>(tuščia) </small><strong class="caret"></strong></a></li>
					</ul>
				</div>
			</div>
		</div>	

        <div class="container ">	
            <nav class=" nav navbar-inverse itemsMenu" >
				<button class="navbar-toggle" data-toggle = "collapse" data-target = ".ItemsHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>					
				</button>
				<div class="collapse navbar-collapse ItemsHeaderCollapse">
					<ul class="nav navbar-nav">
                        <li><a id ='tab' href="#">Marškinėliai</a></li>
						<li><a id ='tab' href="#">Džinsai</a></li>
                        <li><a id ='tab' href="#">Kelnės</a></li>
                        <li><a id ='tab' href="#">Batai</a></li>
                        <li><a id ='tab' href="#">Marškiniai</a></li>
						<li><a id ='tab' href="#">Kostiumai</a></li>
						<li><a id ='tab' href="#">Laikrodžiai</a></li>
                        <li><a id ='tab' href="#">Piniginės</a></li>
                        <li><a id ='tab' href="#">Striukės</a></li>
                        <li><a id ='tab' href="#">Aksesuarai</a></li>
                        <li><a id ='tab' href="#">Mokyklinės Uniformos</a></li>
                        <li><a id ='tab' href="#">Kiti</a></li>
					</ul>
				</div>
		  </nav>
	   </div>
	</header>
    
    <div class='container'>
        <div id='myCarousel' class='carousel slide'>
            <ol class='carousel-indicators'>
                <li data-target = '#myCarousel' data-slide-to = '0'></li>
                <li data-target = '#myCarousel' data-slide-to = '1' class= 'active' ></li>
                <li data-target = '#myCarousel' data-slide-to = '2'></li>
            </ol>
            <div class ='carousel-inner'>

                <div class='item'>
                    <img src="carousel/home.jpg" alt='home' class='img-responsive'>
                </div>
                <div class='item active'>
                    <img src="carousel/lithium-slim-fit-wedding-suit-hire-e1448865424502-2000x500.jpg" alt='suit' class='img-responsive'>
                </div>
                <div class='item'>
                    <img src='carousel/Indochino-dandy4.jpg' alt='shoes' class='img-responsive'>
                </div>
            </div>

            <a class='carousel-control left' href='#myCarousel' data-slide = 'prev'>
                <span class = 'icon-prev '></span>
            </a>
            <a class='carousel-control right' href='#myCarousel' data-slide = 'next'>
                <span class = 'icon-next '></span>
            </a>
        </div>
    </div>
    s
	<article class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="page-header">
					<h1>Rekomenduojame</h1>
				</div>
				<div class="row info-box">
					<div class="col-xs-6 col-sm-3 ">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas4.jpg"></a>
						</div>
						<h3>klasikinis šviesus švarkas</h3>
						<h3>70.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>
					</div>
					<div class="col-xs-6 col-sm-3 ">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas2.jpg"></a>
						</div>
						<h3>klasikinis tamsus švarkas</h3>
						<h3>72.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>
					</div>
					<div class="col-xs-6 col-sm-3 ">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas1.jpg"></a>
						</div>
						<h3>klasikinis tamsus švarkas</h3>
						<h3>79.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>
					</div>
					<div class="col-xs-6 col-sm-3 ">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas3.jpg"></a>
						</div>
						<h3>klasikinis tamsus švarkas</h3>
						<h3>68.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>

					</div>
				</div>
			</div>
		</div>
	</article>

	<article class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="page-header">
					<h1>Naujos prekės</h1>
				</div>
				<div class="row info-box">
					<div class="col-xs-6 col-sm-3 ">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas4.jpg"></a>
						</div>
						<h3>klasikinis šviesus švarkas</h3>
						<h3>70.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>
					</div>
					<div class="col-xs-6 col-sm-3 ">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas2.jpg"></a>
						</div>
						<h3>klasikinis tamsus švarkas</h3>
						<h3>72.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>
					</div>
					<div class="col-xs-6 col-sm-3 ">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas1.jpg"></a>
						</div>
						<h3>klasikinis tamsus švarkas</h3>
						<h3>79.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>
					</div>
					<div class="col-xs-6 col-sm-3 ">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas3.jpg"></a>
						</div>
						<h3>klasikinis tamsus švarkas</h3>
						<h3>68.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>

					</div>
				</div>
			</div>
		</div>
	</article>

	<article class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="page-header">
					<h1>Populiarios prekės</h1>
				</div>
				<div class="row info-box">
					<div class="col-xs-6 col-sm-3 ">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas4.jpg"></a>
						</div>
						<h3>klasikinis šviesus švarkas</h3>
						<h3>70.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>
					</div>
					<div class="col-xs-6 col-sm-3 ">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas2.jpg"></a>
						</div>
						<h3>klasikinis tamsus švarkas</h3>
						<h3>72.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>
					</div>
					<div class="col-xs-6 col-sm-3">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas1.jpg"></a>
						</div>
						<h3>klasikinis tamsus švarkas</h3>
						<h3>79.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>
					</div>
					<div class="col-xs-6 col-sm-3 ">
						<div class='imgframe'>
							<a href='#'><img class="image" src="ft/svarkas3.jpg"></a>
						</div>
						<h3>klasikinis tamsus švarkas</h3>
						<h3>68.00€ <a href="#" class="btn btn-danger pull-right ">Prikti</a></h3>

					</div>
				</div>
			</div>
		</div>
	</article>

	<aside class="container">
		<div class="jumbotron">
			<div class="row info-box">
				<div class="col-sm-12 col-md-4 v-separator ">
					<a href='#'><img src="icon/delivery.png"></a>
					<h2>Nemokamas pristatymas</h2>
					<h3>Visas jūsų užsakytas prekes el. parduotuvėje Rubinas pristatysime visiškai NEMOKAMAI!!!</h3>
					<p class="space"></p>
					<center><a href="#" class="btn btn-danger">Sužinoti daugiau</a></center>
				</div>
				<div class="col-sm-12 col-md-4 v-separator">
					<a href='#'><img src="icon/garantija3.png"></a>
					<h2>100% pinigų grąžinimo garantija</h2>
					<h3>Visas el. parduotuvėje Rubinas įsigytas prekes galima grąžinti ir atgauti sumokėtus pinigus</h3>
					<p class="space"></p>
					<center><a href="#" class="btn btn-danger">Sužinoti daugiau</a></center>
				</div>
				<div class="col-sm-12 col-md-4 v-separator">
					<a href='#'><img src="icon/lock.png"></a>
					<h2>Saugus atsiskaitymas internete</h2>
					<h3>El. parduotuvė Rubinas užtikrina, kad visi jūsų asmeniniai duomenys yra visiškai saugūs</h3>
					<p class="space"></p>
					<center><a href="#" class="btn btn-danger">Sužinoti daugiau</a></center>
				</div>
			</div>
		</div>
	</aside>

	<footer>
		<div class='social'>
			<center>
				<a href="https://www.facebook.com/erubinas"><img src="icon/facebook.png"></a>
			</center>
		</div>
		<div class="jumbotron">
			<div class="container">
				<div class="row">
					<div class="col-xs-8">
						<h2>Prenumeruokite mūsų naujienlaiškį</h2>
					</div>
					<div class="col-xs-4 ">
						<form class="form-inline newsletter">
							<div class="form-group">
								<label class="sr-only" for="Email">Elektroninis paštas</label>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="pavyzdys@gmail.com">
								</div>
							</div>
							<button type="submit" class="btn btn-default"><i class="fa fa-envelope-o"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text">Rubinas ™  2016 UAB „Erubinas". Visos teisės priklauso Deimantui Abelskiui</p>
			</div>
		</div>
	</footer>

	<script src = "//code.jquery.com/jquery-2.2.1.min.js"></script>
	<script src = "bootstrap/js/bootstrap.js" type="text/javascript" ></script>
	<script src= 'animate.js' type="text/javascript"></script>


</body>
</html>