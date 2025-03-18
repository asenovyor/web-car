<?php
class search extends Acore
{
	public function get_content(){
		echo "<div id = 'main'>";
		
		$words = htmlspecialchars($_POST['words']);
			
		$sql = "SELECT `id`, `title`, `discription`, `date_add`, `img` FROM statii 
			WHERE discription LIKE '%".$words."%' ";
        $res = mysql_query($sql);
        if(!$res){
            exit("Error: ".mysql_error());
        }
        $row = array();
		
		echo "<h3 align='center'>Резултати от търсене по дума: ".$words."</h3>";
		
        for($i = 0; $i < mysql_num_rows($res); $i++){

            $row = mysql_fetch_array($res);

            $title = $row['title'];

            $date = $row['date_add'];

            $discr = $row['discription'];

            $img = $row['img'];

            $id = $row['id'];

            include('blocs/for_main.php');
        }
			
			
			
		echo "</div>
		</div>";
	}
}
?>