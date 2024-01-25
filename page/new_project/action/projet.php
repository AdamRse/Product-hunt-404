<form action="./?s=new_project" method="post" class="max-w-md mx-auto mt-8 p-6 bg-white rounded-lg shadow-md">
    
    <div class="mb-4">
        <label for="nom" class="block text-black font-bold text-sm font-parley mb-2">Nom du projet :</label>
        <input type="text" name="nom" id="nom" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="categorie" class="block text-black font-bold text-sm font-parley mb-2">Categorie :</label>
        <input type="text" name="categorie" id="categorie" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="intro" class="block text-black font-bold text-sm font-parley mb-2">Résumé du projet :</label>
        <textarea name="intro" id="intro" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
    </div>

    <div class="mb-4">
        <label for="lien" class="block text-black font-bold text-sm font-parley mb-2">Entrez un lien :</label>
        <input type="text" name="lien" id="lien" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="detail" class="block text-black font-bold text-sm font-parley mb-2">détail du projet :</label>
        <textarea name="detail" id="detail" class="w-full px-4 py-8 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
    </div>
    
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue">Envoyer</button>
</form>

    