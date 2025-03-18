<?php

class menu extends Acore {

    public function get_content() {

        echo "<div id = 'main'>";

        

        if(!isset($_GET['id'])){

            echo "Error: Menu not found!";

        } else {

            $id = (int)$_GET['id'];

            if(!$id){

                echo "Error: ID doesn't number!";

            } else {

                $sql = "SELECT `text_menu` FROM menu WHERE id_menu=".$id;

                $res = mysql_query($sql);

                $row = mysql_fetch_array($res);

                if($id == 2) {
                    echo "<p>".$row['text_menu']."</p>";
					include('blocs/register_form.php');
                }elseif($id == 3){
					echo "<p>".$row['text_menu']."</p>";
					include('blocs/login_form.php');
				}else {

                    echo "<p>".$row['text_menu']."</p>";

                }

            }

        }

        

        echo "</div>

            </div>";

    }


}

?>

