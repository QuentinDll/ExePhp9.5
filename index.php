<?php
// declaration du tableaux
$state = array(
  '02' => 'Aisne',
  '51' => 'Reims',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme'
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 9</title>
    </head>
    <body>
        <p>
         <?php
             // declaration de la boucle foreach
             foreach ($state as $value){?>
        <p><?php echo $value ; ?><br /></p>
         <?php } ?>
        </p>
    </body>
</html>
