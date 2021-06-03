<html>
 <head>
 <link rel = "stylesheet" href = "style.css">
  <title>WEB-site of the Syromyatnikov D. BD "Apteka"</title>
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
	$date=mysqli_real_escape_string($link, $_POST['date_sales']);
        // Выполняем SQL-запрос
        $SQLquery = 'SELECT * FROM Sales';
        $SQLresult = mysqli_query($link,$SQLquery);
        printf("number of part, date, total price");
        while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
       	{
		if ($result[1]=="$date"){
                printf('<p> %d,%s, %d </p>',$result[0],$result[1],$result[2]);
		}
        }
        // Освобождаем память от результата
        mysqli_free_result($SQLresult);
        mysqli_close($link);

?>

<BR>
<a href="index.html"> <P>GO BACK</P> </a>

 </body>
</html>

