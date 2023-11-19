<!-- Breadcrumbs -->
<div class="breadcrumb">
    <h2>Serviços<i class="fas fa-angle-right fa-xs"></i>Adicionar</h2>
    <span>
        <a class="btn" href="<?php echo BASE_URL; ?>services"><i class="fas fa-angle-double-left"></i> Voltar</a>
    </span>
</div>

<div class="content">

    <!-- Formulário (Add Form) -->
    <form method="POST">
        <div class="table-line">
            <div class="table-100 my-s">
                <label for="name_service">Nome do Serviço</label>
                <input class="w-100" type="text" name="name_service" id="name_service" autofocus>
            </div>
        </div>
        <div class="table-line">
            <div class="table-20 my-s space-input">
                <label for="standard_value">Valor de Custo</label>
                <input class="w-100" type="text" name="standard_value" id="standard_value" required>
            </div>
            <div class="table-20 my-s space-input">
                <label for="sale_value">Valor de Venda</label>
                <input class="w-100" type="text" name="sale_value" id="sale_value" required>
            </div>
            <div class="table-20 my-s space-input">
                <label for="time_standard">Hora Padrão</label>
                <input type="time" name="time_standard" id="time_standard" class="w-100" required>
            </div>
            <div class="table-20 my-s space_input">
                <label for="children_cost">Custo de Criança</label>
                <input class="w-100" type="text" name="children_cost" id="children_cost" required>
            </div>
            <div class="table-20 my-s">
                <label for="children_value">Valor de Criança</label>
                <input class="w-100" type="text" name="children_value" id="children_value" required>
            </div>
        </div>

        <!-- Botão (Button) -->
        <button type="submit" class="my-el">
            Adicionar Serviço
        </button>
    </form>
</div>

<!-- SCRIPTS JS -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script_price.js"></script>