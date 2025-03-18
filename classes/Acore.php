<?php
abstract class Acore {
    
    protected $db;
    
    // Connect ot DB ***********************************************************
    public function __construct() {
        $this->db = mysql_connect(HOST, USER, PASSWORD);
		///mysql_query('SET NAMES "UTF-8"');
        if(!$this->db){
            exit("Error: ".mysql_error());
        }
        
        if(!mysql_select_db(DB, $this->db)){
            exit("Error: Not database Exists ".mysql_error());
        }
        mysql_query('SET NAMES "utf8"');
    }
    
    // Write Heder *************************************************************
    protected function get_header(){
        include 'blocs/header.php';
    }
    
    // Write left bar **********************************************************
    protected function left_bar(){
        include 'blocs/left_bar.php';
        
        $sql = "SELECT `id_category`,`name_category` FROM `category`"; //zaqvka kum tablica kategoriq
        $res = mysql_query($sql);
        for($i = 0; $i < mysql_num_rows($res); $i++){
            $rows = mysql_fetch_array($res);
            printf('<div class="quick-links">
                        » <a href="?option=category&id=%s">%s</a>
                    </div>',
                    $rows['id_category'], $rows['name_category']);
        }
        echo "</div>";
    }
    
    // Write menu **************************************************************
    protected function get_menu(){
        $rows = $this->menu_array();
        echo '<div id="mainarea">
		<div class="heading">
                    <div class="toplinks" style="padding-left:30px;">
                        <a href="?option=main">Начало</a>
                    </div>
		<div class="sap2">::</div>';
        $i = 1;
        foreach($rows as $key){
            printf('<div class="toplinks">
                        <a href="?option=menu&id=%s">%s</a>
                    </div>',$key['id_menu'], $key['name_menu']);
            if($i != count($rows)){
                echo '<div class="sap2">::</div>';
            }
            $i++;
        }
        echo "</div>";
    }
    
    // get array menu **********************************************************
    protected function menu_array(){
        $sql = "SELECT `id_menu`, `name_menu` FROM menu";
        
        $res = mysql_query($sql);
        if(!$res){
            exit("Error: ".mysql_error());
        }
        
        $rows = array();
        for($i = 0; $i < mysql_num_rows($res); $i++){
            $rows[] = mysql_fetch_array($res);
        }
        return $rows;
    }
    
    // get_footer **************************************************************
    protected function get_footer(){
        $rows = $this->menu_array();
        echo '<div id="bottom">
                <div class="toplinks" style="padding-left:127px;">
                        <a href="?option=main">Начало</a>
                </div>
		<div class="sap2">::</div>';
        $i = 1;
        foreach($rows as $key){
            printf('<div class="toplinks">
                        <a href="?option=menu&id=%s">%s</a>
                    </div>',$key['id_menu'], $key['name_menu']);
            if($i != count($rows)){
                echo '<div class="sap2">::</div>';
            }
            $i++;
        }
        echo "</div>";
        include 'blocs/footer.php';
    }
    
    // get_body ****************************************************************
    public function get_body(){
        $this->get_header();
        $this->left_bar();
        $this->get_menu();
        $this->get_content();
        $this->get_footer();
    }
    // Abstract function *******************************************************
    abstract public function get_content();
}
?>
