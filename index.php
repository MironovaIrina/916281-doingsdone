<?php
require("functions.php");


/* подключение контента из index.php */ 
$content_main = include_template("index.php",[
	"show_complete_tasks" => $show_complete_tasks,
	"tasks" => $tasks] );
	
/*подключение $content_main в layout.php*/
$layout_content = include_template ("layout.php", [
    "content_main" => $content_main, 
	"title" => $title,
	"projects" => $projects,
	"tasks" => $tasks,
	"con" => $con, 
	"id_user" => $id_user]);
	
print($layout_content);

?>