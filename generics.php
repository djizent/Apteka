<html>
 <head>
 <link rel = "stylesheet" href = "style.css">
  <title>Generics BD "Apteka"</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <rr><body bgcolor="#228B22" >
         <table width="100%" cellspacing="3" border="4" style="font-size:32px;">
      <rr>  <TR>
	        <TD align="center">
        <?php
        printf('<P>Hello world! Searching for Generics in apteka:</P>');
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
                         
<BR> </rr>
</TD></TR></table>
<a style="font-size:25px;" align="center" href="index.html"> <P>GO BACK</P> </a>

</body></rr>
</html>