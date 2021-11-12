<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <!-- Personal CSS -->
    <link rel="stylesheet" href="public/views/css/homepage.css">
    <!-- Tailwind-->
    <link rel="stylesheet" href="public/views/css/tailwind/tailwind.css">
    <!-- Roboto Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<nav class="bg-gray-500">
    <div class="flex mb-4 text-black h-20">
        <div>
            <p class="text-3xl p-4">TeamBuilder</p>
        </div>
        <div class="flex flex-grow justify-around p-4">
            <a href="/?controller=MemberController&method=index" id="link">Liste de membres</a>
            <a href="/?controller=MemberController&method=teams" id="link">Liste de mes équipes</a>
            <a href="/?controller=MemberController&method=mods_list" id="link">Liste de modérateurs</a>
            <a href="/?controller=TeamController&method=createForm" id="link">Création d'une équipe</a>
        </div>
        <div class="mx-4 p-4">
            <p>Connecté en tant que <a href="/?controller=MemberController&method=profil&member_id=<?= $user->id ?>"><?= $user->name ?></a></p>
            <p>Version : Fin Examen - Filipe</p>
        </div>
    </div>
</nav>
<div>
    <?= $content ?>
</div>
</body>
</html>