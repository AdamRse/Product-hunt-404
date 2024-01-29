<div class="flex items-start justify-end h-screen w-full">
    <!-- Utilisation de w-full pour définir la largeur sur 100% -->
    <div class="w-full">
        <div class="bg-black shadow-xl rounded-lg py-3">
            <div class="photo-wrapper p-2 text-center">
                <!-- Utilisez la bonne URL de l'avatar dans la source de l'image -->
                <img src="./images/avatars/<?=$_SESSION['user']['avatar']?>" alt="Avatar" class="w-16 h-16 rounded-full mx-auto">
            </div>
            <div class="p-2">
                <h3 class="text-center text-xl text-white font-medium leading-8"><?=$_SESSION['user']['nom']?></h3>
                <table class="text-xs my-3 w-full">
                    <tbody>
                        <tr>
                            <td class="text-center text-xl text-white font-medium leading-8"><?=$_SESSION['user']['mail']?></td>
                        </tr>
                        <!-- <tr>
                            <td class="text-center text-xl text-white font-medium leading-8"><?=$_SESSION['user']['likes']?>
                                <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 mx-1">
                                    <path d="M12 21.35l-1.45-1.32C5.4 14.25 2 11.15 2 7 2 4.24 4.24 2 7 2c1.74 0 3.41.81 5 2.19C16.59 2.81 18.26 2 20 2c2.76 0 5 2.24 5 5 0 4.15-3.4 7.25-8.55 13.03L12 21.35z"></path>
                                </svg>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    <!-- Mes Likes -->
    <div class="bg-red-500 p-4 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4 text-white">Mes Likes</h3>
        <!-- Ajoutez ici les éléments pour afficher les likes que vous avez donnés -->
    </div>

    <!-- Mes Commentaires -->
    <div class="bg-blue-500 p-4 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4 text-white">Mes Commentaires</h3>
        <!-- Ajoutez ici les éléments pour afficher les commentaires que vous avez rédigés -->
    </div>

    <!-- Mes Projets -->
    <div class="bg-yellow-500 p-4 rounded-lg shadow-md">
        <h3 class="text-xl font-semibold mb-4 text-white">Mes Projets</h3>
        <!-- Ajoutez ici les éléments pour afficher vos projets -->
    </div>
</div>
