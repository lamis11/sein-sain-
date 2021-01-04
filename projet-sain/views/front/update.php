<?php

include "../../entities/patient.php";
include "../../core/patientC.php";
 $link=mysqli_connect("127.0.0.1","root","","projet_sain");
$id=$_GET['id'];
$marital=$_POST['marital'];
$profession=$_POST['profession'];
$adress=$_POST['adress'];
$postal=$_POST['postal'];
$city=$_POST['city'];
$phone=$_POST['phone'];

$patientC=new patientC();
$patientC->updatePatient($id,$marital,$profession,$adress,$postal,$city,$phone);

header('Location: fiche.php?id='.$id);

?>