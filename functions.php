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
/*подсчет задач внутри проекта*/
function counting($tasks, $elem){
	$count=0;
	foreach($tasks as $key => $val){
		if ($elem == $val["Category"]){
			$count++;
		}
	}
	return $count;
}
/* переводим в формат timestamp, вычисляем разницу, получаем часы*/
function dte($data){
	$ny_date = strtotime($data);
	
	if($ny_date == ""){
	return "";
	
	}
	
	$curdate = time();
	$Dte = floor($ny_date - $curdate)/3600;
	
	return $Dte;
}
?>