<!DOCTYPE html>
<html lang="pt-BR">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página inicial da seção de receitas com hidromel. São abordadas receitas culinárias PARA hidromel e FEITAS COM hidromel. Desde carnes até vegetariano e veganismo - Além de claro DRINKS.">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="authoral" content="Angelo Schuler Piletti">
    <meta name="keywords" content="Hidromel, Receitas, Drinks, Artigos">
    
    <link rel="stylesheet" type="text/css" href="/website/Template/css/IndividualCSS/backGroundHomes/recipe.css">

    <?php include("./website/Template/html/toHomes/linkhead.html") ?>


    <title>Início | Receitas de Hidromel</title>
</head>
<body>

    <?php include("./website/Template/html/header.html") ?>
    <?php include("./website/Template/html/menuSlider.html")?>


    <main id="mainer">
        <section id="articler">
            <div class="section_title">
                <h1>Receitas <specialh1>com Hidromel</specialh1></h1>
                <p>Você está na página inicial da seção de Receitas</p>
            </div>

            <section class="articles_card_container">
                <div class="article_card" id="card1">
                    <a href="/Início/Receitas/CaipirinhaDeHidromel">
                        <h3>Caipirinha de Hidromel</h3>
                        <span>Criativa e doce</span>
                    </a>
                </div>

                <div class="article_card" id="card2">
                    <a href="/Início/Receitas/DrinkGingerMead">
                        <h3>Drink Ginger_Mead</h3>
                        <span>Um bem puxado pra quem gosta de gengibre e álcool!</span>
                    </a>
                </div>

                <div class="article_card" id="card3">
                    <a href="/Início/Receitas/DrinkGoitaca">
                        <h3>Drink Goitacá</h3>
                        <span>Esse drink é mágico...</span>
                    </a>
                </div>
        </section>
    </main>

    <?php include("./website/Template/html/footer.html") ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-F4CZG8W26P"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-F4CZG8W26P');
  </script>
</body>
<?php include("./website/Template/html/toHomes/linkoutbody.html") ?>
</html>