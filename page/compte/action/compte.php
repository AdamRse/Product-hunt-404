
<div class="flex">
        <!-- Mes Informations -->
        <div class="w-1/4 bg-green-500 p-4">
            <h3 class="text-xl font-semibold mb-2 text-white">Mes Informations</h3>
            <form>
                <label for="nom" class="block text-white mb-2">Nom :</label>
                <input type="text" id="nom" name="nom" class="w-full p-2 mb-4 bg-white rounded"value="<?=$_SESSION['user']['nom']?>">

                <label for="email" class="block text-white mb-2">Email :</label>
                <input type="email" id="email" name="email" class="w-full p-2 mb-4 bg-white rounded"value="<?=$_SESSION['user']['mail']?>">

                <button type="submit" class="bg-white text-green-500 px-4 py-2 rounded hover:bg-gray-200 focus:outline-none focus:shadow-outline-green">Modifier</button>
            </form>
        </div>

        <!-- Mes Likes -->
        <div class="w-1/4 bg-red-500 p-4">
            <h3 class="text-xl font-semibold mb-2 text-white">Mes Likes</h3>
            <!-- Ajoutez ici les éléments pour afficher les likes que vous avez donnés -->
        </div>

        <!-- Mes Commentaires -->
        <div class="w-1/4 bg-blue-500 p-4">
            <h3 class="text-xl font-semibold mb-2 text-white">Mes Commentaires</h3>
            <!-- Ajoutez ici les éléments pour afficher les commentaires que vous avez rédigés -->
        </div>

        <!-- Mes Projets -->
        <div class="w-1/4 bg-yellow-500 p-4">
            <h3 class="text-xl font-semibold mb-2 text-white">Mes Projets</h3>
            <!-- Ajoutez ici les éléments pour afficher vos projets -->
        </div>
    </div>