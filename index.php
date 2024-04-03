<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;700&display=swap" rel="stylesheet">

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
        }
        .section-4 div h3{
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
        }
        .section-5 h2{
            color: var(--dourado);
        }
        .section-5 > div{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .container__professor{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            padding: 0em 1em;
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
            color: var(--azulEscuro);
        }
        .container__professor div p{
            text-align: justify;
        }
        .container__professor ul{
            list-style: none;
        }

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
                    <h3>Nosso curso de síndico profissional tem como objetivo te capacitar para enfrentar e resolver todos os desafios que possam surgir na gestão condominial, assegurando as melhores soluções possíveis.</h3>
                </div>
                <div>
                    <video poster="assets/images/capas/beneficios-do-curso.png" controls>
                        <source src="assets/videos/beneficios-do-curso-de-sindico.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
            <div class="section-5">
                <h2>Nossos professores são especialistas e</br>experientes em suas respectivas áreas</h1>
                <div>
                    <div class="container__professor">
                        <div>
                            <img src="assets/images/fotos/nayne.png" alt="Foto da Professora Nayne">
                        </div>
                        <div>
                            <h3>Nayne Cipriano</h3>
                            <p>Responsável pelo módulo de 'Apresentação da Profissão de Síndico', Nayne é bacharel em Ciências Contábeis com mais de 6 anos de experiência. Ela atua como síndica profissional e administradora de condomínios na Ômega Administradora, reconhecida como uma das principais administradoras de condomínios em Uberlândia-MG.</p>
                            <nav>
                                <ul>
                                    <li>
                                        <a href=""><img class="logo-instagram" src="assets/images/icones/icons8-instagram-48.png" alt="Ícone Instagram"></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <footer></footer> 
    </main>
</body>
</html>