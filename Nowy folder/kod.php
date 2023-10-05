<?php //wyszukiwanie kodu pocztowego
$wzorzec = '/\d{2}-\d{3}/';
$tekst = "poczta 34-200 Sucha Beskidzka";
if(preg_match($wzorzec, $tekst))
    echo "znaleziono kod pocztowy";
else
    echo "nie znaleziono kodu pocztowego";
?>
