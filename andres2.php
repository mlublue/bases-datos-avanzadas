<?php
    //open connection to mysql db
    $connection = mysqli_connect("localhost:8889","root","root","Prueba") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from alumnos";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
    echo json_encode($emparray);

    //close the db connection
    mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JSON</title>
</head>
<body background="http://cdn.wonderfulengineering.com/wp-content/uploads/2013/11/apple-wallpaper-background-2.jpg">

    <h1>XML a JSON</h1>
    <h2> Ya esta convertido desde una base de datos</h2>
    <h3>Ya un 10 no? XD</h3>
    
</body>
</html>