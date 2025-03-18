<form action ="" method ="post">
    <h4>Title</h4>
    <textarea name ="title" cols ="55" rows ="8"><?php echo $title; ?></textarea>
    <br />
    
    <h4>Discription</h4>
    <textarea name ="discr" cols ="55" rows ="8"><?php echo $discr; ?></textarea>
    <br />
    
    <h4>Full Text</h4>
    <textarea name ="f_text" cols ="55" rows ="8"><?php echo $f_text; ?></textarea>
    <br />
    
    <h4>Image</h4>
    <textarea name ="img" cols ="55" rows ="8"><?php echo $img; ?></textarea><br />
    <input type ="submit" value ="Update" name ="submit"/>
</form>

<?php 
    if(!isset($_GET['id'])) {
        echo "Error: Not found ID";
    } else {
        $ID = $_GET['id'];
        
        if(isset($_POST['submit'])) {
            $title = $_POST['title'];
            $discr = $_POST['discr'];
            $f_text = $_POST['f_text'];
            $img = $_POST['img'];
            
            $sql = "UPDATE statii SET title='$title', discription='$discr',
                    full_text='$f_text', img='$img' WHERE  id=".$ID;
            
            $res = mysql_query($sql);
            if(!$res) {
                echo "Error: ".mysql_error();
            } else {
                echo "<p style = 'color:red;'>Update was successful</p>";
				header("Location: " . $_SERVER['HTTP_REFERER']);
            }
        }
    }
?>