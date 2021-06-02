<?php
include('config.php');
$link = mysqli_connect($server, $user, $password, $database)
        or die('Error: Unable to connect: ' . mysqli_connect_error());

$medicine = mysqli_real_escape_string($link, $_POST['medicine']);
$number_part = mysqli_real_escape_string($link, $_POST['number_part']);
$quantity = mysqli_real_escape_string($link, $_POST['quantity']);
echo $medicine;
echo $number_part;
echo $quantity;


$SQLquery = "INSERT INTO Supplys (medicine,number_part,quantity) VALUES ($medicine,$number_part,$quantity)";
echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

printf('<a href="supplys.php"> <P>GO BACK</P> </a>');
?>

