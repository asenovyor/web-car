<?php
abstract class admin {
    
    protected $db;
    
    // Connect ot DB ***********************************************************
    public function __construct() {
        $this->db = mysql_connect(HOST, USER, PASSWORD);
        if(!$this->db){
            exit("Error: ".mysql_error());
        }
        
        if(!mysql_select_db(DB, $this->db)){
            exit("Error: Not database Exists ".mysql_error());
        }
        mysql_query('SET NAMES "UTF8"');
    }
    
    // Write Heder *************************************************************
    protected function get_header(){
        include 'blocs/header.php';
    }
    
    // Write left bar **********************************************************
    protected function left_bar(){
        include 'blocs/left_bar.php';
        
        echo '<div class="quick-links">
                   » <a href="?option=edit_menu">Menu</a>
              </div>';
        echo "</div>";
    }
    
    // Write menu **************************************************************
    protected function get_menu(){
        echo '<div id="mainarea">
		<div class="heading">
                <div class="toplinks" style="padding-left:30px;">
                    <a href="?option=main">Начало</a>
                </div>
	</div>';
    }
    
    // get_footer **************************************************************
    protected function get_footer(){
        include 'blocs/footer.php';
    }
    
    // get_body ****************************************************************
    public function body(){
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
