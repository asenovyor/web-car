<?php
class category extends Acore {
    public function get_content() {
        
        echo "<div id = 'main'>";
        
        if(!isset($_GET['id'])){
            echo "Error: Category not found";
        } else {
            $id = (int)$_GET['id'];
            if(!$id){
                echo "Error: ID doesn't number!";
            } else {
                $sql = "SELECT `id`, `title`, `discription`, `date_add`, `img` FROM statii WHERE cat=".$id;
                $res = mysql_query($sql);
                if(!$res){
                    exit("Error: ".mysql_error());
                }
                
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
            }
        }
        echo "</div>
            </div>";
    }
}
?>
