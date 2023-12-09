<?php
include('../../include/db.php');
include('checkupload.php');
$id=$_POST['id'];
$query="SELECT * FROM cv WHERE id='$id'";

$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../assets/img/";

if(isset($_POST['pupdate'])){    
$projectpic=$_FILES['pdffile']['name'];        
if($projectpic==""){
    $projectpic=$data['pdffile'];
}else{
    $pdone = Upload('projpdffileectpic',$target_dir);
}
  
 
if($pdone=="error"){
    header("location:../?edithome=true&msg=error");
}else{
$query="UPDATE cv SET ";
$query.="pdffile='$projectpic',";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editcv=true#done");
}    

}    
    
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    $query="DELETE FROM cv WHERE id='$id'";
    $queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editcv=true#done");
}
}


if(isset($_POST['addtoportfolio'])){    
$projectpic=$_FILES['pdffile']['name'];        
if($projectpic==""){
    $projectpic=$data['pdffile'];
}else{
    $pdone = Upload('projpdffileectpic',$target_dir);
}
  
 
if($pdone=="error"){
    header("location:../?editcv=true&msg=error");
}else{
$query="INSERT INTO cv (pdffile) ";
$query.="VALUES ('$projectpic')";
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editcv=true&msg=updated");
}    

}    
    
}