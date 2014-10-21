<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MerchanCS Template</title>

<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400%7COpen+Sans:400,300%7CJulius+Sans+One" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="styles/main.css" rel="stylesheet">
<link href="styles/account.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="scripts/main.js"></script>
<script src="scripts/account.js"></script>
</head>

<body class="electric">
<header id="main-header">
<nav class="navbar navbar-default" role="navigation">
<a class="navbar-brand" href="index.html"><img alt="MerchanCS Logo" class="logo" src="images/logo.jpg"></a>

<ul class="nav navbar-nav navbar-right">
<li><a class="home" href="index.html"><i class="fa fa-home text-inherit"></i> Home</a></li>
<li><a class="search" href="search.html"><i class="fa fa-search text-inherit"></i> Search</a></li>
<li><a class="browse" href="#"><i class="fa fa-bars text-inherit"></i> Browse</a></li>

<li class="dropdown themes">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="background-inherit demo-disk"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a data-class="apple" href="#"><span class="apple-instance demo-disk"></span> Apple</a></li>
<li><a class="active" data-class="electric" href="#"><span class="electric-instance demo-disk"></span> Electric</a></li>
<li><a data-class="lime" href="#"><span class="lime-instance demo-disk"></span> Lime</a></li>
<li><a data-class="oak" href="#"><span class="oak-instance demo-disk"></span> Oak</a></li>
</ul>
</li>
</ul>

<div class="input-group search">
<input class="form-control" type="text" placeholder="Search">
<span class="input-group-btn">
<button class="btn btn-default" type="button">Go</button>
</span>
</div>
	
<ul class="personal">
<li class="account dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Walter J. Evancost</a>

<ul class="dropdown-menu dropdown-menu-right" role="menu">
<li>
<div>
<h2 class="background-inherit">W</h2>
<h3>Walter J. Evancost</h3>
<p>cdboatright@gcc.edu</p>
<a href="#" class="btn btn-default" role="button">Sign Out</a>
</div>
</li>
</ul>
</li>

<li class="cart"><a href="cart.html"><i class="fa fa-shopping-cart"><span class="background-inherit badge pull-right">1</span></i></a></li>
</ul>
</nav>
</header>

<aside id="categories">
<h2>MerchanCS</h2>
	
<nav>
<h2>Shopping Categories</h2>

<ul>
<li><a class="text-inherit" href="#">Category A</a></li>
<li><a class="text-inherit" href="#">Category B</a></li>
<li><a class="text-inherit" href="#">Category C</a></li>
<li><a class="text-inherit" href="#">Category D</a></li>
<li><a class="text-inherit" href="#">Category E</a></li>
<li><a class="text-inherit" href="#">Category F</a></li>
<li><a class="text-inherit" href="#">Category G</a></li>
<li><a class="text-inherit" href="#">Category H</a></li>
<li><a class="text-inherit" href="#">Category I</a></li>
<li><a class="text-inherit" href="#">Category J</a></li>
<li><a class="text-inherit" href="#">Category K</a></li>
</ul>
</nav>
</aside>

<div id="page-content-wrapper">
	<div class="container">
		<div class="row">
		<div class="col-sm-3"> </div>
		<div class="col-sm-9">
			<h2>Account Settings<br/></h2>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-12">
						<div id="account-controls">
							<table>
								<tr>
									<td class="topic-column">
										<span><b>Username:</b></span>
									</td>
									<td class="data-column">
										<span>User</span>
									</td>
									<td class="change-column"></td>
								</tr>
								<tr>
									<td class="topic-column">
										<span><b>Email:</b></span>
									</td>
									<td class="data-column">
										<span class='email-data'>user123@gcc.edu</span>
										<input type="textbox" class="edit-email hide-class" value="user123@gcc.edu"/>
									</td>
									<td class="change-column">
										<input type="button" id="email-change" class="email-data" value="Change" />
										<input type="button" id="email-submit" class="edit-email hide-class" value="Submit" />
									</td>
								</tr>
								<tr>
									<td class="topic-column">
										<span class="password-data"><b>Password:</b></span>
										<span class="edit-password hide-class"><b>New Password:<br> </b></span>
										<span class="edit-password hide-class"><b>Confirm Pasword:<br> </b></span>
										<span class="edit-password hide-class"><b>Current Pwd:</b></span>
									</td>
									<td class="data-column">
										<span class="password-data">********</span>
										<input type="textbox" id="new-password" class="edit-password hide-class" value=""/>
										<input type="textbox" id="confirm-password" class="edit-password hide-class" value=""/>
										<input type="textbox" id="current-password" class="edit-password hide-class" value=""/>
									</td>
									<td class="change-column">
										<input id="password-change" class='password-data' type="button" value="Change"/>
										<input id="password-submit" type="button" class="edit-password hide-class" value="Submit"/>
									</td>
								</tr>
								<tr>
									<td class="topic-column">
										<span><b>Payment Info:</b></span>
									</td>
									<td class="data-column">
										<span class="payment-data">Credit Card<br>Master Card<br>XXXX-XXXX-XXXX-1234</span>
										<input class="edit-payment hide-class" type="textbox" value=""/>
										<input class="edit-payment hide-class" type="textbox" value=""/>
										<input class="edit-payment hide-class" type="textbox" value=""/>
									</td>
									<td class="change-column">
										<input id="payment-change" type="button" class="payment-data" value="Change"/>
										<input id="payment-submit" class="edit-payment hide-class" type="button" value="submit"/>
									</td>
								</tr>
								<tr>
									<td class="topic-column">
										<span><b>Shipping Address:</b></span>
									</td>
									<td class="data-column">
										<span class="shipping-data">200 Campus Dr. <br>Grove City, PA, 16127 </span>
										<input type="textbox" class="edit-shipping hide-class" value=""/>
										<input type="textbox" class="edit-shipping hide-class" value=""/>
									</td>
									<td class="change-column">
										<input type="button" id="shipping-change" class='shipping-data' value="Change"/>
										<input type="button" id="shipping-submit" class="edit-shipping hide-class" value="Submit"/>
									</td>
							</table>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>

<footer id="main-footer">
<section class="divider">
<img alt="MerchanCS Footer Logo" src="images/logo-footer.jpg"/>
</section>
	
<ul class="profiles">
<li><span><img alt="Cory Boatright" src="https://my.gcc.edu/icsfileservershare/icsphotos/467190.jpg"/></span></li>
<li><span><img alt="William Birmingham" src="https://my.gcc.edu/icsfileservershare/icsphotos/275544.jpg"/></span></li>
<li><span><img alt="Dorian Yeager" src="https://my.gcc.edu/icsfileservershare/icsphotos/200391.jpg"/></span></li>
<li><span><img alt="Brian Dellinger" src="https://my.gcc.edu/icsfileservershare/icsphotos/250085.jpg"/></span></li>
<li><span><img alt="Lory Al Moakar" src="https://my.gcc.edu/icsfileservershare/icsphotos/465641.jpg"/></span></li>
</ul>

<section class="mega-footer">
<ul>
<li>MerchanCS &bull; Noah Cusimano &bull; David Goehring &bull; Christopher Prosser &bull; Oliver Spryn</li>
<li><a href="mailto:cdboatright@gcc.edu"><i class="fa fa-envelope"></i> cdboatright@gcc.edu</a> <a href="tel:7242644622"><i class="fa fa-phone"></i> (724) 264-4622</a></li>
</ul>
</section>
</footer>
</body>
</html>