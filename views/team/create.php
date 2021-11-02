<?php
ob_start()
?>
    <form action="/?controller=TeamController&method=create" method="post">
        Nom de l'équipe:<input type="text" name="team_name"><br>
        <input type="submit" value="Créer">
    </form>
<?php
$content = ob_get_clean();
require('views/homepage.php');