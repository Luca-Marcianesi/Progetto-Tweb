
var backBtn = document.getElementById("backBtn");
backBtn.addEventListener('click', function() {
    window.scrollTo(0,0);
});

window.addEventListener('scroll', function(){
    let posY = window.scrollY;   
    if(posY > 600) { 
        backBtn.style.display= 'block';
    } else {
        backBtn.style.display= 'none';
    }
});