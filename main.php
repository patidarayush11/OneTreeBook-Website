<html>
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Books online</title>
		<style type="text/css">

			body {
				margin:0;
				padding:0;
				font-family: Sans-Serif;
				line-height: 1.5em;
				background-image: url("images/bg.jpg");
			}

			#header {
				background-image: url("images/banner2.jpg");
				height: 100px;
			}

			#header h1 {
				margin: 0;
				padding-top: 15px;
			}

			main {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 100%;
			}

			#nav {
				padding-bottom: 10010px;
				margin-bottom: -10000px;
				float: left;
				width: 230px;
				margin-left: -100%;
				background: #eee;
			}

			#footer {
				clear: left;
				width: 100%;
				background: #ccc;
				text-align: center;
				padding: 4px 0;
			}

			#wrapper {
				overflow: hidden;
			}

			#content {
				margin-left: 230px; /equal to 'nav' width */
			}

			.innertube {
				margin: 15px; /* Padding for content */
				margin-top: 15px;
        display: inline-block;

			}

			p {
				color: #555;
			}

			nav ul {
				list-style-type: none;
				margin: 0;
				padding: 0;
			}

			nav ul a {
				color: darkgreen;
				text-decoration: none;
			}

      .boxed {
        border: 1px solid black;
        background:white;
        width:300px;
        height:400px;

      }
      .boxed img{
        width: 250px;
        height: 300px;
        padding-left: 25px;
        padding-right: 25px;
      }
      .boxed h{
        align:center;
      }

			.ms ul{
				list-style-type: none;
    		margin: 0;
    		padding: 0;
    		overflow: hidden;
    		background-color: #333;
			}

			.ms li{
				float: left;
			}

			.ms li a{
				display: block;
	 color: white;
	 text-align: center;
	 padding: 14px 16px;
	 text-decoration: none;
			}

			.ms li a:hover:not(.active){
				background-color: #111;
			}

			.ms .active {
    background-color: red;
	}


		</style>

	</head>

	<body>


		<header id="header">
			<div class="innertube">
				<h1 align="center" style="color:white;">One Tree Book</h1>

			</div>
		</header>

		<div class="ms">
	<ul>

	<li><a href="#home">Home</a></li>
	<li><a href="#Bot">Contact</a></li>
	<li style="float:right"><a class="active" href="register.html">Register</a></li>
	<li style="float:right"><a class="active" href="new.html">Logout</a></li>
	<li style="float:right"><a href="#home"> Hello, <?php session_start(); echo $_SESSION['du']; ?></a></li>
</ul>
		</div>

		<div id="wrapper">

			<main>
				<div id="content">

          <div class="innertube">
            <div class="boxed" align=left>
              <img src="books/TBCE02.jpg">
              <h>NAME :<b> Fall In Love Stay In Love</b></h></br>
              <h>AUTHOR :<b>Thruston Daniel</b></h></br>
							<h>PRICE : <b>$5</b></h>
							<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" align="center">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="patidarayush11@gmail.com">

  <!-- Specify a PayPal Shopping Cart Add to Cart button. -->
  <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="add" value="1">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="Fall in Love story">
  <input type="hidden" name="amount" value="5">
  <input type="hidden" name="currency_code" value="USD">

  <!-- Display the payment button. -->
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
    alt="Add to Cart">
  <img alt="" width="1" height="1"
    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
