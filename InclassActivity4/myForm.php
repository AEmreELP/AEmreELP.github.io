<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            margin: 5px;
            display: inline-block;
            left: 30px;
        }
    </style>
</head>

<body>
    <form action="activity4-preview.php" method="post">
        Name : <input type="text" name="first"> <br />
        Username : <input type="text" name="user"> <br />
        Password : <input type="password" name="pw"> <br />
        Address : <input type="text" name="address"> <br />
        Country : <select name="country">
            <option value="America">America</option>
            <option value="Germany">Germany</option>
            <option value="Spain">Spain</option>
            <option value="Türkiye">Türkiye</option>
        </select><br />
        Zipcode : <input type="number" name="zipcode"> <br />
        Email : <input type="email" name="mail"> <br />
        Sex :
        <input type="radio" name="sex" value="male" checked> Male
        <input type="radio" name="sex" value="female"> Female
        <br />

        Language :
        <input type="checkbox" name="language[]" value="English">English
        <input type="checkbox" name="language[]" value="French">French
        <input type="checkbox" name="language[]" value="German">German

        <br />

        About : <textarea name="About" id="about" cols="25" rows="4"></textarea>

        <br />
        <input type="submit" name="submitbutton" value="Submit">
    </form>

</body>

</html>