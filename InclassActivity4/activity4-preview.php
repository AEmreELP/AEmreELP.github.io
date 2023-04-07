<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <?php
    if (isset($_POST['submitbutton'])) {
        $firstname = $_POST['first'];
        $username = $_POST['user'];
        $password = $_POST['pw'];
        $address = $_POST['address'];
        $country = $_POST['country'];
        $zipcode = $_POST['zipcode'];
        $email = $_POST['mail'];
        $sex = $_POST['sex'];
        $language = $_POST['language'];
        $about = $_POST['About'];

        if (empty($firstname) == true) {
            echo "Not Provided"."<br/>";
        }
        else{
            echo $firstname."<br/>";
        }

        if (empty($username) == true) {
            echo "Not Provided"."<br/>";
        }
        else{
            echo $username."<br/>";
        }
        if (empty($password) == true) {
            echo "Not Provided"."<br/>";
        }
        else{
            echo $password."<br/>";
        }
        if (empty($address == true)){
            echo "Not Provided"."<br/>";
        }
        else{
            echo $address."<br/>";
        }

        if (empty($country) == true) {
            echo "Not Provided"."<br/>";
        }
        else{
            echo $country."<br/>";
        }
        if (empty($zipcode) == true) {
            echo "Not Provided"."<br/>";
        }
        else{
            echo $zipcode."<br/>";
        }
        if (empty($email) == true) {
            echo "Not Provided"."<br/>";
        }
        else{
            echo $email."<br/>";
        }
        if (empty($sex) == true) {
            echo "Not Provided"."<br/>";
        }
        else{
            echo $sex."<br/>";
        }
        if (empty($language) == true) {
            echo "Not Provided"."<br/>";
        }
        else{
            for ($i=0; $i <sizeof($_POST['language']) ; $i++) { 
                echo $_POST['language'][$i]."<br/>";
            }
        }
        if (empty($about) == true) {
            echo "Not Provided"."<br/>";
        }
        else{
            echo $about."<br/>";
        }

    }

    ?>
    
</body>
</html>