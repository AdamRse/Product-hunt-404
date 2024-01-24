    <!-- Espace personnel -->
    <section class="container mx-auto p-4">
        <form action="./?s=comptes" method="post" class="max-w-md mx-auto bg-white p-8 rounded shadow-md"><div class="bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Mon Espace Personnel</h2>

        <!-- Informations personnelles -->
        <div class="mb-4">
    <h3 class="text-xl font-semibold mb-2 text-green-400 cursor-pointer" id="toggleInformation">
        Mes Informations
    </h3>
    <!-- Ajoutez ici les éléments pour afficher vos informations personnelles -->
    <div id="informationContent" class="hidden">
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mail</th>
                </tr>
            </thead>
            <!-- Ajoutez ici les lignes de la table avec les informations du user -->
        </table>
    </div>
</div>

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
