<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Xin vui lòng điền tên ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Xin vui lòng điền Email ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["select"])) {
    $errorMSG = "Xin vui lòng lựa chọn ";
} else {
    $select = $_POST["select"];
}

if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}

$EmailTo = "ryexteam@gmail.com";
$Subject = "Góp ý cho Raise your English";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Request: ";
$Body .= $select;
$Body .= "\n";
$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>