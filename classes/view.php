<?php
class view extends Acore {
    public function get_content(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $sql = "SELECT `title`, `date_add`, `full_text`, `img` FROM `statii` WHERE id=".$id;
        $res = mysql_query($sql);
        
        echo "<div id ='main'>";
        
        if(!$res){
            exit("Error: ".mysql_error());
        }
        
        $rows = mysql_fetch_array($res);
        $title = $rows['title'];
        $date = $rows['date_add'];
        $img = $rows['img'];
        $full_text = $rows['full_text'];
        include('blocs/print_st.php');
        
        echo "</div>
            </div>";
    }
}
?>
