 <html>
 <head>
  <title>Supplys BD "Apteka"</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body>
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
        mysqli_close($link);

?>
<P>Add New Sales:</P>
                          <form action="add_supplys_form_action.php" method="post">
                                medicine: <input type="number" name="medicine">
                                <br>
                                number_part:
                                        <input type="number" name="number_part">
                                <br>
									quantity:
                                        <input type="number" name="quantity">
                                <br>
								
                                <br>
                                <input type="submit" value="Add Supplys">
                          </form>
<BR>
<a href="index.html"> <P>GO BACK</P> </a>

 </body>
</html>
