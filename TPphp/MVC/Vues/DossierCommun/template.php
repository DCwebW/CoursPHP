<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title><?= $page_title ?></title>
    <meta name="description" content="<?php=$page_description?>">
</head>
<body>
    <?php include('Vues\DossierCommun\header.php');?>
    <div class="container">
        <div class="row">
            <div class="col-12">
             <?php require_once("Vues/DossierCommun/menu.php") ?>
    <?php if(!empty($_SESSION['alert'])) : ?>

        <div class="alert <?=$_SESSION['alert']['type'];?>" role="alert">
        <?=$_SESSION['alert']['message'];?>
</div>
    <?php unset($_SESSION['alert']);
    endif;
     ?>   
            </div>
        </div>
        <div class="row">
            <?=$page_content; ?>
        </div>
    </div>
    <?php include ('Vues\DossierCommun\footer.php');?>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>