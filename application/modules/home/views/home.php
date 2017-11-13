<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Interfaces Responsivas</title>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
    <script src="<?php echo base_url() . 'application/modules/home/assets/js/home.js'; ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url() . 'application/modules/home/assets/css/home.css'; ?>">
</head>
<body>


<div id="wrapper">
    <div class="overlay"></div>
    <header id="header">
        <div id="open-menu" class="hamburger hamburger--spin">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo base_url() . '#inicio'; ?>">Início</a></li>
                <li><a href="<?php echo base_url() . '#design-responsivo'; ?>">Design Responsivo</a></li>
                <li><a href="<?php echo base_url() . '#como-o-design-e-visto-pelos-browsers'; ?>">Como o Design é Visto Pelos Browsers</a></li>
                <li><a href="<?php echo base_url() . '#media-queries'; ?>">Media Queries</a></li>
                <li><a href="<?php echo base_url() . '#layout-fluido-e-layout-fixo'; ?>">Layout Fluido e Layout Fixo</a></li>
                <li><a href="<?php echo base_url() . '#design-responsivo-X-adaptativo'; ?>">Design Responsivo X Adaptativo</a></li>
                <li><a href="<?php echo base_url() . '#unidades-estaticas-x-unidades-relativas'; ?>">Unidades Estáticas x Unidades Relativas</a></li>
                <li><a href="<?php echo base_url() . '#frameworks-que-auxiliam-no-desenvolvimento-responsivo'; ?>">Frameworks Que Auxiliam no Desenvolvimento Responsivo</a></li>
            </ul>
        </nav>
    </header>

    <section id="content">
        <div class="common-limiter">
            <h1 class="main-title" id="design-responsivo">Interfaces Responsivas</h1>
            <div class="common-text">
                Design Responsivo é uma técnica de estruturação HTML e CSS, em que o site se adapta ao browser do usuário sem precisar definir diversas folhas de estilos para cada resolução.
                Surge como uma evolução lógica do design de sites. Antes a maior parte da internet era acessada por resoluções e navegadores muito semelhantes. Costumava-se fazer sites que funcionavam em Internet Explorer com resolução máxima de 1024x768 pixels. Hoje em dia, pessoas acessam de TVs que acessam a internet, celulares com telas de 2’’ até 5’’, tablets de 6’’ até 14’’ polegadas (ou até mais), computadores que tem telas de notebook, netbook e até iMacs.
                <br>
                <br>

                Alguns dados coletados de alguns sites mostram que as pessoas acessam sites de diferentes tipos de navegadores e dispositivos. Estes dados mostram que um site pode ser visto de várias formas e em diversos contextos, por isso os sites devem estar preparados.
                <a href="<?php echo base_url() . 'img/img3.png'; ?>" class="magnific">
                    <img src="<?php echo base_url() . 'img/img3.png'; ?>" alt="Dados coletados de sites já em produção">
                </a>
                <br>
                <br>

                Exemplo de site que não se adapta às telas é a UCS <a href="https://www.ucs.br/site" target="_blank">https://www.ucs.br/site</a>
                <br>
                <a href="<?php echo base_url() . 'img/img1.png'; ?>" class="magnific">
                    <img src="<?php echo base_url() . 'img/img1.png'; ?>" alt="Captura de tela do site da UCS">
                </a>
                <i>Resolução 610x575 pixels</i>
                <br>
                <br>

                Exemplo de site responsivo CNN <a href="http://edition.cnn.com/" target="_blank">http://edition.cnn.com/</a>
                <br>
                <a href="<?php echo base_url() . 'img/img2.png'; ?>" class="magnific">
                    <img src="<?php echo base_url() . 'img/img2.png'; ?>" alt="Captura de tela do site da CNN">
                </a>
                <i>Resolução 610x575 pixels</i>

            </div>

            <h2 class="subtitle" id="como-o-design-e-visto-pelos-browsers">Como o Design é Visto Pelos Browsers</h2>
            <div class="common-text">

            </div>

            <h2 class="subtitle" id="media-queries">Media Queries</h2>
            <div class="common-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem ipsum esse atque, at nobis architecto accusantium, alias mollitia aliquid consequatur totam officiis quis, soluta sequi cumque nesciunt quam dolores!
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem ipsum esse atque, at nobis architecto accusantium, alias mollitia aliquid consequatur totam officiis quis, soluta sequi cumque nesciunt quam dolores!

            </div>

            <h2 class="subtitle" id="layout-fluido-e-layout-fixo">Layout Fluido e Layout Fixo</h2>
            <div class="common-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem ipsum esse atque, at nobis architecto accusantium, alias mollitia aliquid consequatur totam officiis quis, soluta sequi cumque nesciunt quam dolores!
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem ipsum esse atque, at nobis architecto accusantium, alias mollitia aliquid consequatur totam officiis quis, soluta sequi cumque nesciunt quam dolores!
            </div>

            <h2 class="subtitle" id="design-responsivo-X-adaptativo">Design Responsivo X Adaptativo</h2>
            <div class="common-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem ipsum esse atque, at nobis architecto accusantium, alias mollitia aliquid consequatur totam officiis quis, soluta sequi cumque nesciunt quam dolores!
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem ipsum esse atque, at nobis architecto accusantium, alias mollitia aliquid consequatur totam officiis quis, soluta sequi cumque nesciunt quam dolores!
            </div>

            <h2 class="subtitle" id="unidades-estaticas-x-unidades-relativas">Unidades Estáticas x Unidades Relativas</h2>
            <div class="common-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem ipsum esse atque, at nobis architecto accusantium, alias mollitia aliquid consequatur totam officiis quis, soluta sequi cumque nesciunt quam dolores!
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem ipsum esse atque, at nobis architecto accusantium, alias mollitia aliquid consequatur totam officiis quis, soluta sequi cumque nesciunt quam dolores!
            </div>

            <h2 class="subtitle" id="frameworks-que-auxiliam-no-desenvolvimento-responsivo">Frameworks Que Auxiliam no Desenvolvimento Responsivo</h2>
            <div class="common-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem ipsum esse atque, at nobis architecto accusantium, alias mollitia aliquid consequatur totam officiis quis, soluta sequi cumque nesciunt quam dolores!
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos exercitationem ipsum esse atque, at nobis architecto accusantium, alias mollitia aliquid consequatur totam officiis quis, soluta sequi cumque nesciunt quam dolores!
            </div>
        </div>
    </section>
</div>

</body>
</html>