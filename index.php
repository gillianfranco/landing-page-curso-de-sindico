<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/favicon/favicon-landingPage.png" type="image/x-icon">

    <style>
        :root{
            --dourado: #edad00;
            --azulEscuro: #171f2a;
            --azulCinzaEscuro: #353e4c;
            --azulCinzaClaro: #475262;
            --verde: #238636;
            --verdeClaro: #2CA142;
        }
        .poppins-regular{
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
        .poppins-bold{
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
        .montserrat-regular{
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-style: normal;
        }
        .montserrat-bold{
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        *{
            box-sizing: border-box;
        }
        body{
            font-size: 20px;
            margin: 0;
        }
        a{
            text-decoration: none;
        }
        h1{
            font-size: 1.8em;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
        h2{
            font-size: 1.5em;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
        h3{
            font-size: 1.2em;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }
        p{
            font-size: 1em;
            font-family: "Montserrat", sans-serif;
            font-weight: 500;
            font-style: normal;
        }
        #mainLp{
            width: 100%;
            min-height: 100vh;
            background-color: var(--azulEscuro);
        }

        /* Header */
        #navBar{
            width: 100%;
            position: absolute;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        #navBar ul{
            display: flex;
            flex-direction: row;
        }
        #navBar ul li{
            margin-right: 2vw;
            list-style: none;
            transition: 0.2s;
        }
        #navBar ul li a{
            color: white;
        }
        #navBar ul li:hover{
            scale: 104%;
            transition: 0.2s;
        }
        #logoHeader{
            width: 130px;
            margin-left: 2vw;
            transition: 0.2s;
        }
        #logoHeader:hover{
            scale: 102%;
            transition: 0.2s;
        }
        #matricularButton{
            background-color: var(--verde);
            padding: 0.4em;
            border-radius: .4em;
            box-shadow: 0px 1px 6px 2.5px rgba(0, 0, 0, 0.2);
        }
        @keyframes pulsamento{
            0% {transform: scale(1);}
            50% {transform: scale(1.05);}
            100% {transform: scale(1);}
        }
        .pulsamento{
            animation: pulsamento 2s infinite;
        }

        /* Section 1 */
            .section-1{
                height: 100vh;
                background: var(--azulEscuro);
                background: linear-gradient(180deg, var(--azulEscuro) 0%, var(--azulCinzaEscuro) 70%, var(--azulCinzaClaro) 100%);
                padding: 1em 0em;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .section-1 h1{
                font-size: 2em;
                text-align: center;
                color: white;
            }
            .section-1 h1 span{
                color: var(--dourado);
            }
            .section-1 div{
                width: 100vh;
            }
            .section-1 div video{
                width: 100%;
                border-radius: .4em;
            }
            .section-1 a{
                font-size: 1.2em;
                padding: .8em;
                border-radius: .4em;
                color: white;
                width: 100vh;
                text-align: center;
                background-color: var(--verde);
                box-shadow: 0px 1px 6px 2.5px rgba(0, 0, 0, 0.2);
                transition: .5s;
            }
            .section-1 a:hover{
                background-color: var(--verdeClaro);
            }

        /* Sessão 2 */
            .section-2{
                padding: 0em 2em;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                background-color: var(--dourado);
            }
            .section-2 div{
                width: 50%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 0em 1em;
            }
            .section-2 div h1{
                color: var(--azulEscuro);
                margin-bottom: 0;
            }
            .section-2 div p{
                color: white;
                text-align: justify;
            }
            #imgProfessoresJuntos{
                width: 100%;
            }

        /* Sessão 3 */
            .section-3{
                padding: 2em;
                background-color: var(--dourado);
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .section-3 h1{
                color: var(--azulEscuro);
                margin-bottom: 0;
            }
            .section-3 ul{
                padding: 0em 4em;
            }
            .section-3 ul li{
                color: white;
                font-size: 1em;
                padding-bottom: 1em;
            }
            .section-3 ul li span{
                font-weight: 700;
                text-decoration: underline;
            }
            .section-3 a{
                font-size: 1.2em;
                padding: .8em;
                border-radius: .4em;
                color: white;
                width: 100vh;
                text-align: center;
                background-color: var(--verde);
                box-shadow: 0px 1px 6px 2.5px rgba(0, 0, 0, 0.2);
                transition: .5s;
            }
            .section-3 a:hover{
                background-color: var(--verdeClaro);
            }

        /* Sessão 4 */
            .section-4{
                padding: 2em 1em;
                background: var(--dourado);
                background: linear-gradient(180deg, var(--dourado) 0%, white 30%);
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .section-4 div{
                width: 50%;
                padding: 0em 1em;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .section-4 div h1{
                text-align: center;
                margin-bottom: 0;
            }
            .section-4 div p{
                text-align: justify;
                color: var(--azulEscuro);
            }
            .section-4 div video{
                width: 100%;
                border-radius: .4em;
            }

        /* Sessão 5 */
            .section-5{
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: white;
                width: 100%;
                padding: 0em 0em 1em 0em;
            }
            .section-5 h2{
                color: var(--dourado);
            }
            .section-5 h2 span{
                text-decoration: underline;
            }
            .section-5 > div{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
            }
            .container__professor{
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                padding: 0em 1em;
                width: 100%;
            }
            .container__professor div{
                width: 50%;
                height: 60vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 0em 4em;

            }
            .container__professor div > img{
                height: 100%;
            }
            .container__professor div h3{
                color: var(--dourado);
                margin-bottom: 0;
            }
            .container__professor div p{
                text-align: justify;
                margin-bottom: 0;
            }
            .container__professor span{
                font-weight: bold;
            }
            .container__professor ul{
                list-style: none;
            }
            .container__professor li a img{
                width: 50px;
                transition: .2s;
            }
            .container__professor li a img:hover{
                scale: 101%;
            }
        
        /* Sessão 6 */
            .section-6{
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: var(--azulEscuro);
                width: 100%;
                padding: 2em 0em;
                box-shadow: 0px 0px 14px 7px rgba(0, 0, 0, 0.5);
            }
            .section-6 h2{
                color: white;
                text-align: center;
                text-decoration: underline;
            }
            .section-6 h2 span{
                color: var(--verdeClaro)
            }
            .section-6 a{
                font-size: 1.2em;
                padding: .8em;
                border-radius: .4em;
                color: white;
                width: 100vh;
                text-align: center;
                background-color: var(--verde);
                box-shadow: 0px 1px 6px 2.5px rgba(0, 0, 0, 0.2);
                transition: .5s;
            }
            .section-6 a:hover{
                background-color: var(--verdeClaro);
            }
            #documentos-bonus{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                padding: 0em 15em 1em 15em;
            }
            #documentos-bonus > div{
                width: 100%;
                display: flex;
                flex-direction: row;
                justify-content: space-evenly;
                align-items: center;
                padding-bottom: 1em;
            }
            #documentos-bonus div img{
                width: 30%;
                transition: .5s;
            }
            #documentos-bonus div img:hover{
                scale: 101%;
            }

        /* Sessão 7 */
            .section-7{
                background-color: white;
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                padding: 1em 4em;
            }
            .section-7 h1{
                margin-bottom: 0em;
                color: var(--dourado);
            }
            .section-7 p{
                margin-bottom: 0em;
                text-align: justify;
            }
            .section-7 h3{
                color: var(--dourado);
                margin-bottom: .5em;
                text-align: center;
            }
            .section-7 div{
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
                width: 100%;
                padding: 0em 14em;
            }
            .section-7 div img{
                width: 30%;
                transition: .5s;
                margin: .5em;
            }
            .section-7 div img:hover{
                scale: 102%;
                box-shadow: 3px 3px 8px 3px rgba(0, 0, 0, 0.5);
            }

        /* Sessão 8 */
            .section-8{
                background-image: linear-gradient(180deg, white 0%, var(--dourado) 30%);
                margin-top: -8em;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
                padding: 9em 4em 1em 4em;
            }
            .section-8 h1{
                margin-bottom: 0;
            }
            .section-8 p{
                color: white;
                text-align: justify;
            }
            .section-8 p span{
                font-weight: bold;
            }
            .infoModulo{
                display: flex;
                flex-direction: row;
                align-items: center;
                width: 100%;
                padding: 0em 10em;
                transition: 1s;
                margin-bottom: .5em;
            }
            .infoModulo summary{
                color: white;
                padding: 1em;
                background-color: var(--azulEscuro);
                width: 100%;
                transition: .3s;
            }
            .infoModulo summary:hover{
                background-color: var(--azulCinzaEscuro);
                cursor: pointer;
            }
            .infoModulo ul{
                margin-top: .5em;
            }
            .section-8 a{
                font-size: 1.2em;
                padding: .8em;
                border-radius: .4em;
                color: white;
                width: 100vh;
                text-align: center;
                background-color: var(--verde);
                box-shadow: 0px 1px 6px 2.5px rgba(0, 0, 0, 0.2);
                margin-top: 1em;
                transition: .5s;
            }
            .section-8 a:hover{
                background-color: var(--verdeClaro);
            }

        /* Sessão 9 */
            .section-9{
                width: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: var(--dourado);
            }
            .section-9 h1{
                margin-bottom: 0;
                text-align: center;
            }
            .section-9 p{
                margin-top: 0;
            }
            .section-9 div{
                width: 100%;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            #container__videosYoutube iframe{
                width: 560px;
                height: 315px;
                border-radius: .4em;
                margin: .5em;
            }
            .section-9 h3{
                margin-bottom: 0;
            }
            #redes-sociais{
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            #redes-sociais a img{
                margin-left: .5em;
                transition: .5s;
                margin-bottom: 1em;
            }
            #redes-sociais a:hover img{
                scale: 110%;
            }

        /* Sessão 10 */
            .section-10{
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                padding: 0em 16em 1em 16em;

            }
            .section-10 h1{
                color: var(--dourado);
                text-align: center;
            }
            .container__depoimentos{
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                margin-bottom: .5em;
            }
            .depoimento{
                background-color: white;
                border-radius: .4em;
                width: 48%;
                padding: 1em;
                transition: .5s;
            }
            .depoimento:hover{
                scale: 101%;
            }
        
        /* Sessão 11 */
            .section-11{
                background-color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                padding: 0em 16em 1em 16em;
            }
            .section-11 h1{
                color: var(--dourado);
            }
            .oferta{
                width: 60%;
                background-color: var(--azulEscuro);
                padding: 1em;
                border-radius: .4em;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            .oferta h1{
                margin: .5em 0em;
                text-align: center;
                color: var(--dourado);
            }
            .preco{
                width: 100%;
                background-color: var(--dourado);
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                border-radius: .4em;
            }
            .preco p.montserrat-bold{
                font-size: 1.8em;
                margin: .5em 0em 0em 0em;
            }
            .preco p{
                margin-top: 0em;
            }
            table{
                width: 90%;
                margin-top: 1em;
            }
            table p{
                color: white;
            }
            .oferta a{
                font-size: 1.2em;
                padding: .8em;
                border-radius: .4em;
                color: white;
                text-align: center;
                background-color: var(--verde);
                box-shadow: 0px 1px 6px 2.5px rgba(0, 0, 0, 0.2);
                margin-top: 1em;
                transition: .5s;
                width: 95%;
            }
            .oferta a:hover{
                background-color: var(--verdeClaro);
            }
        
        /* Sessão 12 */
        

    </style>
    <title>Curso de Síndico Profissional | Ômega Educa</title>
</head>
<body>
    <main id="mainLp">
       <header>
            <nav id="navBar">
                <div>
                    <a href="" style="display: flex;">
                        <img id="logoHeader" src="assets/images/logomarcas/LogoOmega.png" alt="Logo Ômega Educa">
                    </a>
                </div>
                <ul>
                    <li class="poppins-regular">
                        <a href="">Login</a>
                    </li>
                    <li class="poppins-regular">
                        <a href="" id="matricularButton">Matricule-se</a>
                    </li>
                </ul>
            </nav>
       </header>
       <section>
            <div class="section-1">
                <h1>SAIBA COMO AUMENTAR SUA RENDA</br>SENDO UM <span>SÍNDICO DE SUCESSO</span></h1>
                <div>
                    <video poster="assets/images/capas/capa-video-above-the-fold.png" controls>
                        <source src="assets/videos/sobre-curso-de-sindico.mp4" type="video/mp4">
                    </video>
                </div>
                <a href="" class="poppins-bold">QUERO SER UM SÍNDICO DE SUCESSO</a>
            </div>
            <div class="section-2">
                <div>
                    <img id="imgProfessoresJuntos" src="assets/images/fotos/professores-juntos.png" alt="Foto dos Professores">
                </div>
                <div>
                    <h1>Quem é a Ômega Educa?</h1>
                    <p>A Ômega Administradora de Condomínios, com vasta experiência em administração condominial e síndico profissional, deu origem à Ômega Educa. Este projeto tem como objetivo ajudar e capacitar indivíduos que almejam se especializar na profissão de síndico. Destina-se tanto a aprimorar os conhecimentos daqueles que já exercem a função de síndico, mas não de forma profissional, quanto a oferecer uma oportunidade de renda extra para interessados na área.</p>
                </div>
            </div>
            <div class="section-3">
                <h1>Por que ser um Síndico Profissional?</h1>
                <ul class="montserrat-regular">
                    <li>Ser um síndico profissional é uma excelente escolha para quem busca uma <span>fonte de renda extra</span>, pois permite <span>conciliar com o seu trabalho atual</span>, inclusive oferecendo a possibilidade de <span>trabalhar remotamente</span>.</li>
                    <li>Além disso, a carreira de síndico não precisa ser limitada a uma fonte de renda secundária. Você pode <span>ser síndico de vários condomínios simultaneamente</span>, criando um potencial de ganhos diretamente proporcional à quantidade de condomínios que você gere.</li>
                    <li><span>A demanda por síndicos é constantemente alta</span>, por conta do aumento da quantidade de condomínios, todos necessitando obrigatoriamente de um síndico.</li>
                    <li>Ser um síndico profissional não apenas <span>eleva sua credibilidade</span>, mas também oferece uma <span>vantagem significativa nas eleições condominiais</span> em comparação aos síndicos que <span>não são profissionais</span>.</li>
                    <li><span>Você não precisa necessariamente de uma formação acadêmica</span> para ser síndico profissional.</li>
                </ul>
                <a href="" class="poppins-bold">QUERO SER UM SÍNDICO PROFISSIONAL</a>
            </div>
            <div class="section-4">
                <div>
                    <h1>Por que você deve</br>escolher nosso curso?</h1>
                    <p>Nosso curso de síndico profissional tem como objetivo te capacitar para enfrentar e resolver todos os desafios que possam surgir na gestão condominial, assegurando as melhores soluções possíveis.</p>
                </div>
                <div>
                    <video poster="assets/images/capas/beneficios-do-curso.png" controls>
                        <source src="assets/videos/beneficios-do-curso-de-sindico.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="section-5">
                <h2>Nossos professores são <span>especialistas e</br>experientes</span> em suas respectivas áreas</h1>
                <div>
                    <div class="container__professor">
                        <div>
                            <img src="assets/images/fotos/nayne.png" alt="Foto da Professora Nayne">
                        </div>
                        <div>
                            <h3>Nayne Cipriano</h3>
                            <p><span>Responsável pelo módulo de 'Apresentação da Profissão de Síndico',</span> Nayne é bacharel em Ciências Contábeis com mais de 6 anos de experiência. Ela atua como síndica profissional e administradora de condomínios na Ômega Administradora, reconhecida como uma das principais administradoras de condomínios em Uberlândia-MG.</p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="https://www.instagram.com/nayne.cipriano/"><img class="logo-instagram" src="assets/images/icones/icons8-instagram-48.png" alt="Ícone Instagram"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="container__professor">
                        <div>
                            <img src="assets/images/fotos/pollyanna.png" alt="Foto da Professora Pollyanna">
                        </div>
                        <div>
                            <h3>Pollyanna Proietti</h3>
                            <p><span>Ministrando o módulo 'Gestão de Prestadores de Serviços',</span> Pollyanna também é bacharel em Ciências Contábeis e traz mais de 17 anos de experiência como síndica profissional e administradora de condomínios.</p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="https://www.instagram.com/pollyannaproietti/"><img class="logo-instagram" src="assets/images/icones/icons8-instagram-48.png" alt="Ícone Instagram"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="container__professor">
                        <div>
                            <img src="assets/images/fotos/eliane.png" alt="Foto da Professora Eliane">
                        </div>
                        <div>
                            <h3>Eliane Martins</h3>
                            <p>Eliane <span>liderará o módulo 'Gestão de Pessoas'.</span> Com formações em Ciências Exatas, Ciências Contábeis e Direito, ela tem uma vasta experiência de mais de 29 anos na área contábil.</p>
                        </div>
                    </div>
                    <div class="container__professor">
                        <div>
                            <img src="assets/images/fotos/bruno.png" alt="Foto do Professor Bruno">
                        </div>
                        <div>
                            <h3>Bruno Carvalho</h3>
                            <p><span>Encarregado dos módulos 'Gestão Financeira' e 'Estratégias Para Captação de Clientes',</span> Bruno possui uma sólida formação em Ciências Contábeis, Direito do Trabalho e Direito Previdenciário, além de um MBA em Contabilidade e Direito Tributário. Ele tem 9 anos de experiência como síndico e administrador de condomínios.</p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="https://www.instagram.com/brunopositivo/"><img class="logo-instagram" src="assets/images/icones/icons8-instagram-48.png" alt="Ícone Instagram"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="container__professor">
                        <div>
                            <img src="assets/images/fotos/clecio.png" alt="Foto do Professor Clécio">
                        </div>
                        <div>
                            <h3>Clécio Nunes</h3>
                            <p>Especialista que <span>irá conduzir o módulo 'Jurídico',</span> Clécio é bacharel em Direito com Pós-Graduação em Direito do Consumidor. Ele possui 18 anos de experiência no setor imobiliário, atuando como administrador de condomínios e síndico profissional.</p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="https://www.instagram.com/clecio_souza_nunes/"><img class="logo-instagram" src="assets/images/icones/icons8-instagram-48.png" alt="Ícone Instagram"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-6">
                <h2>Compre o nosso curso e tenha uma <span>documentação<br/>gratuita</span> para a gestão condominial</h2>
                <div id="documentos-bonus">
                    <div>
                        <img src="assets/images/documentacao/previsao.png" alt="Foto representativa de uma previsão orçamentária">
                        <img src="assets/images/documentacao/prestacao.png" alt="Foto de uma prestação de contas">
                        <img src="assets/images/documentacao/admissao.png" alt="Foto representativa de uma entrevista de emprego">
                    </div>
                    <div>
                        <img src="assets/images/documentacao/epi.png" alt="Foto de um conjunto de equipamentos de proteção">
                        <img src="assets/images/documentacao/exames.png" alt="Foto representativa de um exame médico">
                        <img src="assets/images/documentacao/unidade.png" alt="Foto do exterior de um condomínio">
                    </div>
                </div>
                <a href="" class="poppins-bold">CLIQUE AQUI PARA COMPRAR AGORA</a>
            </div>
            <div class="section-7">
                <h1 class="pulsamento">TRABALHE POR CONTA PRÓPRIA</h1>
                <p>Ao concluir este curso, além de receber seu certificado, você estará capacitado para gerenciar prestadores de serviços, liderar equipes, administrar as finanças do condomínio, resolver questões jurídicas e atrair clientes de forma eficiente.</p>
                <h3>Você dominará habilidades essenciais para um síndico profissional, incluindo:</h3>
                <div>
                    <img src="assets/images/habilidades/gestao-de-manutencoes.png" alt="Imagem representativa de gestão de manutenções">
                    <img src="assets/images/habilidades/recrutamento-de-funcionarios.png" alt="Imagem representativa de recrutamento de funcionários">
                    <img src="assets/images/habilidades/seguranca-e-saude-dos-trabalhadores.png" alt="Imagem representativa de segurança e saúde dos trabalhadores">
                    <img src="assets/images/habilidades/previsao-orcamentaria.png" alt="Imagem representativa de previsão orçamentária">
                </div>
                <div>
                    <img src="assets/images/habilidades/prestacao-de-contas.png" alt="Imagem representativa de prestação de contas">
                    <img src="assets/images/habilidades/contratos-de-trabalho.png" alt="Imagem representativa de contratos de trabalho">
                    <img src="assets/images/habilidades/conducao-de-assembleia.png" alt="Imagem representativa de condução de assembleia">
                    <img src="assets/images/habilidades/analise-de-convencao-de-condominios.png" alt="Imagem representativa de análise de convenção de condomínios">
                </div>
            </div>
            <div class="section-8">
                <h1>Qual a dinâmica das aulas?</h1>
                <p>O curso é oferecido por meio de <span>videoaulas online</span>, permitindo que você assista e revise o conteúdo em qualquer lugar, a qualquer momento, e quantas vezes for necessário. <span>Este curso possui exercícios</span> para você colocar em prática seus conhecimentos teóricos. Você tem a liberdade de realizá-los e revisá-los quantas vezes considerar necessário.</p>
                <h3>Ele está organizado em seis módulos estratégicos:</h3>
                <details class="infoModulo">
                    <summary class="poppins-bold">Módulo 1 - Apresentação da Profissão de Síndico</summary>
                    <ul class="montserrat-regular">
                        <li>Aula 1 - Noções Básicas da Profissão de Síndico</li>
                        <li>Aula 2 - O que é Necessário Para ser Síndico</li>
                        <li>Aula 3 - Funções do Síndico</li>
                        <li>Exercícios do Módulo 1</li>
                    </ul>
                </details>
                <details class="infoModulo">
                    <summary class="poppins-bold">Módulo 2 - Gestão de Prestadores de Serviços</summary>
                    <ul class="montserrat-regular">
                        <li>Aula 1 - Importância da Administradora</li>
                        <li>Aula 2 - Alinhamento com Prestadores de Serviços</li>
                        <li>Aula 3 - Contratos e Manuntenções</li>
                        <li>Exercícios do Módulo 2</li>
                    </ul>
                </details>
                <details class="infoModulo">
                    <summary class="poppins-bold">Módulo 3 - Gestão de Pessoas</summary>
                    <ul class="montserrat-regular">
                        <li>Aula 1 - Recrutamento e Contrato</li>
                        <li>Aula 2 - Segurança, Saúde, Remuneração, Férias e Faltas Justificadas</li>
                        <li>Aula 3 - Guarda de Documentos, Pagamentos, Normas e Procedimentos</li>
                        <li>Exercícios do Módulo 3</li>
                    </ul>
                </details>
                <details class="infoModulo">
                    <summary class="poppins-bold">Módulo 4 - Gestão Financeira</summary>
                    <ul class="montserrat-regular">
                        <li>Aula 1 - Receita do Condomínio e Controle de Recebimentos</li>
                        <li>Aula 2 - Despesas e Controle de Pagamentos</li>
                        <li>Aula 3 - Previsão Orçamentária e Prestação de Contas</li>
                        <li>Exercícios do Módulo 4</li>
                    </ul>
                </details>
                <details class="infoModulo">
                    <summary class="poppins-bold">Módulo 5 - Jurídico</summary>
                    <ul class="montserrat-regular">
                        <li>Aula 1 - Assembleia e Edital</li>
                        <li>Aula 2 - Realização e Ata de Assembleia</li>
                        <li>Aula 3 - Convenção de Condomínio e Outros</li>
                        <li>Exercícios do Módulo 5</li>
                    </ul>
                </details>
                <details class="infoModulo">
                    <summary class="poppins-bold">Módulo 6 - Estratégias Para Captação de Clientes</summary>
                    <ul class="montserrat-regular">
                        <li>Aula 1 - Métodos de Captação de Clientes</li>
                        <li>Aula 2 - Apresentação em Assembleia de Eleição de Síndico</li>
                        <li>Exercícios do Módulo 6</li>
                    </ul>
                </details>
                <a href="" class="poppins-bold">QUERO TER ACESSO A ESSES CONTEÚDOS</a>
            </div>
            <div class="section-9">
                <h1>Complemente seu conhecimento<br/>com o nosso Podcast</h1>
                <p>Confira nossos destaques</p>
                <div id="container__videosYoutube">
                    <iframe src="https://www.youtube.com/embed/4aX_zMV6IhI?si=aD7k52JJfuqKx1Dq" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe src="https://www.youtube.com/embed/9AIQkdITAbg?si=GXasJXjW0qQOEDqp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div id="container__videosYoutube">
                    <iframe src="https://www.youtube.com/embed/KB8zrvR-RUc?si=V5SK5H8gwf5DACV3" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe src="https://www.youtube.com/embed/7wtoMNR0OsQ?si=AjFa0oYWzu5C7HkO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <h3>Acesse nossas redes sociais:</h3>
                <div id="redes-sociais">
                    <a href=""><img src="assets/images/icones/icons8-instagram-48.png" alt="Link do perfil da Ômega Educa no Instagram" style="width: 38px;"></a>
                    <a href=""><img src="assets/images/icones/icons8-tiktok-48.png" alt="Link do perfil da Ômega Educa no TikTok"></a>
                    <a href=""><img src="assets/images/icones/icons8-youtube-48.png" alt="Link do canal da Ômega Educa no Youtube"></a>
                    <a href=""><img src="assets/images/icones/icons8-spotify-48.png" alt="Link do perfil da Ômega Educa no Spotify"></a>
                    <a href=""><img src="assets/images/icones/icons8-facebook-48.png" alt="Link da página da Ômega Educa no Facebook"></a>
                </div>
            </div>
            <div class="section-10">
                <h1>Confira os depoimentos das pessoas</br>que já concluíram nosso curso</h1>
                <div>
                    <div class="container__depoimentos">
                        <div class="depoimento">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum! Doloribus, maxime molestiae laudantium facere cumque fuga, accusantium optio doloremque repellat nemo fugiat enim laboriosam veniam asperiores aspernatur cupiditate quos!</p>
                            <div>
                                <img src="" alt="">
                                <p></p>
                            </div>
                        </div>
                        <div class="depoimento">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum! Doloribus, maxime molestiae laudantium facere cumque fuga, accusantium optio doloremque repellat nemo fugiat enim laboriosam veniam asperiores aspernatur cupiditate quos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ipsam explicabo id cum reprehenderit asperiores harum. Accusamus minima ut pariatur, soluta iure tempore, distinctio, impedit ipsa recusandae praesentium error cupiditate!</p>
                            <div>
                                <img src="" alt="">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="container__depoimentos">
                        <div class="depoimento">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum! Doloribus, maxime molestiae laudantium facere cumque fuga, accusantium optio doloremque repellat nemo fugiat enim laboriosam veniam asperiores aspernatur cupiditate quos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, alias optio laborum libero repudiandae assumenda suscipit quaerat ab inventore, quo possimus veritatis? Amet ratione libero dicta alias iste nemo explicabo.</p>
                            <div>
                                <img src="" alt="">
                                <p></p>
                            </div>
                        </div>
                        <div class="depoimento">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum! Doloribus, maxime molestiae laudantium facere cumque fuga, accusantium optio doloremque repellat nemo fugiat enim laboriosam veniam asperiores aspernatur cupiditate quos!</p>
                            <div>
                                <img src="" alt="">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="container__depoimentos">
                        <div class="depoimento">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum! Doloribus, maxime molestiae laudantium facere cumque fuga, accusantium optio doloremque repellat nemo fugiat enim laboriosam veniam asperiores aspernatur cupiditate quos!</p>
                            <div>
                                <img src="" alt="">
                                <p></p>
                            </div>
                        </div>
                        <div class="depoimento">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum! Doloribus, maxime molestiae laudantium facere cumque fuga, accusantium optio doloremque repellat nemo fugiat enim laboriosam veniam asperiores aspernatur cupiditate quos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione pariatur in nesciunt? Nemo architecto quidem suscipit eius officia! Eius expedita culpa harum sint doloremque nobis esse qui deserunt quia assumenda?</p>
                            <div>
                                <img src="" alt="">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="container__depoimentos">
                        <div class="depoimento">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum! Doloribus, maxime molestiae laudantium facere cumque fuga, accusantium optio doloremque repellat nemo fugiat enim laboriosam veniam asperiores aspernatur cupiditate quos!</p>
                            <div>
                                <img src="" alt="">
                                <p></p>
                            </div>
                        </div>
                        <div class="depoimento">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, voluptatum! Doloribus, maxime molestiae laudantium facere cumque fuga, accusantium optio doloremque repellat nemo fugiat enim laboriosam veniam asperiores aspernatur cupiditate quos! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione pariatur in nesciunt? Nemo architecto quidem suscipit eius officia! Eius expedita culpa harum sint doloremque nobis esse qui deserunt quia assumenda?</p>
                            <div>
                                <img src="" alt="">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-11">
                <h1 class="pulsamento">APROVEITE O PREÇO E COMECE HOJE</h1>
                <div class="oferta">
                    <h1>Curso de Síndico<br/>Profissional Básico</h1>
                    <div class="preco">
                        <p class="montserrat-bold">12x R$63,18</p>
                        <p class="">À vista R$633,00</p>
                    </div>
                    <table>
                        <tr>
                            <td><img src="assets/images/Icones/icons8-done-48.png" alt="done-icon"></td>
                            <td class="subtitulo"><p>Videoaulas</p></td>
                        </tr>
                        <tr>
                            <td><img src="assets/images/Icones/icons8-done-48.png" alt="done-icon"></td>
                            <td class="subtitulo"><p>Questões</p></td>
                        </tr>
                        <tr>
                            <td><img src="assets/images/Icones/icons8-done-48.png" alt="done-icon"></td>
                            <td class="subtitulo"><p>Certificado de Conclusão</p></td>
                        </tr>
                        <tr>
                            <td><img src="assets/images/Icones/icons8-done-48.png" alt="done-icon"></td>
                            <td class="subtitulo"><p>Prova Selo de Ouro</p></td>
                        </tr>
                        <tr>
                            <td><img src="assets/images/Icones/icons8-done-48.png" alt="done-icon"></td>
                            <td><p>Documentação Bônus</p></td>
                        </tr>
                    </table>
                    <a href="" class="poppins-bold pulsamento">COMPRAR</a>
                </div>
            </div>
       </section>
       <footer></footer> 
    </main>
</body>
</html>