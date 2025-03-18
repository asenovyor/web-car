<?php
    class update_statii extends admin {
        public function get_content() {
            echo "<div id = 'main'>";
            
            if(!isset($_GET['id'])) {
                echo "Error: ID ";
            } else {
                $id = (int)$_GET['id'];
                if(!$id) {
                    echo "Error: ID doesn't number!";
                }
                
                $sql = "SELECT `id`, `title`, `discription`, `full_text`, `img`
                    FROM statii WHERE id=".$id;
                $res = mysql_query($sql);
                while($rows = mysql_fetch_array($res)) {
                    $title = $rows['title'];
                    $discr = $rows['discription'];
                    $f_text = $rows['full_text'];
                    $img = $rows['img'];
                    include 'blocs/update_st.php';
                }
            }
            
            echo "</div>
                </div>";
        }
    }
?>
