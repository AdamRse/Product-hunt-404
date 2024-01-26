let btComm = document.querySelector('#btCommentaire');
if(btComm){
    let divComm = document.querySelector('#commentaires');
    btComm.addEventListener("click", function(){
        divComm.classList.toggle("hidden");
    });
}