<?php
ob_start()
?>
    <table>
        <?php foreach ($moderators as $moderator): ?>
            <tr>
                <td>
                    <?= $moderator->name ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
<?php
$content = ob_get_clean();
require('public/views/homepage.php');
