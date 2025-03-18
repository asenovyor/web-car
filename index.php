<?php

header('Content - Type: text/html; charset = UTF-8');
require_once 'config.php';
require_once 'classes/Acore.php';

/**
	* Ако $_GET массив е празен връщаме главен класс на контроллера
*/
if(isset($_GET['option'])){
    $class = trim(strip_tags($_GET['option']));
} else {
    $class = 'main';
}



/**
	* Проверяваме ако файл с таково име съществува значи включваме го 
	* и създаваме обект от класса който се съдържа в файла,
	* ако такъв файл не съществува изваждаме съобщение за грешка
*/
if(file_exists('classes/'.$class.'.php')){

    include 'classes/'.$class.'.php';
    if(class_exists($class)){
		
        $obj = new $class;
        $obj->get_body();

    } else {

        exit('Error: Class not exists!');

    }

    

} else {

    exit("<h1>Error: 404 File not found!</h1>");

}

?>

