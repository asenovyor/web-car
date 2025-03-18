<?php
class add_statii extends admin {
    public function get_content() {
		$cat_array = $this->get_cat();
		
		$html = '';
		foreach($cat_array as $cat){
			$html .= "<option value='".$cat['id_category']."'>".$cat['name_category']."</option>";
		}
		
		
        echo "<div id = 'main'>";
		
        echo '<form action ="" method ="post" enctype = "multipart/form-data">
                Title<br />
                <input type ="text" name ="title"  required/><br /><br />
    
                Discription<br />
                <textarea name ="discr" cols="55" rows="10" required></textarea><br /><br />
    
                Full Text<br />
                <textarea cols ="55" rows ="10" name ="f_text" required></textarea><br /><br />

                Image<br />
                <input type="file" name ="img" required/><br /><br />

                Category<br />
                <select name="cat">
					<option value="0"> --- </option>
					'.$html.'
				</select><br /><br />

                <input type="submit" value="Add" name="button">
            </form>';
        
        if(isset($_POST['button'])) {
            $tit = $_POST['title'];
            $discr = $_POST['discr'];
            $f_t = $_POST['f_text'];
            $cat = $_POST['cat'];
            
                $dir = "files/". $_FILES['img']['name'];
		$upload_dir = "../files/";
		$upload_file = $upload_dir . basename($_FILES['img']['name']);
	
		if(move_uploaded_file($_FILES['img']['tmp_name'], $upload_file)) {
            
                $sql = "INSERT INTO statii VALUES ('NULL','$tit','$discr', '".date('d:m:y')."' ,'$cat', '$dir', '$f_t')";
                $res = mysql_query($sql);
                if(!$res) {
                    echo "Error: ".mysql_error();
                } else {
                    echo "<p style='color:red'>Add was succesfly</p>";
                }
            }
        }
        echo "</div>
            </div>";
    }
	
	/**
		** Тази функция връща всички категории които има в база данни 
	*/
	private function get_cat(){
		$sql = "SELECT id_category, name_category FROM category";
        $res = mysql_query($sql);
        for($i = 0; $i < mysql_num_rows($res); $i++){
            $array[] = mysql_fetch_array($res);
		}
		
		return $array;
	}
}
?>
