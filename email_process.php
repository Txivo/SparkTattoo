
<!-- //////////////////////////////////////////////  Email Contact Form clever techie //////////////////////////////////////////////////////   -->
            <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////   -->
<?php
 
print_r($_POST);



//define variables and setting empty values
$name_error = $phone_error = $email_error = "";
$name = $phone = $email = $messege = $success = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

if (empty($_POST["name"]));{

  $name_error = "name is required";
} else {
  $name = test_input($_POST["name"]);

  // CHeck simbol before dolar sign
  //check if nmae only contians letters and white spaces
  if (!preg_match("/^[a-zA-Z ]<*$/", $name )) {
    $name_error = "Only letters and white spaces allowed";
  }
}


// phone
if (empty($_POST["phone"])); {
  $phone_error = "Phone number is requiered";
  
} else {
  $phone = test_input($_POST["phone"]);
  //Check if  is correct
  if (!preg_match("/^(\d[\s-]?)?[\[\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$phone)) {
    $phone_error = "Invalid phonenumber format";
  }
}


// email
if (empty($_POST["email"])); {
  $email_error = "Email is required";
  
} else {
  $email = test_input($_POST["email"]);
  //Check if email is correct
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_error = "Invalid email format";
  }
}


// message
if (empty($_POST["message"])); {
  $message = "";
  
} else {
  $message = test_input($_POST["message"]);
}
  if ($name_error == '' and $phone_error == '' and $email_error == '' ) {
    $message_body = '';
    unset ($_POST['submit']);
    foreach ($_POST as $key =>$value){
      $message_body .= "$key: $value\n"
    }

    $to = 'txivo@yahoo.com';
    if (mail($to, $messege)){
      $success = "Message sent, Thank you for contacting us!";
      $name = $email = $phone = $messege = '';
    }
  }
}


}

function test_input($data){
  $data = trim($data);
  $data =stripslashes($data);
  $data =htmlspecialchars($data);
  return $data;
}













?>


