<!DOCTYPE html>
<html>
<head>
	<title>My Shopping App</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
			header {
		background-color: #333;
		color: #fff;
		padding: 10px;
		text-align: center;
	}
	
	nav {
		background-color: #444;
		color: #fff;
		padding: 10px;
		text-align: center;
		margin-bottom: 20px;
	}
	
	nav a {
		color: #fff;
		text-decoration: none;
		padding: 10px;
		margin: 10px;
	}
	
	section {
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		margin: 0 10px;
	}
	
	.product {
		background-color: #fff;
		border: 1px solid #ccc;
		border-radius: 5px;
		padding: 10px;
		margin-bottom: 20px;
		width: 30%;
	}
	
	.product img {
		display: block;
		margin: 0 auto;
		max-width: 100%;
		height: auto;
	}
	
	.product h2 {
		margin-top: 0;
		font-size: 1.5em;
	}
	
	.product p {
		font-size: 1.2em;
		margin-bottom: 10px;
	}
	
	.product button {
		background-color: #4CAF50;
		color: #fff;
		border: none;
		border-radius: 4px;
		padding: 10px;
		cursor: pointer;
		font-size: 1.2em;
	}
	
	.product button:hover {
		background-color: #45a049;
	}
	
	footer {
		background-color: #444;
		color: #fff;
		padding: 10px;
		text-align: center;
		margin-top: 20px;
	}
	
</style>
</head>
<body>
	<header>
		<h1>My Shopping App</h1>
	</header>
	<nav>
	<button onclick="window.location.href='home.php'">Home</button>
	<button onclick="window.location.href='aboutus.php'">About Us</button>
	<button onclick="window.location.href='contactinfo.php'">Contact Info</button>
        <button onclick="window.location.href='cart.php'">Go to cart</button>
</nav>

<section>
	<div class="product">
		<h2>Womens Wear</h2>
		<p>Click here to view some top branded women wear</p>
		<button onclick="window.location.href='womenswear.php'">View</button>
	</div>
	
	<div class="product">
		<h2>Mens Wear</h2>
		<p>Click here to view some top branded mens wear</p>
		<button onclick="window.location.href='menswear.php'">View</button>
	</div>
	
	<div class="product">
		<h2>Home appliances</h2>
		<p>Click here to view some top home appliances</p>
		<button onclick="window.location.href='home_appliances.php'">View</button>
	</div>

	<div class="product">
		<h2>Beauty, Toys</h2>
		<p>Click here to view the toys and beauty products</p>
		<button onclick="window.location.href='toys_beauty_products.php'">View</button>
	</div>

	<div class="product">
		<h2>Grocery</h2>
		<p>Click here to view the grocery items</p>
		<button onclick="window.location.href='grocery.php'">View</button>
	</div>

	<div class="product">
		<h2>Electronics</h2>
		<p>Click here to view the electronics</p>
		<button onclick="window.location.href='electronics.php'">View</button>
	</div>
</section>
</body>
</html>

