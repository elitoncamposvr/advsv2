<div class="breadcrumb">
    <span class="breadcrumb-title">TJSP <i class="fa-solid fa-chevron-right px-2"></i> Visualizar</span>
</div>

<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">#ID</span>
        <?php echo $tjsp_info['id']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Processo</span>
        <?php echo $tjsp_info['processo']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Nat</span>
        <?php echo $tjsp_info['nat']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">CPF</span>
        <?php echo $tjsp_info['cpf']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Nome Advogado</span>
        <?php echo $tjsp_info['nome_advg']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Nº Ordem</span>
        <?php echo $tjsp_info['n_ordem']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">OAB</span>
        <?php echo $tjsp_info['oab']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Tipo</span>
        <?php echo $tjsp_info['tipo']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Valor Pago</span>
        <?php echo $tjsp_info['vlr_pago']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Saldo</span>
        <?php echo $tjsp_info['saldo']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">E-mail</span>
        <?php echo $tjsp_info['email']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Telefone</span>
        <?php echo $tjsp_info['tel']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Telefone Fixo</span>
        <?php echo $tjsp_info['tel_fixo']; ?>
    </div>
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Celular</span>
        <?php echo $tjsp_info['cel']; ?>
    </div>
</div>
<div class="input-line">
    <div class="w-1/2">
        <span class="mr-2 font-semibold">Status</span>
        <?php echo $tjsp_info['status']; ?>
    </div>
    <div class="w-1/2">
    <span class="mr-2 font-semibold">Endereço</span>
    <?php echo $tjsp_info['endereco']; ?>
    </div>
</div>

<div class="input-line">
    <span class="mr-2 font-semibold">Histórico</span>
    <?php echo $tjsp_info['historico']; ?>
</div>

<div class="input-line justify-center">
    <a class="btn mx-1 hover:btn-hover" href="<?php echo BASE_URL; ?>tjsp/edit/<?php echo $tjsp_info['id']; ?>"><i class="fa-solid fa-pen-to-square"></i> Editar Registro</a>
    <a class="btn-danger mx-1 hover:btn-danger--hover" href="<?php echo BASE_URL; ?>tjsp/destroy/<?php echo $tjsp_info['id']; ?>"><i class="fa-solid fa-pen-to-square"></i> Excluir Registro</a>
</div>