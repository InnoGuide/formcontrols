<?php
include_once "connection.php";

$input=null;
$textarea=null;
$select=null;
$checkbox1=null;
$checkbox2=null;
$radio=null;
$date=null;
$color=null;
$password=null;
$email=null;

$sql="SELECT * FROM tbl_formcontrols";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if($stmt->rowCount()>0){
        $row=$stmt->fetch(PDO::FETCH_ASSOC);
        $input=$row['input'];
        $textarea=$row['textarea'];
        $select=$row['select'];
        $checkbox1=$row['checkbox1'];
        $checkbox2=$row['checkbox2'];
        $radio=$row['radio'];
        $date=$row['date'];
        $color=$row['color'];
        $password=$row['password'];
        $email=$row['email'];
        include_once "template.php";
    }else{
        $sql="INSERT INTO tbl_formcontrols (textarea) values (null)";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        include_once "ersteEingabe.html";
    }



