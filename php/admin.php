<?php
$page = $_GET['page'] ? $_GET['page'] : 'home';
?>
<html>
    <head>
        <title>Acme Soft Inc.</title>
    </head>
    <body>
        <? require("pages/".$page.".php"); ?>
    </body>
</html>
