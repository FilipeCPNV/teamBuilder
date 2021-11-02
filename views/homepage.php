<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="views/css/homepage.css">
</head>
<body>
<div class="header">
    <div class="title">
        <p>TeamBuilder</p>
    </div>
    <div class="buttons">
<<<<<<< Updated upstream
        <form method="post">
            <input type="submit" value="Liste de membres" name="list_members" id="button">
            <input type="submit" value="Liste de mes équipes" name="list_team" id="button">
            <input type="submit" value="Liste de modérateurs" name="list_moderators" id="button">
        </form>
=======
        <a href="/?controller=MemberController&method=index" id="link">Liste de membres</a>
        <a href="/?controller=MemberController&method=team" id="link">Liste de mes équipes</a>
        <a href="/?controller=MemberController&method=mods_list" id="link">Liste de modérateurs</a>
        <a href="/?controller=TeamController&method=createForm" id="link">Création d'une équipe</a>
>>>>>>> Stashed changes
    </div>
    <div class="person">
        <p>Connecté en tant que <?= $userName ?></p>
    </div>
</div>
</body>
</html>