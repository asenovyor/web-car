<?php
class main extends admin{
    public function get_content(){
        echo "<div id = 'main'>";
        
        echo "<a style='color:red;' href = '?option=add_statii'>Add new statue</a><hr>";
        
        $sql = "SELECT `id`,`title` FROM statii";
        $res = mysql_query($sql);
        if(!$res) {
            echo "Error: ".mysql_error();
        } else {
            while ( $row = mysql_fetch_array($res)){
                echo "<p>
                        <a style = 'color:black;' href = '?option=update_statii&id=".$row['id']."'>".$row['title']."</a>
                        <a style = 'color:red;' href = '?option=delete_statii&id=".$row['id']."'> >>Delete</a>
                      </p>";
            }
        }
        
        echo '</div>
            </div>';
    }
}
?>
