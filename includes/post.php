<div class="card">
    <div class="container">
        <div class="title">
            <img src=<?php echo $pp ?> alt="user_photo">
            <h4><?php echo $title ?></h4>
        </div>
        <p><?php echo $subtitle ?></p>
        <?php if ($img != '') {echo '<img src='.$img.' alt="" style="width:100%">';} ?>
    </div>
</div>

<!--
ABSOLUMENT DÉFINIR LES VAR
$pp pour la photo de profile
$title pour le titre
$subtitle pour le sous-titre
$img pour l'image
mettre $img à '' pour pas d'images
 -->
