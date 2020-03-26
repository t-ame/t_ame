<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $email = $_POST["email"];
    $category = $_POST["category"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // $send = $_POST["send"];

    $filename = $fname . "_" . $lname.'.txt';

    //file_exists($filename); //check if file exists

    $myfile = fopen($filename, "w");

    fwrite($myfile, 'First Name: ' . $fname);
    fwrite($myfile, "\n");
    fwrite($myfile, 'Last Name: ' . $lname);
    fwrite($myfile, "\n");
    fwrite($myfile, 'Email: ' . $email);
    fwrite($myfile, "\n");
    fwrite($myfile, 'Category: ' . $category);
    fwrite($myfile, "\n");
    fwrite($myfile, 'Subject: ' . $subject);
    fwrite($myfile, "\n");
    fwrite($myfile, 'Messgae: ' . $message);
    fwrite($myfile, "\n");

    if($myfile){
        print_r("Contact form submitted successfully.");
    } else {
        print_r("Error submitting form, please try again.");
    }

    fclose($myfile);
} else {
    print_r("Egungun be careful, na express you dey go ooo!!!");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted</title>
</head>
<body>
</body>
</html>