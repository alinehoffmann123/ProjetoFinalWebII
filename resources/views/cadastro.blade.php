<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asPatas - Cadastro de Animais</title>
    <link rel="stylesheet" href="{{asset('css/cadastro.css')}}">
</head>
<body>
  <header>
      <?= view('layouts/menu') ?>
      <h1>Cadastro de Animais</h1>
  </header>
  <main>
    <form action="{{ route('cadastro.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <h2>Informações do Animal</h2>
      <input type="text" name="animal-nome" placeholder="Nome do Animal" required>
      <input type="text" name="animal-especie" placeholder="Espécie" required>
      <input type="text" name="animal-raca" placeholder="Raça" required>
      <input type="text" name="animal-idade" placeholder="Idade" required>
      <textarea name="animal-descricao" placeholder="Descrição do Animal" required></textarea>
      <textarea name="animal-localizacao" placeholder="Onde foi encontrado o animal ?" required></textarea>
      <textarea name="animal-estado" placeholder="Como eles estava ?" required></textarea>
      <br>
      <label>Insira aqui uma foto do animal encontrado:</label>
      <input type="file" name="imagem" accept="image/*" required>
      
      <h2>Informações da Pessoa que Encontrou</h2>
      <input type="text" name="pessoa-nome" placeholder="Nome" required>
      <input type="email" name="pessoa-email" placeholder="Email" required>
      <input type="tel" name="pessoa-telefone" placeholder="Telefone" required>
      <textarea name="pessoa-endereco" placeholder="Endereço" required></textarea>

      <button type="submit">Cadastrar Dados</button>
    </form>
  </main>

  <footer>
    <p>&copy; 2024 asPatas. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
