

<html>
 <head>
 <link rel = "stylesheet" href = "style.css">
  <title>WEB-site of BD "Apteka" </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head>
 <body link="red" vlink="white">
 <table width="100%" cellspacing="3" border="4" style="font-size:32px;">
        <TR><TD>

        <?php
			include('config.php');	
			$link = mysqli_connect($server, $user, $password, $database)
				or die('Error: Unable to connect: ' . mysqli_connect_error());

			$id = mysqli_real_escape_string($link, $_POST['id']);
			$date_sale = mysqli_real_escape_string($link, $_POST['date_sale']);
			$total_price = mysqli_real_escape_string($link, $_POST['total_price']);
			

			$SQLquery = "UPDATE Sales SET `date_sale`='$date_sale', `total_price`='$total_price' WHERE part='$id'";

			if (mysqli_query($link, $SQLquery)) {
				echo @"<P style=\"text-align: center; font-size: 64px; color: black;\">Successfuly!</P>";
			} else {
				echo "<BR>Error: " . $sql . "<br>" . mysqli_error($link);
			}

			mysqli_close($link);

        ?>
        
        </TD>
			
			
			
			</TR></table>

<BR> 
<a style="font-size:25px;" align="center" href="sales.php"> <P>GO BACK</P> </a>

 </body>
</html>