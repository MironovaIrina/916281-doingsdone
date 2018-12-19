CREATE DATABASE doings_done
   DEFAULT CHARACTER SET utf8 
   DEFAULT COLLATE utf8_general_ci;
   
USE doings_done;

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name_user CHAR(128) NOT NULL UNIQUE,
 email CHAR(128) NOT NULL UNIQUE,

 date_registration TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 );
 
CREATE TABLE projects (
 id INT AUTO_INCREMENT PRIMARY KEY,
 name_project CHAR (128) NOT NULL,
 id_user INT(10), 
 FOREIGN KEY (id_user) REFERENCES users(id)
 );

 CREATE TABLE tasks (
  id INT AUTO_INCREMENT PRIMARY KEY, 
  date_create TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  date_execution TIMESTAMP,
  status BOOLEAN DEFAULT 0,
  name_task CHAR(128) NOT NULL,

  deadline TIMESTAMP,
  id_project INT(10),
  id_user INT(10),
  FOREIGN KEY (id_project) REFERENCES projects(id),
  FOREIGN KEY (id_user) REFERENCES users(id)
  );
 
CREATE INDEX i_user ON users(email);

CREATE INDEX i_uuser ON users(name_user);

CREATE INDEX i_project ON projects(name_project);

CREATE INDEX i_task ON tasks(name_task);
 






