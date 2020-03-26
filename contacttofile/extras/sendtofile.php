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
    //fwrite($myfile, $email);


    // if($myfile){
    //     print_r("Count");
    // } else {
    //     print_r("Neg Count");
    // }

    fclose($myfile);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        span.requires_span {
            color: red
        }
    </style>
</head>
<body>
    <h3>Contact Form</h3>
    <form action="sendtofile.php" method="POST">
        <p>
			<label for="first_name">First Name <span class="requires_span">*</span></label><br />
			 <input type="text" name="first_name" placeholder="First Name" required/>
		</p>

		<p>
			<label for="last_name">Last Name <span class="requires_span">*</span></label><br />
			 <input type="text" name="last_name" placeholder="Last Name" required/>
		</p>

		<p>
			<label for="email">Email <span class="requires_span">*</span></label><br />
			<input type="email" name="email" placeholder="Email" required />
		</p>

        <p>
            <label for="category">Category <span class="requires_span">*</span></label><br />

             <select name="category" required>
                <option value="">--Select Department--</option>
                <option value="delivery">Delivery</option>
                <option value="cust_support">Customer Support</option>
                <option value="refunds">Refunds</option>
                <option value="legal">Legal</option>
              </select>
        </p>

        <p>
            <label for="subject">Subject</label><br />
            <input type="text" name="subject" placeholder="Subject" />
        </p>

        <p>
            <label for="message">Your Message <span class="requires_span">*</span></span></label><br />
            <textarea name="message" col="5" row="5" required></textarea>
        </p>

        <p>
            <input type="checkbox" name="send" /> Send this contact form to my email.        
        </p>
        
         <button type="submit">Send</button>
    </form>
</body>
</html>