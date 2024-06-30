<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria de Animais - asPatas</title>
    <link rel="stylesheet" href="{{ asset('css/galeria.css') }}">
</head>
<body>
    <header>
        <?= view('layouts/menu') ?>
        <h1>Galeria de Animais</h1>
    </header>
    <main class="gallery-container">
        <div class="gallery-item">
            <img src="img/calopsita.jpg" alt="Animal 1">
        </div>
        <div class="gallery-item">
            <img src="img/gatinho.jpg" alt="Animal 2">
        </div>
        <div class="gallery-item">
            <img src="img/Calopsita-Azul.jpg" alt="Animal 3">
        </div>
        <div class="gallery-item">
            <img src="img/lindinho.jpg" alt="Animal 4">
        </div>
        <div class="gallery-item">
            <img src="img/gatoreide.jpeg" alt="Animal 5">
        </div>
        <div class="gallery-item">
            <img src="img/misse.webp" alt="Animal 6">
        </div>
        <div class="gallery-item">
            <img src="img/dog-fofo.png" alt="Animal 7">
        </div>
        <div class="gallery-item">
            <img src="img/dog-filhote-preto.png" alt="Animal 8">
        </div>
        <div class="gallery-item">
            <img src="img/Calopsita-Azul.jpg" alt="Animal 3">
        </div>
        <div class="gallery-item">
            <img src="img/labrador.jpeg" alt="Animal 2">
        </div>
        <div class="gallery-item">
            <img src="img/dog-filhote-marrom.png" alt="Animal 3">
        </div>
    </main>
    <footer>
        <p>&copy; 2024 asPatas. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
