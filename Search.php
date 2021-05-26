<?php
include('config.php');	
$link = mysqli_connect($server, $user, $password, $database)
	or die('Error: Unable to connect: ' . mysqli_connect_error());

$date = mysqli_real_escape_string($link, $_POST['date_sales']);

while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		if(result[2]=date) {
			printf('<p> %d,%d, %s, %d </p>',$result[0],$result[1],$result[2],$result[3]);
		
		}
	}



if (mysqli_query($link, $SQLquery)) {
    echo "<BR>New search successfully";
} else {
    echo "<BR>Error:" . $sql . "<br>" . mysqli_error($link);
}

mysqli_close($link);

printf('<a href="index.html"> <P>GO BACK</P> </a>');
?>