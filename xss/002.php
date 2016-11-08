<?php

if($_POST){
    $nickname = $_POST['nickname'];
} else {
    $nickname = "a mistery to me";
}
?>

<html>
    <head>
        <title>Your nickname is <?=$nickname;?></title>
    </head>
    <body>
        <title>Your nickname is <?=$nickname;?></title>
    </body>
</html>