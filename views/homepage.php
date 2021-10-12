<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="views/css/homepage.css">
    <link rel="stylesheet" href="views/css/list.css">
</head>
<body>
<div class="header">
    <div class="title">
        <p>TeamBuilder</p>
    </div>
    <div class="buttons">
        <a href="/?action=showMembers" id="link">Liste de membres</a>
        <a href="/?action=showMyTeams" id="link">Liste de mes équipes</a>
        <a href="/?action=showModerators" id="link">Liste de modérateurs</a>
    </div>
    <div class="person">
        <p>Connecté en tant que <?= $user->name ?></p>
    </div>
    <div class="content">
        <?= $content ?>
    </div>
</div>
</body>
</html>