</form>


            </div>
          </div>


					<div class="innertube">
						<div class="boxed" align=left>
							<img src="books/TBCE03.jpg">
							<h>NAME :<b>Inception</b></h></br>
							<h>AUTHOR :<b>Nolan</b></h></br>
							<h>PRICE : <b>$10</b></h>

							<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" align="center">

							<!-- Identify your business so that you can collect the payments. -->
							<input type="hidden" name="business" value="patidarayush11@gmail.com">

							<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">

							<!-- Specify details about the item that buyers will purchase. -->
							<input type="hidden" name="item_name" value="inception">
							<input type="hidden" name="amount" value="10">
							<input type="hidden" name="currency_code" value="USD">

							<!-- Display the payment button. -->
							<input type="image" name="submit"
							src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
							alt="Add to Cart">
							<img alt="" width="1" height="1"
							src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
							</form>

						</div>
					</div>
					<div class="innertube">
            <div class="boxed" align=left>
              <img src="books/TBCE04.jpg">
              <h>NAME :<b> Taxi</b></h></br>
              <h>AUTHOR :<b>Shaun Othen</b></h></br>
							<h>PRICE : <b>$7</b></h>

							<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" align="center">

							<!-- Identify your business so that you can collect the payments. -->
							<input type="hidden" name="business" value="patidarayush11@gmail.com">

							<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">

							<!-- Specify details about the item that buyers will purchase. -->
							<input type="hidden" name="item_name" value="taxi">
							<input type="hidden" name="amount" value="7">
							<input type="hidden" name="currency_code" value="USD">

							<!-- Display the payment button. -->
							<input type="image" name="submit"
							src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
							alt="Add to Cart">
							<img alt="" width="1" height="1"
							src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
							</form>

            </div>
          </div>

					<div class="innertube">
            <div class="boxed" align=left>
              <img src="books/TBCE06.jpg">
              <h>NAME :<b> The Outsider</b></h></br>
              <h>AUTHOR :<b>Penguin</b></h></br>
							<h>PRICE : <b>$11</b></h>


							<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" align="center">

							<!-- Identify your business so that you can collect the payments. -->
							<input type="hidden" name="business" value="patidarayush11@gmail.com">

							<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">

							<!-- Specify details about the item that buyers will purchase. -->
							<input type="hidden" name="item_name" value="The outsider">
							<input type="hidden" name="amount" value="11">
							<input type="hidden" name="currency_code" value="USD">

							<!-- Display the payment button. -->
							<input type="image" name="submit"
							src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
							alt="Add to Cart">
							<img alt="" width="1" height="1"
							src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
							</form>

            </div>
          </div>

					<div class="innertube">
            <div class="boxed" align=left>
              <img src="books/TBCE08.jpg">
              <h>NAME :<b> Would You?</b></h></br>
              <h>AUTHOR :<b>Marthe Jocelyn</b></h></br>
							<h>PRICE : <b>$6</b></h>


							<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" align="center">

							<!-- Identify your business so that you can collect the payments. -->
							<input type="hidden" name="business" value="patidarayush11@gmail.com">

							<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">

							<!-- Specify details about the item that buyers will purchase. -->
							<input type="hidden" name="item_name" value="Would You?">
							<input type="hidden" name="amount" value="6">
							<input type="hidden" name="currency_code" value="USD">

							<!-- Display the payment button. -->
							<input type="image" name="submit"
							src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
							alt="Add to Cart">
							<img alt="" width="1" height="1"
							src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
							</form>

            </div>
          </div>
					<div class="innertube">
            <div class="boxed" align=left>
              <img src="books/TBCE25.jpg">
              <h>NAME :<b> Went The Day Well</b></h></br>
              <h>AUTHOR :<b>Penelope Houston</b></h></br>
							<h>PRICE : <b>$32</b></h>


							<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" align="center">

							<!-- Identify your business so that you can collect the payments. -->
							<input type="hidden" name="business" value="patidarayush11@gmail.com">

							<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">

							<!-- Specify details about the item that buyers will purchase. -->
							<input type="hidden" name="item_name" value="Went the day well">
							<input type="hidden" name="amount" value="32">
							<input type="hidden" name="currency_code" value="USD">

							<!-- Display the payment button. -->
							<input type="image" name="submit"
							src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
							alt="Add to Cart">
							<img alt="" width="1" height="1"
							src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
							</form>

            </div>
          </div>
					<div class="innertube">
            <div class="boxed" align=left>
              <img src="books/TBCE10.jpg">
              <h>NAME :<b> From Russia With LOve</b></h></br>
              <h>AUTHOR :<b>Pene Lopa</b></h></br>
							<h>PRICE : <b>$3</b></h>

							<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" align="center">

							<!-- Identify your business so that you can collect the payments. -->
							<input type="hidden" name="business" value="patidarayush11@gmail.com">

							<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">

							<!-- Specify details about the item that buyers will purchase. -->
							<input type="hidden" name="item_name" value="From russia with love">
							<input type="hidden" name="amount" value="3">
							<input type="hidden" name="currency_code" value="USD">

							<!-- Display the payment button. -->
							<input type="image" name="submit"
							src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
							alt="Add to Cart">
							<img alt="" width="1" height="1"
							src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
							</form>



            </div>

          </div>

					<div class="innertube">
						<div class="boxed" align=left>
							<img src="books/TBCE15.jpg">
							<h>NAME :<b> Girls Like Funny Boys</b></h></br>
							<h>AUTHOR :<b>David Franklin</b></h></br>
							<h>PRICE : <b>$2</b></h>

							<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" align="center">

							<!-- Identify your business so that you can collect the payments. -->
							<input type="hidden" name="business" value="patidarayush11@gmail.com">

							<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="1">

							<!-- Specify details about the item that buyers will purchase. -->
							<input type="hidden" name="item_name" value="girls like funny guys">
							<input type="hidden" name="amount" value="2">
							<input type="hidden" name="currency_code" value="USD">

							<!-- Display the payment button. -->
							<input type="image" name="submit"
							src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
							alt="Add to Cart">
							<img alt="" width="1" height="1"
							src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
							</form>

						</div>

				</div>
				<div class="innertube">
					<div class="boxed" align=left>
						<img src="books/TBCE20.jpg">
						<h>NAME :<b> Number9Dream</b></h></br>
						<h>AUTHOR :<b>David Mitchell</b></h></br>
						<h>PRICE : <b>$4</b></h>

						<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" align="center">

						<!-- Identify your business so that you can collect the payments. -->
						<input type="hidden" name="business" value="patidarayush11@gmail.com">

						<!-- Specify a PayPal Shopping Cart Add to Cart button. -->
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="add" value="1">

						<!-- Specify details about the item that buyers will purchase. -->
						<input type="hidden" name="item_name" value="Number90Dream">
						<input type="hidden" name="amount" value="4">
						<input type="hidden" name="currency_code" value="USD">

						<!-- Display the payment button. -->
						<input type="image" name="submit"
						src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
						alt="Add to Cart">
						<img alt="" width="1" height="1"
						src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
						</form>

					</div>
			</main>

			<nav id="nav">
				<div class="innertube">
					<h3>Categories</h3>
					<ul>
						<li><a href="#">Fiction</a></li>
						<li><a href="#">Thriller</a></li>
						<li><a href="#">Comedy</a></li>

					</ul>
					<h3>Best Seller</h3>
					<ul>
						<li><a href="#">Nicholas Sparks</a></li>
						<li><a href="#">Brad Rosewood</a></li>
						<li><a href="#">James Heart</a></li>

					</ul>
				</div>
			</nav>

		</div>

		<footer id="footer">
			<div class="innertube">
				<p>Made By Ayush and Kavya</p>
				<p id="Bot">Contact us at onetree@gmail.com</p>
			</div>
		</footer>

	</body>
</html>
