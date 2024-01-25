//Fichier js appelé sur toutes les pages
console.log("Hello global.js")

document.querySelector("#btMenuCompte").addEventListener("click", function(){
    document.querySelector("#menuCompte").classList.toggle("hidden");
})