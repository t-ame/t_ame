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

    if(!$myfile) {
        print_r("Error submitting form, please try again.");
        exit();
    }

    $fileContent = "First Name: $fname\nLast Name: $lname\nEmail: $email\nCategory: $category\nSubject: $subject\nMessgae: $message\n";

    fwrite($myfile, $fileContent);

    fclose($myfile);

    print_r("Contact form submitted successfully.");
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