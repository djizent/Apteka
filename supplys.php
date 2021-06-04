 <html>
 <head>
 <link rel = "stylesheet" href = "style.css">
  <title>Supplys BD "Apteka"</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body link="red" vlink="white">
         <table width="100%" cellspacing="3" border="4" style="font-size:32px;">
        <TR>
	        <TD align="center">
        <?php
        printf('<P>Hello world! Searching for Medicines in apteka:</P>');
        // Соединяемся, выбираем базу данных VER3

        include('config.php');
        $link = mysqli_connect($server, $user, $password, $database)
            or die('Error: Unable to connect: ' . mysqli_connect_error());
        echo '<P>Succesfully connected!</P>';

        // Выполняем SQL-запрос
        $SQLquery = 'SELECT * FROM Supplys';
        $SQLresult = mysqli_query($link,$SQLquery);
        printf("medicine,number_part,quantity");
		
                
        
		
		
        while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
        {
                printf('<p> %d,%d,%d,%d</p>',$result[0],$result[1],$result[2],$result[3]);

        }
        // Освобождаем память от результата
        mysqli_free_result($SQLresult);

?>
<P>Add New Sales:</P>
                          <form action="add_supplys_form_action.php" method="post">
		medicine: <select name="medicine">
			<?php 
			
				$SQLquery = "SELECT id_m, name FROM Medicines";
				$SQLresult = mysqli_query($link,$SQLquery);
				while ($result1 = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
				{
					printf('<option value=%d>%s</option>',$result1[0],$result1[1]);
				}
				mysqli_free_result($SQLresult);
			
			?>
		</select>

                                
                                <br>
                number_part:   <select name="number_part">
			<?php 
			
				$SQLquery = "SELECT part, CONCAT(part, '. ', date_sale) FROM Sales";
				$SQLresult = mysqli_query($link,$SQLquery);
				while ($result1 = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
				{
					printf('<option value=%d>%s</option>',$result1[0],$result1[1]);
				}
				mysqli_free_result($SQLresult);
				mysqli_close($link);
			?>
		</select> 
                <br>					
                        quantity:
                                        <input type="number" name="quantity">
                                <br>
								
                                <br>
                                <input type="submit" value="Add Supplys">
                          </form>
         </TD></TR></table>
<BR>
<a style="font-size:25px;" align="center" href="index.html"> <P>GO BACK</P> </a>

 </body>
</html>
