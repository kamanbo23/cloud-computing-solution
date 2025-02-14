<?php
    $servername = "sql102.ihweb.ir";
    $username = "ihweb_31074958";
    $password = "A8jwlansi4@";
    $dbname = "ihweb_31074958_imdk";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
