<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
    <style>
        td{
            border:solid 2px black

        }
    </style>
</head>
<body>

<table>
    <tr>
        <td>Name</td>
        <td><?php echo $_GET['name'] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $_GET['email'] ?></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><?php echo $_GET['password'] ?></td>
    </tr>
</table>
    
</body>
</html>
