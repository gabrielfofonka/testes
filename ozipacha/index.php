<?php
/**
 * Created by PhpStorm.
 * User: Gabriel
 * Date: 09/09/14
 * Time: 14:57
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Wireframe Ozip Acha</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500,900' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<header>
    <div class="menu">
        <div class="wrap-content">
            <ul>
                <li><a href="#">Página Inicial</a></li>
                <li><a href="#">Empresa</a></li>
                <li><a href="#">Parceiros</a></li>
                <li><a href="#">Contato</a></li>
                <li class="anuncie"><a href="#">Anuncie</a></li>
                <li class="atendimento"><a href="#">Atendimento Online</a></li>
                <li class="numero">(0xx51)30973226</li>
            </ul>
        </div>
    </div>

    <div class="search">
        <div class="wrap-content">
            <h1><a href="index.php" title="ozipahca.com">O ZIP ACHA</a> </h1>
            <form action="#" method="post">

                <fieldset>

                    <label  for="categoria" class="icon-tools">
                        <input class="tipo" type="text" name="categoria" placeholder="Tipo/Estabelecimento"/>
                    </label>

                    <label for="cidade" class="icon-location">
                        <input type="text" name="cidade" placeholder="Cidade"/>
                    </label>

                    <label for="bairro" class="icon-address">
                        <input type="text" name="bairro" placeholder="Bairro"/>
                    </label>

                    <button type="submit" class="icon-search-1"></button>

                </fieldset>

            </form>
        </div>

    </div>
</header>

<section class="wrap-content">
    <div class="banner">
            <h2>Banner</h2>
            <p>1210x300</p>
    </div>

    <aside class="left">
       <?php for($i=0; $i<6; $i++){ ?>
          <div class="anunciante"><h2>Anunciante</h2></div>
       <?php }?>
    </aside>

    <div class="content">
        <ul>Notícias

            <?php for($i=0; $i<5; $i++){ ?>
                <li><span>09/09</span> - Donec ut quam felis. Cras egestas, quam in plac erat dictum, erat mauris inte rdum est nec.</li>
            <?php }?>
        </ul>

        <div class="ads">
            <h2 class="noticias">Últimas Notícias</h2>
            <?php for($i=0; $i<4; $i++){ ?>
                <div class="ad clearfix">
                    <img src="images/ad-photo.png"/>
                    <p>Mario Motos, trabalhamos com oficina e moto peças, serviços de mecânica em geral, freio, suspensão, motores e muito mais, grande estoque de peças e acessórios. Venha conferir! Fone (51) 9833 - 4823, end: Rua João Alfredo Kraemer, nº 611, bairro Roselândia, Novo Hamburgo - RS. <span>Visualizar mapa!</span></p>
                    <h2 class="bottom"><a class="saiba-mais" href="#">Saiba Mais!</a></h2>
                </div>
            <?php }?>
        </div>
    </div>

    <aside class="right">
        <?php for($i=0; $i<6; $i++){ ?>
            <div class="anunciante"><h2>Anunciante</h2></div>
        <?php }?>
    </aside>

    <div class=ad-bottom>
        <ul>
            <li><h2>Anunciante</h2></li>
            <li><h2>Anunciante</h2></li>
            <li><h2>Anunciante</h2></li>
        </ul>
    </div>
</section>

<footer>
    <div class="zip">
        <div class="wrap-content">
                <i class="icon-twitter"></i>
                <i class="icon-facebook"></i>
        </div>
        <h2>Conecte-se com o Zip</h2>
    </div>

    <div class="info">
        <div class="wrap-content">
            <ul><h2>Institucional</h2>
                <li><a href="#"> - Página Inicial</a></li>
                <li>- Quem Somos</li>
                <li>- Termos de Uso</li>
                <li>- Política de Privacidade</li>
                <li>- Trabalhe Conosco</li>
                <li>- Entre em Contato</li>
            </ul>

            <ul><h2>Informações</h2>
                <li><a href="#">- Página Inicial</a></li>
                <li>- Quem Somos</li>
                <li>- Termos de Uso</li>
                <li>- Política de Privacidade</li>
                <li>- Trabalhe Conosco</li>
                <li>- Entre em Contato</li>
            </ul>

            <ul><h2>Contato</h2>
                <li>(51)9894-2322</li>
                <li>(51)9223-8323</li>
                <li>fogaca@ozipacha.com</li>
            </ul>


            <div id="contact">
                <h2>Quero Anunciar!</h2>
                <p>Informe seus dados e entraremos em contato com você.</p>
                <form action="#" method="post">

                    <fieldset>

                        <label for="name"></label>
                        <input type="text" id="name" placeholder="Nome" required="required"/>

                        <label for="telefone"></label>
                        <input type="text" id="name" placeholder="Telefone/Email" required="required"/>

                        <label for="empresa"></label>
                        <input type="text" id="name" placeholder="Empresa" required="required"/>

                        <input class="enviar" type="submit" value="Enviar"/>

                    </fieldset>

                </form>
            </div>
        </div>

    <div class="footer">
        <div class="wrap-content">
                <img src="images/mini-logo.png"/>
                <p>2014 © Senadora Simone Leite. Todos Direitos Reservados. - Desenvolvido pela Agência Digital Interative Studio</p>
        </div>
    </div>




</footer>
</body>
</html>