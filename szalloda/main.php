<?php
session_start();
$adatbazis = new mysqli("localhost", "root", "", "szalloda") or die("<b>Nem sikerült kapcsolódni a MySQL szerverhez:</b><br>".mysqli_error($adatbazis));
mysqli_query($adatbazis, "SET NAMES utf8");
?>
<!DOCTYPE html>
<html lang="hu">
	<head>
		<meta charset="utf-8" />
		<title>Szálloda</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<div id="main">
			<div id="header">
				<h1>Szálloda</h1>
			</div>
			<ul class="menu">
				<li class="menu-item"><a href="/php/szalloda" rel="tab">Kezdőlap</a></li>
				<li class="menu-item"><a href="foglalas" rel="tab">Szobafoglalás</a></li>
				<li class="menu-item"><a href="admin" rel="tab">Adminisztráció</a></li>
			</ul>
			<div id="content">
			<?php
				if(isset($_GET['pagefileurl'])){
					if(file_exists($_GET['pagefileurl'].'.php'))
						include($_GET['pagefileurl'].'.php');
					else echo '<center>Az oldal nem található!</center>';
				} else include('main.php');
			?>
			</div>
		</div>
	</body>
</html>
