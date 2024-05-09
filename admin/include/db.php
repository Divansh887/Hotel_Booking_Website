<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dg_hotel_admin";

// Connection 
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $dbname
);

// For checking if connection is
// successful or not
if ($conn->connect_error) {
    die("Connection failed: "
        . $conn->connect_error);
}

function filteration($data)
{
    foreach ($data as $key => $value) {
        $data[$key] = trim($value);
        $data[$key] = stripcslashes($value);
        $data[$key] = htmlspecialchars($value);
        $data[$key] = strip_tags($value); //removes the strings form HTML, XML and PHP tags.
    }
    return $data;
}

function select($sql, $values, $datatypes)
{

    $conn = $GLOBALS['conn'];

    if ($stmt = mysqli_prepare($conn, $sql)) {

        mysqli_stmt_bind_param($stmt, $datatypes, ...$values);

        if (mysqli_stmt_execute($stmt)) {

            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;

        } else {

            mysqli_stmt_close($stmt);
            die("Query cannot be executed- Select");
        }

    } else {

        die("Query cannot be prepared - Select");

    }


}

?>