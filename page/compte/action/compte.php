
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon Compte</title>
  <!-- Ajoutez ici le lien vers votre fichier Tailwind CSS -->
  <link rel="stylesheet" href="./?s=compte">
<body class="bg-gray-100">

  <div class="container mx-auto p-4">
    <!-- Onglets -->
    <div class="flex space-x-4">
      <a href="#" class="py-2 px-4 bg-blue-500 text-white rounded-md">Compte</a>
      <!-- Ajoutez d'autres onglets ici si nécessaire -->
    </div>

    <!-- Contenu de l'onglet Compte -->
    <div class="mt-4 bg-white p-6 rounded-md shadow-md">
      <h2 class="text-2xl font-semibold mb-4">Informations du Compte</h2>

      <!-- Formulaire pour modifier les informations -->
      <form>
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-600">Nom</label>
          <input type="text" id="name" name="name" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="mail" class="block text-sm font-medium text-gray-600">Adresse E-mail</label>
          <input type="mail" id="mail" name="mail" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <div class="mb-4">
          <label for="pass" class="block text-sm font-medium text-gray-600">Mot de passe</label>
          <input type="pass" id="pass" name="pass" class="mt-1 p-2 w-full border rounded-md">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">
          Enregistrer les Modifications
        </button>
      </form>

      <!-- Section des Likes, Commentaires et Projets -->
      <div class="mt-8">
        <h3 class="text-xl font-semibold mb-4">Activités</h3>
        <!-- Ajoutez ici les sections pour Likes, Commentaires et Projets -->
        <!-- Vous pouvez utiliser des listes, des tableaux ou d'autres éléments selon vos besoins -->
      </div>
    </div>
  </div>


