<?php
    $cookie_name ="promocja";
    $cookie_value ="wycieczka";
    setcookie($cookie_name, $cookie_value, time() + (48*60*60) ); // 2 day
?>
