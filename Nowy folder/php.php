?php
    $servername = "localhost";
    $username = "username"; // root
    $password = "password"; // ""


    // create connections
    $conn = mysqli_connect($servername, $username, $password);


    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connect successfully!";
?>
