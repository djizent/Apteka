<html>
 <head>
  <title>Generics BD "Apteka"</title>
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
        $SQLquery = 'SELECT * FROM Generics';
        $SQLresult = mysqli_query($link,$SQLquery);
        printf("group,description");
		
		
		
		
        while ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
        {
                printf('<p> %d,%s</p>',$result[0],$result[1]);

        }
        // Освобождаем память от результата
        mysqli_free_result($SQLresult);
        mysqli_close($link);

?>
<P>Add New Generics:</P>
                          <form action="add_generics_form_action.php" method="post">
                                description: <input type="text" name="description">
                                <br>
                              
                                <br>
                                <input type="submit" value="Add description">
                          </form>
<BR>
<a href="index.html"> <P>GO BACK</P> </a>

