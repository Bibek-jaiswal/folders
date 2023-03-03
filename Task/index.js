function btn() {
    var para = document.querySelector('.para');
    var b1 = document.querySelector('.b1');
    var b2 = document.querySelector('.b2');
    document.getElementById("para").addEventListener("click", myFunction);
}


function myFunction() {
    para.innerHTML = "test";
}