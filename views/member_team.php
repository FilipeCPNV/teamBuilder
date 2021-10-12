<?php
ob_start()
?>
<table>
    <?php foreach ($teams as $team): ?>
    <tr>
        <td>
            <a href="/?action=showTeam&id=<?= $team->id ?>"><?= $team->name ?></a>
        </td>
        <td>
            <span><?= count($team->members())?></span>
        </td>
        <td>
            <span><?= $team->captain()->name ?></span>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php
$content = ob_get_clean();
require('views/homepage.php');