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
        <form method="post">
            <input type="submit" value="Liste de membres" name="list_members" id="button">
            <input type="submit" value="Liste de mes équipes" name="list_team" id="button">
            <input type="submit" value="Liste de modérateurs" name="list_moderators" id="button">
        </form>
    </div>
    <div class="person">
        <p>Connecté en tant que <?= $userName ?></p>
    </div>
</div>
</body>
</html>