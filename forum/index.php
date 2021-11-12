<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vitaminz+</title>
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="../style.css" type="text/css">

	</head>

	<body>
		<div class="topHeader">
			<h1 id="pageheadertxt"><strong><em>VitaminZ+</em></strong></h1>
			
		</div>
		
		<script>
			document.getElementById("pageheadertxt").addEventListener("mouseover", mouseOver);
			document.getElementById("pageheadertxt").addEventListener("mouseout", mouseOut);

			function mouseOver() {
			  document.getElementById("pageheadertxt").style.color = "white";
			}

			function mouseOut() {
			  document.getElementById("pageheadertxt").style.color = "black";
			}
		</script>
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="../index.html"><img src="../images/vitaminzpluslogo.png" alt="Logo" width="70" style="padding: 0px 5px;"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-link" aria-current="page" href="../index.html">Home</a>
						<a class="nav-link active" href="index.html">Forum</a>
						<a class="nav-link" href="login.html">Login</a>
						<a class="nav-link" href="register.html">Register</a>
					</div>
				</div>
			</div>
		</nav>
		
		<div class="body1">

			<div class="row">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Topic</th>
							<th scope="col">Description</th>
							<th scope="col">Date Posted</th>
							<th scope="col">Comment</th>
						</tr>
					</thead>
					<tbody>
		
						<tr>
							<th scope="row">1</th>
							<td>Symptoms of Lacking Vitamin D</td>
							<td>10/13/21</td>
							<td>-</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Symptoms of Lacking Vitamin A</td>
							<td>10/10/21</td>
							<td>-</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Symptoms of Lacking Vitamin E</td>
							<td>10/03/21</td>
							<td>-</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<br />
		
		<div class="footer">
			<div class="footerNavLinks">
				<p>
					<a href="index.html">Home</a> &nbsp; | &nbsp; 
					<a href="about_us.html">About</a> &nbsp; | &nbsp; 
					<a href="#">Vitamins</a> &nbsp; | &nbsp; 
					<a href="contact_us.html">Contact</a>
				</p>
				<img src="../images/location_icon.png" alt="location icon" width="20" height="20">
				<img src="../images/email_icon.png" alt="email icon" width="20" height="20">
				<img src="../images/phone_icon.png" alt="phone icon" width="20" height="20">
			</div>
			
			<p style="text-align: center; font-size: 12px;">&copy;Copyrighted2021 | September 24, 2021 - Vitaminz+ |
				This is a ficticious website created for a class project.</p>
		</div>
</body>
</html>
