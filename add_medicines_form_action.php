<?php
include('config.php');
$link = mysqli_connect($server, $user, $password, $database)
        or die('Error: Unable to connect: ' . mysqli_connect_error());

$name1 = mysqli_real_escape_string($link, $_POST['name']);
$manufacturer1 = mysqli_real_escape_string($link, $_POST['manufacturer']);
$shelf_life1 = mysqli_real_escape_string($link, $_POST['shelf_life']);
$pic1 = mysqli_real_escape_string($link, $_POST['pic']);
$generic1 = mysqli_real_escape_string($link, $_POST['generic']);
$the_price_for_one1 = mysqli_real_escape_string($link, $_POST['the_price_for_one']);
$quantity_in_stock1 = mysqli_real_escape_string($link, $_POST['quantity_in_stock']);
$product_balance1 = mysqli_real_escape_string($link, $_POST['product_balance']);
echo $name1;
echo $manufacturer1;
echo $shelf_life1;
echo $pic1;
echo $generic1;
echo $the_price_for_one1;
echo $quantity_in_stock1;
echo $product_balance1;

$SQLquery = "INSERT INTO Medicines (name,manufacturer,shelf_life,pic,generic,the_price_for_one,quantity_in_stock,product_balance) VALUES ('$name1','$manufacturer1',$shelf_life1,$pic1,$generic1,$the_price_for_one1,$quantity_in_stock1,$product_balance1)";
echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

printf('<a href="medicines.php"> <P>GO BACK</P> </a>');

?>
