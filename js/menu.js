var $btnMenu = document.querySelector(".nav-hamburger");
$btnMenu.addEventListener("click", exibeEsconde);
$nav = document.querySelectorAll(".menu-nav1 li");

function exibeEsconde(){
    var i = 0;
    while($nav[i]){
        if($nav[i].style.display == "none"){
        $nav[i].style.display = "block";
    
        }else{
            $nav[i].style.display = "none";
        }
        i++;
    }       
}
