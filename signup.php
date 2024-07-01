<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="signuptologin.php" method="post">

<?php
if (isset($_REQUEST['success'])) {
    ?>
   <p style="color:blue;">
   <?php echo "Successfuly signuped";
}
   ?></p>

    <table>
        <tr>
            <td>
                <input type="text" name="ssname" id="" placeholder="Create a Username">
                <input type="email" name="semail" id="" placeholder="Enter email id">
                <input type="password" name="spwd" id="" placeholder="password">
                <button type="submit">Signup</button>
            </td>
       
        </tr>
    </table>
</form>
</body>
</html>