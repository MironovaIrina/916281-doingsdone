<?php
/*подключает шаблоны*/
function include_template($name,$data) {
    $name = "templates/" . $name;
    $result = "";

    if (!file_exists($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}


/* переводим в формат timestamp, вычисляем разницу, получаем часы*/
function dte($data){
	$ny_date = strtotime($data);
	
	if($ny_date == ""){
	return "";
	
	}
	
	$curdate = time();
	$Dte = floor(($ny_date - $curdate)/3600);
	
	return $Dte;
}

/* Функция для получения списка проектов у текущего пользователя */
function project($con, $id_user){
	$sql = "SELECT * FROM projects WHERE id_user = ?";
	$stmt = mysqli_prepare($con, $sql);
	mysqli_stmt_bind_param($stmt, 'i', $id_user);
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	
		if($result) {
			$projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
			return $projects;
		}
		else {
			return [];
		}
}

/* Функция для получения списка из всех задач у текущего пользователя */	
function task($con, $id_user, $id_project){
	if ($id_project){
		$sql = "SELECT * FROM tasks WHERE id_user = ? AND id_project = ?";
		$stmt = mysqli_prepare($con, $sql);
		mysqli_stmt_bind_param($stmt, 'ii', $id_user, $id_project);
	}
	else{
		$sql = "SELECT * FROM tasks WHERE id_user = ?";
		$stmt = mysqli_prepare($con, $sql);
		mysqli_stmt_bind_param($stmt, 'i', $id_user);
	}
	    mysqli_stmt_execute($stmt);
	    $res = mysqli_stmt_get_result($stmt);
	    $result = mysqli_fetch_all($res, MYSQLI_ASSOC);
	
	if(count($result) != 0) {
			$tasks = $result;
			return $tasks;
		}
		else {
			return [];
		}	
    }


/* Функция для подсчета */
function counting($con, $id_user, $id_project){
	
		$sql = "SELECT * FROM tasks WHERE id_user = ? AND id_project = ?";
		$stmt = mysqli_prepare($con, $sql);
		mysqli_stmt_bind_param($stmt, 'ii', $id_user, $id_project);
		
	    mysqli_stmt_execute($stmt);
	    $result = mysqli_stmt_get_result($stmt);
	    $count = mysqli_num_rows($result);
		return $count;
}
		

?>