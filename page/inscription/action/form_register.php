<section>
    <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" class="text-3xl text-center text-red-600">Creating an account</h1>
</section>


<section class="container mx-auto p-4">
    <form action="./?s=inscription" method="post" class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-600">Pseudo</label>
            <input type="text" name="nom" id="name" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="mail" class="block text-sm font-medium text-gray-600">Mail</label>
            <input type="email" name="mail" id="mail" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
            <label for="pass" class="block text-sm font-medium text-gray-600">Password</label>
            <input type="password" name="pass" id="pass" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <button type="submit" class="bg-blue-500 text-white p-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:border-blue-300">
            Create your account
        </button>
    </form>
</section>

