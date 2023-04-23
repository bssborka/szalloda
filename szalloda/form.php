<!DOCTYPE html>
<html lang="hun">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Foglalás</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<style>
		.navbar {
			margin-bottom: 0;
			border-radius: 0;
			background-color: #333;
		}
	
		.navbar a {
			float: left;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 17px;
		}
	
		.navbar a:hover {
			background-color: #ddd;
			color: black;
		}
	
		.footer {
			left: 0;
			bottom: 0;
			width: 100%;
			background-color: grey;
			color: white;
			text-align: center;
		}

		.mydivr {
			background-image: linear-gradient(to right, rgba(0,0,0,0), rgba(0,0,0,0.4));
			padding: 25px;    
		}
  
		.mydivl {
			background-image: linear-gradient(to left, rgba(0,0,0,0), rgba(0,0,0,0.4));
			padding: 25px;    
		}
		
		.mytext{
			width: 500px;
		}
		
		.shadow{
			box-shadow: 4px 4px 8px #000000;
	}
	</style>
</head>
<body>
<div class="row">
	<div class="col-2 mydivl"></div>
	<div class="col"><h2><i>Adatlap a foglaláshoz</i></h2></div>
<div class="col-2 mydivr"></div>
</div>

<form method="post"> 
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col-2"><i>Vezetéknév: </i></div>
		<div class="col "><input type="text" name="vez_nev" class="mytext" maxlength="25"></div>
		<div class="col-2 mydivr"></div>
	</div>



	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col-2"><i>Keresztnév: </i></div>
		<div class="col "> <input type="text" name="ker_nev" class="mytext" maxlength="25"> </div>
		<div class="col-2 mydivr"></div>
	</div> 
	
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col-2"><i>E-mail:</i></div>
		<div class="col "><input type="text" name="email" class="mytext" maxlength="25"> </div>
		<div class="col-2 mydivr"></div>
	</div>
	
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col-2"><i>Telefonszám:</i></div>
		<div class="col "> <input type="tel" name="telszam" class="mytext" maxlength="12"> </div>
		<div class="col-2 mydivr"></div>
	</div>
  
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col-2"><i> Szoba típusa: </i></div>
		<div class="col"><input list="szoba_tipusok" name="szoba_tipus" id="szoba_tipus" class="mytext">
			<datalist id="szoba_tipusok" class="mytext">
				<option value="Menyasszonyi lakosztály">
				<option value="Nemdohányzó szoba">
				<option value="Kisállatbarát szoba">
				<option value="Lakosztály" >
			</datalist> 
		</div>
		<div class="col-2 mydivr"></div>
	</div>
 
 
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col-2"><i> Szoba száma: </i></div>
		<div class="col "> <input type="number" name="szoba_szam" class="mytext" maxlength="2"> </div>
		<div class="col-2 mydivr"></div>
	</div>
 
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col-2"><i>  Érkezés időpontja: </i></div>
		<div class="col ">   <input type="datetime" name="erkezes" class="mytext" maxlength="16"> </div>
		<div class="col-2 mydivr"></div>
	</div>
   
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col-2"><i>  Távozás időpontja: </i></div>
		<div class="col ">   <input type="datetime" name="tavozas" class="mytext" maxlength="16"> </div>
		<div class="col-2 mydivr"></div>
	</div> 
  
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col-2"><i>  Megjegyzés: </i></div>
		<div class="col "><textarea name="comment" rows="5" cols="40" class="mytext"></textarea> </div>
		<div class="col-2 mydivr"></div>
	</div> 
  
   
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col"><i>  Speciális szolgáltatások:</i></div>
		<div class="col-2 mydivr"></div>
	</div>  

	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col"><i><input type="checkbox" name="szolgaltatas" >Speciális menü</i></div>
		<div class="col"> </div>
		<div class="col-2 mydivr"></div>
	</div>  
 
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col"><i><input type="checkbox" name="szolgaltatas" >Privát parkoló</i></div>
		<div class="col"> </div>
		<div class="col-2 mydivr"></div>
	</div>  
	
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col"><i><input type="checkbox" name="szolgaltatas" >Masszázs</i></div>
		<div class="col"> </div>
		<div class="col-2 mydivr"></div>
	</div>  
      
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col"><i><input type="checkbox" name="szolgaltatas" >Szobában felszolgált reggeli</i></div>
		<div class="col-2"> </div>
		<div class="col-2 mydivr"></div>
	</div>  
      
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col"><i><input type="checkbox" name="szolgaltatas" >Túra</i></div>
		<div class="col-2"> </div>
		<div class="col-2 mydivr"></div>
	</div>  
      	  		     
	<div class="row">
		<div class="col-2 mydivl"></div>
		<div class="col"><input type="submit" name="submit" value="Foglalás">  </div>
		<div class="col-2"> </div>
		<div class="col-2 mydivr"></div>
	</div>  
</form>	
</body>
</html>
