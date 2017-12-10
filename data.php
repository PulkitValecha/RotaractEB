<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
include 'dbconnect.php';
// var_dump($_REQUEST);
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$email=$_REQUEST['email'];
$phnum=$_REQUEST['phonenumber'];
$insti=$_REQUEST['institutionworkplace'];
$age=$_REQUEST['age'];
$city=$_REQUEST['city'];
$country=$_REQUEST['country'];
$linkedin=$_REQUEST['linkedin'];
$delegate_exp=$_REQUEST['delegateexperience'];
$del_exp_eb=$_REQUEST['delegateexperienceeb'];
$achvmnt=$_REQUEST['achivements'];
$eb_exp=$_REQUEST['ebexperience'];
$why=$_REQUEST['why'];
$agenda=$_REQUEST['agendas'];
$relevance=$_REQUEST['relevance'];
$len_nom=sizeof($_REQUEST['nomination']['category_list']);
$category="";
for($i=0;$i<$len_nom;$i++){
    $category=$category+$_REQUEST['nomination']['category_list'][$i]+",";
}
$prefs=$_REQUEST['nomination']['preference'];
$query="INSERT INTO `Executive_Board`(`firstname`, `lastname`, `email`, `phonenumber`, `institutionworkplace`, `age`, `city`, `country`, `linkedin`, `delegateexperience`, `delegateexperienceeb`, `achivements`, `ebexperience`, `category_list`, `preference`, `why`, `agendas`, `relevance`) VALUES ('$firstname','$lastname','$email','$phnum','$insti','$age','$city','$country','$linkedin','$delegate_exp','$del_exp_eb','$achvmnt','$eb_exp','$category','$prefs','$why','$agenda','$relevance')";

$result=$conn->query($query);

var_dump($result);
?>
