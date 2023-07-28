<!DOCTYPE html>
<html>
<head>
	<title>Projekat</title>
	<link rel="stylesheet" type="text/css" href="prodavnica.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

	<h1>Prodavnica</h1>

	<div class="container">
		<div class="items">
			<h2>Artikli</h2>

			<div class="single-item">
				<img src="Pictures/Bela.jfif">
				<div class="si-content">
					<h3>Majica</h3>
					<p class="price">900 RSD</p>
				</div>
				<div class="actions">
					<input type="number" name="quantity" value="0" min="0">
					<button onclick="addToCart(this)">Dodaj</button>
				</div>
			</div>

			<div class="single-item">
				<img src="Pictures/KapaZuta.jfif">
				<div class="si-content">
					<h3>Kapa</h3>
					<p class="price">1500 RSD</p>
				</div>
				<div class="actions">
					<input type="number" name="quantity" value="0" min="0">
					<button onclick="addToCart(this)">Dodaj</button>
				</div>
			</div>

			<div class="single-item">
				<img src="Pictures/RukaviceCrne.jfif">
				<div class="si-content">
					<h3>Rukavice</h3>
					<p class="price">1200 RSD</p>
				</div>
				<div class="actions">
					<input type="number" name="quantity" value="0" min="0">
					<button onclick="addToCart(this)">Dodaj</button>
				</div>
			</div>
		</div>



		<div class="cart">
			<h2>Korpa</h2>
			
			<div class="cart-items"></div>

			<div class="total"></div>
		</div>
	</div>

	<script src="prodavnica.js"></script>


	<div>
		<form action="">
			<input type="text" id="adresa">
			<input type="button" value="Poruci" onclick="provera()" style="margin-bottom: 50px;">

		</form>
	</div>
	<script src="proveraAdrese.js"></script>
</body>
</html>