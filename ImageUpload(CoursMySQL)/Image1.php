<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image à Uploader</title>
    <?php
        require("ConfigurationImage.php");
        if(isset($_POST['img_upload'])){
            $name=$_FILES['file']['name'];//Ici l'image est mise dans une variable;
            echo "<br>";
            $target_dir="img/";
            echo "<br>";
            $target_file = $target_dir.basename($name);
            echo "<br>";
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            echo"<br>";
            $entension_array= array("jpg","jpeg","png","gif");
            if(in_array($imageFileType,$entension_array)){
                $query="INSERT INTO images(name) VALUES ('".$name."')";
                mysqli_query($connect,$query);
                move_uploaded_file($_FILES['file']['tmp_name'],'img/'.$name);
            }
        }
    ?>
</head>
<body>
    <h1>Image Upload</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="" required>
        <input type="submit"name="img_upload" value="Upload Image">
    </form>
</body>
</html>