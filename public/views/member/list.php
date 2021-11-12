<?php
ob_start()
?>
    <table>
        <?php foreach ($members as $member): ?>
            <tr>
                <?php if($role->name == "Moderator") : ?>
                    <td>
                        <a href="/?controller=MemberController&method=profil&member_id=<?= $member->id ?>"><?= $member->name ?></a>
                    </td>
                <?php endif; ?>
                <?php if($role->name != "Moderator") : ?>
                    <td>
                        <?= $member->name ?>
                    </td>
                <?php endif; ?>
                <td>
                    <?php foreach ($member->teams() as $team): ?>
                        <span><?= $team->name ?></span>
                    <?php endforeach; ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
<?php
$content = ob_get_clean();
require('public/views/homepage.php');