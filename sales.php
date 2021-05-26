<html>
 <head>
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
	
	// Выполняем SQL-запрос
	$SQLquery = 'SELECT * FROM Sales';
	$SQLresult = mysqli_query($link,$SQLquery);
	printf("operation number, number of part, date, total price");
	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<p> %d,%d, %s, %d </p>',$result[0],$result[1],$result[2],$result[3]);
		
	}
	// Освобождаем память от результата
	mysqli_free_result($SQLresult);
	mysqli_close($link);

?>
<P>Add New Sales:</P>
			  <form action="add_sales_form_action.php" method="post">
          		  	Part: <input type="number" name="part">
          		  	<br>
				Date: <input type="date('j-m-y')" name="date_sales">
          		  	<br>
				Total_Price: 
					<input type="number" name="total_price">
          		  	<br>
					
				<br>
            		  	<input type="submit" value="Add Sales">
      			  </form>





<BR>
<a href="index.html"> <P>GO BACK</P> </a>

 </body>
</html>