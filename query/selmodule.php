<?php 
$mdlId = $_SESSION['examineeSession']['mdl_id'];

// Select Data sa nilogin nga examinee
$selModuleData = $conn->query("SELECT * FROM module_tbl WHERE mdl_id='$mdlId' ")->fetch(PDO::FETCH_ASSOC);
// $exmneCourse =  $selModuleData['exmne_course'];


        
// Select and tanang exam depende sa course nga ni login 
// $selExam = $conn->query("SELECT * FROM exam_tbl WHERE cou_id='$exmneCourse' ORDER BY ex_id DESC ");


//

 ?>