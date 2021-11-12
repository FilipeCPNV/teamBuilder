<?php
ob_start()
?>
    <span>Nom : <?= $user_profil->name ?></span><br>
    <span>Status : <?= $status->name ?></span><br>
    <span>Role : <?= $role->name ?></span>
    <?php if(count($teams_captain) != 0): ?>
        <br>
        <span>Capitaine de :</span><br>
        <?php foreach ($teams_captain as $team_captain): ?>
            <tr>
                <td>
                    <span><?= $team_captain->name ?></span>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    <br>
    <?php if(count($teams_member) != 0) : ?>
        <span>Membre de :</span><br>
        <?php foreach ($teams_member as $team_member): ?>
            <tr>
                <td>
                    <span><?= $team_member->name ?></span>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    <?php if(count($teams_captain) == 0 and count($teams_member) == 0): ?>
        <span>Inscrit dans aucune équipe</span>
    <?php endif; ?>
<?php
$content = ob_get_clean();
require('public/views/homepage.php');