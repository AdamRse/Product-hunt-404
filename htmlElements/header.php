<header>
    <nav class="bg-black text-white py-2 flex justify-between">

        <!-- Image Accueil -->
        <div class="flex items-center">
            <img src="./images/yoda.webp" class="h-16" alt="Flowbite Logo" />

            <!-- Bouton Accueil -->
            <a href="/" class="flex items-center ml-2">
                <span class="text-lg font-semibold focus:outline-none group-hover:underline">TH€ GR€AT BUSINE$$</span>
            </a>
        </div>

        <div class="flex items-center justify-center"> <!-- Utilisation de justify-center -->

            <!-- Menu Catégories -->
            <div class="relative group ml-4">
                <button class="text-lg font-semibold focus:outline-none group-hover:underline">
                    CATÉGORIES
                </button>
                <ul class="absolute hidden bg-gray-700 text-white mt-2 p-2 space-y-2">
                    <!-- Liste des catégories -->
                    <li><a href="/categorie1">Catégorie 1</a></li>
                    <li><a href="/categorie2">Catégorie 2</a></li>
                    <li><a href="/categorie3">Catégorie 3</a></li>
                    <!-- Ajoutez d'autres catégories ici au besoin -->
                </ul>
            </div>

            <div class="ml-4">
                <a href="/contact" class="text-lg font-semibold focus:outline-none group-hover:underline">CONTACT</a>
            </div>

            <div class="ml-4">
                <a href="./?s=compte" class="text-lg font-semibold focus:outline-none group-hover:underline">COMPTE</a>
            </div>
            <?php
            if(!USER){
            ?>
            <div class="ml-4">
                <a href="./?s=inscription" class="text-lg font-semibold focus:outline-none group-hover:underline">INSCRIPTION</a>
            </div>
            <?php
            }
            ?>
            <!-- Barre de Recherche -->
            <div class="relative ml-auto">
                <input
                    type="text"
                    placeholder="Rechercher..."
                    class="px-4 py-3 h-10 w-96 rounded bg-gray-700 text-white focus:outline-none focus:ring focus:border-blue-300"
                />
                <button class="text-lg font-semibold focus:outline-none group-hover:underline">
                    RECHERCHE
                </button>
            </div>

        </div>
    </nav>
</header>
