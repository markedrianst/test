<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Received</title>
</head>
<body>
    
    <?php
    /*
    uses get 
    $firstname= $_GET['txtFirstName'];
    $lastname= $_GET['txtLastName'];
    $sex=$_GET['radSex'];
    if($sex== 'Male'){
        echo"Hello,Sir $firstname $lastname";
    }else{
        echo"Hello,Ma'am $firstname $lastname";
    }*/

    /*
     uses Post
    $firstname= $_POST['txtFirstName'];
    $lastname= $_POST['txtLastName'];
    $sex=$_POST['radSex'];
    if($sex== 'Male'){
        echo"Hello,Sir $firstname $lastname";
    }else{
        echo"Hello,Ma'am $firstname $lastname";
    }*/

    // generic

    $firstname= $_REQUEST['txtFirstName'];
    $lastname= $_REQUEST['txtLastName'];
    $sex=$_REQUEST['radSex'];
    if($sex== 'Male'){
        echo"Hello,Sir $firstname $lastname";
    }else{
        echo"Hello,Ma'am $firstname $lastname";
    }



    ?>

</body>
</html>