







<?php

// var_dump($_POST);


if (isset($_POST['nom'])) {

    $list = [$_POST['nom'], $_POST['age'], $_POST['date'], 
             $_POST['Email'], $_POST['adresse'], $_POST['ville'], 
             $_POST['codepostal'], $_POST['party number'] ];


    $fp = fopen('contacts.csv', 'a');

    fputcsv($fp, $list);

    fclose($fp);

}



