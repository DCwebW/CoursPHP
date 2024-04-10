<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'crud.php';
    // 
    ?>

    <?php if(isset($_SESSION['message'])):;?>
        <div class="alert alert-<?=$_SESSION['msg_type']?>" role= 'alert' >
        <?php 
        echo $_SESSION['message'];
        unset($_SESSION['message']); 
        ?>
        </div>
    <?php endif; ?>
    <div class="container">
    <?php $mysqli = new mysqli('localhost', 'root','','crud(coursphpmysql)')or 
    die(mysqli_error($mysqli));
    $result =  $mysqli ->query("SELECT * FROM crud") or die ($mysqli->error)

    ?>

    
        <div class="row">
            <div class="col-12">
                <h1>CRUD</h1>
            </div>
        </div>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>NOM</th>
                        <th>VILLE</th>
                        <th>PHOTO</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <?php while($row = $result ->fetch_assoc()):?>
                    <tr>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['city']?></td>
                        <td><img src="upload/<?php echo $row['photo']?>" width =150 alt="" srcset=""></td>
                        <td><a href="crud.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">SUPPRIMER</a></td>
                        <td><a href="index.php?edit=<?php echo $row['id'];?>"class="btn btn-warning">EDITER</a></td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <div class="row">
            <form action="crud.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="mb-3">
  <label for="name" class="form-label">Nom</label>
  <input type="text" class="form-control" name="name" placeholder="Votre nom" value="<?php echo $name?>">
                </div>
        
            <div class="mb-3">
  <label for="city" class="form-label">Ville : </label>
  <input type="text" class="form-control" name="city" placeholder="Votre ville" value ="<?php echo $location ?>">
                </div>
</div>
<div class="mb-3">
  <label for="photo" class="form-label">Photo</label>
  <input type="file" class="form-control" name="file">
  <small><?php echo $photo ?></small>
</div>
<?php if ($update==true) : ?>
<button type="submit" name="update" class="btn btn-info">Update</button>
<?php else :?>
<button type="submit" name="save" class="btn btn-primary">Create</button>
<?php endif?>

            </form>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>