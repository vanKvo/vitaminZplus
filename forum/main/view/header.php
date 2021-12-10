<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Vitaminz+</title>
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="../../../style.css" type="text/css">

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
				<a class="navbar-brand" href="../index.html"><img src="../../../images/vitaminzpluslogo.png" alt="Logo" width="70" style="padding: 0px 5px;"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-link" aria-current="page" href="../../../index.html">Home</a>
						<a class="nav-link active" href="../index.php">Forum</a>
						<a class="nav-link" href="user_profile.php">User Profile</a>
						<a class="nav-link" href="../../logout.php">Logout</a>
					</div>
				</div>
			</div>
		</nav>
		