<?php echo doctype('html5'); ?>
<html>

<head>
	<title>Rubinas</title>
	<meta charset="UTF-8">
	<link rel="stylesheet"  href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet"  href="<?php echo base_url();?>styles.css">
	<link rel="stylesheet"  href="<?php echo base_url();?>animate.css">
	<link rel="stylesheet"	href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" >
</head>

<body>

	<header>
		<div class="page-top">
			<div class="container">
				<div>
					<h6><i class="fa fa-phone"></i> +370 610 28749 <i class="fa fa-envelope-o"></i> info@rubinas.lt</h6>
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
                        <li class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>"><i class="fa fa-home"></i>Pradinis</a></li>
						<li class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/site/apieMus'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/site/apieMus"><i class="fa fa-users"></i>Apie mus</a></li>
						<li class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/site/taisykles'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/site/taisykles"><i class="fa fa-book"></i>Taisyklės</a></li>
						<li class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/site/pristatymas'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/site/pristatymas"><i class="fa fa-truck"></i>Pristatymas</a></li>
						<li class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/site/DUK'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/site/DUK"><i class="fa fa-question"></i>DUK</a></li>
						<li class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/site/kontaktai'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/site/kontaktai"><i class="fa fa-info-circle"></i>Kontaktai</a></li>
						<li id='login' class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/site/prisijungimas'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/site/prisijungimas"><i class="fa fa-sign-in"></i>Prisijungti</a></li>
						<li id='anketa' class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/vartotojas/anketa'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/vartotojas/anketa"><i class="fa fa-user"></i>Anketa</a></li>
						<li id='atsiliepimas' class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/vartotojas/rasytiAtsiliepima'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/vartotojas/rasytiAtsiliepima"><i class="fa fa-pencil"></i>Atsiliepimai</a></li>
					</ul>
				</div>
            </div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-10 ">
					<a href='<?php echo base_url();?>'><img src="<?php echo base_url();?>icon/logo.png"></a>
				</div>
<!--				<div class="col-xs-12 col-md-3 ">
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
-->
				<div class=" nav navbar-inverse col-xs-12 col-md-2 krepselis">
					<ul class="nav navbar-nav navbar-right">
						<li class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/site/krepselis'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/site/krepselis"><i class="fa fa-shopping-cart"></i> Krepšelis <small>(tuščia) </small><strong class="caret"></strong></a></li>
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
                        <li class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/site/marskineliai'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/site/marskineliai">Marškinėliai</a></li>
                        <li class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/site/uniformos'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/site/uniformos">Mokyklinės Uniformos</a></li>
                        <li class="<?php if(base_url(uri_string())=='http://localhost:8888/CodeIgniter/site/kostiumai'){echo "IamHere ";}?> " ><a id ='tab' href="<?php echo base_url();?>index.php/site/kostiumai">Kostiumai</a></li>
<!--						<li><a id ='tab' href="#">Džinsai</a></li>
                        <li><a id ='tab' href="#">Kelnės</a></li>
                        <li><a id ='tab' href="#">Batai</a></li>
                        <li><a id ='tab' href="#">Marškiniai</a></li>
						<li><a id ='tab' href="#">Laikrodžiai</a></li>
                        <li><a id ='tab' href="#">Piniginės</a></li>
                        <li><a id ='tab' href="#">Striukės</a></li>
                        <li><a id ='tab' href="#">Aksesuarai</a></li>
                        <li><a id ='tab' href="#">Kiti</a></li>
-->
					</ul>
				</div>
		  </nav>
	   </div>
	</header>
   	