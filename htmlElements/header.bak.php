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

        <div class="ml-4">
                <a href="./?s=new_project" class="text-lg font-semibold focus:outline-none group-hover:underline">PROJET</a>
        </div>

        <div class="flex items-center justify-center"> <!-- Utilisation de justify-center -->

            <div class="ml-4">
                <a href="/contact" class="text-lg font-semibold focus:outline-none group-hover:underline">CONTACT</a>
            </div>

            <div class="ml-4">
                <a href="./?s=compte" class="text-lg font-semibold focus:outline-none group-hover:underline">COMPTE</a>
            </div>
            <?php
            if(!USER){
            ?>
            <div id="connect">
                <h1>Connexion</h1>
                <form action="./" method="post">
                    <input class="text-black" type="text" name="nom" placeholder="nom">
                    <input class="text-black" type="text" name="pass" placeholder="password">
                    <button type="submit">Se connecter</button>
                </form>
            </div>
            
            <div class="ml-4">
                <a href="./?s=inscription" class="text-lg font-semibold focus:outline-none group-hover:underline">INSCRIPTION</a>
            </div>
            <?php
            }
            else{
            ?> 
            <a href= "s=?compte&dc">
                <button type="submit">Se déconnecter</button>
            </a>
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
