<?php
session_start();
// Deuxième exemple de connexion à une base de données 
// var_dump($_POST);

$connect = new mysqli('localhost', 'root','','crud(coursphpmysql)');
$update=false;
$name='';
$location='';
$photo='';
$id=0;
if(isset($_POST['save'])){
    $name=$_POST['name'];
    $location=$_POST['city'];
    $photo=$_FILES['file']['name'];
    $target_dir="upload/";
    $target_file=$target_dir.basename($photo);
    $imageFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extension_array= array("jpg","jpeg","png","gif");
    if(in_array($imageFileType,$extension_array)){
        $connect ->query("INSERT INTO crud (name,city,photo) VALUES ('$name','$location','".$photo."')")
        or die($connect->error);
        move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$photo);
        echo "success";
        $_SESSION['message'] ='Données ajoutées';
        $_SESSION['msg_type'] = 'success';
        header('location:index.php');
       
    }
}

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $connect->query("DELETE FROM crud WHERE id = $id")or die ($connect->error);
    $_SESSION['message'] ='Données supprimées';
    $_SESSION['msg_type'] = 'danger';
    header('location:index.php');

}

if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update=true;
    $result = $connect->query("SELECT * FROM crud WHERE id=$id") or die($connect ->error);
    $verify = mysqli_num_rows($result);
    if($verify == 1){
        $row = $result -> fetch_array();
        $name = $row['name'];
        $location = $row['city'];
        $photo = $row['photo'];
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name=$_POST['name'];
    $location=$_POST['city'];
    $photo=$_FILES['file']['name'];
    $target_dir="upload/";
    $target_file=$target_dir.basename($photo);
    $imageFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extension_array= array("jpg","jpeg","png","gif");
    if(in_array($imageFileType,$extension_array)){
        $connect ->query("UPDATE crud SET name='$name',city ='$location',photo='$photo' WHERE id= $id" )
        or die($connect->error);
        move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$photo);
        echo "success";
        $_SESSION['message'] ='Données mises à jour';
        $_SESSION['msg_type'] = 'info';
        header('location:index.php');
}
else{
    $connect ->query("UPDATE crud SET name='$name',city ='$location',photo='' WHERE id= $id" );
    echo "success";
        $_SESSION['message'] ='Données mises à jour';
        $_SESSION['msg_type'] = 'info';
        header('location:index.php');
}
}
?>