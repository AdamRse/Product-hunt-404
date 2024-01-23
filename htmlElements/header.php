<header>
    <nav class="bg-black text-white py-3 flex justify-between">

        <!-- Image Accueil -->
        <div class="flex items-center">
            <img src="./images/yoda.webp" class="h-16" alt="Flowbite Logo" />

            <!-- Bouton Accueil -->
            <a href="/" class="flex items-center ml-2">
                <span class="font-semibold">TH€ GR€AT BUSINE$$</span>
            </a>
        </div>

        <div class="relative">
            <a href="./?s=inscription" class="text-white">Inscription</a>
        </div>

        <!-- Barre de Recherche -->
        <div class="relative flex items-center">
            <input
                type="text"
                placeholder="Rechercher..."
                class="px-4 py-3 rounded bg-gray-700 text-white focus:outline-none focus:ring focus:border-blue-300 w-full"
            />
            <button class="ml-2">
                <!-- Ajoutez ici une icône de recherche ou du texte pour le bouton de recherche -->
                Rechercher
            </button>
        </div>

        <!-- Menu Catégories -->
        <div class="relative group">
            <button class="text-lg font-semibold focus:outline-none group-hover:underline">
                Catégories
            </button>
            <ul class="absolute hidden bg-gray-700 text-white mt-2 p-2 space-y-2">
                <!-- Liste des catégories -->
                <li><a href="/categorie1">Catégorie 1</a></li>
                <li><a href="/categorie2">Catégorie 2</a></li>
                <li><a href="/categorie3">Catégorie 3</a></li>
                <!-- Ajoutez d'autres catégories ici au besoin -->
            </ul>
        </div>

        <!-- Lien Contact -->
        <a href="/contact" class="text-lg font-semibold focus:outline-none group-hover:underline">Contact</a>

        <!-- Menu Compte -->
        <div class="relative group">
            <button class="text-lg font-semibold focus:outline-none group-hover:underline">
                Compte
            </button>
            <!-- Ajoutez ici les éléments de votre menu Compte -->
            <!-- par exemple, une liste d'options -->
            <ul class="absolute hidden bg-gray-700 text-white mt-2 p-2 space-y-2">
                <li><a href="/mon-compte">Mon Compte</a></li>
                <li><a href="/parametres">Paramètres</a></li>
                <li><a href="/deconnexion">Déconnexion</a></li>
                <!-- Ajoutez d'autres liens du menu Compte ici au besoin -->
            </ul>
        </div>
    </nav>
</header>
