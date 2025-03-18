<?php

class main extends Acore {

    public function get_content() {
        

        $sql = "SELECT `id`, `title`, `discription`, `date_add`, `img` FROM statii ORDER BY date_add DESC";
        $res = mysql_query($sql);
        if(!$res){
            exit("Error: ".mysql_error());
        }
        

        echo "<div id = 'main'>";

        $row = array();

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