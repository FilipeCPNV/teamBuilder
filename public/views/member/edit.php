<?php
ob_start()
?>
    <span>Nom : <?= $user_profil->name ?></span><br>
    <form action="/?controller=MemberController&method=changeName" method="post">
        Nouveau nom:<input type="text" name="member_name"><br>
        <input type="submit" value="Changer de nom">
    </form>
<?php
$content = ob_get_clean();
require('public/views/homepage.php');