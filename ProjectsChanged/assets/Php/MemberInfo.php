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
    if (isset($_POST['sendButton'])) {
        $Firstname = $_POST["Firstnames"];
        $Lastname = $_POST["Lastnames"];
        $Bdate = $_POST["Bdate"];
        $University = $_POST["University"];
        $Faculty = $_POST["Faculty"];
        $Department = $_POST["Department"];
        $StuClass = $_POST["StuClass"];
        $Email = $_POST["Emails"];

        echo $Firstname;
        echo $Lastname;
        echo $Bdate;
        echo $University;
        echo $Faculty;
        echo $Department;
        echo $StuClass;
        echo $Email;

    }

    ?>


</body>

</html>