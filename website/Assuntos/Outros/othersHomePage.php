<!DOCTYPE html>
<html lang="pt-BR">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página inicial da seção de curiosidades do Hidromel. Desde a história da Lua de Mel até os famosos chifres vikings!">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="authoral" content="Angelo Schuler Piletti">
    <meta name="keywords" content="Hidromel, Curiosidades, Fatos, Artigos">
    <link rel="stylesheet" type="text/css" href="/website/Template/css/IndividualCSS/backGroundHomes/others.css">

    <?php include("./website/Template/html/toHomes/linkhead.html") ?>


    <title>Início | Curiosidade do Hidromel</title>
</head>
<body>

    <?php include("./website/Template/html/header.html") ?>
    <?php include("./website/Template/html/menuSlider.html")?>


    <main id="mainer">
        <section id="articler">
            <div class="section_title">
                <h1>Curiosidades <specialh1>do Hidromel</specialh1></h1>
                <p>Você está na página inicial da seção das Curiosidade do Hidromel</p>
            </div>

            <section class="articles_card_container">
                <div class="article_card" id="card1">
                    <a href="/Início/Curiosidades/OrigemDaLuaDeMel">
                        <h3>Origem da Lua de Mel</h3>
                        <span>Sabe a famosa lua de mel? Ela foi quase uma criação viking!</span>
                    </a>
                </div>

                <div class="article_card" id="card2">
                    <a href="/Início/Curiosidades/HidromelAbelhaSemFerrao">
                        <h3>Hidromel de Abelha sem Ferrão</h3>
                        <span>Já ouviu falar nas ASFs? E no seu hidromel?</span>
                    </a>
                </div>

                <div class="article_card" id="card3">
                    <a href="/Início/Curiosidades/AbelhaJatai">
                        <h3>Abelha Jataí</h3>
                        <span>Sabia que algumas abelhas brasileiras não tem ferrão?</span>
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