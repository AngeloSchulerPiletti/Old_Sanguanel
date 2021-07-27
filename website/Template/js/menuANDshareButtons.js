

const menu_slider = document.getElementById("menu_slider"),
      main = document.getElementById('mainer'),
      menu_button = document.getElementById("menu_button"),
      alturaHeader = document.getElementById('navegation').offsetHeight,

    //   ESTABELECE OS BOTÕES DE COMPARTILHAMENTO
      buttonShare = document.getElementById("button_img"),
      facebook = document.getElementById("facebook_img"), 
      whatsapp = document.getElementById("whatsapp_img"),
      linkedin = document.getElementById("linkedin_img"),


    //   ESTABELECE OS LINKS DE CADA REDE SOCIAL
      fb_link = document.getElementById("fb_link"),
      wpp_link = document.getElementById("wpp_link"),
      in_link = document.getElementById("in_link"),

    //   ESTABELECE A URL ATUAL
      url_atual = window.location.href;
      
link_shareFB = fb_link.getAttribute('href');
link_shareWPP = wpp_link.getAttribute('href');
link_shareIN = in_link.getAttribute('href');

fb_link.setAttribute('href', link_shareFB + url_atual);
wpp_link.setAttribute('href', link_shareWPP + url_atual);
in_link.setAttribute('href', link_shareIN + url_atual);



menu_slider.style.transform = "translate(-36vw, " + alturaHeader + "px)";
menu_slider.style.height = "calc(100vh - " + alturaHeader + "px)";
var Rotation_var = false,
    Menu_var = false;



// FUNÇÃO DO MENU
function slideMenu(){
    if(Menu_var == false){
        menu_slider.style.transform = "translate(0, " + alturaHeader + "px)";
        
        
        Menu_var = true;
    }
    else if(Menu_var == true){
        menu_slider.style.transform = "translate(-36vw, " + alturaHeader + "px)";
        
        Menu_var = false;
    }
}


// FUNÇÃO DO BOTÃO DE COMPARTILHAMENTO
function Rotation(){
    // ESTE TRYCATCH SERVE PARA TRATAR O ERRO QUANDO Rotation() É CHAMADA EM UMA HOME
    try{
        if(Rotation_var == false){
            facebook.setAttribute("move", "already"); 
            whatsapp.setAttribute("move", "already"); 
            linkedin.setAttribute("move", "already");
            buttonShare.setAttribute("rotate", true);
            
            Rotation_var = true;
        }


        else if(Rotation_var == true){
            facebook.setAttribute("move", "false"); 
            whatsapp.setAttribute("move", "false"); 
            linkedin.setAttribute("move", "false");
            buttonShare.setAttribute("rotate", false);

            Rotation_var = false;
        }
    }
    catch(err){
        console.log("The share button isn't available at any home");
    }
}



// FUNÇÃO DE FECHAR AMBOS
function quitIt(){
    Rotation_var = true;
    Menu_var = true;
    slideMenu();
    Rotation();
    Menu_var = false;
    Rotation_var = false;
}

// ESTE TRYCATCH SERVE PARA TRATAR O ERRO QUE APARECE QUANDO NÃO HÁ BUTTON SHARE, NO CASO DAS HOMES
try{
buttonShare.addEventListener('click', function(){Rotation()});}
catch(err){console.log("the share button's functions aren't available here!")}

menu_button.addEventListener('click', function(){slideMenu()});
main.addEventListener('click', function(){quitIt()});