<?php
$projet=$Bdd->getProjet($_GET['project']);
$nbComm = sizeof($projet["commentaires"]);
// echo "<pre>";
// var_dump($projet);
// echo "</pre>";
?>
<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

        <div class="border-b mb-5 flex justify-between text-sm">
            <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">
                <a href="#" class="font-semibold inline-block">
                    <img src="./images/avatars/<?= $projet["avatar"] ?>" alt="Avatar" class="inline-block w-10 h-10 rounded-full mx-2">
                    Projet proposé par 
                    <?= $projet["createur"] ?>
                </a>
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
                <?php
                if($nbComm>0){
                ?>
                <div class="flex items-center">
                    <button id="btCommentaire" class="bg-blue-500 text-white px-4 py-2 rounded mr-4" id="commentButton">
                        <?= $nbComm ?> Commentaire<?= $nbComm > 1 ? "s" : "" ?>
                    </button>
                </div>
                <?php
                }
                ?>
                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <button class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-700 focus:outline-none focus:shadow-outline-red">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-4 h-4 mr-1">
                            <path d="M12 21.35l-1.45-1.32C5.4 14.25 2 11.15 2 7 2 4.24 4.24 2 7 2c1.74 0 3.41.81 5 2.19C16.59 2.81 18.26 2 20 2c2.76 0 5 2.24 5 5 0 4.15-3.4 7.25-8.55 13.03L12 21.35z"></path>
                        </svg>
                    </button>
                    <span class="ml-2 text-lg"><?= $projet["likes"] ?></span>
                </span>
            </div>
            <?php
            if($nbComm>0){
                foreach ($projet['commentaires'] as $comm) {
                    ?>
                    <div id="commentaires" class="hidden p-5">
                        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                            <p class="font-normal text-gray-700 dark:text-gray-400"><?= $comm['comment'] ?></p>
                            <div class>Date : <?= $comm['ts'] ?></div>
                            <img src="./images/avatars/<?= $comm["avatar"] ?>" alt="Avatar" class="inline-block w-10 h-10 rounded-full mx-2"> Par <?= $comm['nom'] ?>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
            <hr>
            <div class="">
                <?php
                foreach ($projet['categories'] as $value) {
                    ?>
                    <span class="inline-block font-bold text-xl m-4">#<?= $value['tag'] ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

    </div>
    </div>