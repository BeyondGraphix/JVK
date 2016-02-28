<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Clothing, JVK, Fashion Design in Ghana, design,Ghana, Fashion, Fashion in Ghana, Gh Fashion, Gh, Ghana, Blazers, Cosmopolitan,">
		<meta name="p:domain_verify" content="17d2d0509ded86e9088a4aaba2adf846"/>
		<title>Checkout</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/css.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link href="css/lightbox.css" rel="stylesheet" />
		<link rel="stylesheet" href="css/animate.css">
		
		<!-- For IE 9 and below. ICO should be 32x32 pixels in size -->
		<!--[if IE]><link rel="shortcut icon" href="path/to/favicon.ico"><![endif]-->

		<!-- Touch Icons - iOS and Android 2.1+ 180x180 pixels in size. --> 

		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!-- Firefox, Chrome, Safari, IE 11+ and Opera. 196x196 pixels in size. 
		<link rel="icon" href="images/riveroaks_favicon1.png">-->



	</head>
	
	<body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
		<script src="js/jquery-1.11.0.min.js"></script>	
		<script src="js/bootstrap.min.js"></script>

		
		
		<div class="container-fluid ">
			<div class="row logo" >

				<div class="col-md-6 col-sm-6 col-xs-12 log animated shake" style="margin:10px 0;">
					<div id="logo"><a href="index.php"><img src="images/jvklogo.png" /></a></div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 text-center social">
					<div class="">
						<a href="https://www.instagram.com/jvk_clothing/" target="_blank"><i class="fa fa-instagram fa-2x pink"></i></a>
						<a href="#"><i class="fa fa-twitter fa-2x pink"></i></a>
						<a href="#"><i class="fa fa-google-plus fa-2x pink"></i></a>
						<a href="#"><i class="fa fa-pinterest fa-2x pink"></i></a>
					</div>
				</div>
			</div>
		</div>		
		
		
		
		<div class="navbar navbar-inverse ">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="mynavbar-content">
					<ul class="nav navbar-nav">
						<li class="" ><a href="index.php">Home</a></li>
						<li class="dropdown"><a href="projects.php" class="dropdown-toggle" data-toggle="dropdown" >Shop<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class=""><a href="products.php">Blazers</a></li>							
								<li class=""><a href="products.php#skirts">Skirts</a></li>
								<li class=""><a href="products.php#tops">Tops</a></li>
							</ul>
						</li>
						<li class=""><a class="page-scroll" href="about.php">About Us</a></li>
						<li class=""><a class="page-scroll" href="contact.php">Contact Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right" >
						<li class="active"><a href="checkout.php"><span class="simpleCart_quantity"></span><span class="fa fa-cart-plus"></span> Cart</a></li>
						<!--<li><a href="index.php"><span class="fa fa-user"></span> Account</a></li>-->
					</ul>
				</div>
			</div>
		</div>
		
		
		
		
		<div class="page-content">
			<div class="container">
			
				<div class="row margin-vert-30">
					<!-- Main Text -->
					<h1 class="black text-center">Shopping Cart</h1><br>
					<div class="col-md-9 col-sm-8 col-xs-12">
						<!--<h2>Nulla in enim quis</h2>-->

						
						<div class="well black">
							<div class="simpleCart_items"></div><br>
							SubTotal: <span id="simpleCart_total" class="simpleCart_total"></span> <br>
							Delivery charge: <span id="simpleCart_shipping" class="simpleCart_shipping error"></span> <br>
							----------------------------------<br />
							Final Total: <span id="simpleCart_grandTotal" class="simpleCart_grandTotal"></span> <br><br>
							<a class="btn btn-default simpleCart_empty" href="javascript:;" role="button"><i class="fa fa-trash"></i> Empty Cart</a>&nbsp;&nbsp;<a class="btn btn-default" href="" role="button" data-toggle="modal" data-target="#checkoutModal"><i class="fa fa-arrow-circle-o-right"></i> Checkout</a><br><br>
							<a class="btn btn-default btn-lg black" href="products.php" role="button"><i class="fa fa-plus pink"></i> Continue Shopping</a>
						</div>
						<!-- Modal -->
						<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						  <div class="modal-dialog" role="document">
							<div class="modal-content">
							  <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h5 class="modal-title" id="myModalLabel">Almost done, just your contact details please.....</h5>
							  </div>
							  <div class="modal-body">
									<form class="form  montserrat checkoutForm" name="checkoutForm" method="POST" id="checkoutForm">
										<div class="form-group">
											<label for="username">Name</label>
											<input name="username" type="text" class="form-control" id="username" required="" value="" minlength="2" autocomplete="off"/>
										</div>
										<div class="form-group">
											<label for="phone">Phone No.</label>
											<input name="phone" class="form-control" id="phone" required="" minlength="10" autocomplete="off" digits="true"/>
										</div> 
										<div class="form-group">
											<label for="email">Email</label>
											<input name="email" type="email" class="form-control" required="" id="email" />
										</div> </br>
										<div class="text-center">
											<input class="submit btn" type="submit" id="submitvalidatedorder" class="btn" value="Confirm"  />
											<input class="simpleCart_checkout btn" type="submit" id="SendOrderButton" value="Send Order"  />
											<button type="reset" class="btn btn-default"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Reset</button>
											<!--<input class="submit checkout_btn" type="submit" id="submitvalidatedorder" value="Validate"  />-->
										</div><br>
									</form>

							  </div>
							</div>
						  </div>
						</div>
						
					</div>
					<!-- End Main Text -->
					<!-- Side Column -->

					<div class="col-md-3 col-sm-4 col-xs-12">
						<div class="widget wid-categories">
							<div class="heading"><h4>CATEGORIES</h4></div>
							<div class="content text-center">
								<ul>
									<li><a class="black" href="products.php#">Blazers</a></li>
									<li><a class="black" href="products.php#skirts">Skirts</a></li>
									<li><a class="black" href="products.php#tops">Tops</a></li>
								</ul>
							</div>
						</div><br/><br><br>
					</div>
				<!-- End Side Column -->
				</div>
			
				<br><br>
			
			

			</div>
		</div>

	
	
		
		<div id="footer">
			<div class="container">
				<div class="row">
					<div id="copyright" class="col-md-6 col-sm-6 col-xs-6 grey">
						<p class="oxygen-regular">&copy; 2015 JVK Clothing</p>
					</div>
					<div id="footermenu" class="col-md-6 col-sm-6 col-xs-6 grey pull-right">
						<div class="pull-right">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	    <script src="js/jquery.easing.min.js"></script>	
		
		<script src="js/bg.js"></script>
		
		<!--........................................................................................................................................................................................-->
		<!-- ++++++++++++++++ SCRIPTS simpleCart ++++++++++++++++++ -->
		<!--Include the SimpleCart(js) script-->
