<div class="breadcrumb">
    <span class="breadcrumb-title">TRF2 <i class="fa-solid fa-chevron-right px-2"></i> Visualizar</span>
</div>

<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">#ID</span>
        <?php echo $trf2_info['ID']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Processo</span>
        <?php echo $trf2_info['ANO_PROPOSTA']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Nat</span>
        <?php echo $trf2_info['NUMERO_DO_PRECATORIO']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">CPF</span>
        <?php echo $trf2_info['CREDOR']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Nome Advogado</span>
        <?php echo $trf2_info['CPF_CNPJ']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Nº Ordem</span>
        <?php echo $trf2_info['ADVOGADO']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">OAB</span>
        <?php echo $trf2_info['OAB']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Tipo</span>
        <?php echo $trf2_info['REQUERIDO']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Valor Pago</span>
        <?php echo $trf2_info['VALOR']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Saldo</span>
        <?php echo $trf2_info['OFICIO']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Status</span>
        <?php echo $trf2_info['STATUS']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Telefone</span>
        <?php echo $trf2_info['TEL']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Celular</span>
        <?php echo $trf2_info['CEL']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Telefone Fixo</span>
        <?php echo $trf2_info['TEL_FIXO']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">E-mail</span>
        <?php echo $trf2_info['EMAIL']; ?>
    </div>
</div>
<div class="input-line">
    <span class="mr-2 font-semibold">Endereço</span>
    <?php echo $trf2_info['ENDERECO']; ?>
</div>
<div class="input-line">
    <span class="mr-2 font-semibold">Histórico</span>
    <?php echo $trf2_info['HISTORICO']; ?>
</div>

<div class="input-line justify-center">
    <a class="btn mx-1 hover:btn-hover" href="<?php echo BASE_URL; ?>trf2/edit/<?php echo $trf2_info['ID']; ?>"><i class="fa-solid fa-pen-to-square"></i> Editar Registro</a>
    <a class="btn-danger mx-1 hover:btn-danger--hover" href="<?php echo BASE_URL; ?>trf2/destroy/<?php echo $trf2_info['ID']; ?>"><i class="fa-solid fa-pen-to-square"></i> Excluir Registro</a>
</div>