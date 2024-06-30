<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animais para Adoção - asPatas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/adocao.css') }}">
</head>
<body>
    <header>
        <?= view('layouts/menu') ?>
        <h1 class="text-center my-4">Animais para Adoção</h1>
    </header>
    <section class="catalogo container">
        <div class="row">
            @foreach($aAnimais as $aAnimal)
                <div class="col-md-4">
                    <div class="card mb-4 animal-card">
                      <img src="{{ asset($aAnimal->IMAGEM) }}" class="card-img-top" alt="Foto do animal">
                        <div class="card-body">
                            <h5 class="card-title">{{ $aAnimal->NOME_ANIMAL }}</h5>
                            <p class="card-text">Espécie: {{ $aAnimal->ESPECIE }}</p>
                            <p class="card-text">Idade: {{ $aAnimal->IDADE }}</p>
                            <p class="card-text">Raça: {{ $aAnimal->RACA }}</p>
                            <button class="btn btn-warning detail-btn" data-toggle="modal" data-target="#animalModal" data-animal="{{ json_encode($aAnimal) }}">Ver Detalhes</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div class="modal fade" id="animalModal" tabindex="-1" role="dialog" aria-labelledby="animalModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="animalModalLabel">Detalhes do Animal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="modalImagem" src="{{ asset($aAnimal->IMAGEM) }}" class="img-fluid" alt="Foto do animal">
                    <p id="modalIdade"></p>
                    <p id="modalEspecie"></p>
                    <p id="modalRaca"></p>
                    <p id="modalDescricao"></p>
                    <p id="modalLocalizacao"></p>
                    <p id="modalSituacao"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning detail-btn" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 asPatas. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $('#animalModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); 
        var animal = button.data('animal');
        var modal = $(this);

        modal.find('.modal-title').text(animal.NOME_ANIMAL);
        modal.find('#modalEspecie').text('Espécie: ' + animal.ESPECIE);
        modal.find('#modalIdade').text('Idade: ' + animal.IDADE);
        modal.find('#modalRaca').text('Raça: ' + animal.RACA);
        modal.find('#modalDescricao').text('Descrição: ' + animal.DESCRICAO_ANIMAL);
        modal.find('#modalLocalizacao').text('Localização: ' + animal.LOCALIZACAO_ENCONTRO);
        modal.find('#modalSituacao').text('Situação: ' + animal.ESTADO_ANIMAL);

        modal.find('#modalImagem').attr('src', animal.IMAGEM);
    });
    </script>
</body>
</html>
