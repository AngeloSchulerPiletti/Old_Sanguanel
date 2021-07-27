<?php 

// LISTA DE DIRETÓRIOS DO SITE
  $assuntos = array("História" => "Historia", 
                    "Curiosidades" => "Outros", 
                    "Receitas" => "Receitas", 
                    "Produção" => "Producao");
  $homes =  array("História" => "historyHomePage", 
                  "Curiosidades" => "othersHomePage", 
                  "Receitas" => "recipeHomePage", 
                  "Produção" => "productionHomePage");
  $institucionalPages = array("Exposição" => "exposicaoEditorial",
                              "Partícipes" => "participesDeference",
                              "PolíticaDePrivacidade" => "politicalPrivacity");
  



  function callNotFoundPage(){
    require_once './error/error404.php';
    die;
  }
  function callAccessDeniedPage(){
    require_once './error/error403.php';
    die;
  }

  // DEFINE QUE AS PÀGINAS FORAM SOLICITADAS VIA INDEX
  define('LOADED_BY_INDEX', 1);


  // CAPTURA A URL E CRIA ARRAY COM OS PARAMETROS

  $homeURL = 'Início/';
  $url = isset($_GET['page']) ? $_GET['page'] : $homeURL;
  define('PARS_URL', array_filter(explode('/', $url)));




  $lastFile = strtolower(PARS_URL[count(PARS_URL) - 1]);
  $deniedFiles = array("js", "css", "jpg", "png", "ttf", "woff", "woff2");
  $deniedArchives = array("error", "website");



  
// TESTA SE TRATA-SE DE UM ARQUIVO PROIBIDO
  if(substr_count($lastFile, ".") == 1){
  // INDICA SE O ÚLTIMO ITEM POSSUI EXTENSÃO
    $lastFile_ARRAY = explode(".", $lastFile);
    $lastFile_Extension = $lastFile_ARRAY['1'];
    $lastFile_Extension = strtolower($lastFile_Extension);

    if(in_array($lastFile_Extension, $deniedFiles) == true){
      callAccessDeniedPage();
    }
  }
  elseif(substr_count($lastFile, ".") > 1){
    callNotFoundPage();
  }
  // elseif(substr($lastFile, -1) == "/"){
  //   callAccessDeniedPage();
  // }


  
  

  /* $routeFile = ''; */
    // Roteamento de API
  /*if (PARS_URL[0] == 'api'){
    define('ISAPICALL', true);
    define('ISWEBCALL', false);
    $routeFile = 'api/';


    // AQUI ABRE ESPAÇO PARA CONFIGURAÇÕES DE API FUTURAS!
    if(count(PARS_URL) > 2){
      // POSSIBILIDADES FUTURAS
    }
    else{
      callErrorPage();
    }
  }*/


// ========================================================================================
// Para recordação: A estrutura "falsa" de diretórios que desejamos alcançar é:
// Início/"Um dos tópicos de Assuntos"/"Nome do artigo"/
//    Ex: Início/História/O-que-é-Hidromel/
//
// Institucional/"Página do Institucional"/
//    Ex: Institucional/Partícipes/
// =========================================================================================
  
  // ROTEAMENTO WEB (rota)
  // Define a rota inicial
  $file_route = "./website/";
  $targetpage = "";

  // Leva para os artigos e homes
  if(PARS_URL[0] == "Início"){

    if(!isset(PARS_URL[1])){
      $file_route .= "Inicio/HomePage/articleHomePage.php";
      require_once $file_route;
    }
    elseif(array_key_exists(PARS_URL[1], $assuntos)){
      $file_route .= "Assuntos/" . $assuntos[PARS_URL[1]] . "/";

      if(!isset(PARS_URL[2])){
        $file_route .= $homes[PARS_URL[1]] . ".php";
        require_once $file_route;
      }
      elseif(isset(PARS_URL[2])){
        $targetpage = "Artigos/" . PARS_URL[2] . ".php";
        $file_route .= $targetpage;

        if(file_exists($file_route)){
          require_once $file_route;
        }
        else{
          callNotFoundPage();
        }
      }
      else{
        callNotFoundPage();
      }
    }
    else{
      callNotFoundPage();
    }
  }

  // Leva para as páginas institucionais
  elseif(PARS_URL[0] == "Institucional"){
    $file_route .= "Inicio/InstitucionalPages/";
    

    if(!isset(PARS_URL[1])){
      $file_route .= "exposicaoEditorial.php";
      require_once $file_route;
    }
    elseif(array_key_exists(PARS_URL[1], $institucionalPages)){
      $targetpage = $institucionalPages[PARS_URL[1]];
      $file_route .= $targetpage . ".php";

      if(file_exists($file_route)){
        require_once $file_route;
      }
      else{
        callNotFoundPage();
      }
      
    }
    else{
      callNotFoundPage();
    }
  }
  else{
    callNotFoundPage();
  }
  





  
  // require_once $url;

  // require_once './website/Inicio/HomePage/articleHomePage.php';
  // exit();
?>