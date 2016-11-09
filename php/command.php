<?php
$file = $_GET['file'] ? $_GET['file'] : false;
$content = "Please enter a file name to get it's content";
if($file){
    $content = shell_exec("cat /var/www/files/{$file}");
}
?>
<html>
    <head>
        <title>Acme Soft Inc.</title>
    </head>
    <body>
        <form method="post">
            <input name="file" type="text">
            <input type="submit">
        </form>

        <pre>
            <?=nl2br($content);?>
        </pre>
    </body>
</html>
