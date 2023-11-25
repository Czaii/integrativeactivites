<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="{{ route('login_submit') }}" method="POST">
        <table style="margin-right:auto; margin-left: auto;">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_redirect" value="{{ route('dashboard') }}"> <!-- Add this line -->
            <h1 style="text-align: center;">Login</h1>
            <tr>
                <td><label>Username:</label></td>
                <td><input type="text" name="username" placeholder="Enter your username"></td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td><input type="password" name="password" placeholder="Enter your password"></td>
            </tr>
        </table>
        <div style="text-align:center; padding-top:20px">
            <button type="submit">Login</button>
        </div>
    </form>

    <div style="text-align:center; padding-top:20px">
        <p>Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
    </div>
</body>

</html>