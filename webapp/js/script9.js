var fs = 1.5;

document.getElementById("petit").addEventListener("click", petit);
document.getElementById("mitja").addEventListener("click", mitja);
document.getElementById("gran").addEventListener("click", gran);

function petit(){
    fs = fs-0.5;
    document.getElementById("text").style.fontSize=(fs+"rem");
}
function mitja(){
    fs = 1.5;
    document.getElementById("text").style.fontSize=(fs+"rem");
}
function gran(){
    fs = fs+0.5;
    document.getElementById("text").style.fontSize=(fs+"rem");
}