<html>
	<head>
 		<link rel = "stylesheet" href = "style.css">
  		<title>WEB-site of BD "Apteka" </title>
  		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 	</head> 
 	<body link="red" vlink="white">
 		<table width="100%" cellspacing="3" border="4" style="font-size:32px;">
    		<TR>
				<TD>
					<?php
					include('config.php');	
					$link = mysqli_connect($server, $user, $password, $database)
						or die('Error: Unable to connect: ' . mysqli_connect_error());

					$id = mysqli_real_escape_string($link, $_POST['id']);
					$SQLquery = "SELECT * FROM Sales WHERE part='$id'";
					$SQLresult = mysqli_query($link,$SQLquery);

					if ($result = mysqli_fetch_array($SQLresult,MYSQLI_NUM))
					{
						printf('<form action="update_action_successfuly.php" method="post">');
						printf('<p><input type="hidden" name="id" value="%d"></p>', $id);
						printf('<p>Дата<input type="date" name="date_sale" value="%s"></p>', $result[1]);
						printf('<p>Полная стоимость<input type="text" name="total_price" value="%d"></p>', $result[2]);
					
						printf('<input type="submit" value="Обновить!">');
						printf('</form>');
					}

					mysqli_free_result($SQLresult);
					mysqli_close($link);
					?>       
        		</TD>
			</TR>
		</table>
		<BR> 
		<a style="font-size:25px;" align="center" href="sales.php"> <P>GO BACK</P> </a>
	</body>
</html>