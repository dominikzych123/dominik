<?php 
$servername="localhost";
$username= "root";
$password= "";
$dbname= "baza";
$conn = mysqli_connect($servername,
                         $username,
                         $password,
                         $dbname);
        if (!conn) {
            die("nieudane połącznie".
             mysqli_connect_error());
        }

        $data=$_POST["data"];
        $liczba=$_POST["liczba"];
        $telefon=$_POST["telefon"];
        
        
        $sql = "insert into rezerwacje(data_rez,liczba_osob,telefon)";
        
       if(mysql_query($conn , $sql)) {
        echo "dodano rezerwacje do bazy ";

       }else{
        echo "błąc".mysqli_error($conn);
       }