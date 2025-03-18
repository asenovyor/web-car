<form action="" method="post">
    <h4>Name:<br /> <textarea name="name" required><?php echo $name; ?></textarea></h4>
    <h4>Text Menu<br /><textarea cols="35" rows="5" name="text" required><?php echo $text; ?></textarea></h4>
    <p><input type="submit" value="Update" name="button" /></p>
</form>

<?php
    if(isset($_POST['button'])) {
        $name_m = $_POST['name'];
        $text_m = $_POST['text'];

        $sql = "UPDATE menu SET name_menu='$name_m', text_menu='$text_m' WHERE id_menu=".$id;
        $res = mysql_query($sql);
        if(!$res) {
            echo "Error: " . mysql_error();
        } else {
            header('Location: ?option=update_menu&id='.$id);
        }
    }

?>