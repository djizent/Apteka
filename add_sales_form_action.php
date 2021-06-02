<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$part = mysqli_real_escape_string($link, $_POST['part']);
$date = mysqli_real_escape_string($link, $_POST['date_sales']);
$price = mysqli_real_escape_string($link, $_POST['total_price']);
// ЗАЭСКЕЙПИТЬ
// PhPMyAdmin
// САКИЛА ВОРЛД

echo $part;
echo $date;
echo $price;
$SQLquery = "INSERT INTO Sales (date_sale, total_price) VALUES ('$date',$price)";
echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

printf('<a href="sales.php"> <P>GO BACK</P> </a>');

?>
