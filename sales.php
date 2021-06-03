<html>
 <head>
 <link rel = "stylesheet" href = "style.css">
  <title>WEB-site of the Syromyatnikov D. BD "Apteka"</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
 <table width="100%" cellspacing="3" border="4" style="font-size:32px;">
        <TR>
	        <TD align="center" colspan="3">
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
	printf("number of part, date, total price");
	while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
	{
		printf('<p> %d,%s, %d </p>',$result[0],$result[1],$result[2]);
		
	}
	// Освобождаем память от результата
	mysqli_free_result($SQLresult);
	

?>
</TD></TR>
<TR><TD align="center" >
<P>Add New Sales:</P>
			  <form action="add_sales_form_action.php" method="post">
				Date: <input type="date" name="date_sales">
          		  	<br>
				Total_Price: 
					<input type="number" name="total_price">
          		  	<br>
					
				<br>
            		  	<input type="submit" value="Add Sales">
      			  </form>



					</TD>
			<TD align="center">
				<P>Search on date:</P>
			  <form action="Search.php" method="post">
          		  	
				Date: <input type="date" name="date_sales">

            		  	<input type="submit" value="search">
      			  </form>

				<BR>

				</TD>
				</TD>
				<TD align="center">
				<P>Delete</P>
			  <form action="sales_delete.php" method="post">
          		  	
			  sales:
                                <select name="part">
			<?php 
			
				$SQLquery = "SELECT `part` , CONCAT( `part`, '. ', `date_sale`, '. ', total_price) FROM Sales";
				$SQLresult = mysqli_query($link,$SQLquery);
				while ($result1 = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
				{
					printf('<option value=%d>%s</option>',$result1[0],$result1[1]);
				}
				mysqli_free_result($SQLresult);
				mysqli_close($link);
			?>
		</select>    

            		  	<input type="submit" value="delete">
      			  </form>

				<BR>

				</TD>
			
			
			
			
			</TR></table>

<BR> 
<a href="index.html"> <P>GO BACK</P> </a>

 </body>
</html>
