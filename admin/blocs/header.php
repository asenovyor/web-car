<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='Content-Type'>
<title>Авто</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<center>
	<div id="border">
		<div id="header">
			<div id="left" style="position:relative;">
				<div id="logo">
					<div class="name">AVTO</div>
					<div class="tag">Администрация Сайта</div>
				</div>
                
                <div style="position:absolute; bottom:5px; left:10px;">
                	<?php if(!empty($_SESSION['admin_name'])): ?>
	                    <h3>Здравей, <?php echo $_SESSION['admin_name'];?></h3>
                        <a href="blocs/logout.php">излез</a>
                    <?php endif; ?>
                </div>
			</div>
			<div id="car"></div>
		</div>