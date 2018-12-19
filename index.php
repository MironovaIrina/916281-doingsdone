<?php
require("functions.php");

/* подключение контента из index.php */ 
	if (!$tasks){
	$error = "Ошибка 404";
	$content_main = include_template("error.php", ["error" => $error]);
	}
	else{
	$content_main = include_template("index.php",[
	"show_complete_tasks" => $show_complete_tasks,
	"tasks" => $tasks] );
	};
	
/*подключение $content_main в layout.php*/
$layout_content = include_template ("layout.php", [
    "content_main" => $content_main, 
	"title" => $title,
	"projects" => $projects,
	"tasks" => $tasks,
	"con" => $con, 
	
print($layout_content);

?>