<form action="" method="post">
	<p>
    	<b>Потребителско име:</b><br />
        <input type="text" name="username" required="required"/>
    </p>
    
    <p>
    	<b>Парола:</b><br />
        <input type="password" name="password" required="required"/>
    </p>
    <input type="submit" value="Влез" />
</form>


<!--

--->
<?php


if(!empty($_POST))
{
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$sql = "
		SELECT name, username, password FROM users WHERE username = '".$username."' AND password= '".md5($password)."' ";
	$res = mysql_query($sql);
	$rows = mysql_num_rows($res);
	$values = mysql_fetch_array($res);

	
	if($rows)
	{
		$_SESSION['name'] = $values['name'];
		echo "<h1 style='color:green'>Успешно логване, Здравей, ".$_SESSION['name']."</h1>";
	}else{
		echo "<span style='color:red'>Въвели сте грешно име или парола моля опитайте отново.</span>";
	}
}

?>
