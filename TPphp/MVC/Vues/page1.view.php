

<div class="container">
    <div class="row">
        <div class="col-12">
            
            <?php foreach($datas as $data) :?>

                <p>
                    NOM = <?=$data['nom'];?> : AGE =<?=$data['age'];?>
                </p>

            <?php endforeach; ?>
        </div>
    </div>
</div>

