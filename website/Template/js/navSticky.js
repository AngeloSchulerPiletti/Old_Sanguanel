


const nav = document.getElementById("navegation"),
      navBottom = document.getElementById("nav_bottom"),
      initialY = 0,
      width = window.innerWidth;


document.addEventListener("scroll", function(){
    let Ytop = window.pageYOffset;
    
    if(Ytop > 0){
        navBottom.style.display = "none";
    
        if(width <= 700){
            nav.className = "sticky";
        }
    }

    else if(Ytop <= 0){
        nav.classList.remove("sticky");

        if(width > 700){
            navBottom.style.display = "block";
        }
    }
})






