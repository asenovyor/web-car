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
	Кода по на доло извършва проверка дали потребител съществува в база дани
    ако съществува създава сессия за него 
--->
<?php
// стартираме сессия

if(!empty($_POST))
{
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$sql = "
		SELECT name, username, password FROM users WHERE username = '".$username."' AND password= '".md5($password)."' ";
	$res = mysql_query($sql);
	$rows = mysql_num_rows($res);
	$values = mysql_fetch_array($res);
	// ако върнат резултат не е празен създаваме сессия за потребителя
	
	if($rows)
	{
		$_SESSION['name'] = $values['name'];
		echo "<h1 style='color:green'>Успешно логване, Здравей, ".$_SESSION['name']."</h1>";
	}else{
		echo "<span style='color:red'>Въвели сте грешно име или парола моля опитайте отново.</span>";
	}
}

?>