<?php
require("functions.php");

/* подключение MySQL из init.php */
require("init.php");

/* показывать или нет выполненные задачи */
$show_complete_tasks = 1;


if (!$con){
	$error = mysqli_connect_error();
	$content_main = include_template("error.php", ["error" => $error]);
 }

 else{
	$id_user = 1;
	$projects = project ($con, $id_user);
	
	if (isset($_GET['elem_id'])) {
		$id_project = (int)$_GET['elem_id'];
		
	}
	else{
		$id_project = 0;
	}
	$tasks = task($con, $id_user, $id_project);
	
 };
	

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
	"id_user" => $id_user,
	"id_project" => $id_project]);
	
print($layout_content);

?>