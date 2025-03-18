<FORM action="" method="post">
    <p>
        Вашето име:<br />
        <input type="text" name="name" value="" required/>
    </p>
    
    <p>
        Потребителско име:<br />
        <input type="text" name="username" value="" required/>
    </p>
    
    <p>
        Парола:<br />
        <input type="password" name="password" value="" required/>
    </p>
    <input type="submit" value="Регистрация" />
</FORM>

<?php
/**
	** ПРОВЕРЯВАМЕ ДАНИИ И РЕГИСТРИРАМЕ ПОТРЕБИТЕЛЯ 
*/

if(!empty($_POST))
{
	$name = htmlspecialchars($_POST['name']);
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	
	$password = md5($password);
	
	$sql = "
		INSERT INTO 
			users
		SET
			name = '".$name."',
			username = '".$username."',
			password = '".$password."'
		";
	$res = mysql_query($sql);
	if($res)
	{
		echo "
			<h2 style='color:green'>Успешна регистрация</h2>
			<a href='?option=menu&id=3'>Влезте в профила си.</a>
		";
	}else{
		exit("Error: " . mysql_error());
	}
}

?>