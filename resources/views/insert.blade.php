<<!DOCTYPE html>
<html>
<head>
    <title>Insert page</title>
</head>
<body>
<center>
    <form action="/registered" method="post">
        <table>
            <tr>
            {{ csrf_field() }}
                <td>Name: </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Surname: </td>
                <td><input type="text" name="surname"></td>
            </tr>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="Submit" value="Register"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>