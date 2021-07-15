<?php
include_once "connection.php";
print "<pre>";
print_r($_POST);
print "</pre>";

echo "abgespeichern!<br><br>";
$input=isset($_POST['input'])?$_POST['input']:null;
$textarea=isset($_POST['textarea'])?$_POST['textarea']:null;
$select=isset($_POST['select'])?$_POST['select']:null;
$checkbox1=isset($_POST['checkbox1'])?$_POST['checkbox1']:null;
$checkbox2=isset($_POST['checkbox2'])?$_POST['checkbox2']:null;
$radio=isset($_POST['radio'])?$_POST['radio']:null;
$date=isset($_POST['date'])?$_POST['date']:null;
$color=isset($_POST['color'])?$_POST['color']:null;
$password=isset($_POST['password'])?$_POST['password']:null;
$email=isset($_POST['email'])?$_POST['email']:null;

$sql="UPDATE tbl_formcontrols SET 
      input=?,
      textarea=?,
      `select`=?,
      checkbox1=?,
      checkbox2=?,
      radio=?,
      `date`=?,
      color=?,
      `password`=?,
      email=?";
$stmt=$conn->prepare($sql);
$stmt->execute([
               $input,   
               $textarea,
               $select,
               $checkbox1,
               $checkbox2,
               $radio,
               $date,
               $color,
               $password,
               $email]);

if($stmt->rowCount()>0)
    echo "Der Datensatz wurde gespeichert!";
else
    echo "Der DS wurde nicht gespeichert oder verändert!";
?>
<form action="index.php">
    <input type="submit" value="zurück">
</form>
