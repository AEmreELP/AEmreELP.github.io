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
    if (isset($_POST['sendButton'])){
        $Firstname=$_POST["Firstnames"];
        $Lastname=$_POST["Lastnames"];
        $SchoolId=$_POST["SchoolIds"];
        $Email=$_POST["Emails"];
        $Comment=$_POST["comments"];

        echo $Firstname;
        echo $Lastname;
        echo $SchoolId;
        echo $Email;
        echo $Comment;
    }
    
    ?>
        
    
</body>
</html>