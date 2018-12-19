INSERT INTO users
 SET email = "mironova-1993@yandex.ru",
     password = "mironova",
	 name_user = "Миронова Ирина";

INSERT INTO users
 SET email = "ivanova@yandex.ru",
     password = "ivanova",
	 name_user = "Иванова Елена";
	 
INSERT INTO projects
 SET name_project = "Входящие",
     id_user = "1";

INSERT INTO projects
 SET name_project = "Учеба",
     id_user = "2";	 

INSERT INTO projects
 SET name_project = "Работа",
     id_user = "1";
	 
INSERT INTO projects
 SET name_project = "Домашние дела",
     id_user = "2";	 
	
INSERT INTO projects
 SET name_project = "Авто",
     id_user = "1";	
	
INSERT INTO tasks
 SET date_execution = "2018-12-01 15:00:00",
	 name_task = "Собеседование в IT компании",
	 referens_file = "",
	 deadline = "2018-12-01 02:14:56",
	 id_project = "2",
	 id_user = "2";
	 
INSERT INTO tasks
 SET date_execution = "2018-12-05 16:00:00",
	 name_task = "Выполнить тестовое задание",
	 referens_file = "",
	 deadline = "2018-12-10 17:35:00",
	 id_project = "2",
	 id_user = "2";	 
	 
INSERT INTO tasks
 SET date_execution = "2018-12-20 21:00:00",
	 name_task = "Сделать задание первого раздела",
	 referens_file = "",
	 deadline = "2018-12-21 18:45:00",
	 id_project = "1",
	 id_user = "1";		 
	 
INSERT INTO tasks
 SET date_execution = "2018-12-20 19:12:00",
	 name_task = "Встреча с другом",
	 referens_file = "",
	 deadline = "2018-12-22 01:35:06",
	 id_project = "2",
	 id_user = "2";	
	 
INSERT INTO tasks
 SET date_execution = "2018-12-25 09:40:00",
	 name_task = "Купить корм для кота",
	 referens_file = "",
	 deadline = "",
	 id_project = "1",
	 id_user = "1";	 
	 
INSERT INTO tasks
 SET date_execution = "2018-12-20 13:00:00",
	 name_task = "Заказать пиццу",
	 referens_file = "",
	 deadline = "",
	 id_project = "1",
	 id_user = "1";	 
	 
	 
SELECT name_project FROM projects
 WHERE id_user = 1;
 
SELECT name_task FROM tasks
 WHERE id_project = 2; 
	 
UPDATE tasks SET status = 1
 WHERE name_task = "Собеседование в IT компании";

 SELECT * FROM tasks
 WHERE deadline >= ADDDATE(CURDATE(), INTERVAL 1 DAY) AND deadline < ADDDATE(CURDATE(), INTERVAL 2 DAY);

UPDATE tasks SET name_task = "Собеседование в IT компании"
 WHERE id = 3;
 
	 