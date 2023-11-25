<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>

        <tr>    
            <td> <label>Username</label></td>
            <td>{{$username}}</td>         
        </tr>
        <tr>
            <td><label>First name</label></td>
            <td>{{$firstname}}</td>
        </tr>
        <tr>
            <td><label>Last name</label></td>
            <td>{{$lastname}}</td>
        </tr>
        <tr>
            <td><label>Password</label></td>
            <td>{{$password}}</td>
        </tr>
        <tr>
            <td>
            <label>Sex</label>
            {{$sex}}
            </td>
        </tr>
    </table>
</body>
</html>