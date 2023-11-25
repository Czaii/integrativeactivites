<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form action="{{route('register_submit')}}" method="POST">
        <table style="margin-right:auto; margin-left: auto;">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <h1 style="text-align: center;">REGISTER HERE!</h1>
            <tr>
                <td> <label>Username:</label></td>
                <td><input type="text" name="username" placeholder=""></td>
            </tr>
            <tr>
                <td><label>First name:</label></td>
                <td><input type="text" name="firstname" placeholder=""></td>
            </tr>
            <tr>
                <td><label>Last name:</label></td>
                <td><input type="text" name="lastname" placeholder=""></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password" placeholder=""></td>
            </tr>
            <tr>
                <td><label>Sex</label></td>
            </tr>
            <tr>
                <td><label>Male</label><input type="radio" name="sex"></td>
                <td><label>Female</label><input type="radio" name="sex"></td>

            </tr>
        </table>
        <div style="text-align:center; padding-top:20px">
            <button type="submit">Button</button>
        </div>
    </form>



</body>

</html>