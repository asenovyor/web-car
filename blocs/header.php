<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>

<meta charset='utf-8'>
<meta http-equiv='Content-Type'>


<title>Авто</title>

<link href="style/style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<!--
	Startirame sesiq 
--->
<?php session_start();?>

<center>

	<div id="border">

		<div id="header">

			<div id="left" style="position:relative">

				<div id="logo">
					<a href="?option=main">
						<div class="name">AVTO</div>
                    </a>

					<div class="tag">Сайт за автомобили...</div>

				</div>
                
                <div style="position:absolute; bottom:5px; left:10px;">
                	<?php if(!empty($_SESSION['name'])): ?>
	                    <h3>Здравей, <?php echo $_SESSION['name'];?></h3>
                        <a href="blocs/logout.php">излез</a>
                    <?php endif; ?>
                </div>
			</div>

			<div id="car"></div>
            <div id="search_form">
            	<form action="?option=search" method="post">
                	<input type="text" name="words" value="" required="required"/>
                    <input type="submit" value="Търси" />
                </form>
            </div>

		</div>