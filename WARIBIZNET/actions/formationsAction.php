<?php





// SWITCH POUR LE CONTENU DES FORMATIONS
    if (isset( $_POST['forex'])) {
        $variable=$_POST['forex'];
    }
    if (isset( $_POST['crypto'])) {
        $variable=$_POST['crypto'];
    }
    if (isset( $_POST['indices'])) {
        $variable=$_POST['indices'];
    }
// SWITCH POUR LE FORMULAIRE 
    if (isset( $_POST['postule'])) {
        $value=$_POST['value'];
        $postuler=$_POST['postuler'];
    }