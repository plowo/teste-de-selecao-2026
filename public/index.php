<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARI - Inscrições Online</title>
    
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="src/Hover-master/css/hover.css" rel="stylesheet" media="all">

</head>

<body>

    <!-- Header -->
    <header class="headerof" id="headerof">
        <div class="header-container">
            <div class="logo"><a href="https://aridesa.com.br" target="_blank"><img src="src/img/Logo-branca.png" alt=""></a></div>
            <nav class="nav-container">
                <button class="mobile-menu-toggle" id="mobileToggle">☰</button>
                <ul class="nav-menu" id="navMenu">
                    <li><a href="#hero" class="hvr-underline-from-center"> PÁGINA INICIAL </a></li>
                    <li><a href="#conquistas" class="hvr-underline-from-center"style="padding-left: 5px;"> GRANDES CONQUISTAS </a></li>
                    <li><a href="#inscricoes" class="hvr-underline-from-center"> INSCRIÇÕES </a></li>
                    <li><a href="#entrevista" class="hvr-underline-from-center"> ENTREVISTA </a></li>
                    <li><a href="#boletim" class="hvr-underline-from-center"style="padding-left: 5px;"> BOLETIM INFORMATIVO </a></li>
                    <li><a href="#roteiro" class="hvr-underline-from-center" style="padding-left: 5px;"> ROTEIRO DE ESTUDOS </a></li>
                    <li><a href="#contatos" class="hvr-underline-from-center" style="padding-left: 5px;"> CONTATOS </a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Hero Section -->
    <section class="hero" id="hero">
        <div class="hero-container">
            <div class="hero-content" data-aos="flip-left">
                <div class="badge"><i class="fa-solid fa-graduation-cap"></i>Teste de seleção 2026</div>
                <h1 class="hero-title" data-aos="zoom-in-up">
                    INSCRIÇÕES<br>ON-LINE</h1>
                <p class="hero-subtitle">VOCÊ E SEU FILHO<br>DE OLHO NO FUTURO</p>
                <a href="#inscricoes" class="cta-button hvr-grow-shadow">INSCREVA-SE</a>
            </div>
            <!-- === ALTERAÇÕES NO HTML PARA HOVER DA IMAGEM === -->
            <div class="hero-image" data-aos="flip-up">
                <!-- NOVO: Container wrapper para controlar hover -->
                <div class="image-container">
                    <!-- MODIFICADO: Adicionada classe 'image-default' -->
                    <img class="image-default" src="src/img/FRAME1.png">
                    <!-- NOVO: Segunda imagem para efeito hover -->
                    <img class="image-hover" src="src/img/FRAME2.png" alt="Estado hover da imagem">
                </div>
            </div>
            <!-- === FIM DAS ALTERAÇÕES NO HTML === -->
        </div>
    </section>
    <!-- Grandes Conquistas -->
    <section class="conquistas" id="conquistas" data-aos="zoom-in">

        <div class="fade"></div>

        <div class="conq-container">

            <h1>Grandes Conquistas</h1>

            <div class="des">
                <p>Alunos do Ari de Sá conquistam excelentes resultados tanto no cenário
                    nacional quanto no internacional. <strong>Veja algumas:</strong></p>
            </div>

        </div>
        <div class="carousel-wrapper">
            <button class="carousel-btn left" onclick="prevSlide()">&#10094;</button>

            <div class="carousel-container" id="carousel">
                <a href="https://aridesa.com.br/wp-content/uploads/2025/06/ASA-0036-25-AN-PRIMEIROS-LUGARES-UECE-2025-2-OP-6Colx53cm-V9.pdf"
                    target="_blank" class="carousel-slide">
                    <picture>
                        <source media="(max-width: 768px)" srcset="src/img/carrossel/mobile/mobile-1.png">
                        <img src="src/img/carrossel/web/web-1.png" alt="Banner 1">
                    </picture>
                </a>

                <a href="https://exemplo2.com" target="_blank" class="carousel-slide">
                    <picture>
                        <source media="(max-width: 768px)" srcset="src/img/carrossel/mobile/mobile-2.png">
                        <img src="src/img/carrossel/web/web-2.png" alt="Banner 2">
                    </picture>
                </a>
                <a href="https://exemplo2.com" target="_blank" class="carousel-slide">
                    <picture>
                        <source media="(max-width: 768px)" srcset="src/img/carrossel/mobile/mobile-3.png">
                        <img src="src/img/carrossel/web/web-3.png" alt="Banner 2">
                    </picture>
                </a>
                <a href="https://exemplo2.com" target="_blank" class="carousel-slide">
                    <picture>
                        <source media="(max-width: 768px)" srcset="src/img/carrossel/mobile/mobile-4.png">
                        <img src="src/img/carrossel/web/web-4.png" alt="Banner 2">
                    </picture>
                </a>
            </div>

            <button class="carousel-btn right " onclick="nextSlide()">&#10095;</button>
        </div>
        <div class="btn ">

            <a href="https://servicos.aridesa.com.br/grandesconquistas" target="_blank"
                class="hvr-grow-shadow">
                <p>VER MAIS</p>
            </a>

        </div>


    </section>
    <div class="fadeblue"></div>
    <section class="ins" class="" id="inscricoes">

        <div class="txt">
            <h1>INSCRIÇÕES</h1>
            <h3>----NOVOS ALUNOS-----</h3>
            <p>Selecione abaixo a sede que deseja fazer sua inscrição:</p>
        </div>
        <div class="unidades">
            <div class="card" data-aos="zoom-in-up">
                <span class="tag hvr-grow-shadow">Nova Sede</span>
                <h3>ARI LUCIANO CARNEIRO</h3>
                <div class="texto">
                    <div class="icontxt"><i class="fa-solid fa-graduation-cap"></i>
                        <p> Da educação infantil ao 1º ano do ensino fundamental
                        </p>
                    </div>
                    <div class="icontxt">
                        <i class="fa-solid fa-map-pin"></i>
                        <p> R. Santa Quitéria, 50</p>
                    </div>

                </div>
                <a href="#" class="btn hvr-grow-shadow">Inscreva-se</a>
            </div>

            <div class="card" data-aos="zoom-in-up">
                <h3>ARI ALDEOTA</h3>
                <div class="texto">

                    <div class="icontxt">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <p>Do 2º ano do ensino fundamental ao ensino médio</p>
                    </div>
                    <div class="icontxt">
                        <i class="fa-solid fa-map-pin"></i>
                        <p> Rua Monsenhor Catão, 1655</p>
                    </div>


                </div>

                <a href="#" class="btn hvr-grow-shadow">Inscreva-se</a>
            </div>
            <div class="card" data-aos="zoom-in-up">
                <h3>Ari Washington Soares</h3>
                <div class="texto">
                    <div class="icontxt"><i class="fa-solid fa-graduation-cap"></i>
                        <p> Da Educação Infantil ao Ensino Médio</p>
                    </div>
                    <div class="icontxt"><i class="fa-solid fa-map-pin"></i>
                        <p> Av. Washington Soares, 3737</p>
                    </div>


                </div>
                <a href="#" class="btn hvr-grow-shadow">Inscreva-se</a>
            </div>
            <div class="card" data-aos="zoom-in-up">
                <h3>Ari Washington Soares</h3>
                <h5>(turmas olímpicas)</h5>
                <div class="texto">
                    <div class="icontxt">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <p>Ensino Médio - Turmas Olímpicas</p>
                    </div>
                    <div class="icontxt">
                        <i class="fa-solid fa-map-pin"></i>
                        <p> Av. Washington Soares, 3737</p>
                    </div>


                </div>
                <a href="#" class="btn hvr-grow-shadow">Inscreva-se</a>
            </div>
            <div class="card" data-aos="zoom-in-up">
                <h3>ARI ALDEOTA INFANTIL</h3>
                <div class="texto">
                    <div class="icontxt"><i class="fa-solid fa-graduation-cap"></i>
                    <p> DA EDUCAÇÃO INFANTIL AO 1º ANO DO ENSINO FUNDAMENTAL</p></div>
                    <div class="icontxt"><i class="fa-solid fa-map-pin"></i><p> RUA VICENTE LINHARES, 1470</p></div>
                    
                </div>
                <a href="#" class="btn hvr-grow-shadow">Inscreva-se</a>
            </div>
            <div class="card" data-aos="zoom-in-up">
                <h3>Ari Major Facundo</h3>
                <div class="texto">
                    <div class="icontxt"><i class="fa-solid fa-graduation-cap"></i><p> Do 6º ao 9º Ano do Ensino Fundamental</p></div>
                    <div class="icontxt"><i class="fa-solid fa-map-pin"></i><p> Rua Major Facundo, 980</p></div>
                    
                    
                </div>
                <a href="#" class="btn hvr-grow-shadow">Inscreva-se</a>
            </div>
            <div class="card" data-aos="zoom-in-up">
                <h3>ARI DUQUE DE CAXIAS</h3>
                <div class="texto">
                    <div class="icontxt"><i class="fa-solid fa-graduation-cap"></i><p> Ensino Médio</p></div>
                    <div class="icontxt"><i class="fa-solid fa-map-pin"></i><p> Av. Duque de Caxias, 519</p></div>
                    
                </div>
                <a href="#" class="btn hvr-grow-shadow">Inscreva-se</a>
            </div>
        </div>

    </section>
    <div class="fadeblue1"></div>
    <!-- Boletim Informativo -->
    <section class="boletim-section" id="boletim">

        <div class="header">
            <div>
                <div class="titulo">
                    <h1>BOLETIM INFORMATIVO</h1>
                </div>
                <div class="subtitulo">
                    <p>Confira ou faça o download do nosso boletim informativo</p>
                </div>
                <div class="botao-container">
                    <div class="botao-confira">
                        <button class="hvr-grow-shadow">CLIQUE E CONFIRA</button>
                    </div>
                </div>
            </div>
        </div>



        <iframe allowfullscreen="" allow="clipboard-write" scrolling="no" class="fp-iframe"
            src="https://heyzine.com/flip-book/cfde253da3.html"></iframe>



    </section>
    <!-- Roteiro de Estudos -->
    <div class="fadeblue"></div>
    <section class="roteiro-estudos" id="roteiro">

        <h2>ROTEIRO DE ESTUDOS</h2>
        <h3>-------- TESTE DE SELEÇÃO --------</h3>
        <div class="caminho">

            <div class="card card-1" data-aos="zoom-in-right">
                <p>DO 1º AO 5º ANO<br>DO ENSINO FUNDAMENTAL I</p>
                <button class="hvr-grow-shadow">Clique e Confira</button>
            </div>

            <div class="card card-2" data-aos="zoom-in-left">
                <p>DO 6º AO 9º ANO<br>DO ENSINO FUNDAMENTAL II</p>
                <button class="hvr-grow-shadow">Clique e Confira</button>
            </div>

            <div class="card card-3" data-aos="zoom-in-right">
                <p>DA 1º À 3º ANO<br>DO ENSINO MÉDIO</p>
                <button class="hvr-grow-shadow">Clique e Confira</button>
            </div>

            <div class="card card-4" data-aos="zoom-in-left">
                <p>ITA/IME</p>
                <button class="hvr-grow-shadow">Clique e Confira</button>
            </div>
        </div>
    </section>
    <div class="divisoria"></div>
    <!-- Contatos -->
    <section class="contatos" id="contatos">
        <div data-aos="zoom-in">
            <h1 class="hvr-grow-shadow">Ari Aldeota</h1>
            <p><a href="tel:+558534868405" target="_blank"><i class="fa-solid fa-square-phone"></i> (85) 3486.8405</a>
            </p>
            <p>Rua Monsenhor Catão, 1655</p>
            <p>Aldeota - Fortaleza-CE</p>
        </div>
        <div data-aos="zoom-in">
            <h1 class="hvr-grow-shadow">Ari - Aldeota Infantil</h1>
            <p><a href="tel:+558530448901" target="_blank"><i class="fa-solid fa-square-phone"></i> (85) 3044.8901</a>
            </p>
            <p>Rua Vicente Linhares, 1470</p>
            <p>Aldeota - Fortaleza-CE</p>
        </div>
        <div data-aos="zoom-in">
            <h1 class="hvr-grow-shadow">Ari - Duque de Caxias</h1>
            <p><a href="tel:+558532552909" target="_blank"><i class="fa-solid fa-square-phone"></i> (85) 3255-2909</a>
            </p>
            <p>Av. Duque de Caxias, 519</p>
            <p>Centro - Fortaleza-CE</p>
        </div>
        <div data-aos="zoom-in">
            <h1 class="hvr-grow-shadow">Ari - Major Facundo</h1>
            <p><a href="tel:+558532552962" target="_blank"><i class="fa-solid fa-square-phone"></i> (85) 3255-2962</a>
            </p>
            </p>
            </p>
            <p>Rua Major Facundo, 980</p>
            <p>Centro - Fortaleza-CE</p>
        </div>
        <div data-aos="zoom-in">
            <h1 class="hvr-grow-shadow">Ari - Mário Mamede</h1>
            <p><a href="tel:+558535216040" target="_blank"><i class="fa-solid fa-square-phone"></i> (85) 3521-6040</a>
            </p>
            <p>Rua José Mário Mamede, 200</p>
            <p>Edson Queiroz - Fortaleza-CE</p>
        </div>
        <div data-aos="zoom-in">
            <h1 class="hvr-grow-shadow">Ari - Washington Soares</h1>
            <p><a href="tel:+558534772007" target="_blank"><i class="fa-solid fa-square-phone"></i> (85) 3477-2007</a>
            </p>
            <p>Av. Washington Soares, 3737</p>
            <p>Edson Queiroz - Fortaleza-CE</p>
        </div>
        <div data-aos="zoom-in">
            <h1 class="hvr-grow-shadow">Ari - Luciano Carneiro</h1>
            <p></p>
            <p>R. Santa Quitéria, 50</p>
            <p>Parreão - Fortaleza-CE</p>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer">
        <div class="logo" data-aos="flip-up"><a href="https://aridesa.com.br" target="_blank"><img
                    src="https://aridesa.com.br/wp-content/uploads/elementor/thumbs/logoBraca-nu3ja7j6x022qljnb0o643t29e8jw6upr2pe442v2e.png"
                    alt=""></a></div>
        <div class="social"><a href="https://www.instagram.com/aridesa" target="_blank"><i
                    class="fa-brands fa-instagram fa-2x"></i></a></div>
        <div class="social"><a href="https://www.youtube.com/user/aridesaoficial" target="_blank"><i
                    class="fa-brands fa-youtube fa-2x"></i></a></div>
        <div class="social"><a href="https://www.facebook.com/colegioaridesa" target="_blank"><i
                    class="fa-brands fa-facebook fa-2x"></i></a></div>
        <div class="social"><a
                href="https://api.whatsapp.com/send?phone=5585991563489&text=Ol%C3%A1%20suporte,%20estou%20no%20Site%20do%20Col%C3%A9gio%20Ari%20de%20S%C3%A1%20e%20preciso%20de%20ajuda."
                target="_blank"><i class="fa-brands fa-whatsapp fa-2x"></i></div>
        <div class="linkedin"><a href="www.linkedin.com/company/aridesarh" target="_blank"><i
                    class="fa-brands fa-linkedin fa-2x"></i></a></div>
    </footer>
    <script src="https://kit.fontawesome.com/5e6cc568f2.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="src/js/script.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>