<h1>Resultat :</h1>

<?php echo $objet->product->brands; ?>
<br>
<img src="<?php echo $objet->product->image_url; ?>">
<br>
<img src="https://static.openfoodfacts.org/images/attributes/nutriscore-<?php echo $objet->product->nutriscore_grade; ?>.svg">
