<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asPatas - Adoção de Animais</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <?= view('layouts/menu') ?>
        <div class="hero">
            <h1>Bem-vindo ao asPatas</h1>
            <p>Adote um amigo peludo e mude uma vida hoje</p>
            <a href="#adopt" class="cta">Veja os Animais para Adoção</a>
            <img src="img/cachorro-tela-inicial.png" alt="Imagem de um cachorro" class="dog-img">
        </div>
    </header>

    <section id="about" class="about">
        <h2>Sobre Nós</h2>
        <p>O asPatas é uma instituição dedicada a resgatar e encontrar lares amorosos para cães e outros animais em situação de risco. Nosso trabalho é baseado no amor e cuidado com os animais, proporcionando-lhes uma segunda chance de serem felizes.</p>
    </section>

    <section id="adopt" class="adopt">
        <h2>Adote um Amigo</h2>
        <div class="adopt-container">
            <div class="animal">
                <img src="img/1.png" alt="Cachorro para adoção">
                <h3>Thorin</h3>
                <p>Extremamente amigável, inteligente e dócil. São conhecidos por serem excelentes companheiros de família e ótimos com crianças.</p><br>
                <a href="/adocao" class="btn">Saiba Mais</a>
            </div>
            <div class="animal">
                <img src="img/2.png" alt="Cachorro para adoção">
                <h3>Odin</h3>
                <p>Corajoso, curioso e leal. Pode ser um pouco teimoso, mas é carinhoso com a família.</p><br>
                <a href="/adocao" class="btn">Saiba Mais</a>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery">
        <h2>Galeria</h2>
        <div class="gallery-container">
            <img src="img/dog-assustado.png" alt="Galeria de fotos">
            <img src="img/dog-fofo.png" alt="Galeria de fotos">
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Contato</h2>
        <p>Entre em contato conosco para saber mais sobre adoções, doações e como você pode ajudar.</p>
        <form action="{{ route('emails.contato') }}" method="POST">
            @csrf
            <input type="text" name="contato-nome" placeholder="Seu Nome" required>
            <input type="email" name="contato-email" placeholder="Seu Email" required>
            <textarea name="contato-mensagem" placeholder="Sua Mensagem" required></textarea>
            <button type="submit" class="btn">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 asPatas. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
