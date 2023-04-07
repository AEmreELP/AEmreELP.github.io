<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="register" action="process.php" method="post">
    <p> Name : <input type="text" name="first"></p>
    <p> Username : <input type="text" name="user"></p>
    <p> Password : <input type="password" name="pw"></p>
    <p> Address : <input type="text" name="address"></p>
    <select name="country">
        <option value="country-America">America</option>
        <option value="country-Germany">Germany</option>
        <option value="country-Spain">Spain</option>
        <option value="country-Türkiye">Türkiye</option>
    </select>
    <p> Zipcode : <input type="number" name="zipcode"></p>
    <p> Email : <input type="email" name="mail"></p>
    <p> Sex : 
        <input type="radio" name="sex" value="male" checked> Male
        <input type="radio" name="sex" value="female" > Female
    </p>

    <p>Language : 
        <input type="checkbox" name="language" value="true" >English
        <input type="checkbox" name="language" value="true" >French
        <input type="checkbox" name="language" value="true" >German

    </p>

    <p>About <textarea name="About" id="about" cols="30" rows="10"></textarea></p>
    </form>
    
    <p><input type="submit" name="submitbutton" value="Submit"></p>
</body>
</html>