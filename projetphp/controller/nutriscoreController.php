<?php

    if (isset($_POST['codebar'])) {
        include('model/nutriscoreModel.php');
        include('view/resultatNutriscore.php');
    } else {
        include('view/nutriscore.php');
    }
?>