<html>
 <head>
 <link rel = "stylesheet" href = "style.css">
  <title>WEB-site of BD "Apteka" </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>

  <?php
        printf('<P>Hello world! Searching for Sales of medicines:</P>');
        // Соединяемся, выбираем базу данных VER3

        include('config.php');
        $link = mysqli_connect($server, $user, $password, $database)
            or die('Error: Unable to connect: ' . mysqli_connect_error());
        echo '<P>Succesfully connected!</P>';
	$ee=mysqli_real_escape_string($link, $_POST['part']);
        // Выполняем SQL-запрос
        $SQLquery = "DELETE FROM Sales WHERE part= $ee";
echo '<BR> SQL query: ';
echo $SQLquery;

if (mysqli_query($link, $SQLquery)) {
    echo "<BR>Record deleted successfully";
} else {
    echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
}
      
        // Освобождаем память от результата
        mysqli_free_result($SQLresult);
        mysqli_close($link);

?>

<BR>
<a href="sales.php"> <P>GO BACK</P> </a>

 </body>
</html>
