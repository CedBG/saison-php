<?php
$seasonName = "Le printemps";
$seasonImage = "printemps.jpg";
$seasonDescription = "
Le printemps (de l'ancien français prins, premier, et temps) est l’une des quatre saisons de l’année, dans les zones tempérées. Il suit l'hiver et précède l'été.
Il existe plusieurs définitions du printemps, notamment météorologique (demi-saison se trouvant entre les saisons froide et chaude) et calendaire (dont les dates varient selon les pays).
Dans l’hémisphère nord, le printemps se situe entre le premier et le deuxième trimestre de l'année et dans l'hémisphère sud, il se situe entre le troisième et le dernier trimestre de l'année.
Cette saison, marquant traditionnellement le renouveau dans la nature, se caractérise par un radoucissement par à coups de la température, la fonte des neiges, le bourgeonnement et la floraison des plantes, le réveil des animaux hibernants et le retour de certains animaux migrateurs.
";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $seasonName; ?></title>
</head>
<body>
    <h1><?php echo $seasonName; ?></h1>
    <img src="<?= $seasonImage; ?>" alt="<?= $seasonImage; ?>">
    <p>
        <?php echo $seasonDescription; ?>
    </p>
</body>
</html>