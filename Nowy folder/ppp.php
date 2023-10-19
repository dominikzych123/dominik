
<?php
    $servername = "localhost";
    $username = "root"; // root
    $password = ""; // ""




    // create connections
    $conn = mysqli_connect($servername, $username, $password);




    // check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connect successfully!";
?>


<?php
    $database="dominik";
    //Create database
    $sql = "CREATE DATABASE $database";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
?>
