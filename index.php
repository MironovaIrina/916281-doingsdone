<?php
require("functions.php");

// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

$projects = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];

$tasks = [ 0 => [ "Task" => "Собеседование в IT компании", 
				"Date" => "01.12.2018", 
				"Category" => "Работа", 
				"Done" => "false"],
		   1 => [ "Task" => "Выполнить тестовое задание",
				"Date" => "10.12.2018", 
				"Category" => "Работа", 
				"Done" => "false"],
           2 => [ "Task" => "Сделать задание первого раздела", 
				"Date" => "21.12.2018", 
				"Category" => "Учеба", 
				"Done" => "true"],
           3 => [ "Task" => "Встреча с другом", 
				"Date" => "22.12.2018",
				"Category" => "Входящие",
				"Done" => "false"],
           4 => [ "Task" => "Купить корм для кота",
				"Date" => " ", 
				"Category" => "Домашние дела", 
				"Done" => "false"],
           5 => [ "Task" =>  "Заказать пиццу", 
				"Date" => " ", 
				"Category" => "Домашние дела",
				"Done" => "false"],
];

/* подключение контента из index.php */ 
$content_main = include_template("index.php",[
	"show_complete_tasks" => $show_complete_tasks,
	"tasks" => $tasks] );
	
/*подключение $content_main в layout.php*/
$layout_content = include_template ("layout.php", [
    "content_main" => $content_main, 
	"title" => $title,
	"projects" => $projects,
	"tasks" => $tasks]);
	
print($layout_content);
?>