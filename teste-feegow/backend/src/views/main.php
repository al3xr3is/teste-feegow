<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/global.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=Roboto&display=swap" rel="stylesheet">
    <title>Feegow Teste</title>
</head>

<body>

    <div class="container">

        <header class="header">
            <h1>Feegow - Alex Reis</h1>
        </header>

        <main class="content">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h3 class="mt-3">
                        Gestão de agenda médica
                    </h3>
                </div>
            </div>

            <div class="row consult mx-3 my-3">
                <div class="col-2">
                    <p class="text-right">Consulta de</p>
                </div>
                <div class="col-6">
                    <form class="form-group d-flex" action="#" method="post">
                        <select class="custom-select custom-select mr-3" name="select">
                            <option selected>Selecione uma especialidade</option>
                            <?php foreach($especialidades->content as $row): ?>
                                <option value="<?= $row->especialidade_id ?>"><?= $row->nome ?></option>
                            <?php endforeach ?>
                        </select>
                        <input class="btn-form" type="submit" value="Agendar">
                    </form>
                </div>

            </div>

                <div class="professional-list">
                    
                    <?php
                        renderComponent('professionalCard', ['profissionais' => $profissionais]); 
                    ?>
                </div>
            
        </main>

        <footer class="footer">
            <span>Feito com carinho por al3xr3is</span>
        </footer>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>