<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Biblioteka publiczna</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div id="baner">
		<h1>Biblioteka w Książkowicach wielkich </h1>
	</div>


    <div id="lewy">
    <h3>Nasi czytelnicy</h3>
		<ul>
		<?php
		$kw2 = "SELECT imie, nazwisko FROM autorzy;";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "<li>$tab[0] $tab[1]</li>";
		}
		?>
		</ul>
    </div>

    <div id="srodkowy">
		<img src="biblioteka.png" alt="biblioteka" />
		<h4>
			ul. Czytelnicza 25<br/>
			12-120 Książkowice<br/>
			tel.: 123123123<br/>
			napisz do nas <a href="sekretariat@biblioteka.pl">napisz do nas</a>
		</h4>
	</div>


    <div id="prawy">
    <h3>Dodaj czytelnika</h3>
		<form action="biblioteka.php" method="post">
			<label>
				imię:
				<input type="text" name="imie" /><br/>
			</label>
			<label>
				nazwisko:
				<input type="text" name="nazwisko" /><br/>
			</label>
			<label>
				rok urodzenia:
				<input type="number" name="rok" /><br/>
			</label>
			<button>DODAJ</button>
		</form>
		<h3>Nasi czytelnicy</h3>
		<ul>
		<?php
		$kw2 = "SELECT imie, nazwisko FROM czytelnicy;";
		$res2 = mysqli_query($con, $kw2);
		while($tab = mysqli_fetch_row($res2)) {
			echo "<li>$tab[0] $tab[1]</li>";
		}
		mysqli_close($con);
		?>
		</ul>







	




</body>

