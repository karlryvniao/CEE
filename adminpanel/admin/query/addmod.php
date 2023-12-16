<?php 
 include("../../../conn.php");

extract($_POST);

$mdltitle = $conn->query("SELECT * FROM module_tbl WHERE description='$title' ");

if($desc == "0")
{
    $res = array("res" => "noDesc");
}
else if($mdltitle->rowCount() > 0)
{
  $res = array("res" => "titleexist", "msg" => $title);
}
else
{
	$insMdl = $conn->query("INSERT INTO module_tbl(mdl_id,title,description) VALUES('$mdlId','$title','$desc') ");

	if($insMdl)
	{
       $res = array("res" => "success", "msg" => $title);
	}
	else
	{
       $res = array("res" => "failed");
	}
}



echo json_encode($res);
 ?>