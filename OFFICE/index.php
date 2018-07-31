<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <title>Office</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="descrption" content="...">
        <meta name="robots" content="index, follow">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
        <link rel="canonical" href="http://localhost/index.html">
    </head>
    <body>
        <header id="cabecalho">
            <div class="titulo">
                <h1>Grupo<span>Adv</span></h1>
            </div>
            <!--MENU VERSÃO DESKTOP-->
            <div class="menu-desktop">
                <nav>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="sobre.html">sobre</a></li>
                        <li><a href="services.html">serviços</a></li>
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="contatos.html">contatos</a></li>
                    </ul>
                </nav>
            </div>
            <!--MENU VERSÃO MOBILE E TABLET-->
            <span class="abrir" onclick="openNav()">&#9776;</span>
            <div id="menu-mobile" class="menu-mobile">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <nav>
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="sobre.html">sobre</a></li>
                        <li><a href="services.html">serviços</a></li>
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="contatos.html">contatos</a></li>
                    </ul>
                </nav>
                <script>
                    function openNav() {
                        document.getElementById("menu-mobile").style.width = "100%";
                    }
                    function closeNav() {
                        document.getElementById("menu-mobile").style.width = "0";
                    }
                </script>
            </div>
        </header>
        <!--CONFIGURAÇÃO BACKGROUND-->
        <section id="background">
            <h2>Advogados</h2>
            <p>Vaidade é meu pecado predileto!</p>
            <a href="#">Nossos Serviços</a>
        </section>
        <!--CONFIGURAÇÃO DE ABOUT-->
        <section id="sobre">
            <h2>About</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi sequi quisquam natus laudantium consequatur fuga deleniti maiores tenetur nulla tempore libero quidem aspernatur sed modi veniam, distinctio culpa corrupti nemo?</p>
            <a href="#">Saiba Mais</a>
        </section>
        <!--CONFIGURAÇÃO DE SERVIÇOS-->
        <main id="services">
            <div class="container">
                <div class="caixa">
                    <div>
                        <h3>Serviço 1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                    <div>
                        <h3>Serviço 2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                    <div>
                        <h3>Serviço 3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </div>
                <div class="caixa">
                    <div>
                        <h3>Serviço 4</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                    <div>
                        <h3>Serviço 5</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                    <div>
                        <h3>Serviço 6</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="#">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </main>
        <!--CONFIGURAÇÃO DOS NOSSOS CLIENTES-->
        <section id="clientes">
            <h3>Nossos Clientes</h3>
            <ul>
                <li><a href="#">Cliente 1</a></li>
                <li><a href="#">Cliente 2</a></li>
                <li><a href="#">Cliente 3</a></li>
                <li><a href="#">Cliente 4</a></li>
                <li><a href="#">Cliente 5</a></li>
                <li><a href="#">Cliente 6</a></li>
            </ul>
        </section>
        <!--FORMULÁRIO PARA CONTATOS-->
        <section id="contatos">
            <div class="ctn">
                <fieldset id="formulario">
                    <h3>Contatos</h3>
                    <form method="post" action="#">
                        <input type="text" name="nome" id="name" placeholder="Digite seu nome">
                        <input type="email" name="email" id="email" placeholder="Digite seu email">
                        <textarea name="texto" id="txt" cols="30" rows="10" placeholder="Deixe sua mensagem"></textarea>
                        <input class="btn" type="button" value="enviar">
                    </form>
                </fieldset>
                <!--CONFIGURAÇÃO ENDEREÇO-->
                <div class="endereco">
                    <h4>Endereço</h4>
                    <p>Rua Mandaguari n°1841<br>Imperatriz-MA</p>
                    <br>
                    <h4>Telefone e E-mail</h4>
                    <p>(99) 9658-9856 / (98) 5698-9658<br>rsanttos89@outlook.com</p>
                </div>
            </div>
        </section>
        <!--CONFIGURAÇÃO DO RODAPÉ-->
        <footer id="rodape">
            <span>Office 2018&copy;<?php echo date('Y')?> | @rsanttos89</span>
        </footer>
    </body>
</html>