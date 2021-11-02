<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="views/css/list.css">
</head>
<body>
<table>
    <tr>
        <td>
<<<<<<< Updated upstream:views/member_team.php
            <?= $member->name ?>
=======
            <a href="/?controller=TeamController&method=show&team_id=<?= $team->id ?>"><?= $team->name ?></a>
>>>>>>> Stashed changes:views/member/team.php
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