<meta charset='utf-8'>
<meta http-equiv='Content-Type'>
<title>Администрация</title>
<?php
// ADMIN index page
require_once 'config.php';
require_once 'classes/admin.php';
session_start();

if(empty($_SESSION['admin_name']))
{
?>


<form action="" method="post" style="margin:auto; width:200px;">
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



<?php

if(!empty($_POST))
{
	$db = mysql_connect(HOST, USER, PASSWORD);
	mysql_select_db(DB, $db);
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$sql = "
		SELECT name, username, password FROM users WHERE username = '".$username."' AND password= '".md5($password)."' ";
	$res = mysql_query($sql);
	$rows = mysql_num_rows($res);
	$values = mysql_fetch_array($res);

	
	if($rows)
	{
		$_SESSION['admin_name'] = $values['name'];
		header("Location: index.php");
	}else{
		echo "<span style='color:red'>Въвели сте грешно име или парола моля опитайте отново.</span>";
	}
	
}

?>


<?php
}else{

	if(isset($_GET['option'])){
		$class = trim(strip_tags($_GET['option']));
	} else {
		$class = 'main';
	}
	
	if(file_exists('classes/'.$class.'.php')){
		include 'classes/'.$class.".php";
		
		if(class_exists($class)){
			$obj = new $class;
			$obj->body();
		} else {
			exit("Error: Class don't exists!");
		}
	} else {
		exit("<h1>Error: 404 File NOT FOUND</h1>");
	}

}
?>
