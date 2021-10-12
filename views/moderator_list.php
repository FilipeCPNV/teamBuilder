<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="views/css/list.css">
</head>
<body>
<table>
    <?php foreach ($moderators as $moderator): ?>
        <tr>
            <td>
                <?= $moderator->name ?>
            </td>
        </tr>
    <?php endforeach ?>
</table>
</body>
</html>