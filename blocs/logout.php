<?php
/**
	** Уничтожаваме създадени сессии и препращаме потребителя на главната страница
*/
session_start();
session_unset();
session_destroy();
header("Location: ../index.php");
?>