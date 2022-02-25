//사이드 js
//선택지 2개 - window.onload or html하단에 기술

window.onload = function() {

    var menuBtn = document.querySelector(".menuBtn");
    // console.log(menuBtn);
    menuBtn.addEventListener("click", onSidenav)

}
    
    function onSidenav() {
        
        // console.log(1);
        var side = document.querySelector(".side");
        // console.log(sidewidth);
        if( side.style.width == "200px") {
            side.style.width = "0px";
        } else {
            side.style.width = "200px";
        }
        
    }