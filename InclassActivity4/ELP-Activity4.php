<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            margin: 3px;
            padding: 1px;
            display: inline-block;
            float: left;
        }
    </style>
</head>

<body>
    <form action="activity4-preview.php" method="post">
        <table>
            <tr>
                <td>Name :</td>
                <td><input type="text" name="first"></td>
            </tr>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="user"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="pw"></td>
            </tr>
            <tr>
                <td>Address :</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Country :</td>
                <td><select name="country">
                        <option value="America">America</option>
                        <option value="Germany">Germany</option>
                        <option value="Spain">Spain</option>
                        <option value="Türkiye">Türkiye</option>
                    </select></td>
            </tr>
            <tr>
                <td>Zipcode :</td>
                <td><input type="number" name="zipcode"></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="mail"></td>
            </tr>
            <tr>
                <td>Sex :</td>
                <td><input type="radio" name="sex" value="male" checked> Male
                    <input type="radio" name="sex" value="female"> Female
                </td>
            </tr>
            <tr>
                <td>Language :</td>
                <td>
                    <input type="checkbox" name="language[]" value="English">English
                    <input type="checkbox" name="language[]" value="French">French
                    <input type="checkbox" name="language[]" value="German">German
                </td>
            </tr>
            <tr>
                <td>About :</td>
                <td><textarea name="About" id="about" cols="25" rows="4"></textarea>
                </td>
            </tr>
        </table>

        <br />
        <input type="submit" name="submitbutton" value="Submit">
    </form>

</body>

</html>