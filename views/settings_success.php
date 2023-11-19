<div class="breadcrumb ">
    <span class="breadcrumb-title">Configurações <i class="fa-solid fa-chevron-right px-2"></i> Clientes</span>
</div>

<div class="input-line flex justify-center items-center flex-col py-10">
    <div class="w-full flex items-center justify-center py-3">
        <i class="fa-solid fa-circle-check mx-2 fa-2x"></i> Total de <span class="bold px-1"><?php echo $_SESSION['clients_quant']; ?> </span> Registros alterados com sucesso!
    </div>;
    <p>
        <a class="btn-alert hover:btn-alert-hover" href="<?php echo BASE_URL; ?>users/clients"><i class="fa-solid fa-chevron-left"></i> Voltar</a>
    </p>
</div>