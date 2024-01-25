//Fichier js appelé sur toutes les pages
console.log("Hello global.js")

document.querySelector("#user-menu-button").addEventListener("click", function(){
    document.querySelector("#menuUser").classList.toggle("hidden");
})