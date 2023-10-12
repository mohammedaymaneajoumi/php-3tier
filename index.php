<?php
require_once('loader.php');

$studentBLO = new $studentBLO();
$all_students_html = '';
$all_students = $studentBLO->GetAllStudent();

$sudentBLLbj = new $studentBLO();
$deleteSecces = false;
$errorMessage = '';

if (isset($_REQUEST['delete']) && $_REQUEST['delete'] == 'yes'){

    $studentId = (int) $_REQUEST['id'];
    $deleteResult = $StudentBLLObj->Delete($studentId);

    if ($deleteResult > 0 ){
        $deleteSecces = true;
    } else {
        if ($StudentBLLObj->errorMessage != ''){
            $errorMessage = $sudentBLLbj->errorMessage;
    }else{
        $errorMessage = "Record can't be deleted. Operation failed";
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>