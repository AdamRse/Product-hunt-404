<?php
$projets = $Bdd->getProjets();
// echo "<pre>SESSION :";
// var_dump($projets);
// echo "</pre>";
foreach ($projets as $projet) {
?>
    <!-- class="h-6 mr-3" -->
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

        <div class="border-b mb-5 flex justify-between text-sm">
            <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">
                <img src="./images/avatars/<?= $projet["avatar"] ?>" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
                <a href="#" class="font-semibold inline-block"><?= $projet["createur"] ?></a>
            </div>
        </div>


        <div class="rounded overflow-hidden shadow-lg flex flex-col">
            <a href="#"></a>
            <div class="relative"><a href="#">
                    <img class="w-full" src="/images/illustration/<?= $projet["illustration"] ?>" alt="Sunset in the mountains">
                    <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </a>
            </div>
            <div class="px-6 py-4 mb-auto">
                <a href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2"><?= $projet["intro"] ?></a>
                <p class="text-gray-500 text-sm">
                    <?= $projet["detail"] ?></p>
            </div>
            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">

                <div class="flex items-center">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded mr-4" id="commentButton">
                        Commentaires
                    </button>
                    <span class="ml-1"><?= $projet["likes"] ?></span>
                </div>

                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <button class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 mr-1">
                            <path d="M12 21.35l-1.45-1.32C5.4 14.25 2 11.15 2 7 2 4.24 4.24 2 7 2c1.74 0 3.41.81 5 2.19C16.59 2.81 18.26 2 20 2c2.76 0 5 2.24 5 5 0 4.15-3.4 7.25-8.55 13.03L12 21.35z"></path>
                        </svg>
                    </button>
                    <span class="ml-1"><?= $projet["likes"] ?></span>
                </span>
            </div>
        </div>

    </div>
    </div>
<?php
}
?>