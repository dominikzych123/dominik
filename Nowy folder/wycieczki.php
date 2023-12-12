<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>wycieczki i urlopy</title>
    <link rel="stylesheet" href="style3.css" />
</head>
<body>
    <div class="baner">
        <header>
            <h1>Biurio podrozy</h1>
        </header>

    </div>

    <div class="lewy">
        <header>
            <h3>KONTAKT</h3>
        </header>
        <a href="biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon 555666777</p>

    </div>

    <div class="srodkowy">
        <header>
            <h2>GALERIA</h2>
        </header>
        <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "egzamin3";

       $conn = mysqli_connect($servername,$username,$password,$dbname);
        $sql= "select nazwaPliku ,podpis from zdjecia";
        $resut = mysqli_coonect($conn , $sql);
        while($row = mysqli_fetch_array($resut)){
            echo "<img src= '$row[0]' alt ='$row[1] />";
             
        }
        
        mysqli_close($conn)

    
       

        ?>
    </div>

    <div class="prawy">
        <header>
            <h2>PROMOCJE</h2>
        </header>
        <TR><TD>Jesień</TD></TR>   <TR><TD>Grupa 4+</TD></TR>   <TR><TD>Grupa 10+</TD></TR>
        <br>
        <TR><TD>  5%</TD></TR>   <TR><TD>   10%</TD></TR>   <TR><TD>    15%</TD></TR>
    <div class="dane">
    <header>
        <h2>LISTA  WYCIECZEK</h2>
    </header>
    <P>PRACE WYKONAŁ DOMINIK</P>

    </div>

    <div class="stopka">

    </div>

    
    
    
</body>
</html>