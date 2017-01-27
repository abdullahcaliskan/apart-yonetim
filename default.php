<!DOCTYPE html>
<?php
session_start();

include("mysql_connect.php");
include("function.php");
?>
<html>
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Topbaşlar Apart | Giriş Yap</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <link rel="stylesheet" type="text/css" href="css/design.css" />
       
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
				background: #563c55 url(images/blurred.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
    <body>
        <div class="container" align="center">
        <img src="logo.png" align="center" width="275" height="125" style="margin-top:120px;" />
			<br><br><br>
        	<table align="center" class="secim_liste">
        		<tr>
        			<td valign="middle"><a href="oda.php"><img src="images/1.png" width="147" height="150" /></a></td>
        			<td valign="middle"><img src="images/2.png" width="3" height="150" /></td>
        			<td valign="middle"><a href="kisi_listele.php"><img src="images/3.png" width="132" height="150"></a></td>
        		</tr>
        	</table>

        </div>
    </body>
</html>