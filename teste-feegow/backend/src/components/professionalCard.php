<div class="professional-card d-flex flex-wrap justify-content-center mx-2 my-2">

    <?php foreach($profissionais->content as $row): ?>           
        <div class="card mx-2 my-4 shadow" style="width: 16rem;">
            <div class="card-body">
                <div class="row d-flex align-items-center">
                    <img class="rounded-circle mx-3" src=<?= $row->foto ? $row->foto : ''?> alt="foto">
                    <h5 class="card-title"><?= $row->sexo == 'Masculino' ? 'Dr.' : 'Dra.' ?> <?= $row->nome?></h5>
                    <h6 class="card-subtitle"><?= $row->conselho ? "{$row->conselho} {$row->documento_conselho}" : 'Sem registro'?></h6>
                </div>
            </div>
            <div class="card-footer d-flex justify-content-center d-flex justify-content-center">
                <form action=<?php echo "agendar.php?specialty_id={$_POST['select']}&professional_id={$row->profissional_id}"?> method="post">
                    <input type="submit" class="btn-agendar" value="Agendar">
                </form>
            </div>
        </div>
    <?php endforeach ?>
</div>

<style>
    .card {
        border-radius: 1.2rem;
    }
    .card-body {
        padding: 20px 20px 0 !important;
    }
    .card-body > .row > img {
        width: 45px;
        height: 45px;
    }
    .card-title {
        font-family: 'Oswald', sans-serif;
        font-size: .9rem;
        color: #4e4e4e;
        width: 160px;
    }
    .card-subtitle {
        margin-left: 78px;
        font-size: .8rem;
        color: #aaa !important;
        margin-top: -10px !important;
        text-transform: uppercase !important;
    }
    .card-footer {
        border-radius: 1.2rem !important;
    }

    .btn-agendar {
        width: 120px;
        color: white;
        text-decoration: none;
        padding: 6px 0;
        border: none;
        border-radius: 32px;
        font-size: .8rem;
        background-color: #6AC36F;
        text-transform: uppercase;
        cursor: pointer;
        outline: none;
        transition: all .2s;
        text-align: center;
    }
    .btn-agendar:hover {
        color: white;
        text-decoration: none;
        background-color: #4C9AD8;
    }

</style>