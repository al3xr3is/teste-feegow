<form action="salvarConsulta.php" class="p-2" method="post">
    <input type="hidden" name="specialty_id" value="<?= $_GET['specialty_id'] ?>">
    <input type="hidden" name="professional_id" value="<?= $_GET['professional_id'] ?>">
    <div class="form-row d-flex justify-content-center">
        <div class="form-group col-md-4">
            <input type="text" class="form-control" name="name" placeholder="nome completo">
        </div>
        <div class="form-group col-md-4">
            <select class="form-control" name="source_id">
                <option selected>como conheceu?</option>
                <?php foreach($list_sources->content as $row): ?>
                <option value="<?= $row->origem_id ?>"><?= $row->nome_origem ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="form-row d-flex justify-content-center">
        <div class="form-group col-md-4">
            <input class="form-control" type="text" name="birthdate" placeholder="nascimento" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
        </div>
        <div class="form-group col-md-4">
            <input type="text" class="form-control" name="cpf" placeholder="cpf">
        </div>
    </div>
    <div class="form-row d-flex justify-content-end">
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">solicitar horários</button>
        </div>
    </div>
</form>

<style>
</style>