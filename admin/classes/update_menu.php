<?php

class update_menu extends admin {
    public function get_content() {
        echo "<div id='main'>";
        
        if(isset($_GET['id'])) {
            $id = (int)$_GET['id'];
            if(!$id){
                echo "Error: ID doesn't number";
            }
            $sql = "SELECT `id_menu`,`name_menu`,`text_menu` FROM menu WHERE id_menu=".$id;
            $res = mysql_query($sql);
        
            while($rows = mysql_fetch_array($res)) {
                $name = $rows['name_menu'];
                $text = $rows['text_menu'];
                include 'blocs/update_m.php';
            }
        }
        echo "</div>
            </div>";
    }
}

?>
