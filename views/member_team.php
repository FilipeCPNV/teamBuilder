<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="views/css/list.css">
</head>
<body>
<table>
    <tr>
        <td>
            <?= $member->name ?>
        </td>
        <td>
            <?php foreach ($member->teams() as $team): ?>
                <span><?= $team->name ?></span>
            <?php endforeach; ?>
        </td>
    </tr>
</table>
</body>
</html>