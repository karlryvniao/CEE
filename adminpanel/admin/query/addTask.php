<?php 
 include("../../../conn.php");

extract($_POST);

$tasktitle = $conn->query("SELECT * FROM task_tbl WHERE description='$taskTitle' ");

if($Sdate == "0")
{
    $res = array("res" => "noSDate");
}
else if($Edate == "0")
{
    $res = array("res" => "noEDate");
}
else if($taskDesc == "0")
{
    $res = array("res" => "noDesc");
}
else if($tasktitle->rowCount() > 0)
{
  $res = array("res" => "titleexist", "taskTitle" => $taskTitle);
}
else
{
	$insTask = $conn->query("INSERT INTO task_tbl(task_id,task_title,task_SDate,task_EDate,task_desc) VALUES('$taskID','$taskTitle','$Sdate','$Edate','$taskDesc') ");

	if($insTask)
	{
       $res = array("res" => "success", "taskTitle" => $taskTitle);
	}
	else
	{
       $res = array("res" => "failed");
	}
}



echo json_encode($res);
 ?>