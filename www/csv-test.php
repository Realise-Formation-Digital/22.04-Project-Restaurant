<?php

// $list = array (
//    array('name', 'bbb', 'ccc', 'dddd'),
//    array('123', '456', '789'),
//    array('"aaa"', '"bbb"')
// );


$list = [
    $_POST['nom'], $_POST['email'], $_POST['comment']
];

// $fp = fopen('file.csv', 'w');

$fp = fopen('contacts.csv', 'a');
            fputcsv($fp, $list);
            fclose($fp);



// foreach ($list as $fields) {
//     fputcsv($fp, $fields);
// }

// fclose($fp);
?>
