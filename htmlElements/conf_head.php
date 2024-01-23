<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TH€ GR€AT BUSINE$$</title>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">


<nav class="bg-black text-white p-4">
  <div class="container mx-auto flex items-center justify-between">
    <!-- Bouton Accueil -->
    <a href="/" class="flex items-center">
      <span class="text-lg font-semibold">Accueil</span>
    </a>
    <!-- Barre de Recherche -->
    <div class="relative">
      <input
        type="text"
        placeholder="Rechercher..."
        class="px-4 py-2 rounded bg-gray-700 text-white focus:outline-none focus:ring focus:border-blue-300"
      />
      <button class="absolute right-0 top-0 mt-2 mr-2">
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
      <a href="/contact" class="ext-lg font-semibold focus:outline-none group-hover:underline">Contact</a>
      
      <!-- Menu Compte -->
      <div class="relative group">
        <button class="text-lg font-semibold focus:outline-none group-hover:underline">
          Compte
        </button>
        </ul>
      </div>
    </div>
  </div>
</nav>
