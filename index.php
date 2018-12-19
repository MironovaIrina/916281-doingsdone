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
	$tasks = task($con, $id_user, $id_project);
	
	/*$pr_t = pr_t($con, $id_user, $id_project);*/	
/*	else{
		$error = mysqli_error($con);
		$content_main = include_template ("error.php", ["error" => $error]);
	}
*/
};	


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