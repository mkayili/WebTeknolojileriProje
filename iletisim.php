<!--Baslik<!doctype html>
<html>
	<head>
	
		<title>Deneme</title>
	</head>
	<body>
		<table border="0" width="100%">
			<tr>
				<td width="20%"><img src="images/sau.png" width="50%"></td>
				<td>
					<h1>SAKARYA UNIVERSITESI</h1>
					<h2>BILGISAYAR VE BILISIM BILIMLERI FAKULTESI</h2>
					<h3>BILGISAYAR MUHENDISLIGI BOLUMU</h3>
				</td>
			</tr>
			<tr height="500">
				<td valign="top">
					<br>
					<br>
					<br>
					<a href="index.html">ANA SAYFA</a><br>
					<a href="iletisim.html">ILETISIM</a><br>
					<a href="bizeulas.html">BIZE ULASIN</a><br>
				</td>
				<td valign="top">
					<h4>ILETISIM</h4>
					<hr>
					<form action="iletisim.php" method="POST">
						<table>
							<tr>
								<td><label>ADI SOYADI:</label></td>
								<td><input type="text" name="adsoyad"></td>
							</tr>
							<tr>
								<td><label>EMAIL ADRESI:</label></td>
								<td><input type="email" name="email"></td>
							</tr>
							<tr>
								<td><label>TELEFON:</label></td>
								<td><input type="text" name="telefon"></td>
							</tr>
							<tr>
								<td><label>CINSIYET:</label></td>
								<td><input type="radio" name="cinsiyet">ERKEK<input type="radio" name="cinsiyet">KADIN</td>
							</tr>
						
						
						</table>
						<input type="submit" value="GONDER">
						
					</form>
				</td>
			</tr>
			<tr>
				<td colspan="2">@Tum Haklari saklidir</td>
			</tr>
		</table>
	</body>
</html>-->
<!doctype html>
<html>
	<head>
		<!--Baslik
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
		<title>Deneme</title>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
		<script src="myScript.js"></script>
		<link rel="stylesheet" href="styles.css">
		-->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
		<!--<link rel="stylesheet" href="css/bootstrap.css">-->
		<link rel="stylesheet" href="styles.css">
		<title>Login</title>
		<script src="myScript.js"></script>
	</head>
	<body>
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			
			<a
				href="#"
				class="navbar-brand mb-0 h1">
				<img 
					class="d-inline-block align-top"
					src="images/logo.png"
					width="30" height="30"/>
				Navbar
			</a>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
			  <span class="navbar-toggler-icon"></span>
			</button>	
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav" id="navbarMain">
					<li class="nav-item" >
						<a href="#" class="nav-link text-light ">
							Anasayfa
						</a>
					</li>	
					
					<li class="nav-item">
						<a href="#" class="nav-link text-light">
							Hakk??nda
						</a>
					</li>
					
					<li class="nav-item">				
						<a href="#" class="nav-link text-light">
							??zge??mi??
						</a>
					</li>
					
					<li class="nav-item">				
						<a href="#" class="nav-link text-light">
							??ehrim
						</a>
					</li>
					
					<li class="nav-item">				
						<a href="#" class="nav-link text-light">
							Miras??m??z
						</a>
					</li>
					
					<li class="nav-item">				
						<a href="#" class="nav-link text-light">
							??lgi alanlar??m
						</a>
					</li>
					
					<li class="nav-item">				
						<a href="#" class="nav-link text-light">
							??leti??im
						</a>
					</li>
					
					<li class="nav-item">				
						<a href="login.html" class="nav-link text-light">
							Login
						</a>
					</li>
					
				</ul>
				
				
			</div>
		</nav>
		
		<div class="container">
			
			<form>
				<fieldset disabled>
					<legend>??leti??im</legend>
					<div class="mb-3">
						<label for="disabledTextInput" class="form-label">Ad Soyad:</label>
						<input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST["adsoyad"]?>">
					</div>
					<div class="mb-3">
						<label for="disabledTextInput" class="form-label">Email:</label>
						<input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST["email"]?>">
					</div>
					<div class="mb-3">
						<label for="disabledTextInput" class="form-label">Telefon no:</label>
						<input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST["telefon"]?>">
					</div>
					<div class="mb-3">
						<label for="disabledTextInput" class="form-label">Mesaj:</label>
						<input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $_POST["mesaj"]?>">
					</div>
					
					
				</fieldset>
			</form>
			
		
		</div>
		
		
		<!--<script src="js/bootstrap.js"></script>-->
	</body>
</html>