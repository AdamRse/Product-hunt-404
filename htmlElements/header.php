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
        
<!-- Barre de Recherche -->
                <div class="flex items-center justify-end">
                <div class="relative">
        <input
            type="text"
            placeholder="Rechercher..."
            class="px-4 py-3 rounded bg-gray-700 text-white focus:outline-none focus:ring focus:border-blue-300"
        />
        <button class="text-lg font-semibold focus:outline-none group-hover:underline">
            RECHERCHE
        </button>
    </div>


        <!-- Menu Catégories -->
        <div class="relative group">
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

        <div>
            <a href="/contact" class="text-lg font-semibold focus:outline-none group-hover:underline"> CONTACT</a>
        </div>

        <div class="relative">
            <a href="./?s=compte" class="text-lg font-semibold focus:outline-none group-hover:underline">COMPTE</a>
        </div>

        <div class="relative">
            <a href="./?s=inscription" class="text-lg font-semibold focus:outline-none group-hover:underline">INSCRIPTION</a>
        </div>
    </nav>
</header>
