<html>
    <head>
        <title>Admin Section</title>
    </head>
    <body>

        <table>
            <tr>
                <th>Title</th>
                <th>Sender</th>
                <th>Text</th>
                <th>Approve?</th>
            </tr>

            <? foreach($messages as $message){ ?>
                <tr>
                    <td>
                        <?=$message['title'];?>
                    </td>
                    <td>
                        <?=$message['sender'];?>
                    </td>
                    <td>
                        <pre><?=$message['message'];?></pre>
                    </td>
                    <td>
                        <?=$message['title'];?>
                    </td>
                </tr>
            <? } ?>

        </table>
    </body>
</html>