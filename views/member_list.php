<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="views/css/list.css">
</head>
<body>
<table>
    <?php foreach ($members as $member): ?>
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
    <?php endforeach ?>
</table>
</body>
</html>