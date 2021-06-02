<?php
include('config.php');
$link = mysqli_connect($server, $user, $password, $database)
        or die('Error: Unable to connect: ' . mysqli_connect_error());

$description = mysqli_real_escape_string($link, $_POST['description']);

echo $description;


$SQLquery = "INSERT INTO Generics (description) VALUES ('$description')";
echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New record created successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

printf('<a href="generics.php"> <P>GO BACK</P> </a>');

?>