<script src="js/simpleCart.js" type="text/javascript" charset="utf-8"></script>
<script>
simpleCart({
//var myCart = simpleCart({ 

		//Setting the Cart Columns for the sidebar cart display.
		cartColumns: [
			//{ attr: "image", label: false, view: "image"},
			//Name of the item
			{ attr: "name" , label: "Item" },
			//Size
			{ attr: "size", label: "Size" },
			//Quantity displayed as an input
			{ attr: "quantity", label: "Qty", view: "input"},
			
			//Built in view for a remove link
			{ view:'remove', text: "X", label: "Del"},
			
			//Price of item
			//{ attr: "price", label: "Price", view: "currency"},
			//Subtotal of that row (quantity of that item * the price)
			{ attr: "total" , label: "SubTot", view: "currency"  }
		],
		cartStyle: "table",
		
		checkout: {
		type: "SendForm",
		url: "cartorder.php",
		


		//type: "PayPal" , //original Simplecart 
		//email: "your-shop@yourmail.com",
		
		// http method for form, "POST" or "GET", default is "POST"
		method: "POST" ,
		
		// url to return to on successful checkout, default is null
		success: "success.php" ,
		
		// url to return to on cancelled checkout, default is null
		cancel: "cancel.php" ,
		
		extra_data: {
			username: document.getElementById("username").value,
			phone: document.getElementById("phone").value,
			email: document.getElementById("email").value,
		cartid: "12321321"
    }
}

});

simpleCart.currency( "GHS" );

simpleCart.bind( 'beforeCheckout' , function( data ){
		data.username = document.getElementById("username").value;
		data.phone = document.getElementById("phone").value;
		data.email = document.getElementById("email").value;
});


//console.log(myCart.checkout.extra_data); //view in your console

</script>

<script src="js/jquery.validate.min.js"></script>
<script>
$.validator.setDefaults({
	//submitHandler: function() { alert("submitted!"); }
	submitHandler: function() { 
	$("#SendOrderButton").show();
	$("#submitvalidatedorder").hide();
 }

});

$().ready(function() {
	// validate the comment form when it is submitted
	$(".checkoutForm").validate();
	$("#SendOrderButton").hide();
});
</script>
		
	</body>
</html>