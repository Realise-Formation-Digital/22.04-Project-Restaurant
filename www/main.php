<?php
if (isset($_POST['submit'])) {

    //collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    //check name is set
    if ($name == '') {
        $error[] = 'Name is required';
    }

    //check for a valid email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = 'Please enter a valid email address';
    }

    //check comment is filled
    if ($comment == '') {
        $error[] = 'Comment is required';
    }

    //if no errors carry on
    if (!isset($error)) {

        # Title of the CSV
        $Content = "Name, Email, Comment\n";

        //set the data of the CSV
        $Content .= "$name, $email, $comment\n";

        // // var_dump($_POST);
        // if (isset($_POST['nom'])) {
        //     $list = [
        //         $_POST['nom'], $_POST['email'], $_POST['comment']
        //     ];
        //     $fp = fopen('contacts.csv', 'a');
        //     fputcsv($fp, $list);
        //     fclose($fp);
        // }

        // # set the file name and create CSV file
        // $FileName = "formdata-".date("d-m-y-h:i:s").".csv";
        // header('Content-Type: application/csv');
        // header('Content-Disposition: attachment; filename="' . $FileName . '"');
        // echo $Content;
        // exit();


        $list = [
            $_POST['name'], $_POST['email'], $_POST['comment']
        ];
        
        $fp = fopen('contacts.csv', 'a');
                    fputcsv($fp, $list);
                    fclose($fp);
    }
}
<<<<<<< Updated upstream
=======

//if there are errors display them
if (isset($error)) {
    foreach ($error as $error) {
        echo "<p style='color:#ff0000'>$error</p>";
    }
}
>>>>>>> Stashed changes
