<?php
class delete_statii extends admin {
    public function get_content() {
        echo "<div id = 'main'>";
        if(!isset($_GET['id'])) {
            echo "Error: Not ID";
        } else {
            $id = (int)$_GET['id'];
            if(!$id) {
                echo "Error: ID doesn't number!";
            }
            $sql = "DELETE FROM statii WHERE id=".$id;
            $res = mysql_query($sql);
            if($res) {
                header('Location: index.php');
            } else {
                echo "Error: ".mysql_error();
            }
        }
        echo "</div>
            </div>";
    }
}
?>
