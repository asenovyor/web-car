<?php

class add_menu extends admin {
    public function get_content() {
        echo "<div id='main'>";
        
        echo "<form action='' method='post'>
            <h4>Name menu: <input type='text' name='name' required /></h4>
            
            <h4>Text on menu</h4>
            <textarea cols='50' rows='8' name='text' required></textarea><br />
            <input type='submit' value='Add' name='button' />
        </form>";
        
        if(isset($_POST['button'])){
            $name = htmlspecialchars($_POST['name']);
            $text = htmlspecialchars($_POST['text']);
            
            $sql = "INSERT INTO menu VALUES ('NULL', '$name', '$text')";
            $res = mysql_query($sql);
            if(!$res){
                echo "Error: " . mysql_error();
            } else {
                echo "<p style='color:red;'>Add was successfly</p>";
            }
        }
        echo "</div>
            </div>";
    }
}

?>
