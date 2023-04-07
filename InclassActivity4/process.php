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
    echo "deneme";
    $firstname = $_POST['first'];
    echo $firstname."<br/>";
    $username = $_POST['user'];
    echo $username."<br/>";
    $password = $_POST['pw'];
    echo $password."<br/>";
    $address = $_POST['address'];
    echo $address."<br/>";
    $country = $_POST['country'];
    echo $country."<br/>";
    $zipcode = $_POST['zipcode'];
    echo $zipcode."<br/>";
    $email = $_POST['mail'];
    echo $email."<br/>";
    $sex = $_POST['sex'];
    echo $sex."<br/>";
    $language = $_POST['language'];
    echo $language."<br/>";
    $about = $_POST['About'];
    echo $about."<br/>";

    if (isset($_POST['submitbutton'])) {
        $firstname = $_POST['first'];
        echo $firstname."<br/>";
        $username = $_POST['user'];
        echo $username."<br/>";
        $password = $_POST['pw'];
        echo $password."<br/>";
        $address = $_POST['address'];
        echo $address."<br/>";
        $country = $_POST['country'];
        echo $country."<br/>";
        $zipcode = $_POST['zipcode'];
        echo $zipcode."<br/>";
        $email = $_POST['mail'];
        echo $email."<br/>";
        $sex = $_POST['sex'];
        echo $sex."<br/>";
        $language = $_POST['language'];
        echo $language."<br/>";
        $about = $_POST['About'];
        echo $about."<br/>";
    }

    ?>
    
</body>
</html>