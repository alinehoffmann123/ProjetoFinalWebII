<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - asPatas</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/sobre.css')}}" />
</head>
<body>
  <header>
        <?= view('layouts/menu') ?>
        <h1>Sobre Nós</h1>
    </header>
    <main>
        <section class="mission">
            <div class="section-content">
                <img src="img/patas.png" alt="Missão" class="section-image">
                <div>
                    <h2>Missão</h2>
                    <p>Nossa missão é resgatar e encontrar lares amorosos para cães e outros animais em situação de risco. Trabalhamos com dedicação e amor para proporcionar uma segunda chance de felicidade para esses animais.</p>
                </div>
            </div>
        </section>
        <section class="vision">
            <div class="section-content">
                <img src="img/patas.png" alt="Visão" class="section-image">
                <div>
                    <h2>Visão</h2>
                    <p>Ser uma referência nacional na adoção responsável de animais, promovendo a conscientização sobre a importância do respeito e cuidado com todos os seres vivos.</p>
                </div>
            </div>
        </section>
        <section class="values">
            <div class="section-content">
                <img src="img/patas.png" alt="Valores" class="section-image">
                <div>
                    <h2>Valores</h2>
                    <p>Nossos valores incluem o amor, a compaixão, o respeito, a responsabilidade e a transparência em todas as nossas ações e decisões.</p>
                </div>
            </div>
        </section>
        <section class="history">
            <div class="section-content">
                <img src="img/patas.png" alt="História" class="section-image">
                <div>
                    <h2>História</h2>
                    <p>O asPatas foi fundado em 10/08/2011 com o objetivo de combater o abandono de animais. Desde então, já resgatamos e encontramos lares para mais de 1.000 animais.</p>
                </div>
            </div>
        </section>
        <section class="team">
            <div class="section-content">
                <img src="img/patas.png" alt="Equipe" class="section-image">
                <div>
                    <h2>Equipe</h2>
                    <p>Nosso time é composto por voluntários dedicados e profissionais apaixonados por animais. Trabalhamos juntos para garantir que cada animal resgatado receba o cuidado e amor que merece.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
      <p>&copy; 2024 asPatas. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
