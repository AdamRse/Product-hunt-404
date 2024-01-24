    <!-- Espace personnel -->
    <section class="container mx-auto p-4">
        <form action="./?s=comptes" method="post" class="max-w-md mx-auto bg-white p-8 rounded shadow-md"><div class="bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Mon Espace Personnel</h2>

        <!-- Informations personnelles -->
        <div class="mb-4">
    <h3 id="titreInfo" class="text-xl font-semibold mb-2 text-green-400 cursor-pointer" id="toggleInformation">
        Mes Informations
    </h3>
    <p id="info" class="hidden text-xl font-semibold mb-2 text-green-400">
        <?= $_SESSION['user']['nom'].' &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.
        $_SESSION['user']['mail']  ?></p>

        <!-- Likes -->
        <div class="mb-4">
            <h3 class="text-xl font-semibold mb-2 text-red-600">Mes Likes</h3>
            <!-- Ajoutez ici les éléments pour afficher les likes que vous avez donnés -->
        </div>

        <!-- Commentaires -->
        <div class="mb-4">
            <h3 class="text-xl font-semibold mb-2 text-blue-600">Mes Commentaires</h3>
            <!-- Ajoutez ici les éléments pour afficher les commentaires que vous avez rédigés -->
        </div>

        <!-- Projets -->
        <div>
            <h3 class="text-xl font-semibold mb-2 text-yellow-500">Mes Projets</h3>
            <!-- Ajoutez ici les éléments pour afficher vos projets -->
        </div>
    </div>
</div>
