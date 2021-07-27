
const cookieAdvice = document.getElementById('CookieAdvice_container'),
      buttonAccept = document.getElementById('buttonAccept'),
      acceptCookies = ()=>{
      localStorage.setItem('sanguanelCookies', "cookies accepted");
      cookieAdvice.setAttribute('state', 'hide');
      }


if(!localStorage.sanguanelCookies){
    cookieAdvice.setAttribute('state', 'show');

    buttonAccept.addEventListener('click', function(){acceptCookies();})
}

