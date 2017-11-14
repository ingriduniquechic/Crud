<?php
$this->load->view('template/header');
$this->load->view('template/menu');
?>
<!-- Main content -->
<div class="row">
    <div class="col-lg-12">
        <h1>Cadastrar Clientes</h1>
        <p>Cadastro do cliente</p>
        <div class="col-lg-4">
            <div style="color: red">
                <?= validation_errors();?>
            </div>
            <?= form_open('clientes/cadastro')?>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <!--<input class="form-control" type="text" name="nome">-->
                    <?= form_input([
                        'name' => 'nome',
                        'class' => 'form-control',
                        'value' => set_value('nome')
                        ])?>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="text" value='<?=set_value('email')?>' name="email">
                </div>
                <div class="form-group">
                    <label for="cadastrado_em">Cadastrado em:</label>
                    <input class="form-control" type="text" value="<?= date('d/m/Y') ?>" name="cadastrado_em" disabled>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Cadastrar Cliente</button>
                </div>
         <?= form_close();?>
        </div>
    </div>
</div>