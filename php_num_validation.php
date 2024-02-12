<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM </title>
</head>

<body>
    <form action="" method="POST">
        Number : <input type="number" name="num" id="num" maxlength="10">
    </form>
</body>

</html>
<?php
$mobile_no = $_POST['num'];
if (!preg_match ("/^[0-9]*$/", $mobile_no) ){  
    $ErrMsg = "Only numeric value is allowed.";  
    echo $ErrMsg;  
} else {  
    echo $mobile_no;  
}  


?>