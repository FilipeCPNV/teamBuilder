<?php
ob_start()
?>
    <table>
            <tr>
                <td>
                    <?= $team->name ?>
                </td>
                <td>
                    <?php foreach ($team->members() as $member): ?>
                        <span><?= $member->name ?></span>
                    <?php endforeach; ?>
                </td>
            </tr>
    </table>
<?php
$content = ob_get_clean();
require('views/homepage.php');