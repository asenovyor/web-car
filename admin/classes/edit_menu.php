<?php

class edit_menu extends admin {
    public function get_content() {
        echo "<div id='main'>";
        
        $sql = "SELECT `id_menu`, `name_menu` FROM menu";
        $res = mysql_query($sql);
        echo "<a style='color:red;' href='?option=add_menu'>Add new Menu</a><hr />";
        
        while($rows = mysql_fetch_array($res)) {
            echo "<p>".$rows['name_menu']."
                    <a href='?option=update_menu&id=".$rows['id_menu']."'> Update?</a>
                  </p>";
        }
        echo "</div>
            </div>";
    }
}

?>
