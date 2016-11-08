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
        <form method="post">
            <input type="text" name="nickname" value="<?=($_POST ? "Please enter your nickname" : $nickname);?>" />
            <input type="submit">
        </form>
    </body>
</html>